<?php
namespace src\controllers;

use \core\Controller;

class ConfigController extends Controller {

    public function index() {
        $this->render('config');
    }

}