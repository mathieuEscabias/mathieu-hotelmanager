<?php

namespace App\Controller;

class RoomsController extends AbstractController {

    /**
     * Afficher la page de 1 room
     * Route: GET /rooms/:id
     */
    public function show(int $id) {
        // 1. Récupérer le car par son id
        $room = $this->container->getRoomManager()->findOneById($id);

        //2. Afficher la room
        echo $this->container->getTwig()->render('rooms/show.html.twig', [
            'room' => $room
        ]);
        }
    public function new()
    {
        echo $this->container->getTwig()->render('rooms/new.html.twig');
    }

    public function create()
    {
        $this->container->getRoomManager()->create($_POST);
    }

    public function edit(int $id)
    {
        $room = $this->container->getRoomManager()->findOneById($id);
        echo $this->container->getTwig()->render('rooms/edit.html.twig', ['room' => $room] );
    }

    public function index()
    {
        $rooms = $this->container->getRoomManager()->findAll();
        echo $this->container->getTwig()->render('clients/index.html.twig', ['rooms' => $rooms]);
    }
    
}