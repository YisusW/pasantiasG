<?php
session_start();

if(isset($_SESSION['id_perfil'])){
$id_perfil=$_SESSION['id_perfil'];
$nombre_perfil=$_SESSION['nombre_perfil'];
$nombre_organizacion =  $_SESSION['nombre_instituto'];
$nombre_persona = $_SESSION['persona'];
$ID_INSTITUCION=$_SESSION['ID_INSTITUCION'];

}else { 
$id_perfil=1;
$nombre_perfil="Menu Principal";
}
?>

<!DOCTYPE html>
<!-- saved from url=(0066)http://vadikom.github.io/smartmenus/src/demo/bootstrap-navbar.html -->
<html lang="en"><head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Estudiante</title>


  
 <!--   Mensajes-->

    <link rel="stylesheet" href="../js/dist/css/amaran.min.css">
    <link rel="stylesheet" href="../js/dist/css/animate.min.css">
   
   <!--  FIN  Mensajes-->
      <!--    MENU CUERPO-->
  <link rel="stylesheet" href="../../../Menus/bootstrap/css/bootstrap.css">
  <link rel="stylesheet" href="../../../Menus/bootstrap/css/bootstrap.min22.css">
  <link rel="stylesheet" href="../../../Menus/bootstrap/css/bootstrap-theme.css">
  <link rel="stylesheet" href="../../../Menus/bootstrap/css/bootstrap-theme.min.css">
  <link rel="stylesheet" href="../../../Menus/bootstrap/css/bootstrap-responsive.css">
  <link rel="stylesheet" href="../../../Menus/bootstrap/css/sticky-footer-navbar.css">
  <link rel="stylesheet" href="../../../Menus/bootstrap/bootstrap-menu/dist/css/bootstrap-submenu.min.css">
  <link rel="stylesheet" href="../../../Menus/bootstrap/bootstrap-menu/dist/css/docs.css">

  <!-- Bootstrap JS -->
<script src="../../../Menus/bootstrap/js/jquery-1.11.3.min.js" ></script>
 
  <script src="../../../Menus/bootstrap/bootstrap-menu/dist/js/bootstrap.js" defer=""></script>
  <script src="../../../Menus/bootstrap/bootstrap-menu/dist/js/highlight.min.js" defer=""></script>
  <script src="../../../Menus/bootstrap/bootstrap-menu/dist/js/bootstrap-submenu.js" defer=""></script>
  <script src="../../../Menus/bootstrap/bootstrap-menu/dist/js/docs.js" defer=""></script>

  
        <link rel="stylesheet" href="../../Modulo_Estado/js/sweetalert-master/lib/sweet-alert.css">
   <script type="text/javascript" src="../../Modulo_Estado/js/sweetalert-master/lib/sweet-alert.js"></script>
   <script type="text/javascript" src="../../Modulo_Estado/js/sweetalert-master/lib/sweet-alert.min.js"></script>
  
    <!-- Placed at the end of the document so the pages load faster -->
 
    <link rel="stylesheet" href="../js/dist/css/amaran.min.css">
    <link rel="stylesheet" href="../js/dist/css/animate.min.css">


  </head>

  <body style="padding-top: 20px;">

    
<!--inicio del menu -->

<?php



include("../../../BASE_DATOS/Conect.php");
$conexionBD = new Conexion();
$conexionBD->Conectar();
include("../../Modulo_Usuario/modelo/mod_usuario.php");
$persona= new usuarios();

    if($id_perfil== 1){
      $persona->menu($id_perfil , $nombre_perfil , '','' );
    }
    else
    {
      $persona->menu($id_perfil , $nombre_perfil , $nombre_organizacion ,$nombre_persona );
    }


?>


<input type="hidden" id="codigo_estudiante" value="<?php echo $_SESSION['codigo_estudiante'] ?>">
<!-- Fin De MENU-->
<div align="center"> 
  <div style="width:90%">
        <table class="table table-bordered"  >
          <tr class="well">
            <td><h4 align="center"> Organizaciones</h4></td>
          </tr>
        </table>

        <div class="tabbable" id="superdiv" style="margin-bottom: 18px;">
          <ul class="nav nav-tabs" id="pestana"></ul>

          <div class="tab-content"  style="padding-bottom: 9px; border-bottom: 1px solid #ddd;">

          </div>
        </div>
  </div>
</div>



<div id="Modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" align="center">Información de la Solicitud </h4>
        </div>
        <div class="modal-body" >
          <div id="info"></div>
        
                            

                    
                        
        </div>             
      </div>
    </div>
</div>




<div align="center">
    <div style="width:80%">
          
    </div>
</div>



  <!-- Estilo De Selects Very Good -->

<link rel="stylesheet" href="../../../Menus/bootstrap/bootstrap-select/css/jquery.selectBoxIt.css">
<script src="../../../Menus/bootstrap/bootstrap-select/js/jquery-ui-1.8.23.custom.min.js" defer=""></script> 
<script src="../../../Menus/bootstrap/bootstrap-select/js/jquery.selectBoxIt.min.js" defer=""></script>

  <!-- Estilo De Selects Very Good -->
    
      
    <script src="../../Modulo_tipoOrganizacion/js/js_tabla/media/js/jquery.dataTables.min.js"></script>
    <script src="../../Modulo_tipoOrganizacion/js/js_tabla/media/js/dataTables.bootstrap.min.js"></script> 
    <script src="../../Modulo_tipoOrganizacion/js/js_tabla/media/js/dataTables.responsive.min.js"></script> 
    <script src="../../Modulo_tipoOrganizacion/js/js_tabla/media/js/responsive.bootstrap.min.js"></script> 

    <link rel="stylesheet" href="../../../Menus/bootstrap/css/selectBien.css">
    <link href="../../Modulo_tipoOrganizacion/js/js_tabla/media/css/jquery.dataTables_themeroller.css" rel="stylesheet">
    <link href="../../Modulo_tipoOrganizacion/js/js_tabla/media/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="../../Modulo_tipoOrganizacion/js/js_tabla/media/css/responsive.bootstrap.min.css" rel="stylesheet"> 

    <script src="../js/dist/js/jquery.amaran.min.js"></script>
    <script src="../js/dist/js/jquery.amaran.js"></script>

    <script type="text/javascript" src="../js/MisSolicitudes.js"></script>
</body></html>