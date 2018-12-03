<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>Login</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
        <link rel="stylesheet" href="css/customLogin.css">
    </head>
    <body>
        <div class="container">
            <div class="row-fluid">
                <div class="login">
                    <h4 class="text-center">CABLESAT</h4>
                    <br>
                    <form class="" action="php/signin.php" method="post">
                        <div class="form-row">
                            <div class="form-group col-md-12 col-xs-12">
                                <input type="text" class="form-control" name="user" placeholder="USUARIO">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-12 col-xs-12">
                                <input type="password" class="form-control" name="pass" placeholder="CONTRASEÑA">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-12 col-xs-12">
                                <input type="submit" class="btn btn-danger btn-block" value="INICIAR SESION">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>
