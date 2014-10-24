<?php

namespace Topikito\Acme\Controller;

use app\core;
use Topikito\Acme\Plugin\AuthUser;
use Topikito\Acme\Sal;
use Silex\Application;

/**
 * Class HelloWorld
 *
 * @package Topikito\Acme\Controller
 */
class Helloworld extends Core\BaseController
{

    /**
     * @param Application $app
     */
    public function __construct(Application $app)
    {
        parent::__construct($app);
        $this->initView([
                'pageTitle' => 'Title.',
                'pageDescription' => 'Desc.',
            ]);
    }

    /**
     * @return mixed
     */
    public function index()
    {
        return $this->view->render('Helloworld/index.html.twig', ['title' => 'Hello World!', 'desc'=>'My first apps..']);
    }

}
