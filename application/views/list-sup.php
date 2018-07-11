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
                                <a href="<?php echo base_url('index.php/main/index'); ?>" target="_self" style="color:">Panel</a>
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
                        </div>
                        <!-- .navbar-header -->

                        <div class="panel widget center bgimage" style="background-image:url(assets/img/bg.jpg); background-size: cover; background-position: 0px;">
                            <div class="dimmer"></div>
                            <div class="panel-content">
                                <img src="<?php echo base_url('assets/img/default.png'); ?>" class="avatar" alt="Admin Web avatar">
                                <h4>
                                    <?php echo $Nombre ?> </h4>


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
                        ?>
                        <ul class="nav navbar-nav">
                            <li class="">
                                <a href="<?php echo base_url('index.php/main/index'); ?>" target="_self" style="color:">
                        <span class="icon voyager-documentation"></span> <span class="title">Panel de Control</span> </a>
                            </li>
                            <li class="">
                                <a href="<?php echo base_url('index.php/mantencion/landingPage'); ?>" target="_self" style="color:"> <span class="icon voyager-tag"></span> <span class="title">Solicitar Mant.<span>
                                </a>
                            </li>
                            <li class="active">
                                <a href="<?php echo base_url('index.php/mantencion/listByArea'); ?>" target="_self" style="color:"> <span class="icon voyager-list"></span> <span class="title">List Solicitud<span>
                                </a>
                            </li>
                        </ul>


                        <?php
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
                        <div class="alerts">
                            <?php include("template/msg.php"); ?>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="panel panel-bordered">
                                    <div class="panel-body">
                                        <div class="table-responsive">
                                            <table id="tbl_personal" class="table table-hover dataTable">
                                                <thead>
                                                    <tr>
                                                        <th>NroSolicitud</th>
                                                        <th>Fecha</th>
                                                        <th>Maquina</th>
                                                        <th>Solicitante</th>
                                                        <th>Urgente</th>
                                                        <th>Cambiar estado</th>
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                    <?php if ($datos): ?>
                                                    <?php foreach ($datos as $dato): ?>
                                                    <?php if ($dato->urgente == 'SI'): ?>
                                                      <tr class="danger">

                                                          <td>
                                                              <?php echo $dato-> NroSolicitud; ?>
                                                          </td>
                                                          <td>
                                                              <?php echo date('j M Y',strtotime($dato-> fechasolicitud)); ?>
                                                          </td>
                                                          <td>
                                                              <?php echo $dato-> maquina; ?>
                                                          </td>
                                                          <td>
                                                              <?php echo $dato-> Nombre; ?>
                                                          </td>
                                                          <td>
                                                              <?php echo $dato-> urgente; ?>
                                                          </td>
                                                          <td>
                                                          <a href="<?php echo base_url( '/index.php/mantencion/editarUrgente/'.$dato->NroSolicitud); ?>" class="btn btn-warning" disabled>
                                                          <i class="icon voyager-edit">Editar </i></a>

                                                          </td>
                                                      </tr>
                                                      <?php else: ?>
                                                        <tr>

                                                            <td>
                                                                <?php echo $dato-> NroSolicitud; ?>
                                                            </td>
                                                            <td>
                                                                  <?php echo date('j M Y',strtotime($dato-> fechasolicitud)); ?>
                                                            </td>
                                                            <td>
                                                                <?php echo $dato-> maquina; ?>
                                                            </td>
                                                            <td>
                                                                <?php echo $dato-> Nombre; ?>
                                                            </td>
                                                            <td>
                                                                <?php echo $dato-> urgente; ?>
                                                            </td>
                                                            <td>

                                                            <a href="<?php echo base_url( '/index.php/mantencion/editarUrgente/'.$dato->NroSolicitud); ?>" class="btn btn-success" >
                                                            <i class="icon voyager-edit">Editar </i></a>
                                                            </td>
                                                        </tr>
                                                    <?php endif; ?>
                                                    <?php endforeach; ?>

                                                    <?php endif; ?>

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
            Made with <i class="voyager-heart"></i> - v1.1.0
        </div>
    </footer>

    <!-- Javascript Libs -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/vendor/tcg/voyager/assets/js/app.js'); ?>"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.16/datatables.min.js"></script>
    <script>
    $(document).ready(function(){
     $('#tbl_personal').DataTable({
    "order": [
                [0, "desc"]
            ],

    "language": idioma_espanol
    });
      mostrar_mensaje();
    });
    var mostrar_mensaje = function() {
        $(".mensaje").fadeOut(5000, function() {
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


</body>

</html>
