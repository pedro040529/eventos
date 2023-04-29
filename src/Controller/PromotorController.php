<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use App\Repository\PromotorRepository;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Promotor;
use App\Form\PromotorType;
use Doctrine\ORM\EntityManagerInterface;
use Endroid\QrCode\Color\Color;
use Endroid\QrCode\Encoding\Encoding;
use Endroid\QrCode\ErrorCorrectionLevel\ErrorCorrectionLevelLow;
use Endroid\QrCode\Label\Label;
use Endroid\QrCode\QrCode;
use Endroid\QrCode\Writer\PngWriter;
use Knp\Snappy\Image;
use Knp\Bundle\SnappyBundle\Snappy\Response\JpegResponse;
use Knp\Bundle\SnappyBundle\Snappy\Response\pdfResponse;
use Knp\Bundle\SnappyBundle\Snappy\Response\SnappyResponse;


class PromotorController extends AbstractController
{
    #[Route('/admin', name: 'app_promotor_index', methods: ['GET'])]
    public function index(PromotorRepository $promotorRepository): Response
    {
        return $this->render('promotor/index.html.twig', [
            'promotor' => $promotorRepository->findAll(),
        ]);
    }
    
    #[Route('/', name: 'app_promotor_new', methods: ['GET', 'POST'])]
    public function new(Request $request, PromotorRepository $promotorRepository): Response
    {
        $promotor = new Promotor();
        $form = $this->createForm(PromotorType::class, $promotor);
        $form->handleRequest($request);
    
        if ($form->isSubmitted() && $form->isValid()) {

            //$promotor = $form->getData();
            $dni = $promotor->getDni();
            $qrImagePath = '../public/img/' . $dni . '.png';
            $promotor->setQr($qrImagePath);
            $promotorRepository->save($promotor, true);
            $url = 'http://192.168.1.23:8000/"qr-promotor"/';
            //$url = 'http://192.168.1.23:8000/qr-promotor/'.$promotor->getId();
            $enlace = $url.$promotor->getId();
            $qrImage = $this->generateQRCode($enlace);
            $qrImage->saveToFile($qrImagePath);
            //file_put_contents($qrImagePath, $qrImage);
    
            return $this->redirectToRoute('app_promotor_show', [
                'id' => $promotor->getId()
            ], Response::HTTP_SEE_OTHER);
        }
    
        return $this->renderForm('promotor/new.html.twig', [
            'promotor' => $promotor,
            'form' => $form,
        ]);
    }
    
    #[Route('/promotor/{id}', name: 'app_promotor_show', methods: ['GET'])]
    public function show(Promotor $promotor): Response
    {
        $nombre = $promotor->getNombre();
        $arrayN = explode(' ', $nombre);
        $nombre = $arrayN[0];

        return $this->render('promotor/show.html.twig', [
            'promotor' => $promotor,
            'nombre' => $nombre,
        ]);
    }

    #[Route('/qr-promotor/img/{id}', name: 'app_promotor_show2', methods: ['GET'])]
    public function show2(Promotor $promotor): Response
    {
        return $this->render('promotor/show2.html.twig', [
            'promotor' => $promotor,
        ]);
    }
    #[Route('/qr-promotor/{id}', name: 'app_promotor_show3', methods: ['GET'])]
    public function show3(Promotor $promotor): Response
    {
        return $this->render('promotor/show3.html.twig', [
            'promotor' => $promotor,
        ]);
    }

    #[Route('/descargar/{id}', name: 'app_down')]
    public function downloadAction($id, EntityManagerInterface $entityManager ,Image $img)
    {
        $promotorRepository = $entityManager->getRepository(Promotor::class);
        $promotor = $promotorRepository->find($id);
        // create an instance of Knp-snappy image generator
        // $snappy = new Image('"C:\Program Files\wkhtmltopdf\bin\wkhtmltoimage.exe"');
        $letters = strlen($promotor->getNombre());
        // set the options for image generation
        if($letters > 25) {
            $altura = 790; //Nombre largo
        } else {
            $altura = 755; //Nombre corto
        }
        // $snappy->setOption('enable-local-file-access', true);
        // $snappy->setOption('width', 400);
        // $snappy->setOption('height', 768);
        // $snappy->setOption('quality', 100);
        // $snappy->setOption('crop-h', $altura_abajo);
        
        // render the view and generate image
        $html  = $this->renderView('promotor/show2.html.twig', [
            'promotor' => $promotor,
        ]);
        //$image = $snappy->getOutputFromHtml($html);
        

        // set the response headers for image download
        // $response = new Response();
        // $response->headers->set('Content-Type', 'image/png');
        // $response->headers->set('Content-Disposition', 'attachment; filename="imagen.png"');
        // $response->setContent($image);

        // return $response;
        $opciones = [
            "width" => "400",   
            "height" => $altura,
            "quality" => "100",
        ];
        $figura = $img->getOutputFromHtml($html, $opciones);
        return new SnappyResponse($figura, 'imagen.jpg', 'image/jpg');
    }
    
    #[Route('/qr/qr-codes', name: 'app_qr_codes')]
    public function verQr(): Response
    {
        $writer = new PngWriter();
        $qrCode = QrCode::create($_ENV['DOMINIO_WEB'])
            ->setEncoding(new Encoding('UTF-8'))
            ->setErrorCorrectionLevel(new ErrorCorrectionLevelLow())
            ->setSize(120)
            ->setMargin(0)
            ->setForegroundColor(new Color(0, 0, 0))
            ->setBackgroundColor(new Color(255, 255, 255));
        // $logo = Logo::create('../public/img/Captura.JPG')
        //     ->setResizeToWidth(60);
        // $label = Label::create('')->setFont(new NotoSans(8));
 
        $qrCodes = [];
        // $qrCodes['img'] = $writer->write($qrCode, $logo)->getDataUri();
        $qrCodes['simple'] = $writer->write(
                                $qrCode,
                                null,
                                // $label->setText('Simple')
                            )->getDataUri();
 
        // $qrCode->setForegroundColor(new Color(255, 0, 0));
        // $qrCodes['changeColor'] = $writer->write(
        //     $qrCode,
        //     null,
        //     $label->setText('Color Change')
        // )->getDataUri();
 
        // $qrCode->setForegroundColor(new Color(0, 0, 0))->setBackgroundColor(new Color(255, 0, 0));
        // $qrCodes['changeBgColor'] = $writer->write(
        //     $qrCode,
        //     null,
        //     $label->setText('Background Color Change')
        // )->getDataUri();
 
        // $qrCode->setSize(200)->setForegroundColor(new Color(0, 0, 0))->setBackgroundColor(new Color(255, 255, 255));
        // $qrCodes['withImage'] = $writer->write(
        //     $qrCode,
        //     $logo,
        //     $label->setText('With Image')->setFont(new NotoSans(20))
        // )->getDataUri();
 
        return $this->render('promotor/qr-code.html.twig', $qrCodes);
    }
    function generateQRCode($data)
    {
        $qrCode = QrCode::create($data)
        ->setEncoding(new Encoding('UTF-8'))
        ->setErrorCorrectionLevel(new ErrorCorrectionLevelLow())
        ->setSize(120)
        ->setMargin(0)
        ->setForegroundColor(new Color(0, 0, 0))
        ->setBackgroundColor(new Color(255, 255, 255));
        //$label = Label::create($data)->setText('HOLAAAA');
        $writer = new PngWriter();
        $qrImage = $writer->write($qrCode);
        return $qrImage;
    }
}
