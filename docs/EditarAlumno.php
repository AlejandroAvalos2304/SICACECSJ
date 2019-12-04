<script language="javascript">
    function alertaError() {
        alertify.error("<p>Campos sin llenar</p>" + "<img src='../images/error.png'>").dismissOthers();
    }

    function alertaExito() {
        alertify.success("<p>Se ha modificado correctamente</p>" + "<img src='../images/bien.png'>").set({
            transition: 'flipx'
        });

    }

    function r() {
        location.href = ("../docs/alumno.php");
    }
</script>

<!-- include alertify.css -->
<link rel="stylesheet" href="../alertas/build/css/alertify.css">

<!-- include boostrap theme  -->
<link rel="stylesheet" href="../alertas/build/css/themes/bootstrap.css">

<!-- include alertify script -->
<script src="../alertas/build/alertify.js"></script>

<script type="text/javascript">
    //override defaults
    alertify.defaults.transition = "slide";
    alertify.defaults.theme.ok = "btn btn-primary";
    alertify.defaults.theme.cancel = "btn btn-secondary";
    alertify.defaults.theme.input = "form-control";
</script>

<?php
session_start();
include_once('../config/conexion.php');


if (isset($_POST['editar'])) {
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $rid = $_GET['rid'];
    $rcarnet = $_POST['rcarnet'];
    $rnombres = $_POST['rnombres'];
    $rapellidos = $_POST['rapellidos'];
    $rnacionalidad = $_POST['rnacionalidad'];
    $rdeptonac = $_POST['rdeptonac'];
    $rmunnac = $_POST['rmunnac'];
    $rdireccion = $_POST['rdireccion'];
    $remail = $_POST['remail'];
    $genero =$_POST['generoed'];
    $rfnacimiento = $_POST['rfnacimiento'];
    $rtelefono = $_POST['rtelefono'];
    $rlugarnacimiento = $_POST['rlugarnacimiento'];
    $restadoa = 1;
    $restadocivil = $_POST['restadocivil'];
    $rtipocalle = $_POST['rtipocalle'];
    $rzona = $_POST['rzona'];

    $rmediotrans = $_POST['rmediotrans'];
    $rdistancia = $_POST['rdistancia'];
    $rfactorriesgo = $_POST['rfactorriesgo'];
    $rtrabaja = $_POST['rtrabaja'];
    $rdependenciaeco = $_POST['rdependenciaeco'];
    
    $rtarjetavacunas = $_POST['rtarjetavacunas'];
    $resquemavacunas = $_POST['resquemavacunas'];
    $renfdis = $_POST['renfdis'];
    $rpremed = $_POST['rpremed'];

    $rnombresp = $_POST['rnombresp'];
    $rapellidosp = $_POST['rapellidosp'];
    $rnacionalidadp = $_POST['rnacionalidadp'];
    $rdeptonacp = $_POST['rdeptonacp'];
    $rlugarnacimientop = $_POST['rlugarnacimientop'];
    $rgenerop = $_POST['rgenerop'];
    $restadofamiliarp = $_POST['restadofamiliarp'];
    $rgraestp = $_POST['rgraestp'];
    $rprofp = $_POST['rprofp'];
    $rdireccionp = $_POST['rdireccionp'];
    $rtelefonop = $_POST['rtelefonop'];
    $remailp = $_POST['remailp'];
    $rlugartrap = $_POST['rlugartrap'];
    $rfnacimientop = $_POST['rfnacimientop'];
    $rduip = $_POST['rduip'];
    $rnitp = $_POST['rnitp'];
    $rzonap = $_POST['rzonap'];

    $rduim = $_POST['rduim'];
    $rnitm = $_POST['rnitm'];
    $rnombresm = $_POST['rnombresm'];
    $rapellidosm = $_POST['rapellidosm'];
    $rfnacimientom = $_POST['rfnacimientom'];
    $rnacionalidadm = $_POST['rnacionalidadm'];
    $rlugarnacimientom = $_POST['rlugarnacimientom'];
    $rdeptonacm = $_POST['rdeptonacm'];
    $rzonam = $_POST['rzonam'];
    $rgenerom = $_POST['rgenerom'];
    $restadofamiliarm = $_POST['restadofamiliarm'];
    $rgraestm = $_POST['rgraestm'];
    $rprofm = $_POST['rprofm'];
    $rdireccionm = $_POST['rdireccionm'];
    $rtelefonom = $_POST['rtelefonom'];
    $remailm = $_POST['remailm'];
    $rlugartram = $_POST['rlugartram'];
    
    pg_query("BEGIN");

    $result = pg_query($conexion, "UPDATE alumnos SET nombrea=trim('$rnombres'), apellidoa=trim('$rapellidos'), nacionalidada=trim('$rnacionalidad'), 
    deptonaca='$rdeptonac', munnaca=trim('$rmunnac'), direcciona=trim('$rdireccion'), email=trim('$remail'), generoa=trim('$genero'),
     fnacimientoa='$rfnacimiento', telefonoa=trim('$rtelefono'), lugarnacimientoa=trim('$rlugarnacimiento'), estadoa='$restadoa', estadocivila=trim('$restadocivil'), tipocallea=trim('$rtipocalle'),
     zonaa=trim('$rzona'), mediotransa=trim('$rmediotrans'), distanciaa=trim('$rdistancia'), factorriesgoa=trim('$rfactorriesgo'), trabajaa=trim('$rtrabaja'),
     dependenciaecoa=trim('$rdependenciaeco'), tarjetavacunasa=trim('$rtarjetavacunas'), esquemavacunasa=trim('$resquemavacunas'), enfdisa=trim('$renfdis'),
     premeda=trim('$rpremed'), nombresp=trim('$rnombresp'), apellidosp=trim('$rapellidosp'), nacionalidadp=trim('$rnacionalidadp'), deptonacp='$rdeptonacp',
     lugarnacimientop=trim('$rlugarnacimientop'), generop=trim('$rgenerop'), estadofamiliarp=trim('$restadofamiliarp'), graestp=trim('$rgraestp'), profp=trim('$rprofp'),
     direccionp=trim('$rdireccionp'), telefonop=trim('$rtelefonop'), emailp=trim('$remailp'), lugartrap=trim('$rlugartrap'), fnacimientop='$rfnacimientop',
     duip=trim('$rduip'), nitp=trim('$rnitp'), zonap=trim('$rzonap'), duim=trim('$rduim'), nitm=trim('$rnitm'), nombresm=trim('$rnombresm'), apellidosm=trim('$rapellidosm'),
     fnacimientom='$rfnacimientom', nacionalidadm=trim('$rnacionalidadm'), lugarnacimientom=trim('$rlugarnacimientom'), deptonacm=trim('$rdeptonacm'), zonam=trim('$rzonam'),
     generom=trim('$rgenerom'), estadofamiliarm=trim('$restadofamiliarm'), graestm=trim('$rgraestm'), profm=trim('$rprofm'), direccionm=trim('$rdireccionm'), telefonom=trim('$rtelefonom'),
     emailm=trim('$remailm'), lugartram=trim('$rlugartram'), carnet=trim('$rcarnet') WHERE idalum='$rid'");

//Ingresar imagen

if (isset($_FILES["rfoto"]) && $_FILES["rfoto"]["name"][0]) {
    

    if($_FILES["rfoto"]["type"]=="image/jpeg" || $_FILES["rfoto"]["type"]=="image/pjpeg" || $_FILES["rfoto"]["type"]=="image/gif" || $_FILES["rfoto"]["type"]=="image/png")
    {

        $ruta = '../images/foto_estudiantes/' . $rcarnet . '/';
        $archivo = $ruta . $_FILES["rfoto"]["name"];

        if (!file_exists($ruta)) {
            mkdir($ruta);
        }
        if (!file_exists($archivo)) {
            $resultado = @move_uploaded_file($_FILES["rfoto"]["tmp_name"], $archivo);

            if($resultado){
                echo "Foto guardada exitosamente";
            }else{
                echo "Error al guardar la Foto";
            }
        }else{
            echo "El archivo ya existe";
        }

    } else {
        echo "Tipo de archivo no permitido";
    }
    
} else {
    echo "Error al cargar el archivo";
}
//fin de insertar foto
    if (!$result) {
        pg_query("rollback");
        echo "alertaError();";
        echo "<script language='javascript'>";
        echo "setTimeout ('r()', 2000);";
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
    
    }
}
?>