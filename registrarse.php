﻿<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>SICACECSJ - Registrate!!</title>
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

    <style>
        #nombres {
            text-transform: capitalize;
        }

        #apellidos {
            text-transform: capitalize;
        }
    </style>

    <script language="javascript">
        function verificar() {
            if (document.getElementById('nombres').value == "" ||
                document.getElementById('clave').value == "" ||
                document.getElementById('email').value == "") {
                    alertaError();
            } else {

                document.getElementById('bandera').value = "add";

                document.frmsicacecsj.submit();

            }

        }

        function alertaError() {
			alertify.error("<h1>Error</h1>" + "<p>Campos sin llenar</p>" + "<img src='images/error.png'>").dismissOthers();
		}

		function alertaErrorLogin() {
			alertify.error("<h1>Error</h1>" + "<p>Usuario o contraseña no existen</p>" + "<img src='images/error.png'>").dismissOthers();

		}

		function alertaExito() {
			alertify.success("<h1>Exito</h1>" + "<p>Se ha registrado correctamente</p>" + "<img src='images/bien.png'>").set({
				transition: 'flipx'
			});
		}


		function alertaErrorRegistro() {
			alertify.error("<h1>Error</h1>" + "<p>Usuario o correo ya estan vinculados con otro usuario</p>" + "<img src='images/error.png'>").set({
				transition: 'flipx'
			});
		}


		function alertaErrorC() {
			alertify.error("<h1>Error</h1>" + "<p>Correo Electronico no valido</p>" + "<img src='images/error.png'>").dismissOthers();


		}

        function r() {
            location.href = "login.php"
        }
    </script>

    <script>
        $(document).ready(function() {

            /////////////////validacion nombre 
            $("#nombres").keypress(function(key) {
                window.console.log(key.charCode)
                if ((key.charCode < 97 || key.charCode > 122) //letras mayusculas
                    &&
                    (key.charCode < 65 || key.charCode > 90) //letras minusculas
                    &&
                    (key.charCode != 8) //retroceso
                    &&
                    (key.charCode != 241) //ñ
                    &&
                    (key.charCode != 209) //Ñ
                    &&
                    (key.charCode != 32) //espacio
                    &&
                    (key.charCode != 225) //á
                    &&
                    (key.charCode != 233) //é
                    &&
                    (key.charCode != 237) //í
                    &&
                    (key.charCode != 243) //ó
                    &&
                    (key.charCode != 250) //ú
                    &&
                    (key.charCode != 193) //Á
                    &&
                    (key.charCode != 201) //É
                    &&
                    (key.charCode != 205) //Í
                    &&
                    (key.charCode != 211) //Ó
                    &&
                    (key.charCode != 218) //Ú

                )
                    return false;
            });

            ////////////////validacion apellido
            $("#apellidos").keypress(function(key) {
                window.console.log(key.charCode)
                if ((key.charCode < 97 || key.charCode > 122) //letras mayusculas
                    &&
                    (key.charCode < 65 || key.charCode > 90) //letras minusculas
                    &&
                    (key.charCode != 8) //retroceso
                    &&
                    (key.charCode != 241) //ñ
                    &&
                    (key.charCode != 209) //Ñ
                    &&
                    (key.charCode != 32) //espacio
                    &&
                    (key.charCode != 225) //á
                    &&
                    (key.charCode != 233) //é
                    &&
                    (key.charCode != 237) //í
                    &&
                    (key.charCode != 243) //ó
                    &&
                    (key.charCode != 250) //ú
                    &&
                    (key.charCode != 193) //Á
                    &&
                    (key.charCode != 201) //É
                    &&
                    (key.charCode != 205) //Í
                    &&
                    (key.charCode != 211) //Ó
                    &&
                    (key.charCode != 218) //Ú

                )
                    return false;
            });
        });
    </script>


</head>

