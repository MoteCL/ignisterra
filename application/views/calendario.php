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
                                <i class="voyager-home"></i> <a href="<?php echo base_url('index.php/main/index'); ?>" target="_self" style="color:">Panel</a>
                            </li>
                            <li class="active">
                                <i class="voyager-calendar"></i> Calendarizacion
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
                        <span class="icon voyager-list"></span> <span class="title">Lista Abierta</span> </a>
                                            </li>


                                            <li class="">
                                                <a href="<?php echo base_url('index.php/seguimiento/MAN_Seguimiento');  ?>" target="_self" style="color:">
                        <span class="icon voyager-check"></span> <span class="title">List por Cerrar</span> </a>
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
                            <li class="active">
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
                            <li class="active">
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
                        <i class="voyager-calendar"></i> Agregar Calendarizacion Preventiva de Maquinarias
                    </h1>
                    <?php include('template/msg.php'); ?>


                    <div class="page-content edit-add container-fluid">
                        <div class="row">
                            <div class="col-md-12">

                                <div class="panel panel-bordered">
                                    <?php echo form_open('calendario/saveCalendarizacion'); ?>
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="col-6 col-md-3">
                                                <h3>Listado de Maquinas</h3> <br>
                                             <select class="form-control select2 select2-hidden-accessible"  name="maquina" tabindex="-1" aria-hidden="true">
                                                  <?php if ($maquinas): ?>
                                                    <?php foreach ($maquinas as $maquina): ?>
                                                      <option  value="<?php echo $maquina-> DescArea ?>"><?php echo $maquina-> Maquina ?></option>
                                                      <?php endforeach; ?>
                                                  <?php endif; ?>

                                                </select>
                                                <br>
                                                <br>
                                                <?php echo form_error('maquina','<div class="text-danger">','</div>') ?>
                                            </div>

                                            <div class="col-4 col-md-2">
                                                <h3> Fecha Inicio</h3>
                                                <br>
                                                <div class="form-group">
                                                    <input type="date" class="form-control" name="fecha" id="datePicker" value="">
                                                    <?php echo form_error('fecha','<div class="text-danger">','</div>') ?>
                                                </div>

                                            </div>
                                            <div class="col-6 col-md-2">
                                              <h3>Periodo</h3>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="periodo" value="Anual" >
                                                    <label class="form-check-label">
                                                  Anual
                                                </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="periodo" value="Diario" >
                                                    <label class="form-check-label">
                                                      Diario
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="periodo" value="Mensual" >
                                                    <label class="form-check-label">
                                                    Mensual
                                                  </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="periodo" value="Quincenal" >
                                                    <label class="form-check-label">
                                                  Quincenal
                                                </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="periodo" value="Semanal" >
                                                    <label class="form-check-label">
                                                Semanal
                                              </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="periodo" value="Semestral" >
                                                    <label class="form-check-label">
                                              Semestral
                                            </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="periodo" value="Trimestral" >
                                                    <label class="form-check-label">
                                            Trimestral
                                          </label>
                                                </div>
                                                <?php echo form_error('periodo','<div class="text-danger">','</div>') ?>
                                            </div>
                                            <!-- END -->
                                            <div class="col-6 col-md-2">
                                              <h3>Trabajo</h3>
                                                <div class="form-check">
                                                    <input class="form-radio-input" type="radio" name="trabajo" value="Electrica" id="trabajo1">
                                                    <label class="form-check-label">
                                                  [ELE] Electrica
                                                </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-radio-input check" type="radio" name="trabajo" value="Lubricacion">
                                                    <label class="form-check-label">
                                                      [LUB] Lubricacion
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-radio-input check" type="radio" name="trabajo" value="Mecanico">
                                                    <label class="form-check-label">
                                                    [MEC] Mecanico
                                                  </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-radio-input check" type="radio" name="trabajo" value="Medicion">
                                                    <label class="form-check-label">
                                                  [MED] Medicion
                                                </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-radio-input check" type="radio" name="trabajo" value="Pauta Anual">
                                                    <label class="form-check-label">
                                                [PA] Pauta Anual
                                              </label>
                                                </div>
                                                  <?php echo form_error('trabajo','<div class="text-danger">','</div>') ?>
                                            </div>
                                            <!-- END -->
                                            <div class="col-6 col-md-3" hidden id="divhidden">
                                              <h3>Subtrabajo</h3>
                                              <div class="form-check">
                                                  <input class="form-radio-input" type="radio" name="subtrabajo" value="Aceite">
                                                  <label class="form-check-label">
                                                    Aceite
                                                  </label>
                                              </div>
                                              <div class="form-check">
                                                  <input class="form-radio-input" type="radio" name="subtrabajo" value="Calibrar">
                                                  <label class="form-check-label">
                                                  Calibrar
                                                </label>
                                              </div>
                                              <div class="form-check">
                                                  <input class="form-radio-input" type="radio" name="subtrabajo" value="Engrase">
                                                  <label class="form-check-label">
                                                  Engrase
                                              </label>
                                              </div>
                                              <div class="form-check">
                                                  <input class="form-radio-input" type="radio" name="subtrabajo" value="Inspeccionar">
                                                  <label class="form-check-label">
                                                  Inspeccionar
                                            </label>
                                              </div>
                                              <div class="form-check">
                                                  <input class="form-radio-input" type="radio" name="subtrabajo" value="Limpieza">
                                                  <label class="form-check-label">
                                                  Limpieza
                                            </label>
                                              </div>
                                              <div class="form-check">
                                                  <input class="form-radio-input" type="radio" name="subtrabajo" value="Medicion">
                                                  <label class="form-check-label">
                                                  Medicion
                                            </label>
                                              </div>
                                              <div class="form-check">
                                                  <input class="form-radio-input" type="radio" name="subtrabajo" value="Reaprete">
                                                  <label class="form-check-label">
                                                  Reaprete
                                            </label>
                                              </div>
                                              <div class="form-check">
                                                  <input class="form-radio-input" type="radio" name="subtrabajo" value="Tensar">
                                                  <label class="form-check-label">
                                                  Tensar
                                            </label>
                                              </div>
                                            </div>
                                            <!-- END -->

                                        </div>
                                        <div class="row">
                                            <div class="col-6 col-md-6">
                                                <h3>Detalle</h3>
                                                <div class="form-group">

                                                    <textarea class="form-control" name="detalle" rows="4" cols="6"></textarea>
                                                    <?php echo form_error('detalle','<div class="text-danger">','</div>') ?>
                                                </div>
                                                <button type="submit" class="btn btn-primary">Ingresar Mantencion</button>
                                            </div>
                                        </div>
                                        <?php echo form_close(); ?>
                                        <br>

                                        <div class="col-5 col-xl-12">
                                            <div class="table">
                                                <table class="table table-bordered" id="tbl_personal">
                                                    <thead>
                                                        <tr>
                                                            <th></th>
                                                            <th>Maquinas</th>
                                                            <th>Fecha</th>
                                                            <th>Periodo</th>
                                                            <th>Trabajo</th>
                                                            <th>Subtrabajo</th>
                                                            <th>Detalle</th>
                                                            <th>Fecha Vencimiento</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                      <?php if ($calendarios): ?>
                                                        <?php foreach ($calendarios as $calendario): ?>
                                                          <tr>
                                                            <td>
                                                              <?php echo $calendario-> id_calendario; ?>
                                                            </td>
                                                            <td>
                                                              <?php echo $calendario-> maquina; ?>
                                                            </td>
                                                            <td>
                                                              <?php echo $calendario-> fecha; ?>
                                                            </td>
                                                            <td>
                                                              <?php echo $calendario-> periodo; ?>
                                                            </td>
                                                            <td>
                                                              <?php echo $calendario-> trabajo; ?>
                                                            </td>
                                                            <td>
                                                              <?php echo $calendario-> subtrabajo; ?>
                                                            </td>
                                                            <td>
                                                              <?php echo $calendario-> detalle; ?>
                                                            </td>
                                                            <td>
                                                              <?php echo $calendario-> fechaVence; ?>
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
    </div>

    <?php include("template/footer.php"); ?>
