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
                include('template/nav-adm.php');
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
                                              <h5>Solicitante : <?php echo $dato-> Nombre; ?></h5>

                                            </div>


                                          <div class="row">
                                              <div class="form-group">
                                                  <label for="titulo" class="col-md-2 control-label">Maquina</label>

                                                      <div class="col-md-5">
                                                        <select class="form-control select2 select2-hidden-accessible"  id="id_maquinaria" name="" tabindex="-1" aria-hidden="true">
                                                        <option value=" <?php echo $dato-> CodArea ?>"><?php echo $dato->maquina; ?></option>
                                                          <?php if ($maquinas) foreach ($maquinas as $maquina) { ?>

                                                            <option  value="<?php echo $maquina-> CodArea ?>">  <?php echo $maquina-> Maquina ?></option>
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
                                            <div class="row">
                                                <div class="form-group">
                                                    <label for="titulo" class="col-md-2 control-label">Urgente</label>
                                                    <?php
                                                      $urgente = array(
                                                        'SI'         => 'SI',
                                                        'NO'         => 'NO',
                                                      );
                                                     ?>
                                                        <div class="col-md-5">
                                                            <?php echo form_dropdown('urgente',$urgente,set_value('urgente',$dato->urgente),['class'=>'form-control']);?>
                                                        </div>
                                                        
                                                </div>
                                            </div>



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
