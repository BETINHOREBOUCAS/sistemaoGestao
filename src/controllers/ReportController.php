<?php
namespace src\controllers;

use \core\Controller;

class ReportController extends Controller {

    public function index() {
        $this->render('report');
    }

}