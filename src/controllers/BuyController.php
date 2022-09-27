<?php
namespace src\controllers;

use \core\Controller;

class BuyController extends Controller {

    public function index() {
        $this->render('buy');
    }

    public function buyHistoric() {
        $this->render("buyHistoric");
    }

}