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
                                <a href="<?php echo base_url('index.php/seguimiento/MAN_Seguimiento'); ?>" target="_self" style="color:">Listado</a>
                            </li>
                            <li class="active">
                                Autorizar
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
                        ?>
                        <ul class="nav navbar-nav">
                            <li class="">
                                <a href="<?php echo base_url('index.php/main/index'); ?>" target="_self" style="color:">
                        <span class="icon voyager-documentation"></span> <span class="title">Panel de Control</span> </a>
                            </li>
                            <li class="">
                                <a href="<?php echo base_url('index.php/mantencion/landingPage'); ?>" target="_self" style="color:"> <span class="icon voyager-tag"></span> <span class="title">Orden Trabajo<span>
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
                                            <li class="">
                                                <a href="<?php echo base_url('index.php/mantencion/listado');  ?>" target="_self" style="color:">
                        <span class="icon voyager-list"></span> <span class="title">Lista de Mantencion</span> </a>
                                            </li>


                                            <li class="active">
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
                            <li class="">
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
                                            <li class="">
                                                <a href="<?php echo base_url('index.php/mantencion/listado');  ?>" target="_self" style="color:">
                        <span class="icon voyager-list"></span> <span class="title">Lista de Mantencion</span> </a>
                                            </li>


                                            <li class="active">
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
                            <li class="">
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

            <!-- Main Content -->
            <div class="container-fluid">
                <?php if ($data): ?>
                <div class="side-body padding-top">

                    <h1 class="page-title">

                        <i class="voyager-truck"></i> Mantencion Tecnica
                        <?php echo $data-> NroSolicitud ?> &nbsp;
                        <?php endif; ?>
                        <a href="<?php echo base_url('index.php/seguimiento/MAN_Seguimiento');  ?>" class="btn btn-warning">
                <span class="glyphicon glyphicon-list"></span>&nbsp;
                Regresar a listado
                  </a>
                    </h1>
                    <div class="page-content container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="panel panel-bordered">
                                    <div class="panel-body">

                                        <div class="row">
                                            <div class="col-4 col-md-4"><h5>Numero de Solicitud</h5>
                                                <p>
                                                    <?php echo $data-> NroSolicitud; ?>
                                                </p>
                                            </div>


                                            <div class="col-4 col-md-4"><h5>Fecha de Solicitud Emitida</h5>
                                                <p>
                                                    <?php echo date('j M Y',strtotime($data-> fechasolicitud)); ?>
                                                </p>
                                            </div>
                                            <div class="col-4 col-md-4"><h5>Maquina</h5>
                                                <p>
                                                    <?php echo $data-> maquina; ?>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row">

                                            <div class="col-4 col-md-4"><h5>Codigo de Solicitante</h5>
                                                <p>
                                                    <?php echo $data-> cod_detecta; ?> </p>
                                            </div>

                                            <div class="col-4 col-md-4"><h5>Nombre</h5>
                                                <p>
                                                    <?php echo $data-> Nombre; ?>
                                                </p>
                                            </div>
                                            <div class="col-4 col-md-4"><h5>Area de Solicitante</h5>
                                                <p>
                                                    <?php echo $data-> Area ?>
                                                </p>
                                            </div>
                                        </div>

                                        <div class="row">

                                        </div>
                                        <div class="row">
                                            <div class="col-4 col-md-4"><h5>Especialidad</h5>
                                                <p>
                                                    <?php echo $data-> clasificacion; ?>
                                                </p>
                                            </div>
                                            <div class="col-4 col-md-4"><h5>Tipo de detencion</h5>
                                                <p>
                                                    <?php echo $data-> tipo_detencion; ?>
                                                </p>
                                            </div>
                                            <div class="col-4 col-md-4"><h5>Fecha Mantencion Realizada</h5>
                                                <p>
                                                    <?php echo date('j M Y',strtotime($data-> fecha)); ?>

                                                </p>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4 col-md-12">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="panel panel-bordered">
                                    <div class="panel-body">
                                        <div class="page-header text-center">
                                            <?php if ($seguimientos && $tecnicos): ?>
                                            <i class="fa fa-industry" aria-hidden="true"></i> Mantencion realizada
                                        </div>

                                        <div class="col-5 col-xl-12">
                                              <div class="table-responsive">

                                                  <table class="table table-hover dataTable no-footer" id="dynamic_field">

                                                          <thead>
                                                              <tr>
                                                                  <th>Tecnico</th>
                                                                  <th>Desde</th>
                                                                  <th>Hasta</th>
                                                                  <th>HH</th>
                                                                  <th>HM</th>
                                                                  <th>Int</th>
                                                                  <th>Comentario</th>

                                                              </tr>
                                                          </thead>
                                                          <tbody>
                                                              <?php foreach ($seguimientos as $seguimiento): ?>
                                                              <tr>
                                                                  <td style="width:25%;">
                                                                    <?php foreach ($tecnicos as $tecnico): ?>
                                                                      <?php if ($seguimiento-> id_detalle == $tecnico-> id_detalle): ?>
                                                                    *  <?php echo $tecnico-> Nombre; ?> <br>
                                                                      <?php endif; ?>
                                                                    <?php endforeach; ?>
                                                                   </td>
                                                                   <td style="width:10%;"><?php echo $seguimiento-> horaInicio ?></td>

                                                                    <td style="width:10%;"><?php echo $seguimiento-> horaTermino ?>  </td>

                                                                    <td style="width:5%;"> <?php echo $seguimiento-> HH ?></td>

                                                                    <td style="width:5%;">  <?php echo $seguimiento-> HM ?></td>

                                                                    <td style="width:5%;"><?php echo $seguimiento-> Int_Prod ?></td>

                                                                    <td style="width:30%;"><?php echo $seguimiento-> Comentario ?>  </td>
                                                              </tr>
                                                          </tbody>
                                                          <?php $id_seguimiento = $seguimiento->idMan_Tecnico; ?>
                                                          <?php $id_solicitud = $seguimiento->NroSolicitud; ?>

                                                          <?php endforeach; ?>
                                                      </table>
                                              </div>
                                            <br>
                                        </div>
                                    </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="panel-footer text-center">
                <button type="button" class="btn btn-info" value="" data-toggle="modal" data-target="#exampleModalCenter">
                  <span class="glyphicon glyphicon-pencil"></span> &nbsp; Autorizacion de Repecion
                </button>

            </div>
            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalCenterTitle">Autorizacion </h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                        <div class="modal-body">
                            ¿Estas seguro que deseas autorizar mantencion
                            <?php echo $data-> NroSolicitud ?>?
                            <p>Este enviara un correo al supervisor del Area <?php $data-> CodArea; ?></p>
                        </div>
                        <?php echo form_open("seguimiento/save/{$data->NroSolicitud}"); ?>
                        <div class="modal-footer">
                          <input type="hidden" name="id_seguimiento" value="<?php echo $data-> idMan_Tecnico; ?>">
                          <input type="hidden" name="area" value="<?php echo $data-> CodArea; ?>">
                          <input type="hidden" name="maquina" value="<?php echo $data-> maquina; ?>">
                          <input type="hidden" name="NroSolicitud" value="<?php echo $data-> NroSolicitud; ?>">

                            <button type="button" class="btn btn-danger" data-dismiss="modal">Salir</button>

                            <button type="submit" class="btn btn-success">Confirmar</button>
                            <?php echo form_close(); ?>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    </div>
    </div>

    <?php include("template/footerMantencion.php"); ?>