<body class="signup-page">
    <div class="signup-box">
        <div class="card">
            <div class="logo">
                <a style="color:blue;"><img src="images/logo.png" width="120" height="160"><b>SICACECSJ</b></a>
            </div>
            <div class="body">
                <form role="form" action="" method="post" class="form-group" id="frmsicacecsj" name="frmsicacecsj">
                    <input type="hidden" name="bandera" id="bandera">
                    <input type="hidden" name="baccion" id="baccion">
                    <div class="input-group">
                        <span class="input-group-addon">
                            <img src="images/iconos/person.svg" />
                        </span>
                        <div class="form-line">
                            <input type="text" class="form-control" name="nombres" id="nombres" placeholder="Nombres del Usuario" autocomplete="off" value="<?= (isset($_POST['nombres'])) ? $_POST['nombres'] : ""; ?>" required autofocus>
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <img src="images/iconos/person.svg" />
                        </span>
                        <div class="form-line">
                            <input type="text" class="form-control" name="apellidos" id="apellidos" placeholder="Apellidos del Usuario" autocomplete="off" value="<?= (isset($_POST['apellidos'])) ? $_POST['apellidos'] : ""; ?>" required autofocus>
                        </div>
                    </div>
                    <div class="form-group">
                        <select type="text" name="sexo" id="sexo" class="form-control" placeholder="Sexo" autocomplete="off" value="<?= (isset($_POST['sexo'])) ? $_POST['sexo'] : ""; ?>" required>
                            <option value="" disabled selected>Escoja su sexo</option>
                            <option value="masculino">masculino</option>
                            <option value="femenino">femenino</option>

                        </select>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <img src="images/iconos/email.svg" />
                        </span>
                        <div class="form-line">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Dirección de correo electrónico" autocomplete="off" value="<?= (isset($_POST['email'])) ? $_POST['email'] : ""; ?>" required>
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <img src="images/iconos/lock.svg" />
                        </span>
                        <div class="form-line">
                            <input type="password" class="form-control" name="clave" id="clave" minlength="6" placeholder="Contraseña" autocomplete="off" value="<?= (isset($_POST['clave'])) ? $_POST['clave'] : ""; ?>" required>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-block btn-lg bg-blue waves-effect" onClick="verificar()">REGÍSTRARSE</button>

                    <div class="m-t-25 m-b--5 align-center">
                        <a href="login.php">¿Ya tienes una cuenta?</a>
                    </div>
                </form>
            </div>
        </div>

        <footer class="footer full-reset">
            <div class="copyright text-center"><img src="images/minerva2.png" width="40" height="60" />
                <h6 style="color:black;">UES-FMP 2019 &copy; Todos Derechos Reservados </h6>
            </div>
        </footer>
    </div>

    <!-- Jquery Core Js -->
    <script src="plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="plugins/node-waves/waves.js"></script>

    <!-- Custom Js -->
    <script src="js/admin.js"></script>

    <!-- include alertify.css -->
    <link rel="stylesheet" href="alertas/build/css/alertify.css">

    <!-- include boostrap theme  -->
    <link rel="stylesheet" href="alertas/build/css/themes/bootstrap.css">

    <!-- include alertify script -->
    <script src="alertas/build/alertify.js"></script>

    <script type="text/javascript">
        //override defaults
        alertify.defaults.transition = "slide";
        alertify.defaults.theme.ok = "btn btn-primary";
        alertify.defaults.theme.cancel = "btn btn-danger";
        alertify.defaults.theme.input = "form-control";
    </script>
</body>

</html>
<?php
include("config/conexion.php");
if (isset($_REQUEST["bandera"])) {

    $bandera = $_REQUEST["bandera"];
    $nombres = $_REQUEST["nombres"];
    $nombres = ucwords($nombres);
    $apellidos = $_REQUEST["apellidos"];
    $apellidos = ucwords($apellidos);
    $clave = $_REQUEST["clave"];
    $sexo = $_REQUEST["sexo"];
    $email = $_REQUEST["email"];
    $niv = 2;

    if ($bandera == "add") {
        pg_query("BEGIN");

        $clave = base64_encode($clave);

        $query_s2 = pg_query($conexion, "SELECT * FROM usuario where nombre='$nombres' or email='$email' ");
        $rows = pg_num_rows($query_s2);

        if ($rows == 0) {

            $result = pg_query($conexion, "INSERT INTO usuario(nombre,clave,email,nivel,apellido,sexo) values(trim('$nombres'),'$clave','$email','$niv','$apellidos','$sexo' )");

            if (!$result) {
                pg_query("rollback");
                echo "alertaError();";
                echo "<script language='javascript'>";
                echo "setTimeout ('r()', 1500);";
                echo "</script>";
            } else {
                pg_query("commit");
                echo "<script language='javascript'>";
                echo "alertaExito();";
                echo "</script>";


                echo "<script language='javascript'>";
                echo "setTimeout ('r()', 1500);";
                echo "</script>";
            }
        } else {

            echo "<script language='javascript'>";
            echo "alertaErrorRegistro();";
            echo "</script>";
        }
    } ///////llave que cierra if de bandera add


}
?>