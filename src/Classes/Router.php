<?php namespace App\Classes;


use App\Classes\Traits\Singleton;
use App\Controllers\NotFoundPageControllers;
use Symfony\Component\HttpFoundation\Request;
use function Composer\Autoload\includeFile;

class Router
{
    const METHOD_POST = 'post';

    const METHOD_GET = 'get';

    use Singleton;

    private Request $request;

    private array $routes = [
        self::METHOD_POST => [],
        self::METHOD_GET => [],
    ];

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    /**
     * @param string $route
     * @param string $controller
     * @throws \Exception
     */
    public function get(string $route, string $controller): void
    {
        $this->add(self::METHOD_GET, $route, $controller);
    }

    /**
     * @param string $route
     * @param string $controller
     * @throws \Exception
     */
    public function post(string $route, string $controller): void
    {
        $this->add(self::METHOD_POST, $route, $controller);
    }

    /**
     * @param string $typeMethod
     * @param string $route
     * @param string $controller
     * @throws \Exception
     */
    private function add(string $typeMethod, string $route, string $controller): void
    {
        $this->routes[$typeMethod][] = new Rout($typeMethod, $route, $controller);
    }


    /**
     * @return array
     */
    public function getRoutes(): array
    {
        return $this->routes;
    }


    public function findRoute(?string $requestUri = null): void
    {
        if (!isset($requestUri) || $requestUri === null) {
            $requestUri = $this->request->getRequestUri();
        }

        foreach ($this->routes[self::METHOD_GET] as $route) {
            if ($route->getPath() == $requestUri) {
                $method = $route->getControllerMethod();
                $class = $route->getController();
                $obj = app()->make($class);
                $obj->$method();
            }
        }

        // (new NotFoundPageControllers())->index();

    }


    private function checkRoutesToMethod(string $typeMethod, string $checkedRoute): bool
    {
        foreach ($this->routes[$typeMethod] as $route) {
            if ($route->getPath() == $checkedRoute) {
                return true;
            }
        }

        return false;
    }


}