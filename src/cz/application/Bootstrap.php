<?php

class Bootstrap extends Zend_Application_Bootstrap_Bootstrap
{
    public function run()
    {

        parent::run();
    }

    public function _initView(){
        $this->bootstrap('layout');
//        $layout = $this->getResource('layout');
//        $view = $layout->getView();
        
    }
    public function _initRoutes(){
        $routes = array(
            'rr' => new Zend_Controller_Router_Route(
                'texai',
                array(
                    'module' => 'ventas',
                    'controller' => 'index',
                    'action' => 'r'
                )
            )
        );
        $this->frontController->getRouter()->addRoutes($routes);
        
    }

}

