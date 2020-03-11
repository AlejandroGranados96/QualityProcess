<!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Highcharts Example</title>
        
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
<script src="view/usuarios/graficas/code/highcharts.js"></script>
<script src="view/usuarios/graficas/code/modules/exporting.js"></script>

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
                    <li><a href="Graficas"><i class="zmdi zmdi-trending-up zmdi-hc-fw"></i>&nbsp;&nbsp; Reportes y estadísticas</a></li>
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
<?php 
       include ("conexion_graficas.php");
       $link = Conectarse();
       $res = $link->query("SELECT * FROM demeritos");
       ?>       

<div id="container" style="height: 400px"></div>


		<script type="text/javascript">
Highcharts.chart('container', {
    chart: {
        type: 'pie',
        options3d: {
            enabled: true,
            alpha: 45,
            beta: 0
        }
    },
    title: {
        text: 'Alta Demeritos en 2019'
    },
    tooltip: {
        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
    },
    plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            depth: 35,
            dataLabels: {
                enabled: true,
                format: '{point.name}'
            }
        }
    },
    series: [{
        type: 'pie',
        name: 'Total Demeritos',
        data: [
            ['BOXER', 21.0],
            ['Torino', 61.9],
            ['FLDJFIJSO', 1.2],
            ['Seven UP', 1.2],
            ['TI', 1.2]
        ]
    }]
});
		</script>

        <!--/////////////////////TERMINA CUERPO INTERNO DEL PROYECTO//////////////// -->
  <div class="modal fade" tabindex="-1" role="dialog" id="ModalHelp">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title text-center all-tittles">ayuda del sistema</h4>
                </div>
                <div class="modal-body">
                    Se encuentra en la pagina principal. Aqui podra encontrar la informacion necesaria para visualizar la cantidad de actividades junto con su total de contenido por cada seccion.
                     Atte. Administrador
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