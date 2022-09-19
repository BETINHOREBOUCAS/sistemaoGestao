<?php
namespace src\controllers;

use \core\Controller;

class InventoryController extends Controller {

    public function index() {
        $this->render('inventory');
    }

    public function add() {
        $this->render('registration-product');
    }

    public function edit($args) {
        $this->render('registration-product');
    }

}