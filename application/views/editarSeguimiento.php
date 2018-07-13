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
                              <a href="<?php echo base_url('index.php/seguimiento/MAN_Seguimiento'); ?>" target="_self" style="color:">  Listado Ejecutadas</a>

                            </li>
                            <li class="">
                                Editar
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
                                                <span class="icon voyager-list"></span> <span class="title">Desempeño Maquinas</span> </a>
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
            <div class="container-fluid">
                <div class="side-body padding-top">
                    <div class="container-fluid">
                        <h1 class="page-title">
                            <i class="voyager-edit"></i> Editar Mantencion
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

                                        <?php echo form_open("seguimiento/editarSeguimientoPorId/{$data->id_man_tecnico}"); ?>
                                        <fieldset>
                                            <div class="form-group  col-md-12">
                                                <h4>Numero Solicitud : <strong>
                                                        <?php echo $data->NroSolicitud; ?> </strong></h4>
                                                <h5>Fecha Solicitud : <strong>
                                                        <?php echo  date('j M Y',strtotime($data-> fechasolicitud)); ?></strong></h5>
                                                <h5>Solicitante :
                                                    <?php echo $data-> Nombre; ?>
                                                </h5>
                                            </div>
                                            <div class="row">
                                                <div class="form-group">
                                                    <label class="col-md-2 control-label">Hora Inicio</label>
                                                    <div class="col-md-5">
                                                        <?php echo form_input(['maxlength'=>'35','name'=>'horaInicio','class'=>'form-control','value'=>set_value('horaInicio',$data->horaInicio)]); ?>
                                                    </div>
                                                </div>

                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="form-group">
                                                    <label class="col-md-2 control-label">Hora Termino</label>
                                                    <div class="col-md-5">
                                                        <?php echo form_input(['maxlength'=>'35','name'=>'horaTermino','class'=>'form-control','value'=>set_value('horaInicio',$data->horaTermino)]); ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="form-group">
                                                    <label for="titulo" class="col-md-2 control-label">Comentario</label>

                                                    <div class="col-md-5">
                                                        <?php echo form_textarea(['name'=>'Comentario','class'=>'form-control','value'=>set_value('Comentario',$data->Comentario)]); ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="form-group">
                                                    <label for="titulo" class="col-md-2 control-label">Interrumpe</label>
                                                    <?php
                                                			$options = array(
                                                				'Si'         => 'Si',
                                                        'No'         => 'No',
                                                			);
                                                		 ?>
                                                    <div class="col-md-5">
                                                        <?php echo form_dropdown('Int_Prod', $options,set_value('Int_Prod',$data->Int_Prod),['class'=>'form-control select']);?>
                                                    </div>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="form-group">

                                                    <label for="titulo" class="col-md-2 control-label">Tecnicos</label>
                                                    <?php if ($tecnicos): ?>
                                                    <?php foreach ($tecnicos as $tecnico): ?>
                                                    <?php if ($tecnico->id_detalle== $data->id_detalle): ?>
                                                    <div class="col-md-1">
                                                        <?php echo form_input(['maxlength'=>'35','name'=>'Codigo','class'=>'form-control','value'=>set_value('Codigo',$data->Codigo)]); ?>
                                                    </div>
                                                    <div class="colmd-4">
                                                        <?php echo $tecnico->Nombre ?>
                                                    </div>
                                                    <?php endif; ?>
                                                    <?php endforeach; ?>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-md-10 col-md-offset-2">
                                                    <?php echo form_submit(['name'=>'submit','value'=>'Actualizar','class'=>'btn btn-success']); ?>
                                                </div>
                                            </div>
                                            <br>

                                        </fieldset>
                                        <?php echo form_close(); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include("template/footertable.php"); ?>
