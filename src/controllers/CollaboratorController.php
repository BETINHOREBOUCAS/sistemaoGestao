<?php
namespace src\controllers;

use \core\Controller;

class CollaboratorController extends Controller {

    public function index() {
        $this->render('collaborator', [
            "infoPerson" => [
                "pageTitle" => "Colaborador",
                "personTitle" => [
                    "Nome",
                    "Função",
                    "Endereço",
                    "Ações"
                ],
                "person" => [
                    [
                        "id" => 1,
                        "nome" => "Paulo",
                        "funcao" => "Impunhador",
                        "endereco" => "São José"
                    ],
                    [
                        "id" => 2,
                        "nome" => "José",
                        "funcao" => "-",
                        "endereco" => "Giqui"
                    ]
                ]
            ]
        ]);
    }

    public function addCollaborator() {
        $this->render('formCollaborator');
    }
    
    public function searchCollaborator() {
        $this->render('access', [
            "page" => "personList",
            "infoPerson" => [
                "pageTitle" => "Colaborador",
                "personTitle" => [
                    "Nome",
                    "Função",
                    "Endereço",
                    "Ações"
                ],
                "person" => [
                    [
                        "id" => 1,
                        "nome" => "teste",
                        "funcao" => "Impunhador",
                        "endereco" => "São José"
                    ],
                    [
                        "id" => 2,
                        "nome" => "Teste2",
                        "funcao" => "-",
                        "endereco" => "Giqui"
                    ]
                ]
            ]
        ]);
    }

    public function post() {
        
        echo "<pre>";
        print_r($_POST);
    }

}