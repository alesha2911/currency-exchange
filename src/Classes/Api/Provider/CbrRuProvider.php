<?php namespace App\Plugin\Swd\Rate\Classes\Api\Provider;


use App\Plugin\Swd\Rate\Classes\Api\Api;

class CbrRuProvider extends Api
{
    /**
     * @var string путь
     */
    protected $path = 'http://www.cbr.ru/scripts/XML_daily.asp';


    public function setDate($date)
    {
        $this->addElementQuery($date);

        return $this;
    }

    public function setCurrency($currency) {

        $this->addElementQuery(self::SYMBOL_OR.$currency);
        return $this;
    }

    /**
     * @return string path
     */
    public function getPath()
    {
      return $this->path;
    }


}