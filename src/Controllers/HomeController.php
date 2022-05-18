<?php namespace App\Controllers;

use App\Classes\Controller;

class HomeController extends Controller
{
    private array $currencies;

    public function index()
    {
        $this->prepareCurrencies();

        $this->generationPageHome(['currencies' => $this->currencies, 'count' => count($this->currencies)]);
    }

    public function search()
    {
        $this->prepareCurrencies();

        $this->request->request->get();
    }


    private function prepareCurrencies(): void
    {
        $this->currencies = \App\Classes\Manager\XmlManager::loadingXmlThroughFile("https://cbr.ru/scripts/XML_daily.asp")['Valute'];
    }


    private function generationPageHome($transmittedData)
    {
        $this->getTwig()->display('pages/home.twig', $transmittedData);
    }
}