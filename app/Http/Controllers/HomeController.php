<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    static public $service = [
        'img'   =>  'map_icon.svg',
        'title' =>  'Heading',
        'text'  =>  'Lorem Ipsumdolor sit amet, consectetur adipiscing elit. Quisque hendrerit mi diam, sit amet volutpat quam.'
    ];

    static public $userPreviewGallery = [
        [
            'text'  =>              'Con OdourCollect puedo ver en el mapa y en tiempo real cuántas personas están registrando olores. 
                                     Es importante como ciudadanos poder tener acceso a esa información.',
            'user-name' =>          'Josep Carro',
            'user-description'  =>  'Usuario de OdourCollect',
        ],
        [
            'text'  =>              'Es una mezcla de ciencia y de arte, además de ser una actividad STEAM. Para algunxs, 
                                     es algo que se quedó en la infancia y creo que esta mezcla es muy enriquecedora.',
            'user-name' =>          'Miren Millet, Responsable del Planetarium Eureka Zientzia Museoa',
            'user-description'  =>  'Participante en el taller C-OLORes de Alejandría',
        ],
        [
            'text'  =>              'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque hendrerit mi diam, sit amet volutpat quam.',
            'user-name' =>          'Josep Carro',
            'user-description'  =>  'Usuario de OdourCollect',
        ],
    ];

    static public $statsGallery = [
        [
            'icon'  =>  'location.svg',
            'data'  =>  '14,100',
            'title' =>  'Registros de olor',
        ],
        [            
            'icon'  =>  'user.svg',
            'data'  =>  '2,700',
            'title' =>  'Usuarios registrados',
        ],
        [            
            'icon'  =>  'chat.svg',
            'data'  =>  '176',
            'title' =>  'Países',
        ],
    ];


    static public $awardsGallery = [
        [
            'year'  =>  '2018-2021',
            'text' =>  'El proyecto D-NOSES cuenta con la mayor financiación en Europa para abordar el tema de la contaminación odorífera.',
        ],
        [            
            'year'  =>  '2021',
            'text' =>  'Premio Prisma Proyecto Singular: <a href="#">OdourCollect galardonado como mejor proyecto singular</a>',
        ],
        [            
            'year'  =>  '2022',
            'text' =>  'El proyecto <a href="#">“OdourCollect, codiseño de nuevas tecnologías para la monitorización en tiempo real de la contaminación odorífera mediante ciencia ciudadana”</a>, recibe subvención por el CDTI, apoyado por el Ministerio de Ciencia e Innovación.',
        ],
        [            
            'year'  =>  '2023',
            'text' =>  '<a href="#">Seleccionado para el catálogo de Prácticas Innovadoras en Cultura Científica por la Fundación Española para la Ciencia y la Tecnología (FECYT).</a>',
        ],
        [            
            'year'  =>  '2023',
            'text' =>  'OdourCollect cumple con los requisitos establecidos en el Estándar Español PNE 772700 “CONSTRUCCIÓN DE MAPAS DE OLOR COLABORATIVOS MEDIANTE CIENCIA CIUDADANA”.',
        ]
    ];

    static public function render()
    {

        return view('front.home', [
            'service' => self::$service,
            'userPreviewGallery' => self::$userPreviewGallery,
            'statsGallery' => self::$statsGallery,
            'awardsGallery' => self::$awardsGallery
        ]);
    }
}
