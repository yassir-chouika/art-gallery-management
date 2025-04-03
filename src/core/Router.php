<?php
class Router
{
    private $routes = [];

    public function addRoute($uri, $controller, $method)
    {
        $this->routes[$uri] = ["controller" => $controller, "method" => $method];
    }

    public function dispatch($uri)
    {
        if (isset($this->routes[$uri])) {
            $controller = new $this->routes[$uri]['controller'];
            $method = $this->routes[$uri]['method'];
            $controller->$method();
        } else {
            echo "404 Not Found";
        }
    }
}
