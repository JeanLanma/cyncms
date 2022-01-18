<?php

namespace App\Http\Controllers\SEO;

class MetaHTML
{
    private const IMAGESRC = 'images/CC.png';
    private const TITLE = 'Cynistal Content MAnager System';
    private const DESCRIPTION = 'Un Sistema Getor de Contenido hecho para ti 💖';

    public static function getDefaults(){
        return MetaHTML::makeOpenGraphCard(MetaHTML::TITLE, MetaHTML::DESCRIPTION, 'website', MetaHTML::IMAGESRC);
    }
    
    public static function makeOpenGraphCard($title, $description, $type, $image){
        return [
            '<meta property="og:type" content="'. $type .'" />',
            '<meta property="og:title" content="'. $title .'" />',
            '<meta property="og:description" content="'. $description .'" />',
            '<meta property="og:image" content="'. $image .'" />',
        ];
    }

    public static function makePropTag($prop, $content){
        return '<meta property="'. $prop . '"  content="'. $content .'" >';
    }

    public static function makeMetaTag($prop, $content){
        return '<meta '. $prop . ' '. $content .' >';
    }

}
