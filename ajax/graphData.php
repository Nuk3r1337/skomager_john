<?php
require $_SERVER["DOCUMENT_ROOT"]."/classes/database.php";

header("Content-type: application/json");

$database = new Database();

$data = $database->query("SELECT shoe_size, COUNT(shoe_size) total FROM entries GROUP BY shoe_size ORDER BY shoe_size ASC ")->fetchArray();

echo json_encode($data);