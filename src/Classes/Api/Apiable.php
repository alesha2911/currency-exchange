<?php namespace App\Plugin\Swd\Rate\Classes\Api;


interface Apiable
{
    /**
     * @return string путь
     */
    function getPath();

    function addElementQuery($element);

}