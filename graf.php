<?php
session_start();

require_once $_SERVER["DOCUMENT_ROOT"] ."/skomager_john/classes/authentication.php";
require_once $_SERVER["DOCUMENT_ROOT"] ."/skomager_john/classes/navbar.php";
require_once $_SERVER["DOCUMENT_ROOT"] ."/skomager_john/classes/dataView.php";
require_once $_SERVER["DOCUMENT_ROOT"] ."/skomager_john/classes/dataReceive.php";

if (!isset($_SESSION["LOGIN_STATUS"])){
    header("Location: /skomager_john/index.php");
}

?>
<!DOCTYPE html>
<html lang="en-uk">
    <head>
        <!-- Meta stuff -->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Skomager Johns Sko Butik og Vafler</title>
        <!-- Bootstrap css -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>
    <body>
        <?php echo Navbar::build(); ?>

        <div class="container" style="margin-top: 20px;">

            <div id="top_x_div" style="width: 800px; height: 600px;"></div>

        </div>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        <script src="js/graf.js"></script>
    </body>
</html>

