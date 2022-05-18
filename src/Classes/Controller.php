<?php namespace App\Classes;


use Symfony\Component\HttpFoundation\Request;
use Twig\Environment;

abstract class Controller implements IController
{

    private Environment $twig;

    protected Request $request;

    protected Router $router;

    public function __construct(Request $request, Router $router)
    {
        $this->request = $request;

        $this->router = $router;

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