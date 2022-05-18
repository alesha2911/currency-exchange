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

    public function onSearch()
    {
        $this->prepareCurrencies();

        $query = mb_strtolower($this->request->request->get('query'));

        if ($query) {


            $this->currencies = array_filter($this->currencies, function ($currency) use ($query) {
                if (mb_strpos(mb_strtolower($currency['Name']), $query) !== false) {
                    return true;
                } else if (mb_strpos(mb_strtolower($currency['Value']), $query) !== false) {
                    return true;
                } else if (mb_strpos(mb_strtolower($currency['NumCode']), $query) !== false) {
                    return true;
                } else if (mb_strpos(mb_strtolower($currency['CharCode']), $query) !== false) {
                    return true;
                } else {
                    return false;
                }

            });

        }
        $this->generationPageHome(['currencies' => $this->currencies, 'count' => count($this->currencies), 'searchInput' => $this->request->request->get('query') ]);
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