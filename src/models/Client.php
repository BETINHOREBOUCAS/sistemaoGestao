<?php

namespace src\models;

use \core\Model;

class Client extends Model {

    public function search()  {
        $pdo = Conection::sqlSelect();
    }

}