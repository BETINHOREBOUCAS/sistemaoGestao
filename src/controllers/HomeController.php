<?php
namespace src\controllers;

use \core\Controller;
use src\models\Conection;

class HomeController extends Controller {

    public function index() {
        $this->render('home', ['nome' => 'Bonieky']);
        Conection::sqlSelect();
    }

}