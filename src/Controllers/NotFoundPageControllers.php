<?php namespace App\Controllers;

use App\Classes\Controller;

class NotFoundPageControllers extends Controller
{

    function index()
    {
        $this->getTwig()->display('pages/404.twig', []);
    }

}