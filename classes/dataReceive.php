<?php

class DataReceive
{
    public function buildGraph(){

        $database = new Database();

        $data = $database->query("SELECT shoe_size FROM entries")->fetchAssoc();


        foreach($data as $shoe_size){

            return $shoe_size;

        }

        return $data;

    }

}