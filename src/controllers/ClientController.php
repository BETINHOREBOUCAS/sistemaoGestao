<?php
namespace src\controllers;

use \core\Controller;

class ClientController extends Controller {

    public function index() {
        $this->render('client');
    }

    public function clientAdd() {
        $this->render('clientForm');
    }

    public function searchClient() {
        $this->render('client', [
            "clients" => [
                [
                    "id" => 1,
                    "nome" => "Teste",
                    "vendedor" => "-",
                    "endereco" => "São José"
                ],
                [
                    "id" => 2,
                    "nome" => "Teste2",
                    "vendedor" => "Maria",
                    "endereco" => "Giqui"
                ]
            ]]);
    }

}