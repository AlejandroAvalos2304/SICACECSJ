﻿<?php session_start();

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Inicio de Sesión | SICACECSJ</title>
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

    <meta name="keywords" content="" />
    <script type="application/x-javascript">
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>

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

    <script language="javascript">
        function verificar() {
            if (document.getElementById('usuariox').value == "" || document.getElementById('clavex').value == "") {
                alertaError();
            } else {
                document.getElementById('bandera').value = "add";

                document.frmsica.submit();
            }
        }

        function alertaError() {
            alertify.error("<h3>Error</h3>" + "<p>Campos sin llenar</p>" + "<img src='images/error.png' width='80' height='80'>").dismissOthers();
        }

        function alertaErrorLogin() {
            alertify.error("<h3>Error</h3>" + "<p>Usuario o contraseña no existen</p>" + "<img src='images/error.png' width='80' height='80'>").dismissOthers();

        }

        function alertaErrorLogin2() {
            alertify.error("<h3>Error</h3>" + "<p>No tiene permitido el acceso hasta que el admnistrador lo apruebe</p>" + "<img src='images/error.png' width='80' height='80'>").dismissOthers();

        }
    </script>

    <script type="text/javascript">
        function boton(e) {
            tecla = (document.all) ? e.keyCode : e.which;
            if (tecla == 13) verificar();
        }
    </script>

</head>

<body class="login-page">
    <div class="login-box ">
        <div class="card">
            <div class="logo">
                <a style="color:blue;"><img src="images/logo.png" width="120" height="160"><b>SICACECSJ</b></a>
            </div>
            <div class="body">
                <form role="form" action="" method="post" id="frmsica" name="frmsica">
                    <input type="hidden" name="bandera" id="bandera" />
                    <input type="hidden" name="baccion" id="baccion" />
                    <div class="input-group">
                        <span class="input-group-addon">
                            <img src="images/iconos/person.svg" />
                        </span>
                        <div class="form-line">
                            <input type="text" class="form-control" name="usuariox" id="usuariox" placeholder="Nombre de Usuario..." onkeypress="boton(event)" autocomplete="off" required autofocus>
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <img src="images/iconos/lock.svg" />
                        </span>
                        <div class="form-line">
                            <input type="password" class="form-control" name="clavex" id="clavex" placeholder="Contraseña..." onkeypress="boton(event)" autocomplete="off" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-7 p-t-6">
                            <input type="checkbox" id="recr" class="filled-in chk-col-geed" onchange="document.getElementById('clavex').type = this.checked ? 'text' : 'password'">
                            <label for="recr">Mostrar Contraseña</label>
                        </div>
                        <div class="col-xs-5">
                            <button type="button" class="btn btn-block bg-blue waves-effect" onClick="verificar()">Iniciar Sesión</button>
                        </div>
                    </div>
                    <div class="row m-t-15 m-b--20">
                        <div class="col-xs-6">
                            <a href="registrarse.php">¡Crear Cuenta!</a>
                        </div>
                        <div class="col-xs-6 align-right">
                            <a href="recuperarClave.php">¿Olvidastes tu Contraseña?</a>
                        </div>
                    </div>
               
            </div>
             </form>
        </div>
        <footer class="footer full-reset">
            <div class="copyright text-center"><img src="images/minerva2.png" width="40" height="60" />
                <h6 style="color:black;">UES-FMP 2019 &copy; Todos Derechos Reservados </h6>
            </div>
        </footer>
    </div>
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
    <script src="js/pages/examples/sign-in.js"></script>
</body>

</html>
<?php
if (isset($_REQUEST["bandera"])) {
    $bandera = $_REQUEST["bandera"];
    $usuariox = $_REQUEST["usuariox"];
    $clavex = $_REQUEST["clavex"];
    $clavex = base64_encode($clavex);


    include("config/conexion.php");

    if ($bandera == "add") {
        pg_query("BEGIN");


        $query_s2= pg_query($conexion,"SELECT * FROM usuario where nombre=trim('$usuariox') and clave=trim('$clavex') and nivel=0 ");
	
        $rows = pg_num_rows($query_s2);
        
        
        if($rows==0){
        
            $query_s= pg_query($conexion,"SELECT * FROM usuario where nombre=trim('$usuariox') and clave=trim('$clavex') ");
                       
          while($fila= pg_fetch_array($query_s)){
              $_SESSION["idUsuario"]=$fila[0];
              $_SESSION["nombresT"]=$fila[1];             
              $_SESSION["nivelUsuario"]=$fila[4];
              $_SESSION["apellidosT"]=$fila[5];
              $_SESSION["sexoT"]=$fila[6];


                $_SESSION["autenticado"] = "yeah";
                echo "<script language='javascript'>";
                echo "location.href='index.php';";
                echo "</script>";
            }

            echo "<script language='javascript'>";
            echo "alertaErrorLogin();";
            echo "</script>";
        } else {

            echo "<script language='javascript'>";
            echo "alertaErrorLogin2();";
            echo "</script>";
        }
    }
}
?>