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
                                            <li class="">
                                                <a href="#" target="_self" style="color:">
                        <span class="icon voyager-laptop"></span> <span class="title">Programa Mantencion</span> </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="active">
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
                            <li class="active">
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
                                         <!-- <option selected="">Todos</option> -->
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
                                          <div class="form-group  col-md-2">
                                            <h5>Resultado</h5>
                                            <input name="TotalHrs" id="resultado" class="form-control" type="text" readonly>
                                            <div class="col-md-5">
                                                <?php echo form_error('TotalHrs','<div class="text-danger">','</div>') ?>
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

         $("#horaTermino").keypress(function(event)
         {
           ObtieneTotHoras();
           $("input[name=Comentarioo]").focus();
         })

         function ObtieneTotHoras()
         {
                 HDesde=$('#horaInicio').val();
                 HHasta=$('#horaTermino').val();

                 hora1 = (HDesde).split(":");
                 hora2 = (HHasta).split(":");
                 HoraDesde=(hora1[0]);
                 MinutoDesde=(hora1[1]);
                 HoraHasta=(hora2[0]);
                 MinutoHasta=(hora2[1]);
                 TotDesde=parseInt((HoraDesde*60)) + parseInt(MinutoDesde);
                 TotHasta=parseInt(HoraHasta*60) + parseInt(MinutoHasta);
                 RestaHoras=(TotHasta - TotDesde);
                 TotHorasTrab=(RestaHoras / 60).toFixed(2);


                 $('#resultado').val(TotHorasTrab);

         }




    });

    </script>

    </body>
    </html>
"); ?>
