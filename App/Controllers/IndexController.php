<?php
namespace App\Controllers;
use SON\Controller\Action;
use SON\DI\Container;

class IndexController extends Action {


    public function index(){
        $cliente = Container::getModel("Cliente");
        $this->views->cliente = $cliente->listar_clientes();
        $this->render("index");
    }
//    public function contato($id){
//        echo $id;
//        $this->view->cars = array("Fusca", "Belina", "Corcel");
//        $this->render("contato");
//    }
    public function contato(){
        $cliente = Container::getModel("Cliente");
        $this->views->cliente = $cliente->busca_cliente(2);

        $this->render("contato");
    }

    public function exemplo(){
        $this->render("exemplo");
    }
}