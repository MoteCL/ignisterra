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
                                <a href="<?php echo base_url('index.php/mantencion/listado'); ?>" target="_self" style="color:"> <i class="voyager-list"></i> Listado </a>
                            </li>
                            <li class="active">
                                <i class="voyager-edit"></i> Editar Mantencion N
                                <?php echo $dato->NroSolicitud ?>
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
                            <i class="voyager-news"></i> Editar mantencion
                            <?php echo $dato->NroSolicitud ?>
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

                                        <?php echo form_open("mantencion/getEditado/{$dato->NroSolicitud}"); ?>
                                        <fieldset>
                                                <div class="form-group  col-md-12">
                                              <h4>Numero Solicitud : <strong> <?php echo $dato->NroSolicitud; ?> </strong></h4>
                                              <h5>Fecha Solicitud : <strong> <?php echo  date('j M Y',strtotime($dato-> fechasolicitud)); ?></strong></h5>
                                              <h5>Solicitante : <?php echo $dato-> username; ?></h5>

                                            </div>


                                          <div class="row">
                                              <div class="form-group">
                                                  <label for="titulo" class="col-md-2 control-label">Maquina</label>

                                                      <div class="col-md-5">
                                                        <select class="form-control select2 select2-hidden-accessible"  id="id_maquinaria" name="" tabindex="-1" aria-hidden="true">
                                                        <option value=" <?php echo $dato-> CodArea ?>"><?php echo $dato->maquina; ?></option>
                                                          <?php if ($maquinas) foreach ($maquinas as $maquina) { ?>

                                                            <option  value="<?php echo $maquina-> DescArea ?>">  <?php echo $maquina-> Maquina ?></option>
                                                          <?php }?>
                                                        </select>
                                                      </div>
                                                      <div class="col-md-5">
                                                      <?php  echo form_input(['maxlength'=>'35','name'=>'CodArea','id'=>'CodArea','class'=>'form-control','value'=>set_value('CodArea',$dato->CodArea),'readonly'=>'TRUE']);  ?>
                                                      </div>
                                                      <div class="col-md-5">
                                                          <?php echo form_error('$maquina','<div class="text-danger">','</div>') ?>
                                                      </div>

                                                    <input type="hidden" name="maquina" value="<?php echo $dato->maquina ?>" id="maquina" <?php echo set_value('maquina') ?>>

                                              </div>
                                          </div>
                                            <br>
                                            <div class="row">
                                                <div class="form-group">
                                                    <label for="titulo" class="col-md-2 control-label">Tipo Mantencion</label>
                                                    <?php
                                                      $options = array(

                                                        'Correctiva'         => 'Correctiva',
                                                        'Mejora'           => 'Mejora',
                                                        'Preventiva'           => 'Preventiva',
                                                      );
                                                     ?>
                                                        <div class="col-md-5">
                                                            <?php echo form_dropdown('tipomantencion', $options,set_value('tipomantencion',$dato->tipomantencion),['class'=>'form-control']);?>
                                                        </div>
                                                        <div class="col-md-5">
                                                            <?php echo form_error('tipomantencion','<div class="text-danger">','</div>') ?>
                                                        </div>
                                                </div>
                                            </div>
                                            <br>

                                            <div class="row">
                                                <div class="form-group">
                                                    <label for="titulo" class="col-md-2 control-label">Tipo Trabajo</label>
                                                    <?php
                                                      $option = array(
                                                        ''         => '',
                                                        'Electrica'         => 'Electrica',
                                                        'Mecanica'           => 'Mecanica',
                                                        'Lubricacion'           => 'Lubricacion',
                                                        'Medicion'           => 'Medicion',
                                                        'Pauta Anual'           => 'Pauta Anual',
                                                      );
                                                     ?>
                                                        <div class="col-md-5">
                                                            <?php echo form_dropdown('tipotrabajo', $option,set_value('tipomantencion',$dato->tipotrabajo),['class'=>'form-control']);?>
                                                        </div>
                                                        <div class="col-md-5">
                                                            <?php echo form_error('tipotrabajo','<div class="text-danger">','</div>') ?>
                                                        </div>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="form-group">
                                                    <label for="titulo" class="col-md-2 control-label">Detalle</label>

                                                    <div class="col-md-5">
                                                        <?php echo form_textarea('detalle',set_value('detalle',$dato->detalle),['class'=>'form-control']);?>
                                                    </div>
                                                    <div class="col-md-5">
                                                        <?php echo form_error('detalle','<div class="text-danger">','</div>') ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <br>

                                            <div class="form-group">
                                                <div class="col-md-10 col-md-offset-2">
                                                    <?php echo form_submit(['name'=>'submit','value'=>'Actualizar','class'=>'btn btn-success']); ?>
                                                </div>
                                            </div>

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


           $("#id_maquinaria").change(function() {
          var valor = $(this).val(); // Capturamos el valor del select
          var texto = $(this).find('option:selected').text(); // Capturamos el texto del option seleccionado

          $("#CodArea").val(valor);
          $("#maquina").val(texto);
          });


           });

        </script>


</body>

</html>
