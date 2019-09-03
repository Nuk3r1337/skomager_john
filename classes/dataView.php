<?php
//require "classes/database.php";

class DataView
{
    public function buildTable(){

        $database = new Database();

        $data = $database->query("SELECT * FROM entries")->fetchAssoc();

        $html = '<table class="table">';
            $html .= '<thead>';
                $html .= '<tr>';
                    $html .= '<th>#</th>';
                    $html .= '<th>Navn</th>';
                    $html .= '<th>E-mail</th>';
                    $html .= '<th>Alder</th>';
                    $html .= '<th>Skostørrelse</th>';
                $html .= '</tr>';
            $html .= '</thead>';
            $html .= '<tbody>';

                foreach($data as $value){
                    $html .= '<tr>';
                        $html .= '<th scope="row">'. $value["id"] .'</th>';
                        $html .= '<td>'. $value["name"] .'</td>';
                        $html .= '<td>'. $value["email"] .'</td>';
                        $html .= '<td>'. $value["age"] .'</td>';
                        $html .= '<td>'. $value["shoe_size"] .'</td>';
                    $html .= '</tr>';
                }

            $html .= '</tbody>';
        $html .= '</table>';

        return $html;
    }

    public function addEntry(){

        $required = ["name", "email", "age", "shoe_size"];

        foreach($required as $key){
            if(!isset($_POST[$key]) || $_POST[$key] === ""){

                return "Udfyld de påkrævede felter";
            }
        }

        unset($_POST["submit"]);

        if(preg_match("/^([a-zA-ZæøåÆØÅÀ-ž]\s?)*\s*$/", $_POST["name"]) !== 1){
            return "Navn kan kun indeholde bogstaver";
        }

        if(filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) === false){
            return "E-mail ikke gyldig";
        }


        if(!is_numeric($_POST["age"]) || 3 > $_POST["age"] || $_POST["age"] > 120 ){
            return "Alder skal være gyldig";
        }

        if(!is_numeric(33.5 > $_POST["shoe_size"]) && ($_POST["shoe_size"] > 57.5)){
            return "Vælg en skostørrelse";
        }

        $database = new Database();

        return $database->query("INSERT INTO entries (name, email, age, shoe_size) VALUES (:name, :email, :age, :shoe_size)", $_POST)->affectedRows() > 0 ;


    }
}