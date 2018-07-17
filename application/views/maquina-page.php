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
                                Buscar
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

                        <div class="panel widget center bgimage" style="background-image:url(assets/img/bg.jpg); background-size: cover; background-position: 0px;">
                            <div class="dimmer"></div>
                            <div class="panel-content">
                                <img src="<?php echo base_url('assets/img/default.png'); ?>" class="avatar" alt="Admin Web avatar">
                                <h4>
                                    <?php echo $Nombre ?>
                                </h4>


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
                            <li class="dropdown">
                                <a href="#3-dropdown-element" data-toggle="collapse" aria-expanded="false" target="_self" style="color:"> <span class="icon voyager-search"></span> <span class="title">Buscador</span> </a>
                                <div id="3-dropdown-element" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <ul class="nav navbar-nav">

                                            <li class="">
                                                <a href="<?php echo base_url('index.php/mantencion/buscarView');  ?>" target="_self" style="color:">
                        <span class="icon voyager-search"></span> <span class="title">Buscar Mantencion</span> </a>
                                            </li>
                                            <li class="">
                                                <a href="<?php echo base_url('index.php/seguimiento/entreFechas');?>" target="_self" style="color:">
                        <span class="icon voyager-calendar"></span> <span class="title">Entre fecha</span> </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="dropdown">
                                <a href="#1-dropdown-element" data-toggle="collapse" aria-expanded="false" target="_self" style="color:"> <span class="icon voyager-list"></span> <span class="title">Listado</span> </a>
                                <div id="1-dropdown-element" class="panel-collapse collapse ">
                                    <div class="panel-body">
                                        <ul class="nav navbar-nav">
                                            <li class="">
                                                <a href="<?php echo base_url('index.php/mantencion/listado');  ?>" target="_self" style="color:">
                        <span class="icon voyager-list"></span> <span class="title">Lista de Mantencion</span> </a>
                                            </li>


                                            <li class="">
                                                <a href="<?php echo base_url('index.php/seguimiento/MAN_Seguimiento');  ?>" target="_self" style="color:">
                        <span class="icon voyager-check"></span> <span class="title">List por Ejecutar</span> </a>
                                            </li>


                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="dropdown">
                                <a href="#2-dropdown-element" data-toggle="collapse" aria-expanded="false" target="_self" style="color:"> <span class="icon voyager-file-text"></span> <span class="title">Reportes</span> </a>
                                <div id="2-dropdown-element" class="panel-collapse collapse ">
                                    <div class="panel-body">
                                        <ul class="nav navbar-nav">
                                            <!-- <li class="">
                                                <a href="#" target="_self" style="color:">
                        <span class="icon voyager-list"></span> <span class="title">Desempeño Maquinas</span> </a>
                                            </li>
                                            <li class="">
                                                <a href="<?php echo base_url('index.php/reportes/indice');  ?>" target="_self" style="color:">
                        <span class="icon voyager-check"></span> <span class="title">Indice de cumplimiento</span> </a>
                                            </li>
                                            <li class="">
                                                <a href="#" target="_self" style="color:">
                        <span class="icon voyager-person"></span> <span class="title">Informe horas hombres</span> </a>
                                            </li> -->
                                            <li class="">
                                                <a href="<?php echo base_url('index.php/reportes/historialMaquina');  ?>" target="_self" style="color:">
                        <span class="icon voyager-truck"></span> <span class="title">Historial Maquinas</span> </a>
                                            </li>
                                            <li class="">
                                                <a href="<?php echo base_url('index.php/reportes/historialPersonal');  ?>" target="_self" style="color:">
                        <span class="icon voyager-settings"></span> <span class="title">Informe Tecnicos</span> </a>
                                            </li>
                                            <!-- <li class="">
                                                <a href="#" target="_self" style="color:">
                        <span class="icon voyager-laptop"></span> <span class="title">Programa Mantencion</span> </a>
                                            </li> -->
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="">
                                <a href="<?php echo base_url('index.php/main/otherActivities');  ?>" target="_self" style="color:">
                        <span class="icon voyager-world"></span> <span class="title">Otras actividades</span> </a>
                            </li>
                            <li class="">
                                <a href="<?php echo base_url('index.php/calendario/index');  ?>" target="_self" style="color:">
                        <span class="icon voyager-calendar"></span> <span class="title">Calendarizacion</span> </a>
                            </li>
                            <li class="active">
                                <a href="<?php echo base_url('index.php/maquina/index');  ?>" target="_self" style="color:">
                        <span class="icon fas fa-tachometer-alt"></span> <span class="title">Maquinas</span> </a>
                            </li>

                        </ul>


                        <?php
                            break;
                        case 4:
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
                            <li class="dropdown">
                                <a href="#3-dropdown-element" data-toggle="collapse" aria-expanded="false" target="_self" style="color:"> <span class="icon voyager-search"></span> <span class="title">Buscador</span> </a>
                                <div id="3-dropdown-element" class="panel-collapse collapse" aria-expanded="false">
                                    <div class="panel-body">
                                        <ul class="nav navbar-nav">

                                            <li class="">
                                                <a href="<?php echo base_url('index.php/mantencion/buscarView');  ?>" target="_self" style="color:">
                        <span class="icon voyager-search"></span> <span class="title">Buscar Mantencion</span> </a>
                                            </li>
                                            <li class="">
                                                <a href="<?php echo base_url('index.php/seguimiento/entreFechas');?>" target="_self" style="color:">
                        <span class="icon voyager-calendar"></span> <span class="title">Entre fecha</span> </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="dropdown">
                                <a href="#1-dropdown-element" data-toggle="collapse" aria-expanded="false" target="_self" style="color:"> <span class="icon voyager-list"></span> <span class="title">Listado</span> </a>
                                <div id="1-dropdown-element" class="panel-collapse collapse ">
                                    <div class="panel-body">
                                        <ul class="nav navbar-nav">
                                            <li class="">
                                                <a href="<?php echo base_url('index.php/mantencion/listado');  ?>" target="_self" style="color:">
                        <span class="icon voyager-list"></span> <span class="title">Lista de Mantencion</span> </a>
                                            </li>


                                            <li class="">
                                                <a href="<?php echo base_url('index.php/seguimiento/MAN_Seguimiento');  ?>" target="_self" style="color:">
                        <span class="icon voyager-check"></span> <span class="title">List por Ejecutar</span> </a>
                                            </li>


                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="dropdown">
                                <a href="#2-dropdown-element" data-toggle="collapse" aria-expanded="false" target="_self" style="color:"> <span class="icon voyager-file-text"></span> <span class="title">Reportes</span> </a>
                                <div id="2-dropdown-element" class="panel-collapse collapse ">
                                    <div class="panel-body">
                                        <ul class="nav navbar-nav">
                                            <li class="">
                                                <a href="#" target="_self" style="color:">
                        <span class="icon voyager-list"></span> <span class="title">Desemnio Maquinas</span> </a>
                                            </li>
                                            <li class="">
                                                <a href="<?php echo base_url('index.php/reportes/indice');  ?>" target="_self" style="color:">
                        <span class="icon voyager-check"></span> <span class="title">Indice de cumplimiento</span> </a>
                                            </li>
                                            <li class="">
                                                <a href="#" target="_self" style="color:">
                        <span class="icon voyager-person"></span> <span class="title">Informe horas hombres</span> </a>
                                            </li>
                                            <li class="">
                                                <a href="<?php echo base_url('index.php/reportes/historialMaquina');  ?>" target="_self" style="color:">
                        <span class="icon voyager-truck"></span> <span class="title">Historial Maquinas</span> </a>
                                            </li>
                                            <li class="">
                                                <a href="<?php echo base_url('index.php/reportes/historialPersonal');  ?>" target="_self" style="color:">
                        <span class="icon voyager-settings"></span> <span class="title">Informe Tecnicos</span> </a>
                                            </li>
                                            <li class="">
                                                <a href="#" target="_self" style="color:">
                        <span class="icon voyager-laptop"></span> <span class="title">Programa Mantencion</span> </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="">
                                <a href="<?php echo base_url('index.php/main/otherActivities');  ?>" target="_self" style="color:">
                        <span class="icon voyager-world"></span> <span class="title">Otras actividades</span> </a>
                            </li>
                            <li class="">
                                <a href="<?php echo base_url('index.php/calendario/index');  ?>" target="_self" style="color:">
                        <span class="icon voyager-calendar"></span> <span class="title">Calendarizacion</span> </a>
                            </li>
                            <li class="active">
                                <a href="<?php echo base_url('index.php/maquina/index');  ?>" target="_self" style="color:">
                        <span class="icon fas fa-tachometer-alt"></span> <span class="title">Maquinas</span> </a>
                            </li>
                            <li class="">
                                <a href="<?php echo base_url('index.php/main/configEmail'); ?>" target="_self" style="color:">
                                  <span class="icon voyager-mail"></span> <span class="title">Config Email<span>
                                </a>
                            </li>
                            <li class="">
                                <a href="<?php echo base_url('index.php/main/listPersonal'); ?>" target="_self" style="color:">
                                  <span class="icon fas fa-user-secret"></span> <span class="title">Privacidad<span>
                                </a>
                            </li>
                        </ul>


                        <?php
                          break;

                    }
                    ?>
                </nav>
            </div>
            <div class="container-fluid">
                <div class="side-body padding-top">
                    <div class="container-fluid">
                        <h1 class="page-title">
                            <i class="fas fa-tachometer-alt"></i> Listado de Maquinas
                        </h1>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                          <span class="far fa-plus-square"></span>&nbsp;
                          Nueva Maquina
                        </button>

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
                                                        <th>Id</th>
                                                        <th>CodigoMaquina</th>
                                                        <th>Maquina</th>
                                                        <th>Centro Costo</th>
                                                        <th>Horometro</th>
                                                        <th></th>
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                    <?php if ($maquinas): ?>
                                                    <?php foreach ($maquinas as $maquina): ?>

                                                        <tr>

                                                            <td>
                                                                <?php echo $maquina-> id; ?>
                                                            </td>
                                                            <td>
                                                                <?php echo $maquina-> CodMaquina; ?>
                                                            </td>
                                                            <td>
                                                                <?php echo $maquina-> Maquina; ?>
                                                            </td>
                                                            <td>
                                                                <?php echo $maquina-> DescArea; ?>
                                                            </td>
                                                            <td>
                                                                <?php echo $maquina-> Horometro; ?>
                                                            </td>
                                                            <td>

                                                            <a href="<?php echo base_url( '/index.php/mantencion/editarUrgente/'.$maquina->id); ?>"  class="badge badge-success" >
                                                            <i class="icon voyager-edit">Editar </i></a>
                                                            </td>
                                                        </tr>

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

    <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">  <span class="voyager-truck"></span>&nbsp;Nueva Maquina </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="container-fluid">
      <div class="row">
        <div class="col-md-3">Nombre Maquina</div>
        <div class="col-md-6 ml-auto">
          <input type="text" name="" value="" class="form-control">
        </div>
      </div>
      <div class="row">
        <div class="col-md-3">Area</div>
        <div class="col-md-6 ml-auto">
          <select class="form-control" id="id_maquinaria" name="" tabindex="-1" >
                <?php if ($areas) foreach ($areas as $area) { ?>
                <option  value="<?php echo $area-> CodArea ?>">  <?php echo $area-> DescArea ?></option>
                <?php }?>
          </select>
        </div>
      </div>
      <div class="row">
        <div class="col-md-3">Horometro</div>
        <div class="col-md-7 ml-auto">
          <div class="custom-control custom-radio custom-control-inline">
          <input type="radio" name="customRadioInline1" class="custom-control-input">
          <label class="custom-control-label">Si</label>
        </div>
        <div class="custom-control custom-radio custom-control-inline">
          <input type="radio" name="customRadioInline1" class="custom-control-input">
          <label class="custom-control-label">No</label>
        </div>
        </div>
      </div>
    </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Salir</button>
        <button type="button" class="btn btn-success">Ingresar Maquina</button>
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
                [0, "asc"]
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
