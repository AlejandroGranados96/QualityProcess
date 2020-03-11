<?php 
include("../../model/sesiones.php");
require_once("../../model/funciones.php");
$col=new consul();
$cons_DEMERITOS = $col->cons_DEMERITOS();
//session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
<title>Demeritos</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="Shortcut Icon" type="image/x-icon" href="assets/icons/book.ico" />
    <script src="js/sweet-alert.min.js"></script>
    <link rel="stylesheet" href="view/usuarios/css/sweet-alert.css">
    <link rel="stylesheet" href="view/usuarios/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="view/usuarios/css/normalize.css">
    <link rel="stylesheet" href="view/usuarios/css/bootstrap.min.css">
    <link rel="stylesheet" href="view/usuarios/css/jquery.mCustomScrollbar.css">
    <link rel="stylesheet" href="view/usuarios/css/style.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/jquery-1.11.2.min.js"><\/script>')</script>
    <script src="view/usuarios/js/modernizr.js"></script>
    <script src="view/usuarios/js/bootstrap.min.js"></script>
    <script src="view/usuarios/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="view/usuarios/js/main.js"></script>
</head>
<body>
<div class="navbar-lateral full-reset">
        <div class="visible-xs font-movile-menu mobile-menu-button"></div>
        <div class="full-reset container-menu-movile custom-scroll-containers">
            <div class="logo full-reset all-tittles">
                <i class="visible-xs zmdi zmdi-close pull-left mobile-menu-button" style="line-height: 55px; cursor: pointer; padding: 0 10px; margin-left: 7px;"></i> 
                home de usuario
            </div>
            <div class="full-reset" style="background-color:#2B3D51; padding: 10px 0; color:#fff;">
                <figure>
                    <img src="view/usuarios/assets/img/POLOMEX2.png" alt="Biblioteca" class="img-responsive center-box" style="width:55%;">
                </figure>
                <p class="text-center" style="padding-top: 15px;">Polomex S.A. de C.V.</p>
            </div>
            <div class="full-reset nav-lateral-list-menu">
            <!--///Seccion Inicio/// -->
            <ul class="list-unstyled">
                    <li><a href="inicioUsuario"><i class="zmdi zmdi-home zmdi-hc-fw"></i>&nbsp;&nbsp; Inicio</a></li>
                    <li>
                    <!--///Seccion Demeritos/// -->
                        <div class="dropdown-menu-button"><i class="zmdi zmdi-case zmdi-hc-fw"></i>&nbsp;&nbsp; Demeritos <i class="zmdi zmdi-chevron-down pull-right zmdi-hc-fw"></i></div>
                        <ul class="list-unstyled">
                            <li><a href="CargarDemeritos"><i class="zmdi zmdi-truck zmdi-hc-fw"></i>&nbsp;&nbsp; Alta Demeritos</a></li>
                            <li><a href="ListaDemeritos"><i class="zmdi zmdi-truck zmdi-hc-fw"></i>&nbsp;&nbsp; Consulta Demeritos</a></li>
                            
                        </ul>
                    </li>

                    <!--///Seccion PDF/// -->
                    <li>
                        <div class="dropdown-menu-button"><i class="zmdi zmdi-assignment-o zmdi-hc-fw"></i>&nbsp;&nbsp; Consultas de PDF <i class="zmdi zmdi-chevron-down pull-right zmdi-hc-fw"></i></div>
                        <ul class="list-unstyled">
                        <li><a href="ConsultarPDF_AyudaVisuales"><i class="zmdi zmdi-book zmdi-hc-fw"></i>&nbsp;&nbsp; Ayudas Visuales</a></li>
                            <li><a href="ConsultarPDF_AlertasCalidad"><i class="zmdi zmdi-book zmdi-hc-fw"></i>&nbsp;&nbsp; Alertas de Calidad</a></li>
                            <li><a href="ConsultarPDF_EstandaresCalidad"><i class="zmdi zmdi-book zmdi-hc-fw"></i>&nbsp;&nbsp; Estandares de Calidad</a></li>
                            <li><a href="ConsultarPDF_InstructivoTrabajo"><i class="zmdi zmdi-book zmdi-hc-fw"></i>&nbsp;&nbsp; Instructivo de Trabajo</a></li>
                            <li><a href="ConsultarPDF_ReclamosClientes"><i class="zmdi zmdi-book zmdi-hc-fw"></i>&nbsp;&nbsp; Reclamos de Clientes</a></li>
                           </ul>
                    </li>
                    
                    <!--///Seccion Reportes y Cerrar Sesion/// -->
                    <li><a href="cerrar"><i class="zmdi zmdi-wrench zmdi-hc-fw"></i>&nbsp;&nbsp; Cerrar Sesión</a></li>
                </ul>
            </div>
        </div>
    </div>
    
    <div class="content-page-container full-reset custom-scroll-containers">
        <nav class="navbar-user-top full-reset">
        <ul class="list-unstyled full-reset">
                <li  class="tooltips-general btn-help" data-placement="bottom" title="Ayuda">
                    <i class="zmdi zmdi-help-outline zmdi-hc-fw"></i>
                </li>
                <li class="mobile-menu-button visible-xs" style="float: left !important;">
                    <i class="zmdi zmdi-menu"></i>
                </li>
        </nav>

