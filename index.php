<?php
session_start();
require "classes/authentication.php";
require "classes/navbar.php";
require "classes/dataView.php";

if(isset($_POST["submit"])) {
    $dataView = new DataView();

    $dataView->addEntry("johnny", "email", "21", "43");
}

$msg = "";

if(isset($_POST["login"]) && !isset($_SESSION["LOGIN_STATUS"])){
    $auth = new Authentication();

    if(($dmsg = $auth->login($_POST["username"], $_POST["password"])) === true){
        header("Location: /");
    }else{
        $msg = '<div class="alert alert-danger alert-dismissible fade show">';
        $msg .= '<button type="button" class="close" data-dismiss="alert" aria-label="Close">';
        $msg .= '<span aria-hidden="true">&times;</span>';
        $msg .= '</button>';
        $msg .= $dmsg;
        $msg .= '</div>';
    }
}

$shoeSize = ["min" => 33.5, "max" => 57.5];

$options = "<option selected=\"selected\" disabled=\"disabled\" value=\"0\">Vælg skostørrelse</option>";

$i = $shoeSize['min'];
while($i <= $shoeSize['max']){
    $options.= "<option value='".$i."'>".str_replace(".", ",", $i)."</option>";

    $i = $i + 0.5;
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

        <?php echo $msg; ?>

        <div class="container" style="margin-top: 20px;">
            <form method="post" style="margin-left: 25%; margin-right: 25%; padding: 10px;">
                <div class="form-group">
                    <label for="name">Navn:</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Navn" required="required">
                </div>
                <div class="form-group">
                    <label for="email">E-mail:</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="E-mail" required="required">
                </div>
                <div class="row">
                    <div class="form-group col-sm-6">
                        <label for="age">Alder:</label>
                        <input type="text" class="form-control" id="age" name="age" placeholder="Alder" required="required">
                    </div>
                    <div class="form-group col-sm-6">
                        <label for="shoesize">Skostørrelse:</label>
                        <select class="form-control" id="shoesize" name="shoe_size" required="required">
                            <?php echo $options; ?>
                        </select>
                    </div>
                </div>
                <input type="submit" class="btn btn-success" name="submit" value="Indsend">
            </form>
        </div>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>
