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

    public function addEntry($name, $email, $age, $shoe_size){

        $required = ["name", "email", "age", "shoe_size"];

        foreach($required as $item){

        }

    }
}