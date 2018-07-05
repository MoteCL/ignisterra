<?php include("template/header.php"); ?>

<body class="voyager ">

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

                            <li class="active">
                              <i class="voyager-person"></i>
                                Actividades
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

            <!-- Main Content -->
            <div class="container-fluid">
                <div class="side-body padding-top">

                    <h1 class="page-title">
                        <i class="fas fa-user-tag"></i> Otras Actividades  &nbsp;

                    </h1>
                    <div class="page-content container-fluid">
                      <div class="alerts"><?php include("template/msg.php"); ?></div>
                        <div class="row">
                            <div class="col-md-12">
                              <div class="panel panel-bordered">
                                  <div class="panel-body">
                                    <?php echo form_open('main/saveActividades'); ?>
                                      <div class="form-group  col-md-12">
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

                                        </div>


                                    <div class="form-group  col-md-12">
                                  <h5>Tecnico</h5>


                                       <select multiple class="form-control" name="id_tecnico">
                                         <option selected="">Todos</option>
                                         <?php if ($tecnicos): ?>
                                           <?php foreach ($tecnicos as $tecnico): ?>
                                             <option value=" <?php echo $tecnico-> Codigo; ?>"><?php echo $tecnico-> Nombre; ?></option>
                                           <?php endforeach; ?>
                                         <?php endif; ?>

                                       </select>
                                          <?php echo form_error('persona','<div class="text-danger">','</div>') ?>
                                     </div>
                                        <div class="form-group col-md-12">
                                            <h5>Actividades :</h5>
                                            <input class="form-check-input" type="radio" name="actividad" value="Compras" <?php echo set_radio( 'actividades', 'Compras') ?>>
                                            <label class="form-check-label" for="inlineRadio1">Compras</label>
                                            <input class="form-check-input" type="radio" name="actividad" value="Capacitacion" <?php echo set_radio( 'actividades', 'Capacitacion') ?>>
                                            <label class="form-check-label" for="inlineRadio1">Capacitacion</label>
                                            <input class="form-check-input" type="radio" name="actividad" value="Servicio" <?php echo set_radio( 'actividades', 'Servicio') ?>>
                                            <label class="form-check-label" for="inlineRadio1"> Com. Servicio</label>
                                            <input class="form-check-input" type="radio" name="actividad" value="Reunion" <?php echo set_radio( 'actividades', 'Reunion') ?>>
                                            <label class="form-check-label" for="inlineRadio1">Reunion</label>
                                            <input class="form-check-input" type="radio" name="actividad" value="Administrativo" <?php echo set_radio( 'actividades', 'Administrativo') ?>>
                                            <label class="form-check-label" for="inlineRadio1">Administrativo</label>
                                            <input class="form-check-input" type="radio" name="actividad" value="Otros" <?php echo set_radio( 'actividades', 'Otros') ?>>
                                            <label class="form-check-label" for="inlineRadio1">Otros</label>
                                        </div>

                                    <div class="col-md-5">
                                        <?php echo form_error('actividad','<div class="text-danger">','</div>') ?>
                                    </div>

                                      <div class="form-group  col-md-12">
                                      <h5>Detalle</h5>
                                        <textarea class="form-control" name="Comentario" rows="3"></textarea>
                                      </div>
                                      <div class="col-md-5">
                                          <?php echo form_error('Comentario','<div class="text-danger">','</div>') ?>
                                      </div>
                                        <div class="form-group  col-md-12">
                                        <div class="row">
                                          <div class="form-group  col-md-1">
                                            <h5>Inicio</h5>
                                            <input type="text" class="form-control" name="horaInicio" id="horaInicio" placeholder="00:00" value="">
                                            <div class="col-md-5">
                                                <?php echo form_error('horaInicio','<div class="text-danger">','</div>') ?>
                                            </div>
                                          </div>
                                          <div class="form-group  col-md-1">
                                            <h5>Termino</h5>
                                            <input type="text" class="form-control" name="horaTermino" id="horaTermino" placeholder="00:00" value="">
                                            <div class="col-md-5">
                                                <?php echo form_error('horaTermino','<div class="text-danger">','</div>') ?>
                                            </div>
                                          </div>
                                        </div>
                                        </div>


                                  </div>
                                  <div class="panel-footer text-center">

                                      <button type="submit" class="btn btn-info btn_add" value="">
                                       <span class="glyphicon glyphicon-link"></span> &nbsp; Ingresar Actividad
                                     </button>
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


    <footer class="app-footer">
        <div class="site-footer-right">
                        Made with <i class="voyager-heart"></i>
                                        - v1.1.0
                </div>
    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/vendor/tcg/voyager/assets/js/app.js'); ?>"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.16/datatables.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/vendor/tcg/voyager/assets/js/jquery.timepicker.js'); ?>"></script>


    <script>

    $(document).ready(function(){


         $('#horaInicio').timepicker({ 'scrollDefault': 'now' , 'timeFormat': 'G:i' });

         $('#horaTermino').timepicker({ 'scrollDefault': 'now' , 'timeFormat': 'G:i' });





    });

    </script>

    </body>
    </html>
"); ?>
