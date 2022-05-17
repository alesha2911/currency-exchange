<?php namespace App\Controllers;

use App\Classes\Controller;

class HomeController extends Controller
{

    /**
     * HomeController constructor.
     */
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $currencies = \App\Classes\Manager\XmlManager::loadingXmlThroughFile("https://cbr.ru/scripts/XML_daily.asp")['Valute'];

        $this->getTwig()->display('pages/home.twig', ['currencies' => $currencies, 'count' => count($currencies)]);
    }

    public function search()
    {

    }
}