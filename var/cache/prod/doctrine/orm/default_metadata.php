<?php

// This file has been auto-generated by the Symfony Cache Component.

return [[

'App__Entity__Promotor__CLASSMETADATA__' => 0,

], [

0 => static function () {
    return \Symfony\Component\VarExporter\Internal\Hydrator::hydrate(
        $o = [
            clone (($p = &\Symfony\Component\VarExporter\Internal\Registry::$prototypes)['Doctrine\\ORM\\Mapping\\ClassMetadata'] ?? \Symfony\Component\VarExporter\Internal\Registry::p('Doctrine\\ORM\\Mapping\\ClassMetadata')),
            clone ($p['Doctrine\\ORM\\Id\\IdentityGenerator'] ?? \Symfony\Component\VarExporter\Internal\Registry::p('Doctrine\\ORM\\Id\\IdentityGenerator')),
        ],
        null,
        [
            'stdClass' => [
                'name' => [
                    'App\\Entity\\Promotor',
                ],
                'namespace' => [
                    'App\\Entity',
                ],
                'rootEntityName' => [
                    'App\\Entity\\Promotor',
                ],
                'customRepositoryClassName' => [
                    'App\\Repository\\PromotorRepository',
                ],
                'identifier' => [
                    [
                        'id',
                    ],
                ],
                'generatorType' => [
                    4,
                ],
                'fieldMappings' => [
                    [
                        'id' => [
                            'fieldName' => 'id',
                            'type' => 'integer',
                            'scale' => null,
                            'length' => null,
                            'unique' => false,
                            'nullable' => false,
                            'precision' => null,
                            'id' => true,
                            'columnName' => 'id',
                        ],
                        'evento' => [
                            'fieldName' => 'evento',
                            'type' => 'string',
                            'scale' => null,
                            'length' => 50,
                            'unique' => false,
                            'nullable' => true,
                            'precision' => null,
                            'columnName' => 'evento',
                        ],
                        'nombre' => [
                            'fieldName' => 'nombre',
                            'type' => 'string',
                            'scale' => null,
                            'length' => 100,
                            'unique' => false,
                            'nullable' => true,
                            'precision' => null,
                            'columnName' => 'nombre',
                        ],
                        'grupo' => [
                            'fieldName' => 'grupo',
                            'type' => 'string',
                            'scale' => null,
                            'length' => 20,
                            'unique' => false,
                            'nullable' => true,
                            'precision' => null,
                            'columnName' => 'grupo',
                        ],
                        'dni' => [
                            'fieldName' => 'dni',
                            'type' => 'string',
                            'scale' => null,
                            'length' => 8,
                            'unique' => false,
                            'nullable' => true,
                            'precision' => null,
                            'columnName' => 'dni',
                        ],
                        'qr' => [
                            'fieldName' => 'qr',
                            'type' => 'text',
                            'scale' => null,
                            'length' => null,
                            'unique' => false,
                            'nullable' => true,
                            'precision' => null,
                            'columnName' => 'qr',
                        ],
                    ],
                ],
                'fieldNames' => [
                    [
                        'id' => 'id',
                        'evento' => 'evento',
                        'nombre' => 'nombre',
                        'grupo' => 'grupo',
                        'dni' => 'dni',
                        'qr' => 'qr',
                    ],
                ],
                'columnNames' => [
                    [
                        'id' => 'id',
                        'evento' => 'evento',
                        'nombre' => 'nombre',
                        'grupo' => 'grupo',
                        'dni' => 'dni',
                        'qr' => 'qr',
                    ],
                ],
                'table' => [
                    [
                        'name' => 'promotor',
                    ],
                ],
                'idGenerator' => [
                    $o[1],
                ],
            ],
        ],
        $o[0],
        []
    );
},

]];
