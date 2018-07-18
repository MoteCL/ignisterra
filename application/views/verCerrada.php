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
                            <li class="">
                                <i class="voyager-list"></i>
                                <a href="<?php echo base_url('index.php/mantencion/listadoAprobado'); ?>" target="_self" style="color:">Listado</a>
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


                        <a href="<?php echo base_url('index.php/mantencion/listadoAprobado');  ?>" class="btn btn-warning">
                <span class="glyphicon glyphicon-list"></span>&nbsp;
                Regresar a listado
            </a>
                        <?php $var = urldecode($data-> maquina); ?>
                        <?php echo form_open("mantencion/historialMaquina/{$var}",['class'=>'btn']); ?>
                        <input type="hidden" name="numero" value="<?php echo $data-> NroSolicitud; ?>">
                        <button type="submit" name="button" class="btn btn-info" value="">
                <span class="glyphicon glyphicon-list"></span>&nbsp;
                Ver Historial de Maquina
              </button>

                        </form>

                    </h1>

                    <div class="page-content container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="panel panel-bordered">
                                    <div class="panel-body">
                                        <!-- Stack the columns on mobile by making one full-width and the other half-width -->
                                        <div class="row">

                                            <div class="col-4 col-md-2">Numero de Solicitud
                                                <p>
                                                    <?php echo $data-> NroSolicitud; ?>
                                                </p>
                                            </div>
                                            <div class="col-4 col-md-2">Fecha
                                                <p>
                                                    <?php echo  date('j M Y',strtotime($data-> fechasolicitud)); ?>
                                                </p>
                                            </div>
                                            <div class="col-4 col-md-2">Hora
                                                <p>
                                                    <?php echo $data-> horasolicitud; ?>
                                                </p>
                                            </div>
                                        </div>
                                        <hr style="margin:0;">
                                        <div class="row">
                                            <div class="col-4 col-md-2">Maquina
                                                <p>
                                                    <?php echo $data-> maquina; ?>
                                                </p>
                                            </div>
                                            <div class="col-4 col-md-2">Codigo Area
                                                <?php foreach ($area as $row) {   ?>
                                                <?php if ($row-> CodArea == $data-> CodArea): ?>
                                                <p>
                                                    <?php echo $row-> DescArea; ?>
                                                </p>
                                                <?php endif; ?>
                                                <?php } ?>

                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="col-4 col-md-2">Tipo de Mantencion
                                                <p>
                                                    <?php echo $data-> tipomantencion; ?>
                                                </p>
                                            </div>
                                            <?php if ($data-> tipotrabajo): ?>
                                            <div class="col-4 col-md-2">Tipo de Trabajo
                                                <p>
                                                    <?php echo $data-> tipotrabajo; ?>
                                                </p>
                                            </div>
                                            <?php endif; ?>
                                            <div class="col-4 col-md-2">Estado
                                                <p>
                                                    <?php echo $data-> estado; ?>
                                                </p>
                                            </div>

                                        </div>
                                        <hr style="margin:0;">
                                        <div class="row">
                                            <div class="col-4 col-md-2">Solicitante Codigo
                                                <p>
                                                    <?php echo $data-> cod_detecta; ?>
                                                </p>
                                            </div>
                                            <?php if ($personas): ?>
                                            <?php foreach ($personas as $persona): ?>
                                            <?php if ($data-> cod_detecta == $persona-> Codigo): ?>
                                            <div class="col-4 col-md-2">Nombre
                                                <p>
                                                    <?php echo $persona-> Nombre; ?>
                                                </p>
                                            </div>
                                            <div class="col-4 col-md-2">Area de Solicitante
                                                <p>
                                                    <?php echo $persona-> Area; ?>
                                                </p>
                                            </div>
                                            <?php endif; ?>

                                            <?php endforeach; ?>
                                            <?php endif; ?>


                                        </div>
                                        <div class="panel-heading" style="border-bottom:0;">
                                            <h3 class="panel-title">Detalle</h3>
                                        </div>
                                        <div class="panel-body" style="padding-top:0;">
                                            <p>
                                                <?php echo strtoupper($data -> detalle); ?>
                                            </p>
                                        </div>
                                        <!-- panel-body -->
                                        <hr style="margin:0;">
                                        <br>
                                        <div class="panel-body" style="padding-top:0;">

                                        </div>
                                        <div class="col-4 col-md-10">
                                            <div class="panel-heading" style="border-bottom:0;">
                                                <h3 class="panel-title">Detalle de seguimiento</h3>
                                            </div>
                                            <?php if ($seguimientos): ?>
                                            <?php foreach ($seguimientos as $seguimiento): ?>
                                            <?php if ($seguimiento-> NroSolicitud == $data-> NroSolicitud): ?>
                                            <div class="row">
                                                <div class="col-4 col-md-2"> Clasificacion
                                                    <p>
                                                        <?php echo $seguimiento-> clasificacion; ?>
                                                    </p>
                                                </div>
                                                <div class="col-4 col-md-2"> Tipo Detencion
                                                    <p>
                                                        <?php echo $seguimiento-> tipo_detencion; ?>
                                                    </p>
                                                </div>
                                                <div class="col-4 col-md-2"> Fecha Ingresada
                                                    <p>
                                                        <?php echo  date('j M Y',strtotime($seguimiento-> fecha)); ?>
                                                    </p>
                                                </div>
                                            </div>
                                            <?php if ($detalles): ?>
                                            <?php foreach ($detalles as $detalle): ?>
                                            <?php if ($detalle-> id_detalle == $seguimiento-> idMan_Tecnico): ?>
                                            <div class="row">
                                                <div class="col-4 col-md-2"> Hora Inicio
                                                    <p>
                                                        <?php echo $detalle-> horaInicio; ?>
                                                    </p>
                                                </div>
                                                <div class="col-4 col-md-2"> Hora Termino
                                                    <p>
                                                        <?php echo $detalle-> horaTermino; ?>
                                                    </p>
                                                </div>
                                                <div class="col-4 col-md-2"> HH
                                                    <p>
                                                        <?php echo $detalle-> HH; ?>
                                                    </p>
                                                </div>
                                                <div class="col-4 col-md-2"> HM
                                                    <p>
                                                        <?php echo $detalle-> HM; ?>
                                                    </p>
                                                </div>
                                                <div class="col-4 col-md-2"> Interrumpe Produccion
                                                    <p>
                                                        <?php echo $detalle-> Int_Prod;; ?>
                                                    </p>
                                                </div>
                                                <div class="col-4 col-md-2"> Comentario
                                                    <p>
                                                        <?php echo $detalle-> Comentario;; ?>
                                                    </p>
                                                </div>
                                            </div>
                                            <?php endif; ?>
                                            <?php endforeach; ?>
                                            <?php endif; ?>
                                            <hr style="margin:0;">
                                            <br>
                                            <?php endif; ?>
                                            <?php endforeach; ?>
                                            <?php endif; ?>



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

    <?php include("template/footerMantencion.php"); ?>
