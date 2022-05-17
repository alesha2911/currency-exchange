<?php namespace App\Plugin\Swd\Rate\Classes\Api;


abstract class Api implements Apiable
{
    const SYMBOL_BUILDING_QUERY_POST = '?';

    const SYMBOL_OR = '&';
    /**
     * @var string путь
     */
    protected $path;


    protected $query;


    public function addElementQuery($element)
    {
        $this->query = $this->query ? $this->query . $element : $element;
    }

    final public function get()
    {
        return $this->query ? $this->getPath() . self::SYMBOL_BUILDING_QUERY_POST . $this->query : $this->getPath();
    }

}