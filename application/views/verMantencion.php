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
                                Mantencion N
                                <?php echo $data-> NroSolicitud ?>
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
                            <a href="<?php echo base_url('index.php/mantencion/landingPage'); ?>" target="_self" style="color:"> <span class="icon voyager-tag"></span> <span class="title">Orden Trabajo<span>
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
                <div class="side-body padding-top">

                    <h1 class="page-title">
                        <i class="voyager-truck"></i> Mantencion
                        <?php echo $data-> NroSolicitud ?> &nbsp;


                        <a href="<?php echo base_url('index.php/mantencion/listado');  ?>" class="btn btn-warning">
                            <span class="glyphicon glyphicon-list"></span>&nbsp; Regresar a listado
                        </a>
                        <?php $var = urldecode($data-> maquina); ?>
                        <?php  echo form_open("mantencion/historialMaquina/{$var}",['class'=>'btn']); ?>
                        <input type="hidden" name="numero" value="<?php echo $data-> NroSolicitud; ?>">
                        <button type="submit" name="button" class="btn btn-info" value="">
                            <span class="glyphicon glyphicon-list"></span>&nbsp; Ver Historial de Maquina
                        </button>
                        <?php echo form_close(); ?>
                    </h1>
                    <div class="page-content container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="panel panel-bordered">
                                    <div class="panel-body">

                                        <!-- Stack the columns on mobile by making one full-width and the other half-width -->
                                        <div class="row">
                                            <div class="col-4 col-md-1">
                                                <h5>Numero de Solicitud</h5>
                                                <p>
                                                    <?php echo $data-> NroSolicitud; ?>
                                                </p>
                                            </div>
                                            <div class="col-4 col-md-1">
                                                <h5>Fecha</h5>
                                                <p>
                                                    <?php echo date('j M Y',strtotime($data-> fechasolicitud));?>
                                                    &nbsp;
                                                    <?php echo date('G:i',strtotime($data-> horasolicitud));?>
                                                </p>
                                            </div>

                                            <div class="col-4 col-md-1">
                                                <h5>Maquina</h5>
                                                <p>
                                                    <?php echo $data-> maquina; ?>
                                                </p>
                                            </div>
                                            <div class="col-4 col-md-1">
                                                <h5> Area</h5>
                                                <p>
                                                    <?php echo $data-> CodArea; ?>
                                                </p>

                                            </div>
                                            <div class="col-4 col-md-1">
                                                <h5>Tipo de Mantencion</h5>
                                                <p>
                                                    <?php echo $data-> tipomantencion; ?>
                                                </p>
                                            </div>
                                            <?php if ($data-> tipotrabajo): ?>
                                            <div class="col-4 col-md-2">
                                                <h5>Tipo de Trabajo</h5>
                                                <p>
                                                    <?php echo $data-> tipotrabajo; ?>
                                                </p>
                                            </div>
                                            <?php endif; ?>
                                            <div class="col-4 col-md-4">
                                                <h5>Solicitante Nombre</h5>
                                                <p>
                                                    <?php echo $data-> username; ?>
                                                </p>
                                            </div>

                                        </div>

                                        <div class="panel-heading" style="border-bottom:0;">
                                            <h3 class="panel-title">Detalle de Mantencion</h3>
                                        </div>
                                        <div class="panel-body" style="padding-top:0;">
                                            <p>
                                                <?php echo strtoupper($data -> detalle); ?>
                                            </p>
                                        </div>
                                        <!-- panel-body -->
                                        <hr style="margin:0;">
                                        <br>

                                        <?php if ($seguimientos && $tecnicos): ?>
                                        <div class="col-5 col-xl-12">

                                            <details>
                                              <summary><i class="fas fa-angle-double-down"></i>Mostrar tabla de intervencion</summary>
                                              <div class="table-responsive">

                                                  <table class="table table-sm" id="dynamic_field">
                                                      <table id="tbl_personal" class="table table-hover">
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
                                            </details> <br>
                                        </div>
                                        <div class="col-5 col-xl-12">
                                            <?php echo form_open("seguimiento/save_Seguimiento/{$id_seguimiento}"); ?>
                                            <input type="hidden" name="NroSolicitud" value="<?php echo $id_solicitud ?>">
                                            <input type="hidden" name="id_seguimiento" value="<?php echo $id_seguimiento ?>">
                                            <div class="table-responsive">
                                                <table class="table table-sm" id="dynamic_field">
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <div class="col-sm-10">
                                                                    <div class="form-group row">
                                                                        <label class="form-label">Cod. Tecnico:</label>
                                                                        <div id="content">
                                                                            <input type="text" name="id_tecnico[]" value="" placeholder="Codigo" class="form-control"> <br>
                                                                            <input type="text" name="id_tecnico[]" value="" placeholder="Codigo" class="form-control"> <br>
                                                                            <input type="text" name="id_tecnico[]" value="" placeholder="Codigo" class="form-control"> <br>
                                                                            <input type="text" name="id_tecnico[]" value="" placeholder="Codigo" class="form-control"> <br>
                                                                            <input type="text" name="id_tecnico[]" value="" placeholder="Codigo" class="form-control"> <br>
                                                                            <input type="text" name="id_tecnico[]" value="" placeholder="Codigo" class="form-control"> <br>

                                                                        </div>
                                                                        <input type="button" id="more_fields" class="btn btn-primary" onclick="add_fields();" value="Otro" />
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="col-sm-8">
                                                                    <div class="form-group row">
                                                                        <label class="form-label">Desde:</label>
                                                                        <input name="horaInicio" id="horaInicio" placeholder="00:00" class="start form-control" type="text" value="<?php echo set_value('horaInicio') ?>">
                                                                        <?php echo form_error('horaInicio','<div class="text-danger">','</div>') ?>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="col-sm-8">
                                                                    <div class="form-group row">
                                                                        <label class="form-label">Hasta:</label>
                                                                        <input name="horaTermino" id="horaTermino" placeholder="00:00" class="end form-control" type="text" value="<?php echo set_value('horaTermino') ?>">
                                                                        <?php echo form_error('horaTermino','<div class="text-danger">','</div>') ?>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="col-sm-5">
                                                                    <div class="form-group row">
                                                                        <label class="form-label">HH:</label>

                                                                        <input name="HH" id="resultadoFinal" readonly class="form-control" type="text">

                                                                    </div>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div class="col-sm-5">
                                                                    <div class="form-group row">
                                                                        <label class="form-label">HM:</label>

                                                                        <input name="HM" id="resultado" class="form-control" type="text" readonly>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="col-sm-10">
                                                                    <div class="form-check">

                                                                        <label class="form-check">Interrumpe Produccion?</label>
                                                                        <div class="form-check form-check-inline">
                                                                            <input class="form-check-input" type="radio" name="Int_Prod" value="No" checked>
                                                                            <label class="form-check-label" for="inlineRadio1">No</label>
                                                                            <input class="form-check-input" type="radio" name="Int_Prod" value="Si">
                                                                            <label class="form-check-label" for="inlineRadio1">Si</label>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <textarea name="Comentario" rows="2" placeholder="Comentario" class="form-control" id="mytext" cols="60"></textarea>

                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <div class="panel-footer text-center">
                                                    <button type="submit" name="submitt" class="btn btn-warning" value="other">
                                                        <span class="glyphicon glyphicon-repeat"></span> &nbsp; Otra intervencion
                                                    </button>
                                                    <button type="submit" name="submitt" class="btn btn-success" value="end">
                                                        <span class="glyphicon glyphicon-check"></span> &nbsp; Terminar
                                                    </button>

                                                </div>
                                                <?php echo form_close(); ?>
                                            </div>
                                        </div>
                                        <?php else: ?>


                                        <div class="panel-body" style="padding-top:0;">
                                            <div class="row">

                                                <div class="divider"> </div>
                                                <?php echo form_open("mantencion/save_MANTecnico/{$data->NroSolicitud}"); ?>
                                                <div class="row">

                                                    <div class="form-group col-md-1">
                                                        <h5>Tipo de falla :</h5>

                                                        <?php $clasificacion = array(
                                                    				'Electrico'         => 'Electrico',
                                                            'Mecanico'         => 'Mecanico',
                                                            'Calibracion'           => 'Calibracion',
                                                            'Operacion'           => 'Operacion',
                                                            'Solicitud expresa de mantencion'           => 'Solicitud expresa de mantencion',
                                                    			);
                                                          $js = 'id="clasificacionnn"';
                                                    		 ?>
                                                        <?php echo form_dropdown('clasificacion', $clasificacion,set_value('clasificacion'),$js,['class'=>'form-control']);?>

                                                    </div>
                                                    <?php echo form_error('clasificacion','<div class="text-danger">','</div>') ?>

                                                </div>
                                                <div class="row">
                                                    <div class="form-group col-md-4">
                                                        <h5>Tipo de Detencion :</h5>

                                                        <input class="check form-check-input" type="radio" name="tipo_detencion" value="Sin detencion" <?php echo set_radio( 'tipo_detencion', 'Sin detencion') ?> checked >
                                                        <label class="form-check-label" for="inlineRadio1">Sin detencion</label>
                                                        <input class="check form-check-input" type="radio" name="tipo_detencion" value="Parcial" <?php echo set_radio( 'tipo_detencion', 'Parcial') ?>>
                                                        <label class="form-check-label" for="inlineRadio1">Det. Parcial</label>
                                                        <input class="check form-check-input" type="radio" name="tipo_detencion" value="Completa" <?php echo set_radio( 'tipo_detencion', 'Completa') ?>>
                                                        <label class="form-check-label" for="inlineRadio1"> Completa</label>
                                                        <input class="form-check-input" type="radio" id="tipo_detencion" name="tipo_detencion" value="Horometro" <?php echo set_radio( 'tipo_detencion', 'Horometro') ?>>
                                                        <label class="form-check-label" for="inlineRadio1">Horometro</label>

                                                    </div>
                                                    <?php echo form_error('tipo_detencion','<div class="text-danger">','</div>') ?>
                                                    <div class="col-sm-1" id="divhidden" hidden>
                                                        <br>
                                                        <input type="number" class="form-control" placeholder="0" name="horometro" value="">
                                                    </div>
                                                    <div class="form-group col-md-2">
                                                        <h5>Reparacion por :</h5>

                                                        <?php $reparacion = array(
                                                          'DESGASTE'         => 'DESGASTE',
                                                          'MALTRATO'         => 'MALTRATO',
                                                        );
                                                        $jss = 'id="reparacionnn"';
                                                       ?>
                                                        <?php echo form_dropdown('reparacion', $reparacion,set_value('reparacion'),$jss,['class'=>'form-control']);?>
                                                    </div>

                                                </div>



                                            </div>
                                        </div>

                                        <div class="page-header">
                                            <i class="fa fa-plus" aria-hidden="true"></i> intervencion Mantencion
                                        </div>
                                        <div class="col-5 col-xl-12">

                                            <div class="table-responsive">

                                                <table class="table table-sm" id="dynamic_field">
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <div class="col-sm-10">
                                                                    <div class="form-group row">

                                                                        <label class="form-label">Cod. Tecnico:</label>
                                                                        <div id="content">
                                                                          <input type="text" name="id_tecnico[]" value="" placeholder="Codigo" class="form-control"> <br>
                                                                          <input type="text" name="id_tecnico[]" value="" placeholder="Codigo" class="form-control"> <br>
                                                                          <input type="text" name="id_tecnico[]" value="" placeholder="Codigo" class="form-control"> <br>
                                                                          <input type="text" name="id_tecnico[]" value="" placeholder="Codigo" class="form-control"> <br>
                                                                          <input type="text" name="id_tecnico[]" value="" placeholder="Codigo" class="form-control"> <br>
                                                                          <input type="text" name="id_tecnico[]" value="" placeholder="Codigo" class="form-control"> <br>
                                                                        </div>
                                                                        <?php echo form_error('id_tecnico','<div class="text-danger">','</div>') ?>
                                                                        <!-- <input type="button" id="more_fields" class="btn btn-primary" onclick="add_fields();" value="Otro" /> -->
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="col-sm-8">
                                                                    <div class="form-group row">
                                                                        <label class="form-label">Desde:</label>
                                                                        <input name="horaInicio" id="horaInicio" placeholder="00:00" class="start form-control" type="text" value="<?php echo set_value('horaInicio') ?>">
                                                                        <?php echo form_error('horaInicio','<div class="text-danger">','</div>') ?>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="col-sm-8">
                                                                    <div class="form-group row">
                                                                        <label class="form-label">Hasta:</label>
                                                                        <input name="horaTermino" id="horaTermino" placeholder="00:00" class="end form-control" type="text" value="<?php echo set_value('horaTermino') ?>">
                                                                        <?php echo form_error('horaTermino','<div class="text-danger">','</div>') ?>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="col-sm-5">
                                                                    <div class="form-group row">
                                                                        <label class="form-label">HH:</label>

                                                                        <input name="HH" id="resultadoFinal" readonly class="form-control" type="text">

                                                                    </div>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div class="col-sm-5">
                                                                    <div class="form-group row">
                                                                        <label class="form-label">HM:</label>

                                                                        <input name="HM" id="resultado" class="form-control" type="text" readonly>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="col-sm-10">
                                                                    <div class="form-check">

                                                                        <label class="form-check">Interrumpe Produccion?</label>
                                                                        <div class="form-check form-check-inline">
                                                                            <input class="form-check-input" type="radio" name="Int_Prod" value="No" checked>
                                                                            <label class="form-check-label" for="inlineRadio1">No</label>
                                                                            <input class="form-check-input" type="radio" name="Int_Prod" value="Si">
                                                                            <label class="form-check-label" for="inlineRadio1">Si</label>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <textarea name="Comentario" rows="2" placeholder="Comentario" class="form-control" id="mytext" cols="60"></textarea>
                                                                <?php echo form_error('Comentario','<div class="text-danger">','</div>') ?>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <div class="panel-footer text-center">
                                                    <button type="submit" name="submit" class="btn btn-warning" value="other">
                                                        <span class="glyphicon glyphicon-repeat"></span> &nbsp; Otra intervencion
                                                    </button>
                                                    <button type="submit" name="submit" class="btn btn-success" value="end">
                                                        <span class="glyphicon glyphicon-check"></span> &nbsp; Terminar
                                                    </button>

                                                </div>
                                                <?php echo form_close(); ?>
                                            </div>
                                        </div>
                                    </div>
                                    <?php endif; ?>



                                    <div class="col-4 col-md-10">
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

    </div>
    <footer class="app-footer">
        <div class="site-footer-right">
            Made with <i class="voyager-heart"></i>
            - v1.1.0
        </div>
    </footer>
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
    <script type="text/javascript" src="<?php echo base_url('assets/js/jquery.min.js'); ?>"></script>

    <script type="text/javascript" src="<?php echo base_url('assets/vendor/tcg/voyager/assets/js/app.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/datatables.min.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap-select.min.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/vendor/tcg/voyager/assets/js/jquery.timepicker.js'); ?>"></script>

    <script>
        $(document).ready(function() {

            $('#horaInicio').timepicker({
                'scrollDefault': 'now',
                'timeFormat': 'G:i'
            });

            $('#horaTermino').timepicker({
                'scrollDefault': 'now',
                'timeFormat': 'G:i'
            });

            $("#tipo_detencion").click(function() {

                $("#divhidden").first().show("fast", function() {});
                $('#tipotrabajo1').prop("checked");
            });

            $(".check").click(function() {
                $("#divhidden").hide(100);
                $("input[name=horometroo]").val('');
            });

            $("#horaTermino").keypress(function(event) {

              if(event.keyCode==9){
                ObtieneTotHoras();
                $("input[name=Comentarioo]").focus();
              }

            })


        });

        function add_fields() {
            var d = document.getElementById("content");

            d.innerHTML += "<br> <input type='text' name='id_tecnico[]'  value=''  placeholder='Codigo' class='form-control'>";
        }

        function ObtieneTotHoras() {
            var contar = 0;
            HDesde = $('#horaInicio').val();
            HHasta = $('#horaTermino').val();

            hora1 = (HDesde).split(":");
            hora2 = (HHasta).split(":");
            HoraDesde = (hora1[0]);
            MinutoDesde = (hora1[1]);
            HoraHasta = (hora2[0]);
            MinutoHasta = (hora2[1]);
            TotDesde = parseInt((HoraDesde * 60)) + parseInt(MinutoDesde);
            TotHasta = parseInt(HoraHasta * 60) + parseInt(MinutoHasta);
            RestaHoras = (TotHasta - TotDesde);
            var opcion = confirm('DESCUENTA COLACIÓN?');
            if (opcion == true) {
                var Resta = (RestaHoras / 60);
                TotHorasTrab = (Resta - 0.5).toFixed(2);
            } else {
                TotHorasTrab = (RestaHoras / 60).toFixed(2);
            }

            var inputs = $('input[name^=id_tecnico]');

            for (j=0; j<inputs.length; j++) {
              if (inputs[j].value !='') {
                contar+=1;
              }
              }

            $('#resultado').val(TotHorasTrab);
            $('#resultadoFinal').val(TotHorasTrab * contar);
            document.getElementById("mytext").focus();

        }
    </script>
</body>

</html>
