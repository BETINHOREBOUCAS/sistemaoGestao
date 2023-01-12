<?php

namespace src\models;

use \core\Model;

class Generic extends Model {

    public function addInfo($table, $dados)  {
        $pdo = Conection::sqlSelect();

        foreach ($dados as $key => $value) {
            $keyBind[] = ":$key";
            $valueData[] = $value;
        }

        $key = implode(', ', array_keys($dados));
        $keyBindStr = implode(', ', $keyBind);

        $sql = "INSERT INTO $table ($key) VALUES ($keyBindStr)";

        $sql = $pdo->prepare($sql);
        for ($i = 0; $i < count($dados); $i++) {
            $sql->bindValue("$keyBind[$i]", "$valueData[$i]");
        }

        $sql->execute();
        
        if ($sql->rowCount() > 0) {
            return $pdo->lastInsertId();;
        }
    }

}