<?php

namespace App\Http\Controllers\SEO;

class MetaHTML
{

    private const IMAGESRC = 'images/me.jpg';
    private const TITLE = 'CynCMS Web';
    private const DESCRIPTION = 'Un Sistema Getor de Contenido hecho para ti :D';

    public static function getDefaults(){
        return [
            MetaHTML::makeOpenGraphTag('type', 'website'),
            MetaHTML::makeOpenGraphTag('title', MetaHTML::TITLE),
            MetaHTML::makeOpenGraphTag('description', MetaHTML::DESCRIPTION),
            MetaHTML::makeOpenGraphTag('image', MetaHTML::IMAGESRC),
        ];
    }

    public static function makeOpenGraphTag($property, $content){
        return '<meta property="og:'. $property .'" content="'. $content .'">';
    }

    public static function makeTwitterTag($property, $content){
        return '<meta property="twitter:'. $property .'" content="'. $content .'">';
    }

    public static function makeNameTag($prop, $content){
        return '<meta name="'. $prop . '"  content="'. $content .'" >';
    }

    public static function makeMetaTag($prop, $content){
        return '<meta '. $prop . ' '. $content .' >';
    }

}
