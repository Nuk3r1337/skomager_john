<!DOCTYPE html>
<html lang="en-uk">
    <head>
        <!-- Meta stuff -->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Favicon -->
        <!--<link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/>-->

        <title>Skomager Johns Sko Butik og Vafler</title>

        <!-- Bootstrap css -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="/">Skomager</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item navbar-right">
                        <a class="nav-link" href="/">Hjem<span class="sr-only">(current)</span></a>
                    </li>
                </ul>
                <form method="post">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <input class="form-control form-control-sm" type="text" name="username" placeholder="Brugernavn">
                        </li>
                        <li class="nav-item">
                            <input class="form-control form-control-sm" type="password" name="password" placeholder="Kodeord">
                        </li>
                        <li class="nav-item">
                            <input type="submit" class="btn btn-primary btn-sm" name="login" value="Log ind">
                        </li>
                    </ul>
                </form>
            </div>
        </nav>

        <div class="container" style="margin-top: 20px;">
            <form method="post">
                <div class="form-group">
                    <label for="name">Navn:</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Navn">
                </div>
                <div class="form-group">
                    <label for="email">E-mail:</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="E-mail">
                </div>
                <div class="form-group">
                    <label for="age">Alder:</label>
                    <input type="text" class="form-control" id="age" name="age" placeholder="Alder">
                </div>
                <div class="form-group">
                    <label for="shoesize">Skostørrelse:</label>
                    <input type="text" class="form-control" id="shoesize" name="shoesize" placeholder="Skostørrelse">
                </div>
            </form>
        </div>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>

</html>
