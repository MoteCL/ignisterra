<?php include("template/header.php"); ?>
<body class="voyager">

<div id="voyager-loader">
  <?php echo base_url('assets/img/logo-icon.png'); ?>
    <img src="<?php echo base_url('assets/img/logo-icon.png'); ?>" alt="Voyager Loader">
</div>


<div class="app-container expanded">
    <div class="fadetoblack visible-xs"></div>
    <div class="row content-container">
      <nav class="navbar navbar-default navbar-fixed-top navbar-top">
      <div class="container-fluid">
      <div class="navbar-header">
          <button class="hamburger btn-link is-active">
          <span class="hamburger-inner"></span>
          </button>
          <ol class="breadcrumb hidden-xs">
            <li class="">
              <i class="voyager-home"></i>
                 <a href="<?php echo base_url('index.php/main/index'); ?>"  target="_self" style="color:">Panel</a>
            </li>

            <li class="active">
              Listado
            </li>
          </ol>
      </div>
      <?php include('template/nav-top.php'); ?>
    </div>
    </nav>
        <div class="side-menu sidebar-inverse">
    <nav class="navbar navbar-default" role="navigation">
        <div class="side-menu-container">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">
                    <div class="logo-icon-container">
                    <img src="<?php echo base_url('assets/img/logo-icon-light.png'); ?>" alt="Logo Icon">
                                            </div>
                    <div class="title">Bienvenido</div>
                </a>
            </div><!-- .navbar-header -->

            <div class="panel widget center bgimage"
                 style="background-image:url(assets/img/bg.jpg); background-size: cover; background-position: 0px;">
                <div class="dimmer"></div>
                <div class="panel-content">
                    <img src="<?php echo base_url('assets/img/default.png'); ?>" class="avatar" alt="Admin Web avatar">
                    <h4><?php echo $Nombre ?> </h4>


                    <a href="#" class="btn btn-primary">Perfil</a>
                    <div style="clear:both"></div>
                </div>
            </div>

        </div>
        <?php
        switch ($Tipo) {
            case 1:
                include('template/nav-user.php');
              break;
            case 2:
                include('template/nav-sup.php');
                break;
            case 3:
                include('template/nav-enc.php');
                break;
            case 4:
                include('template/nav-adm.php');
              break;

        }
        ?>
    </nav>
</div>
          <div class="container-fluid">
            <div class="side-body padding-top">
                    <div class="container-fluid">
        <h1 class="page-title">
            <i class="voyager-news"></i> Listado de Solicitud de acuerdo a su Area
        </h1>

                                                    </div>
                <div id="voyager-notifications"></div>
                    <div class="page-content browse container-fluid">
        <div class="alerts"><?php include("template/msg.php"); ?></div>
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-bordered">
                    <div class="panel-body">
                        <div class="table-responsive">
                          <table id="dt_cliente" class="table table-hover dataTable">
                            <thead>
                                      <tr>
                                          <th>Orden</th>
                                          <th>NroSolicitud</th>
                                          <th>Maquina</th>


                                      </tr>
                                  </thead>
                                  <tbody>

                                  </tbody>
                          </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


            </div>
        </div>


    </div>
</div>


<footer class="app-footer">
    <div class="site-footer-right">
                    Made with <i class="voyager-heart"></i>
                                    - v1.1.0
            </div>
</footer>

<!-- Javascript Libs -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo base_url('assets/vendor/tcg/voyager/assets/js/app.js'); ?>"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.16/datatables.min.js"></script>
<script>
   $(document).on("ready", function() {

       listar();
       mostrar_mensaje();

   });
  var listar = function() {
           var table = $("#dt_cliente").DataTable({
               "destroy": true,
               "ajax": {
                   "method": "POST",
                   "url": "<?php echo base_url() ?>index.php/mantencion/getArea"
               },
               "columns": [
               {
                   "data": "orden",
                   "searchable": false,
                   "sortable": false
               },  {
                   "data": "NroSolicitud"
               }, {
                   "data": "maquina",
                   "searchable": false,
                   "sortable": false
               }],

               "language": idioma_espanol
           });

       }





   var mostrar_mensaje = function() {
       $(".mensaje").fadeOut(4000, function() {
           $(this).html("");
           $(this).fadeIn(1000);
       });
   }
    var idioma_espanol = {    
           "sProcessing":      "Procesando...",
               "sLengthMenu":      "Mostrar _MENU_ registros",
               "sZeroRecords":     "No se encontraron resultados",
               "sEmptyTable":      "Ningún dato disponible en esta tabla",
               "sInfo":            "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
               "sInfoEmpty":       "Mostrando registros del 0 al 0 de un total de 0 registros",
               "sInfoFiltered":    "(filtrado de un total de _MAX_ registros)",
               "sInfoPostFix":     "",
               "sSearch":          "Buscar:",
               "sUrl":             "",
               "sInfoThousands":   ",",
               "sLoadingRecords": "Cargando...",
               "oPaginate": {        
               "sFirst":     "Primero",
                       "sLast":      "Último",
                       "sNext":      "Siguiente",
                       "sPrevious": "Anterior"    
           },
               "oAria": {        
               "sSortAscending":   ": Activar para ordenar la columna de manera ascendente",
                       "sSortDescending": ": Activar para ordenar la columna de manera descendente"    
           }
       }
</script>




<!--

<script>
$(function(){
  showArea();
  function showArea(){
    $.ajax({
      type:'ajax',
       url: '<?php echo base_url() ?>index.php/mantencion/getArea',
       async: false,
       dataType: 'json',
       success:function(data){
         alert(data);
       },
       error : function(){
         alert('ERROR DB');
       }
    });
  }
});
</script> -->



</body>
</html>
