﻿<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Recupera tu Contraseña</title>
    <!-- Favicon-->
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- Bootstrap Core Css -->
    <link href="plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="css/style.css" rel="stylesheet">

    <style type="text/css">
        body {

            background-image: url(images/fondo3.jpg);
            background-position: center center;
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
        }

        #mail {
            width: 100%;
            position: fixed;
        }
    </style>
</head>

<body class="fp-page">
    <div class="fp-box">
    <div class="logo">
            <a style="color:cornsilk;"><img src="images/logo.png" width="120" height="160"><b>SICACECSJ</b></a>
        </div>
        <div class="card">
            <div class="body">
                <form id="forgot_password" method="POST">
                    <div class="msg">
                    Ingrese su dirección de correo electrónico que utilizó para registrarse.
                     Le enviaremos un correo electrónico con su nombre de usuario y su contraseña.
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                        <img src="images/iconos/email.svg"/>
                        </span>
                        <div class="form-line">
                            <input type="email" class="form-control" name="email" placeholder="Correo Electrónico" required autofocus>
                        </div>
                    </div>

                    <button class="btn btn-block btn-lg bg-blue waves-effect" type="submit">RESTABLECER MI CONTRASEÑA</button>

                    <div class="row m-t-20 m-b--5 align-center">
                        <a href="registrarse.php">¡Registrarse!</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Jquery Core Js -->
    <script src="plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="plugins/node-waves/waves.js"></script>

    <!-- Validation Plugin Js -->
    <script src="plugins/jquery-validation/jquery.validate.js"></script>

    <!-- Custom Js -->
    <script src="js/admin.js"></script>
    <script src="js/pages/examples/forgot-password.js"></script>
</body>

</html>