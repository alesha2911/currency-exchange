<?php namespace App\Classes;


class Rout
{
    const DELIMITER = '@';

    const DEFAULT_METHOD = 'index';

    private string $path;

    private string $controller;

    private string $controllerMethod;

    private string $typeMethod;

    /**
     * Rout constructor.
     * @param string $path
     * @param string $controller
     * @param string $typeMethod
     * @throws \Exception
     */
    public function __construct($typeMethod, string $path, string $controller)
    {
        $this->typeMethod = $typeMethod;

        $this->path = $path;

        $arrayController = explode(self::DELIMITER, $controller);

        $this->controller = $arrayController[0];

        switch (count($arrayController)) {
            case 1:
                $this->controllerMethod = self::DEFAULT_METHOD;
                break;
            case 2:
                $this->controllerMethod = $arrayController[1];
                break;
            default:
                throw new \Exception("not correct controller method");
        }
    }

    /**
     * @return string
     */
    public function getPath(): string
    {
        return $this->path;
    }

    /**
     * @return mixed|string
     */
    public function getController()
    {
        return $this->controller;
    }

    /**
     * @return mixed|string
     */
    public function getControllerMethod()
    {
        return $this->controllerMethod;
    }

    /**
     * @return string
     */
    public function getTypeMethod(): string
    {
        return $this->typeMethod;
    }


}