<?php require_once(APPPATH."views/template/header.php"); ?>

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
                                <i class="voyager-home"></i> <a href="<?php echo base_url('index.php/main/index'); ?>" target="_self" style="color:">Panel</a>
                            </li>
                            <li class="active">
                                <i class="voyager-truck"></i>
                                <a href="<?php echo base_url('index.php/reportes/historialMaquina'); ?>" target="_self" style="color:">Historial</a>
                            </li>
                            <li class="active">
                                <i class="fas fa-check-circle"></i> Resultado
                            </li>
                        </ol>
                    </div>
                    <?php require_once(APPPATH.'views/template/nav-top.php'); ?>
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
                                <div class="title">Ignisterra</div>
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
                            require_once(APPPATH.'views/template/nav-user.php');
                          break;
                        case 2:
                              require_once(APPPATH.'views/template/nav-sup.php');
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
                                <div id="3-dropdown-element" class="panel-collapse collapse ">
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
                                <a href="#2-dropdown-element" data-toggle="collapse" aria-expanded="true" target="_self" style="color:"> <span class="icon voyager-file-text"></span> <span class="title">Reportes</span> </a>
                                <div id="2-dropdown-element" class="panel-collapse collapse in" aria-expanded="true" >
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
                                            <li class="active">
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
                                <div id="3-dropdown-element" class="panel-collapse collapse ">
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
                                <a href="#2-dropdown-element" data-toggle="collapse" aria-expanded="true" target="_self" style="color:"> <span class="icon voyager-file-text"></span> <span class="title">Reportes</span> </a>
                                <div id="2-dropdown-element" class="panel-collapse collapse in" aria-expanded="true" >
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
                                            <li class="active">
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
            <!-- Main Content -->
            <div class="container-fluid">
                <div class="side-body padding-top">
                    <h1 class="page-title">
                        <i class="fas fa-industry"></i> Detalle de Maquinas
                    </h1>
                      <img src="<?php echo base_url('assets/img/logofull.png'); ?>" class="avatar float-right" alt="Logo">

                    <?php   require_once(APPPATH.'views/template/msg.php'); ?>

                    <style type="text/css">
                          @media print {
                              .btn-success{
                                display: none;
                              }
                              .app-footer{
                                display: none;
                              }
                              .col-4{
                              float: left;
                              }
                              .table{
                                 font-size: 7.5pt;
                              }
                              .card-body {
                                font-size: 9.5pt;
                              }
                          }
                      </style>
                    <div class="page-content edit-add container-fluid">
                        <div class="row">
                            <div class="col-md-12">

                                <div class="panel panel-bordered">
                                  <?php
                                  $hastaformat = date('j M Y',strtotime($hasta));
                                  $desdeformat = date('j M Y',strtotime($desde));
                                   ?>
                                    <!-- form start -->
                                    <div class="panel-body">
                                      <h2 class="text-center">Tiempo por Maquina de trabajos realizados por Mantenimiento</h2>
                                      <p><strong>Desde </strong> <?php echo $desdeformat ?>  &nbsp;  &nbsp;  &nbsp;  <strong>Hasta </strong><?php echo $hastaformat ?></p>
                                      <h4><?php echo $maquina; ?></h4>
                                      <?php if ($results): ?>
                                        <?php foreach ($results as $machine): ?>
                                        <div class="row" style="border: 1px solid #9d9f9d;">
                                        <div class="col-4 col-sm-4">Tipo Mantencion
                                            <p>
                                                <?php echo $machine->tipomantencion; ?>
                                            </p>
                                        </div>
                                        <div class="col-4 col-sm-6">Tipo trabajo
                                            <p>
                                                <?php echo $machine->tipotrabajo; ?>
                                            </p>
                                        </div>
                                        <div class="col-4 col-sm-1">Total detencion
                                            <p>
                                                x
                                            </p>
                                        </div>
                                      </div>
                                      <table class="table table-hover">
                                         <thead>
                                            <tr>
                                                <th>Nro Solicitud</th>
                                                <th>Fecha Solicitud</th>
                                                <th>Hora Solicitud</th>
                                                <th>Detalle</th>
                                                <th>Fecha Entrega</th>

                                                <th>Dias</th>
                                                <th>Horas</th>
                                            </tr>
                                          </thead>
                                          <tr>
                                            <td>
                                              <?php echo $machine->NroSolicitud; ?>
                                            </td>
                                            <td>
                                              <?php
                                                $fechanew = date('j M Y',strtotime($machine->fechasolicitud));
                                              echo $fechanew;
                                              ?>
                                            </td>
                                            <td>
                                              <?php
                                              $HSolicitud = strtotime($machine->horasolicitud);
                                              $newHSolicitud = date("H:i", $HSolicitud);
                                              echo $newHSolicitud; ?>
                                            </td>
                                            <td>
                                              <?php echo $machine->detalle; ?>
                                            </td>
                                            <td>
                                                <?php echo date('j M Y',strtotime($machine->fecha));?>

                                            </td>
                                            <td>
                                              <?php
                                              $counter = 0;
                                              $fecha1= $machine->fechasolicitud; $fecha2 = $machine->fecha; //ejemplo de fechas

                                              for($i=$fecha1; $i<$fecha2; $i = date("Y-m-d", strtotime($i ."+ 1 days"))) {
                                                 if (date("w",strtotime($i)) != 5 && date("w",strtotime($i)) != 6) { $counter++;}
                                              }
                                              echo $counter;
                                              ?>
                                            </td>
                                            <td>
                                              <?php
                                              $time1 = new DateTime($machine->horasolicitud);
                                              $time2 = new DateTime($machine->hora);
                                              $interval = $time1->diff($time2);
                                              echo $interval->format('%H:%i');
                                              ?>
                                            </td>

                                          </tr>
                                      </table>
                                      <br>
                                    <div class="row">
                                      <div class="col-4 col-sm-4">


                                      </div>
                                      <div class="col-4 col-sm-8">
                                        <?php $sumaHH=0;
                                              $sumaHM=0;
                                         ?>
                                        <table class="table table-striped">
                                          <thead>
                                            <tr>
                                              <th>F. Interv.</th>
                                              <th>desde Interv.</th>
                                              <th>hasta Interv.</th>
                                              <th>detalle Interv.</th>
                                              <th>Tecnico</th>
                                              <th>HH</th>
                                              <th>HM</th>
                                            </tr>
                                          </thead>
                                          <?php if ($seguimientos): ?>

                                            <?php foreach ($seguimientos as $seguimiento): ?>

                                              <?php if ($seguimiento-> NroSolicitud ==  $machine-> NroSolicitud): ?>
                                                <tr>
                                                  <td>
                                                    <?php
                                                    $newdate = date('j M Y',strtotime($seguimiento-> fecha));
                                                    echo $newdate;  ?>
                                                  </td>
                                                  <td>
                                                    <?php
                                                    $Inicio = strtotime($seguimiento-> horaInicio);
                                                    $newInicio = date("H:i", $Inicio);
                                                    echo $newInicio; ?>
                                                  </td>
                                                  <td>
                                                    <?php
                                                    $Termino = strtotime($seguimiento-> horaTermino);
                                                    $newTermino = date("H:i", $Termino);
                                                    echo $newTermino; ?>

                                                  </td>
                                                  <td>
                                                    <?php echo $seguimiento-> Comentario; ?>
                                                  </td>
                                                  <td>
                                                  <?php if ($tecnicos): ?>
                                                    <?php foreach ($tecnicos as $tecnico): ?>
                                                        <?php if ($seguimiento-> id_detalle== $tecnico-> id_detalle): ?>
                                                          <?php echo $tecnico-> Nombre; ?> <br>
                                                        <?php endif; ?>
                                                    <?php endforeach; ?>
                                                  <?php endif; ?>
                                                  </td>
                                                  <td>
                                                    <?php
                                                    $sumaHH+= $seguimiento->HH;
                                                    echo $seguimiento-> HH;
                                                    ?>
                                                  </td>
                                                  <td>
                                                    <?php
                                                    $sumaHM+= $seguimiento->HM;
                                                    echo $seguimiento-> HM;
                                                    ?>
                                                  </td>
                                                </tr>
                                              <?php endif; ?>

                                            <?php endforeach; ?>

                                          <?php endif; ?>

                                        </table>
                                      </div>
                                      <div class="row">
                                        <div class="col">

                                          </div>
                                        <div class="col  float-right">
                                          <div class="col-4 col-sm-5">Total HH
                                            <p>
                                              <strong><?php echo $sumaHH ?></strong>
                                            </p>
                                          </div>
                                          <div class="col-4 col-sm-6"> Total HM
                                            <p>
                                              <strong><?php echo $sumaHM ?></strong>
                                            </p>
                                          </div>
                                          </div>
                                      </div>
                                    </div>

                                        <?php endforeach; ?>
                                      <?php endif; ?>
                                      <button type="submit" name="button" class="btn btn-success" value="" onclick="window.print();">
                                        <span class="voyager-documentation"></span> Imprimir &nbsp;
                                      </button>
                                    </div>
                                </div>

                            </div>

                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>

    <?php   require_once(APPPATH.'views/template/footer.php'); ?>
