<?php
namespace src\controllers;

use \core\Controller;

class FeedstockController extends Controller {

    public function index() {
        $this->render('feedstock');
    }

}