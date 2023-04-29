<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* promotor/show.html.twig */
class __TwigTemplate_e7ee770e5b7b40cf94dc8ca50242a865 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'CSS' => [$this, 'block_CSS'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "promotor/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "promotor/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "promotor/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Promotor";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_CSS($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "CSS"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "CSS"));

        // line 6
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/show.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 9
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "    ";
        // line 25
        echo "
<div class=\"container text-center\">
    ";
        // line 49
        echo "    <div class=\"bp-card row\">
\t\t<div class=\"bp-card_label col\">
            <div class=\"logo\"><img src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/Ksperu.jpeg"), "html", null, true);
        echo "\" height=\"100px\" width=\"250px\"></div>
            <hr>
            <strong>
            <p>Estimado ";
        // line 54
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, (isset($context["nombre"]) || array_key_exists("nombre", $context) ? $context["nombre"] : (function () { throw new RuntimeError('Variable "nombre" does not exist.', 54, $this->source); })())), "html", null, true);
        echo " te generamos tu entrada de promotor, tu <br>*ENTRADA VIRTUAL* <br>
            puedes descargarlo en el siguiente boton.</p>
            
                <p>
                    <a href=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_down", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["promotor"]) || array_key_exists("promotor", $context) ? $context["promotor"] : (function () { throw new RuntimeError('Variable "promotor" does not exist.', 58, $this->source); })()), "id", [], "any", false, false, false, 58)]), "html", null, true);
        echo "\" class=\"btn btn-warning but\"><strong>
                    Descargar Entrada</strong></a>
                 </p>
                 <p>LA SIGUIENTE IMAGEN ES TU ENTRADA QR </p>
                <div class=\"img\"><img src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((("img/" . twig_get_attribute($this->env, $this->source, (isset($context["promotor"]) || array_key_exists("promotor", $context) ? $context["promotor"] : (function () { throw new RuntimeError('Variable "promotor" does not exist.', 62, $this->source); })()), "dni", [], "any", false, false, false, 62)) . ".png")), "html", null, true);
        echo "\" width=\"200px\" height=\"200px\"></div>
\t\t\t<a class=\"price text-center\">
\t\t\t\tGrupo: ";
        // line 64
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["promotor"]) || array_key_exists("promotor", $context) ? $context["promotor"] : (function () { throw new RuntimeError('Variable "promotor" does not exist.', 64, $this->source); })()), "grupo", [], "any", false, false, false, 64), "html", null, true);
        echo "
\t\t\t</a></strong>
\t\t</div>
\t\t<div class=\"bp-card_content col\">
            <div><img class=\"logo2\" src=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/Bob.jpg"), "html", null, true);
        echo "\" ></div>\t\t
\t\t</div>
\t</div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "promotor/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 68,  147 => 64,  142 => 62,  135 => 58,  128 => 54,  122 => 51,  118 => 49,  114 => 25,  112 => 10,  102 => 9,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Promotor{% endblock %}

{% block CSS %}
    <link rel=\"stylesheet\" href=\"{{ asset('css/show.css') }}\" />
{% endblock %}

{% block body %}
    {# <h1>Promotor</h1>


                <div>{{ promotor.grupo | upper}}</div>
                <div class=\"col-md-8 align-middle\">  
            <div class=\"Entrada\"><img src=\"{{ asset('img/'~ promotor.dni ~ '.png') }}\" alt=\"QR Code\">
            </div>
            </div>
                    <a href=\"{{ path('app_down') }}\" download=\"Promotor.png\">Descargar vista como PNG</a>
                    <a href=\"{{ path('app_down', {'id': promotor.id}) }}\" class=\"btn btn-warning\">Descargar vista como PNGs</a>
                    <a href=\"{{ path('app_promotor_show3', {'id': promotor.id}) }}\">show 2</a>
                </td>
        </tbody>
    </table>
    <a href=\"{{ path('app_promotor_index') }}\">back to list</a> #}

<div class=\"container text-center\">
    {# <div class=\"row\">
        <div class=\"col-md-4\">
            <div class=\"logo\"><img src=\"{{ asset('img/Bob.jpg')}}\" width=\"50%\"></div>
            <br>
            <div>
                <p>HOLA! {{ nombre | upper}} TE GENERAMOS TU ENTRADA VIRTUAL, descargalo aqui.</p>
                <p>

                    <a href=\"{{ path('app_down', {'id': promotor.id}) }}\" class=\"btn btn-warning but\">Descargar Entrada</a>
                 </p>
                 <p>LA SIGUIENTE IMAGEN ES TU ENTRADA QR </p>
              
            </div>
        </div>
        <div class=\"col-md-8 align-middle\">  
            <div class=\"Entrada\">
              <div class=\"img\"><img src=\"{{ asset('img/'~ promotor.dni ~ '.png') }}\" width=\"200px\" height=\"200px\"></div>
              <strong><div style=\"padding: 20px; font-family: Arial; font-size: 24px\">Grupo: <br> {{ promotor.grupo }} </div></strong>
            </div>
        </div>
    </div>
</div> #}
    <div class=\"bp-card row\">
\t\t<div class=\"bp-card_label col\">
            <div class=\"logo\"><img src=\"{{ asset('img/Ksperu.jpeg')}}\" height=\"100px\" width=\"250px\"></div>
            <hr>
            <strong>
            <p>Estimado {{ nombre | upper}} te generamos tu entrada de promotor, tu <br>*ENTRADA VIRTUAL* <br>
            puedes descargarlo en el siguiente boton.</p>
            
                <p>
                    <a href=\"{{ path('app_down', {'id': promotor.id}) }}\" class=\"btn btn-warning but\"><strong>
                    Descargar Entrada</strong></a>
                 </p>
                 <p>LA SIGUIENTE IMAGEN ES TU ENTRADA QR </p>
                <div class=\"img\"><img src=\"{{ asset('img/'~ promotor.dni ~ '.png') }}\" width=\"200px\" height=\"200px\"></div>
\t\t\t<a class=\"price text-center\">
\t\t\t\tGrupo: {{ promotor.grupo}}
\t\t\t</a></strong>
\t\t</div>
\t\t<div class=\"bp-card_content col\">
            <div><img class=\"logo2\" src=\"{{ asset('img/Bob.jpg')}}\" ></div>\t\t
\t\t</div>
\t</div>
</div>
{% endblock %}
", "promotor/show.html.twig", "C:\\xampp\\htdocs\\Eventos\\templates\\promotor\\show.html.twig");
    }
}
