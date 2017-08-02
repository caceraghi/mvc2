<?php
namespace App;
use SON\Init\Bootstrap;

class Route extends Bootstrap {
    protected function initRoutes(){
        $routes['home'] = array('route'=>'/','controller'=>'indexController','action'=>'index');
        $routes['contato'] = array('route'=>'/contato','controller'=>'indexController','action'=>'contato');
        $routes['exemplo'] = array('route'=>'/exemplo','controller'=>'indexController','action'=>'exemplo');
        $this->setRoutes($routes);
    }
}