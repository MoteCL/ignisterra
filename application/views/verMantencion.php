<?php include("template/header.php"); ?>

<body class="voyager ">

    <div id="voyager-loader">
        <?php echo base_url('assets/img/logo-icon.png'); ?>
        <img src="<?php echo base_url('assets/img/logo-icon.png'); ?>" alt="Voyager Loader">
    </div>


    <div class="app-container">
        <div class="fadetoblack visible-xs"></div>
        <div class="row content-container">
            <nav class="navbar navbar-default navbar-fixed-top navbar-top">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button class="hamburger btn-link">
          <span class="hamburger-inner"></span>
          </button>
                        <ol class="breadcrumb hidden-xs">
                            <li class="">
                                <i class="voyager-home"></i> Tablero
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
                                    <?php echo $Nombre ?> </h4>


                                <a href="#" class="btn btn-primary">Perfil</a>
                                <div style="clear:both"></div>
                            </div>
                        </div>

                    </div>
                    <ul class="nav navbar-nav">
                        <li class="">
                            <a href="<?php echo base_url('index.php/main/menu'); ?>" target="_self" style="color:">
        <span class="icon voyager-documentation"></span> <span class="title">Panel</span> </a>
                        </li>
                        <li class="">
                            <a href="<?php echo base_url('index.php/main/configEmail'); ?>" target="_self" style="color:"> <span class="icon voyager-mail"></span> <span class="title">Config Email<span>
                            </a>
                        </li>

                        <li class="dropdown active">
                            <a href="#8-dropdown-element" data-toggle="collapse" aria-expanded="false" target="_self" style="color:"> <span class="icon voyager-documentation"></span> <span class="title">Encargado</span> </a>
                            <div id="8-dropdown-element" class="panel-collapse collapse ">
                                <div class="panel-body">
                                    <ul class="nav navbar-nav">
                                        <li class="active">
                                            <a href="<?php echo base_url('index.php/mantencion/listado');  ?>" target="_self" style="color:">
              <span class="icon voyager-list"></span> <span class="title">Lista de Mantencion</span> </a>
                                        </li>
                                        <li class="">
                                            <a href="<?php echo base_url('index.php/mantencion/buscarView');  ?>" target="_self" style="color:">
              <span class="icon voyager-search"></span> <span class="title">Buscar Mantencion</span> </a>
                                        </li>
                                        <li class="active">
                                            <a href="<?php echo base_url('index.php/seguimiento/entreFechas');?>" target="_self" style="color:">
              <span class="icon voyager-calendar"></span> <span class="title">Entre fecha</span> </a>
                                        </li>
                                        <li class="">
                                            <a href="<?php echo base_url('index.php/seguimiento/MAN_Seguimiento');  ?>" target="_self" style="color:">
              <span class="icon voyager-check"></span> <span class="title">List Man. asignadas</span> </a>
                                        </li>
                                        <li class="">
                                            <a href="<?php echo base_url('index.php/calendario/index');  ?>" target="_self" style="color:">
              <span class="icon voyager-calendar"></span> <span class="title">Calendarizacion</span> </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </nav>
            </div>

            <!-- Main Content -->
            <div class="container-fluid">
                <div class="side-body padding-top">

                    <h1 class="page-title">
                        <i class="voyager-truck"></i> Mantencion
                        <?php echo $data-> NroSolicitud ?> &nbsp;


                        <a href="<?php echo base_url('index.php/mantencion/listado');  ?>" class="btn btn-warning">
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
                                                    <?php echo $data-> fechasolicitud; ?>
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
                                            <div class="col-4 col-md-2">Estado
                                                <p>
                                                    <?php echo $data-> estado; ?>
                                                </p>
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
                                        <div class="panel-body" style="padding-top:0;">
                                            <div class="row">
                                                <?php echo form_open("mantencion/save_MANTecnico/{$data->NroSolicitud}"); ?>

                                                <div class="divider"> </div>
                                                <div class="row">
                                                    <div class="form-group col-md-2">
                                                        <h5>Clasificacion :</h5>

                                                        <?php $clasificacion = array(
                                                  				'Electrico'         => 'Electrico',
                                                          'Mecanico'         => 'Mecanico',
                                                          'Calibracion'           => 'Calibracion',
                                                          'Operativo'           => 'Operativo',
                                                          'Solicitud expresa de mantencion'           => 'Solicitud expresa de mantencion',
                                                  			);
                                                  		 ?>
                                                        <?php echo form_dropdown('clasificacion', $clasificacion,set_value('clasificacion'),['class'=>'form-control']);?>



                                                    </div>
                                                    <?php echo form_error('clasificacion','<div class="text-danger">','</div>') ?>
                                                </div>
                                                <div class="row">
                                                    <div class="form-group col-md-8">
                                                        <h5>Tipo de Detencion :</h5>

                                                        <input class="form-check-input" type="radio" name="tipo_detencion" value="Sin detencion" <?php echo set_radio( 'tipo_detencion', 'Sin detencion') ?>>
                                                        <label class="form-check-label" for="inlineRadio1">Sin detencion</label>
                                                        <input class="form-check-input" type="radio" name="tipo_detencion" value="Parcial" <?php echo set_radio( 'tipo_detencion', 'Parcial') ?>>
                                                        <label class="form-check-label" for="inlineRadio1">Det. Parcial</label>
                                                        <input class="form-check-input" type="radio" name="tipo_detencion" value="Completa" <?php echo set_radio( 'tipo_detencion', 'Completa') ?>>
                                                        <label class="form-check-label" for="inlineRadio1"> Completa</label>
                                                        <input class="form-check-input" type="radio" name="tipo_detencion" value="Horometro" <?php echo set_radio( 'tipo_detencion', 'Horometro') ?>>
                                                        <label class="form-check-label" for="inlineRadio1">Horometro</label>
                                                    </div>

                                                </div>
                                                <?php echo form_error('tipo_detencion','<div class="text-danger">','</div>') ?>

                                            </div>
                                        </div>
                                        <div class="col-4 col-md-10">
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
                                                                            <input type="text" name="id_tecnico1" id="id_tecnico1" value="" class="form-control"> <br>
                                                                            <input type="text" name="id_tecnico2" id="id_tecnico2" value="" class="form-control"> <br>
                                                                            <input type="text" name="id_tecnico3" id="id_tecnico3" value="" class="form-control">
                                                                            <?php echo form_error('id_tecnico','<div class="text-danger">','</div>') ?>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="col-sm-6">
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
                                                                    <div class="col-sm-4">
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
                                                                            <!-- <input name="HM[]"  class="form-control" type="number"> -->
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
                                                                    <textarea name="Comentario" rows="2" placeholder="Comentario" class="form-control" cols="60"></textarea>
                                                                    <?php echo form_error('Comentario','<div class="text-danger">','</div>') ?>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                    <div class="panel-footer text-center">

                                                        <button type="submit" name="button" class="btn btn-info btn_add" value="">
                                   <span class="glyphicon glyphicon-pencil"></span> &nbsp; Aplicar
                                 </button>
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
                </div>
            </div>
        </div>
    </div>
    </div>
    <?php include("template/footerMantencion.php"); ?>
