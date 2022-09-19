<?php
namespace src\controllers;

use \core\Controller;

class CollaboratorController extends Controller {

    public function index() {
        $this->render('person');
    }

}