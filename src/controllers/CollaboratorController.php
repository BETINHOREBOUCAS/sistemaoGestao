<?php
namespace src\controllers;

use \core\Controller;

class CollaboratorController extends Controller {

    public function index() {
        $this->render('person');
    }

    public function post() {
        
        print_r($_POST);
    }

}