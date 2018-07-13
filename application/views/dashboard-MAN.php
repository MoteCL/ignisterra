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
                                <i class="voyager-tag"></i> Solicitar Mantencion
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
                        ?>
                        <ul class="nav navbar-nav">
                            <li class="active">
                                <a href="<?php echo base_url('index.php/main/index'); ?>" target="_self" style="color:">
                        <span class="icon voyager-documentation"></span> <span class="title">Panel de Control</span> </a>
                            </li>
                            <li class="">
                                <a href="<?php echo base_url('index.php/mantencion/index'); ?>" target="_self" style="color:"> <span class="icon voyager-tag"></span> <span class="title">Solicitar Mant.<span>
                                </a>
                            </li>
                        </ul>


                        <?php
                          break;
                        case 2:
                        ?>
                        <ul class="nav navbar-nav">
                            <li class="">
                                <a href="<?php echo base_url('index.php/main/index'); ?>" target="_self" style="color:">
                        <span class="icon voyager-documentation"></span> <span class="title">Panel de Control</span> </a>
                            </li>
                            <li class="active">
                                <a href="<?php echo base_url('index.php/mantencion/landingPage'); ?>" target="_self" style="color:"> <span class="icon voyager-tag"></span> <span class="title">Solicitar Mant.<span>
                                </a>
                            </li>
                            <li class="">
                                <a href="<?php echo base_url('index.php/mantencion/listByArea'); ?>" target="_self" style="color:"> <span class="icon voyager-list"></span> <span class="title">List Solicitud<span>
                                </a>
                            </li>
                            <li class="">
                                <a href="<?php echo base_url('index.php/mantencion/listCerradas'); ?>" target="_self" style="color:"> <span class="icon voyager-check"></span> <span class="title">List Cerradas<span>
                                </a>
                            </li>
                        </ul>


                        <?php
                            break;
                        case 3:
                        ?>
                        <ul class="nav navbar-nav">
                            <li class="">
                                <a href="<?php echo base_url('index.php/main/index'); ?>" target="_self" style="color:">
                        <span class="icon voyager-documentation"></span> <span class="title">Panel de Control</span> </a>
                            </li>
                            <li class="active">
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
                            <li class="active">
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
                        <i class="voyager-documentation"></i> Agregar Mantencion
                    </h1>

                    <?php include('template/msg.php'); ?>


                    <div class="page-content edit-add container-fluid">
                        <div class="row">
                            <div class="col-md-12">

                                <div class="panel panel-bordered">
                                    <!-- form start -->
                                    <?php echo form_open('mantencion/save'); ?>

                                    <div class="panel-body">

                                        <div class="form-group  col-md-12">
                                            <h2><strong>Codigo</strong></h2>
                                            <h3>
                                            <?php if ($orden): ?>
                                              <?php $Num =0; ?>
                                              <?php foreach ($orden as $key): ?>
                                                <?php $Num =   $key-> total; ?>
                                                <?php  $Num+=1; ?>
                                              <?php endforeach; ?>

                                              <?php echo 'M'.$Num; ?>
                                              <input type="hidden" name="NroSolicitud" value="<?php echo 'M'.$Num; ?>">
                                              <input type="hidden" name="orden" value="<?php echo $Num; ?>">
                                            <?php endif; ?>

                                            </h3>
                                        </div>
                                        <div class="form-group  col-md-5">
                                            <h3>Maquina</h3>

                                            <div class="form-group mx-sm-3 mb-2">
                                                <select class="form-control select2 select2-hidden-accessible" id="id_maquinaria" name="" tabindex="-1" aria-hidden="true">
                                                            <option selected="" disabled> --- Maquinas ---</option>
                                                            <?php if ($data) foreach ($data as $maquina) { ?>

                                                              <option  value="<?php echo $maquina-> DescArea ?>">  <?php echo $maquina-> Maquina ?></option>
                                                            <?php }?>
                                                            <option  disabled> --- Centro Costo ---</option>
                                                            <?php if ($costos) foreach ($costos as $costo) { ?>

                                                              <option  value="<?php echo $costo-> DescArea ?>">  <?php echo $costo-> CentroCosto ?></option>
                                                            <?php }?>

                                                </select>
                                                <div class="col-md-5">
                                                    <?php echo form_error('maquina','<div class="text-danger">','</div>') ?>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="form-group  col-md-5">
                                            <h3>Area</h3>
                                            <?php  echo form_input(['maxlength'=>'35','name'=>'CodArea','id'=>'CodArea','class'=>'form-control','value'=>set_value('CodArea'),'readonly'=>'TRUE']);  ?>


                                            <input type="hidden" name="maquina" value="<?php echo set_value('maquina'); ?>" id="maquina">
                                        </div>
                                        <div class="form-group  col-sm-8">
                                            <h3>Tipo Mantencion</h3>
                                            <br>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="tipomantencion" id="tipo_mantencion1" value="Correctiva" <?php echo set_radio( 'tipomantencion', 'Correctiva') ?>>
                                                <label class="form-check-label" for="tipo_mantencion1">Correctiva</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="tipomantencion" id="tipo_mantencion2" value="Mejora" <?php echo set_radio( 'tipomantencion', 'Mejora') ?>>
                                                <label class="form-check-label" for="tipo_mantencion2">Mejora</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="tipomantencion" id="tipo_mantencion3" value="Preventiva" <?php echo set_radio( 'tipomantencion', 'Preventiva') ?>>
                                                <label class="form-check-label" for="tipo_mantencion3">Preventiva</label>
                                            </div>
                                            <div class="col-md-5">
                                                <?php echo form_error('tipomantencion','<div class="text-danger">','</div>') ?>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-4" hidden id="divhidden">

                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="tipotrabajo" id="tipotrabajo1" value="Electica" <?php echo set_radio( 'tipotrabajo', 'Electica') ?>>
                                                <label class="form-check-label" for="tipotrabajo">Electica</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="tipotrabajo" id="tipotrabajo2" value="Mecanica" <?php echo set_radio( 'tipotrabajo', 'Mecanica') ?>>
                                                <label class="form-check-label" for="tipotrabajo">Mecanica</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="tipotrabajo" id="tipotrabajo3" value="Lubricacion" <?php echo set_radio( 'tipotrabajo', 'Lubricacion') ?>>
                                                <label class="form-check-label" for="tipotrabajo">Lubricacion</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="tipotrabajo" id="tipotrabajo4" value="Medicion" <?php echo set_radio( 'tipotrabajo', 'Medicion') ?>>
                                                <label class="form-check-label" for="tipotrabajo">Medicion</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="tipotrabajo" id="tipotrabajo5" value="Pauta Anual" <?php echo set_radio( 'tipotrabajo', 'Pauta Anual') ?>>
                                                <label class="form-check-label" for="tipotrabajo">Pauta Anual</label>
                                            </div>
                                        </div>


                                        <div class="form-group  col-md-12">
                                            <h3>Detalle</h3>
                                            <?php echo form_textarea(['name'=>'detalle','placeholder'=>'Descripción ','value'=> set_value('detalle'),'class'=>'form-control','row'=>'5']); ?>

                                            <div class="col-md-5">
                                                <?php echo form_error('detalle','<div class="text-danger">','</div>') ?>
                                            </div>
                                        </div>
                                        <div class="form-group  col-md-12">
                                          <?php if ($Tipo==2||$Tipo==3): ?>
                                            <label>Urgente</label>
                                            <div class="custom-control custom-checkbox">
                                                <?php echo form_checkbox('urgente', 'SI'); ?>
                                                <label class="custom-control-label" for="customCheck1">Se requiere urgente?</label>
                                            </div>
                                          <?php endif; ?>

                                        </div>

                                    </div>
                                    <!-- panel-body -->
                                    <div class="panel-footer">
                                        <?php echo form_submit(['name'=>'submit','value'=>'Enviar Mantencion','class'=>'btn btn-primary']); ?>
                                    </div>

                                    <?php echo form_close(); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include("template/footer.php"); ?>
