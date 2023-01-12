<?php
namespace src\controllers;

use \core\Controller;

class ClientController extends Controller {

    public function index() {
        $this->render('client', [
            "infoPerson" => [
                "pageTitle" => "Cliente",
                "personTitle" => ["Nome", "Vendedor", "Endereço", "Ações"],
                "person" => [
                    [
                        "id" => 1,
                        "nome" => "Vanessa",
                        "vendedor" => "-",
                        "endereco" => "São José"
                    ],
                    [
                        "id" => 2,
                        "nome" => "José",
                        "vendedor" => "Maria",
                        "endereco" => "Giqui"
                    ]
                ]
            ]
        ]);
    }

    public function clientAdd() {
        $this->render('formClient');
    }

    public function searchClient() {
        $this->render('access', [
            "page" => "personList",
            "infoPerson" => [
                "pageTitle" => "Cliente",
                "personTitle" => ["Nome", "Vendedor", "Endereço", "Ações"],
                "person" => [
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
                ]
            ]
        ]);
    }
}

/*
$this->render('access', [
            "page" => "personList",
            "infoPerson" => [
                "clientTitle" => ["nome", "teste"],
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
                ]
            ]
        ]);
*/