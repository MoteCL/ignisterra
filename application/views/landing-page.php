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
                            <li class="active">
                                <i class="voyager-home"></i> Panel
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
                                <li class="active">
                                    <a href="<?php echo base_url('index.php/main/index'); ?>" target="_self" style="color:">
                            <span class="icon voyager-documentation"></span> <span class="title">Panel de Control</span> </a>
                                </li>
                                <li class="">
                                    <a href="<?php echo base_url('index.php/mantencion/landingPage'); ?>" target="_self" style="color:"> <span class="icon voyager-tag"></span> <span class="title">Solicitar Mant.<span>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="<?php echo base_url('index.php/mantencion/listByArea'); ?>" target="_self" style="color:"> <span class="icon voyager-list"></span> <span class="title">List Solicitud<span>
                                    </a>
                                </li>
                            </ul>


                            <?php
                            break;
                        case 3:
                            include('template/nav-enc.php');
                            break;
                        case 4:
                          ?>
                          <ul class="nav navbar-nav">
                              <li class="active">
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
                        <i class="voyager-star"></i> Pagina de Inicio
                    </h1>

                    <?php include('template/msg.php'); ?>


                    <div class="page-content edit-add container-fluid">
                        <div class="row">
                            <div class="col-md-12">

                                <div class="panel panel-bordered">
                                    <!-- form start -->
                                    <div class="panel-body">
                                        <?php
                                        switch ($Tipo) {
                                            case 1:
                                                include('profile/user.php');
                                              break;
                                            case 2:
                                                include('profile/sup.php');
                                                break;
                                            case 3:
                                                include('profile/enc.php');
                                                break;
                                            case 4:
                                                include('profile/adm.php');
                                                break;

                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php if ($Tipo==3): ?>
      <footer class="app-footer">
          <div class="site-footer-right">
                          Made with <i class="voyager-heart"></i>
                                        - v1.1.0
                  </div>
      </footer>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script type="text/javascript" src="<?php echo base_url('assets/vendor/tcg/voyager/assets/js/app.js'); ?>"></script>
      <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.16/datatables.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
      <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
      <script type="text/javascript">
       google.charts.load('current', {'packages':['corechart']});
       google.charts.setOnLoadCallback(drawChart);
       function drawChart() {
                 var data = google.visualization.arrayToDataTable([
                     [{type: 'string', label: 'Nombre'}, {type: 'number', label: 'Horas'}],
                   <?php
                   foreach ($result as $row) {
                      echo '[ \'' . $row->estado . '\' , ' . $row->contador. '],' ;
                   }
                   ?>
                 ]);

                 var options = {
           title: 'Calendario de actividades, acuerdo a un mes'
         };


                var chart = new google.visualization.PieChart(document.getElementById('piechart'));

         chart.draw(data, options);
       }
        </script>
      <?php else: ?>
      <?php include("template/footer.php"); ?>
    <?php endif; ?>
