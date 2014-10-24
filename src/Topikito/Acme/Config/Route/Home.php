<?php

namespace Topikito\Acme\Config\Route;

use app\config\Bridge\Router;
use Silex\Application;
use \Topikito\Acme\Controller;

/**
 * Class Home
 *
 * @package Topikito\Acme\Config\Route
 */
class Home extends Router
{

    public function load()
    {
        $this->_app->get('/', function () {
                $controller = new Controller\Home($this->_app);
                return $controller->index();
            });

       $this->_app->get('/hello', function () {
                $controller = new Controller\Helloworld($this->_app);
                return $controller->index();
            });
    }

}
