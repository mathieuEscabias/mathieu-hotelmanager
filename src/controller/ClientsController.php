<?php

namespace App\Controller;

class ClientsController extends AbstractController {
    
    public function new()
    {
        echo $this->container->getTwig()->render('clients/new.html.twig');
    }


    public function create()
    {
        $this->container->getClientManager()->create($_POST);
    }

    public function index()
    {
        $clients = $this->container->getClientManager()->findAll();
        echo $this->container->getTwig()->render('clients/index.html.twig',['clients' => $clients]);
    }


}