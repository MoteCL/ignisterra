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
                            <li class="">
                              <i class="voyager-list"></i>
                                <a href="<?php echo base_url('index.php/mantencion/listado'); ?>" target="_self" style="color:">Listado</a>
                            </li>
                            <li class="active">
                                Resultado
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
                include('template/nav-sup.php');
                break;
            case 3:
                include('template/nav-enc.php');
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
                    <div id="3-dropdown-element" class="panel-collapse collapse " >
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
                    <a href="#1-dropdown-element" data-toggle="collapse" aria-expanded="true" target="_self" style="color:"> <span class="icon voyager-list"></span> <span class="title">Listado</span> </a>
                    <div id="1-dropdown-element" class="panel-collapse collapse in" aria-expanded="true">
                        <div class="panel-body">
                            <ul class="nav navbar-nav">
                                <li class="active">
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
            <span class="icon voyager-list"></span> <span class="title">Desemnio Maquinas</span> </a>
                                </li> -->
                                <!-- <li class="">
                                    <a href="<?php echo base_url('index.php/reportes/indice');  ?>" target="_self" style="color:">
            <span class="icon voyager-check"></span> <span class="title">Indice de cumplimiento</span> </a>
                                </li> -->
                                <!-- <li class="">
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
                            <i class="voyager-search"></i> Busqueda Avanzada
                        </h1>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                        <span class="fas fa-search-plus"></span>&nbsp;
                        Busqueda Avazanda
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
                                      <?php if ($datos): ?>
                                        <div class="table-responsive">
                                            <table id="tbl_personal" class="table table-hover dataTable">
                                                <thead>
                                                    <tr>
                                                        <th>Orden</th>
                                                        <th>NroSolicitud</th>
                                                        <th>Maquina</th>
                                                        <th>Tipo</th>
                                                        <th>Tipo de Trabajo</th>
                                                        <th>Fecha</th>
                                                        <th>Estado</th>
                                                        <th>Urgente</th>


                                                    </tr>
                                                </thead>
                                                <tbody>

                                                    <?php foreach ($datos as $dato): ?>
                                                      <tr>
                                                        <td>
                                                          <?php echo $dato-> orden ?>
                                                        </td>
                                                        <td>
                                                          <?php echo $dato-> NroSolicitud ?>
                                                        </td>
                                                        <td>
                                                          <?php echo $dato-> maquina ?>
                                                        </td>
                                                        <td>
                                                          <?php echo $dato-> tipomantencion ?>
                                                        </td>
                                                        <td>
                                                          <?php echo $dato-> tipotrabajo ?>
                                                        </td>
                                                        <td>
                                                          <?php echo $dato-> fechasolicitud ?>
                                                        </td>
                                                        <td>
                                                          <?php echo $dato-> estado ?>
                                                        </td>
                                                        <td>
                                                          <?php echo $dato-> urgente ?>
                                                        </td>
                                                      </tr>
                                                    <?php endforeach; ?>

                                                </tbody>
                                            </table>
                                        </div>
                                        <?php else: ?>
                                          <h2>**** NO DATA ****</h2>
                                          <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalCenterTitle">Busqueda Avanzada</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <?php echo form_open('reportes/advancedSearch'); ?>
                                        <div class="form-group col-md-12">
                                            <h5>Fecha</h5>
                                            <div class="form-group">
                                                <label for="recipient-name" class="col-form-label">Desde:</label>
                                                <input type="date" name="desde" class="form-control">
                                            </div>
                                              <?php echo form_error('desde','<div class="text-danger">','</div>') ?>
                                            <div class="form-group">
                                                <label for="recipient-name" class="col-form-label">Hasta:</label>
                                                <input type="date" name="hasta" class="form-control">
                                            </div>
                                            <?php echo form_error('hasta','<div class="text-danger">','</div>') ?>
                                        </div>

                                        <div class="form-group col-md-12">
                                            <h5>Urgente</h5>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" name="urgente" >
                                                <label class="custom-control-label" >Urgente  </label>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-12">
                                            <h5>Tipo Mantencion :</h5>
                                            <input class="form-check-input" name="tipomantencion" value="Correctiva" type="radio">
                                            <label class="form-check-label">Correctiva</label>
                                            <input class="form-check-input" name="tipomantencion" value="Mejora" type="radio">
                                            <label class="form-check-label">Mejora</label>
                                            <input class="form-check-input" name="tipomantencion" value="Preventiva" type="radio">
                                            <label class="form-check-label">Preventiva</label>
                                        </div>

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Salir</button>
                                      <?php echo form_submit(['name'=>'submit','value'=>'Buscar','class'=>'btn btn-primary']); ?>
                                </div>
                                  <?php echo form_close(); ?>
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

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/vendor/tcg/voyager/assets/js/app.js'); ?>"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.16/datatables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.flash.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.colVis.min.js"></script>


    <script>
       $(document).ready(function(){
        $('#tbl_personal').DataTable({
          "order": [
                      [0, "desc"]
                  ],
          "columnDefs" :[{
              "targets": [0],
              "searchable": false,
              "sortable": false
          }],
          dom: 'Bfrtip',
          buttons: [
              'excel', 'print'


            ],
          "language": idioma_espanol
          });
          });
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
