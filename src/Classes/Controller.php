<?php namespace App\Classes;


use Twig\Environment;

abstract class Controller implements IController
{

    private Environment $twig;


    public function __construct()
    {
        $loader = new \Twig\Loader\FilesystemLoader(BASE_PATH . '/views');

        $this->twig = new \Twig\Environment($loader, ['cache' => BASE_PATH . '/storage/cache/twig', 'debug' => true]);

    }

    /**
     * @return mixed
     */
    public function getTwig(): Environment
    {
        return $this->twig;
    }


}