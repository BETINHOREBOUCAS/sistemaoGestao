<?php
namespace src\controllers;

use \core\Controller;

class ClientController extends Controller {

    public function index() {
        $this->render('client');
    }

    public function clientAdd() {
        $this->render('clientAdd');
    }

}