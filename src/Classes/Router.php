<?php namespace App\Classes;


use App\Classes\Traits\Singleton;
use function Composer\Autoload\includeFile;

class Router
{
    use Singleton;

    private array $routes = [
        'post' => [],
        ''
    ];

    /**
     * @param string $route
     * @param $controller
     */
    public function add(string $route, string $controller): void
    {
        if (!(array_key_exists($route, $this->routes))) {
            $this->routes[$route] = $controller;
        } else {
            throw new  \Exception("Такой маршрут уже существует");
        }

    }

    public function adds(array $routes): void
    {
        foreach ($routes as $key => $route) {
            $this->add($key, $route);
        }
    }

    /**
     * @return array
     */
    public function getRoutes(): array
    {
        return $this->routes;
    }


    public function findRoute(string $requestUri): void
    {
        if (array_key_exists($requestUri, $this->routes)) {
            (new $this->routes[$requestUri])->index();
        }

    }


}