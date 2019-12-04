<?php session_start();
if ($_SESSION['autenticado'] != "yeah") {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Inicio - SICACECSJ</title>
    <!-- Favicon-->
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- Bootstrap Core Css -->
    <link href="plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- JQuery DataTable Css -->
    <link href="plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet">

    <!-- Custom Css -->
    <link href="css/style.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="css/themes/all-themes.css" rel="stylesheet" />

    <style type="text/css">
        .envolcentro {
            display: table-cell;
            text-align: center;
            vertical-align: middle;

        }

        .envolcentro * {
            vertical-align: middle;
        }

        .envolcentro {
            display: block;
        }

        .envolcentro span {
            display: inline-block;
            height: 100%;
            width: 1px;
        }
    </style>

    <script type="text/javascript" class="init">
        function Salir() {
            document.location.href = "config/fin.php";
        }
    </script>
</head>

<body class="theme-blue">
    <!-- Top Bar -->
    <nav class="navbar">
        <div class="media">
            <div class="media-left media-middle">
                <img class="media-object" src="images/logo.png" width="40" height="50">
            </div>
            <div class="media-body">
                <a class="navbar-brand">SISTEMA INFORMÁTICO PARA EL CONTROL ACADÉMICO DEL CENTRO
                    ESCOLAR CATÓLICO SAN JOSÉ</a>
                <div class="collapse navbar-collapse" id="navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <a href="" title="Ayuda">
                            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                                <img class="bg-white" src="images/iconos/help_outline.svg" />
                            </div>
                        </a>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                    <figure>

                        <!--aqui va la foto del usuario -->

                        <?php

                        if (isset($_SESSION)) {
                            $sexo = $_SESSION["sexoT"];
                            $man = 'images/user.png';
                            $woman = 'images/userWoman.png';
                            $user = 'user-picture';
                            $class = 'img-responsive img-circle center-box';
                            $style = 'max-width: 110px;';
                            if (isset($_SESSION)) {

                                if ($sexo == 'masculino') {
                                    echo "<img src=\"" . $man . "\" alt=\"" . $user . "\" class=\"" . $class . "\" >";
                                } else {

                                    if ($sexo == 'femenino') {
                                        echo "<img src=\"" . $woman . "\" alt=\"" . $user . "\" class=\"" . $class . "\" >";
                                    }
                                }
                            }
                        }
                        ?>
                    </figure>
                </div>
                <div class="info-container">
                    <li style="color:#fff; cursor:default;">
                        <span class="all-tittles">
                            <?php if (isset($_SESSION)) {
                                $usu = $_SESSION["nombresT"];
                                echo "$usu";
                            }
                            ?>
                        </span>
                    </li>
                    <div class="btn-group user-helper-dropdown">
                        <img data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" src="images/iconos/keyboard_arrow_down.svg" />
                        <ul class="dropdown-menu pull-right">
                            <li><a data-toggle="modal" data-target="#ModalCerrar"><img src="images/iconos/input.svg" />Cerrar Sesión</a></li>
                            <li><a data-toggle="modal" data-target="#ModalCuenta"><img src="images/iconos/settings.svg" />Configuración de Cuenta</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">MENÚ</li>
                    <a href="javascript:void(0);" class="menu-toggle">
                        <img src="images/iconos/face.svg" />
                        <span>Alumnos</span>
                    </a>
                    <ul class="ml-menu">
                        <li class="active">
                            <a href="docs/alumno.php">Registro de Alumnos</a>
                        </li>
                        <li class="active">
                            <a href="docs/altaA.php">Dar de Alta</a>
                        </li>
                    </ul>
                    </li>
                    <a href="javascript:void(0);" class="menu-toggle">
                        <img src="images/iconos/assignment_ind.svg" />
                        <span>Docentes</span>
                    </a>
                    <ul class="ml-menu">
                        <li class="active">
                            <a href="docs/docente.php">Registro de Docente</a>
                        </li>
                        <li class="active">
                            <a href="docs/altaD.php">Dar de Alta</a>
                        </li>
                    </ul>

                    <a href="javascript:void(0);" class="menu-toggle">
                        <img src="images/iconos/clipboard.svg" />
                        <span>Notas</span>
                    </a>
                    <ul class="ml-menu">
                        <li class="active">
                            <a href="docs/nota.php">Registro de Notas</a>
                        </li>
                    </ul>

                    <a href="javascript:void(0);" class="menu-toggle">
                        <img src="images/iconos/horario.svg" />
                        <span>Horarios</span>
                    </a>
                    <ul class="ml-menu">
                        <li class="active">
                            <a href="docs/horario.php">Registro de Horarios</a>
                        </li>
                    </ul>

                    <a href="javascript:void(0);" class="menu-toggle">
                        <img src="images/iconos/materia.svg" />
                        <span>Materias</span>
                    </a>
                    <ul class="ml-menu">
                        <li class="active">
                            <a href="docs/materia.php">Registro de Materias</a>
                        </li>
                    </ul>

                    <a href="javascript:void(0);" class="menu-toggle">
                        <img src="images/iconos/security.svg" />
                        <span>Seguridad</span>
                    </a>
                    <ul class="ml-menu">
                        <li class="active">
                            <a href="docs/seguridad.php">Opciones de Seguridad</a>
                        </li>
                    </ul>
                    <a href="docs/acercade.php">Acerca de</a>
                </ul>
            </div>
            <!-- #Menu -->
            <!-- Footer -->
            <div class="legal">
                <img src="images/minerva2.png" width="30" height="50" />
                <div class="copyright">
                    <span>UES-FMP 2019 &copy; Todos Derechos Reservados</span>
                </div>
            </div>
            <!-- #Footer -->
        </aside>
        <!-- #END# Left Sidebar -->
    </section>

    <section class="content">
        <div class="container-fluid">
                <div class="page-header">
                    <h1 class="all-tittles">


                        <?php

                        if (isset($_SESSION)) {
                            $sexo = $_SESSION["sexoT"];
                            if ($sexo == 'masculino') {
                                echo 'Bienvenido ';
                            } else {
                                if ($sexo == 'femenino') {

                                    echo 'Bienvenida ';
                                }
                            }
                        }
                        ?>

                        <small><?php if (isset($_SESSION)) {

                                    $nomb = $_SESSION["nombresT"];
                                    $ape = $_SESSION["apellidosT"];
                                    echo $nomb;
                                    echo " " . $ape;
                                }

                                ?></small></h1>
                    <!--dependiendo del usuario asi seria el msj de bienvenidad -->

                </div>

            </div>
            <!-- validacion por genero -->
            <div class="body">
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <img src="images/imag-escuela/escuela.jpg" width="1000" height="1000" alt="" />
                        </div>
                        <div class="item">
                            <img src="images/imag-escuela/img1.jpg" width="1000" height="1000" alt="" />
                        </div>
                        <div class="item">
                            <img src="images/imag-escuela/img2.jpg" width="1000" height="1000" alt="" />
                        </div>
                        <div class="item">
                            <img src="images/imag-escuela/img3.jpg" width="1000" height="1000" alt="" />
                        </div>
                        <div class="item">
                            <img src="images/imag-escuela/img4.jpg" width="1000" height="1000" alt="" />
                        </div>
                        <div class="item">
                            <img src="images/imag-escuela/img5.jpg" width="1000" height="1000" alt="" />
                        </div>
                        <div class="item">
                            <img src="images/imag-escuela/img6.jpg" width="900" height="800" alt="" />
                        </div>
                    </div>

                    <!-- Controls -->
                    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Anterior</span>
                    </a>
                    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Siguiente</span>
                    </a>
                </div>
            </div>
            <hr class="sidebar-divider d-none d-md-block">
        </div>
    </section>

    <!-- Jquery Core Js -->
    <script src="plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Select Plugin Js -->
    <script src="plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="plugins/node-waves/waves.js"></script>

    <!-- Custom Js -->
    <script src="js/admin.js"></script>
    <script src="js/pages/ui/animations.js"></script>
    <!-- Demo Js  -->
    <script src="js/demo.js"></script>
</body>

<!-- Modal -->
<div class="modal fade" id="ModalCuenta" tabindex="-2" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-blue">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" title="Cerrar">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h5 class="modal-title" id="exampleModalLabel">Modificar Usuario</h5>
            </div>

            <div class="modal-body">
                <div class="demo-masked-input">
                    <div class="row clearfix">
                        <form id="sign_up" method="POST" id="frmsicacecsj" name="frmsicacecsj">
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="material-icons">person</i>
                                </span>
                                <div class="form-line">
                                    <input type="text" class="form-control" name="nombres" placeholder="Nombre de Usuario" required autofocus>
                                </div>
                            </div>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="material-icons">email</i>
                                </span>
                                <div class="form-line">
                                    <input type="email" class="form-control" name="email" placeholder="Dirección de correo electrónico" required>
                                </div>
                            </div>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="material-icons">lock</i>
                                </span>
                                <div class="form-line">
                                    <input type="password" class="form-control" name="clave" minlength="6" placeholder="Contraseña" required>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <hr class="sidebar-divider d-none d-md-block">
            <div class="modal-footer">
                <button type="button" class="btn btn-primary"><i class="material-icons">save</i>Guardar</button>
                <button type="button" class="btn btn-secondary"><i class="material-icons">cancel</i>Cancelar</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="material-icons">close</i>Cerrar</button>
            </div>
        </div>
    </div>
    <script src="../js/pages/examples/sign-up.js"></script>
</div>

<!-- Modal Cerrar Sesion -->
<div class="modal fade" id="ModalCerrar" tabindex="-2" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-blue">
                <h5 class="modal-title" id="exampleModalLabel">¿Listo para salir?
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button></h5>

            </div>
            <div class="modal-body">
                <div class="envolcentro">
                    <img src="images/warning.png" />
                    <hr class="sidebar-divider d-none d-md-block">
                    Seleccione "Cerrar sesión" a continuación si está listo para finalizar su sesión actual.
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <li onClick="Salir()" data-placement="bottom" class="btn btn-primary">Cerrar sesión</li>
            </div>
        </div>
    </div>
</div>

</html>