<!--/////////////////////EMPIEZA CUERPO INTERNO DEL PROYECTO//////////////// -->
        <div class="container">
            <div class="page-header">
              <h1 class="all-tittles">Administracion Demeritos</h1>
            </div>
        </div>

        <div class="container-fluid"  style="margin: 50px 0;">
            <div class="row">
                <div class="col-xs-12 col-sm-4 col-md-3">
                    <img src="view/demeritos/assets/img/book.png" alt="user" class="img-responsive center-box" style="max-width: 110px;">
                </div>
                <div class="col-xs-12 col-sm-8 col-md-8 text-justify lead">
                    Bienvenido a la sección para registrar un nuevo demerito, debes de llenar todos los campos 
                    del siguiente formulario para poder registrarlo en el inventario.
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 lead">
                    <ol class="breadcrumb">
                    <li class="active"><a href="CargarDemeritos">Alta de Demeritos</a></li>
                      <li><a href="ListaDemeritos">Listado de Demeritos</a></li>
                    </ol>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="container-flat-form">
                <div class="title-flat-form title-flat-blue">Agregar demerito al inventario</div>
                <form autocomplete="off" action="insertar_funcion_DEM" method="post">

                    <div class="row">
                       <div class="col-xs-12 col-sm-8 col-sm-offset-2">

                            <div class="group-material">
                                <input name="mes" type="text" class="material-control tooltips-general" placeholder="Mes de alta" required="" maxlength="50" data-toggle="tooltip" data-placement="top" title="Escribe el mes">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>MES</label>
                            </div>

                            <div class="group-material">
                            <?php $fcha = date("d-m-Y");?>
                                <input name="fecha" type="datetime" value="<?php echo $fcha;?>" class="material-control tooltips-general"  required maxlength="50" data-toggle="tooltip" data-placement="top" title="Escribe la fecha"  >
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                
                            </div>

                            <div class="group-material">
                                <input name="No_carroceria" type="text" class="material-control tooltips-general" placeholder="No. de carroceria" required="" maxlength="50" data-toggle="tooltip" data-placement="top" title="Escribe el No. de carroceria">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>CARROCERIA</label>
                            </div>

                            <div class="group-material">
                                <input name="modelo" type="text" class="material-control tooltips-general" placeholder="Modelo demerito" maxlength="50" data-toggle="tooltip" data-placement="top" title="Escribe el Modelo demerito">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>MODELO</label>
                            </div>
                            <div class="group-material">
                                <input name="segmento" type="text" class="material-control tooltips-general" placeholder="Segmento de demerito" required="" maxlength="70" data-toggle="tooltip" data-placement="top" title="Escribe la dirección del proveedor">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>SEGMENTO</label>
                            </div>
                            <div class="group-material">
                                <input name="no_conformidad" type="text" class="material-control tooltips-general" placeholder="No. de conformidad" required="" data-toggle="tooltip" data-placement="top" title="Solo números, mínimo 8 dígitos">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>CONFORMIDAD</label>
                            </div>
                            <div class="group-material">
                                <input name="componente" type="text" class="material-control tooltips-general" placeholder="Componente de demerito" required="" maxlength="50" data-toggle="tooltip" data-placement="top" title="Responsable de atención">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>COMPONENTE</label>
                            </div>

                            <div class="group-material">
                                <input name="complemento" type="text" class="material-control tooltips-general" placeholder="Complemento de demerito" required="" maxlength="50" data-toggle="tooltip" data-placement="top" title="Responsable de atención">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>COMPLEMENTO</label>
                            </div>

                            <p class="text-center">
                                <button type="reset" class="btn btn-info" style="margin-right: 20px;"><i class="zmdi zmdi-roller"></i> &nbsp;&nbsp; Limpiar</button>
                                <button type="submit" class="btn btn-primary" name="insertarr"><i class="zmdi zmdi-floppy"></i> &nbsp;&nbsp; Guardar</button>
                            </p> 
                       </div>
                   </div>
                </form>
            </div>
        </div>

<!--/////////////////////EMPIEZA CUERPO INTERNO DEL PROYECTO//////////////// -->

        <div class="modal fade" tabindex="-1" role="dialog" id="ModalHelp">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title text-center all-tittles">ayuda del sistema</h4>
                </div>
                <div class="modal-body">
                   Bienvenido.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="zmdi zmdi-thumb-up"></i> &nbsp; De acuerdo</button>
                </div>
            </div>
          </div>
        </div>
        <footer class="footer full-reset">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xs-12 col-sm-6">
                        <h4 class="all-tittles">Acerca de</h4>
                        <p>
                         Cualquier aclaración comunicarse al siguiente correo: polomex_admin@polomex.com.mx 
                         </p>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                        <h4 class="all-tittles">Desarrollador</h4>
                        <ul class="list-unstyled">
                            <li><i class="zmdi zmdi-check zmdi-hc-fw"></i>&nbsp; Alejandro Granados <i class="zmdi zmdi-facebook zmdi-hc-fw footer-social"></i><i class="zmdi zmdi-twitter zmdi-hc-fw footer-social"></i></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer-copyright full-reset all-tittles">© 2019 POLOMEX S.A. DE C.V.</div>
        </footer>
    </div>
</body>
</html>