<?php namespace App\Classes\Manager;


abstract class XmlManager
{

    static function loadingXmlThroughString($string)
    {

        return self::getArray(simplexml_load_string($string, 'SimpleXMLElement', LIBXML_NOCDATA));
    }

    static function loadingXmlThroughFile($path)
    {

        return self::getArray(simplexml_load_file($path, 'SimpleXMLElement', LIBXML_NOCDATA));
    }


    static function getArray($xml)
    {
        return json_decode(json_encode($xml), TRUE);
    }

}
