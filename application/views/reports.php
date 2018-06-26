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
                                <i class="voyager-home"></i>
                                 <a href="<?php echo base_url('index.php/main/menu'); ?>"  target="_self" style="color:">Panel</a>
                            </li>
                            <li class="active">
                                <i class="voyager-file-text"></i> Reportes
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
                        <li class="dropdown">
                            <a href="#8-dropdown-element" data-toggle="collapse" aria-expanded="false" target="_self" style="color:"> <span class="icon voyager-documentation"></span> <span class="title">Encargado</span> </a>
                            <div id="8-dropdown-element" class="panel-collapse collapse ">
                                <div class="panel-body">
                                    <ul class="nav navbar-nav">
                                        <li class="">
                                            <a href="<?php echo base_url('index.php/mantencion/listado');  ?>" target="_self" style="color:">
              <span class="icon voyager-list"></span> <span class="title">Lista de Mantencion</span> </a>
                                        </li>
                                        <li class="">
                                            <a href="<?php echo base_url('index.php/mantencion/buscarView');  ?>" target="_self" style="color:">
              <span class="icon voyager-search"></span> <span class="title">Buscar Mantencion</span> </a>
                                        </li>
                                        <li class="">
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
                                        <li class="active">
                                            <a href="<?php echo base_url('index.php/reportes/index');  ?>" target="_self" style="color:">
              <span class="icon voyager-file-text"></span> <span class="title">Reportes</span> </a>
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
                        <i class="voyager-file-text"></i> Reportes Mantencion
                    </h1>
                    <?php include('template/msg.php'); ?>


                    <div class="page-content edit-add container-fluid">
                        <div class="row">
                            <div class="col-md-12">

                                <div class="panel panel-bordered">

                                    <div class="panel-body">
                                      <div class="row">
                                      <div class="col-lg-3 col-md-6">
                                          <div class="panel panel-info">
                                              <div class="panel-heading">
                                                  <div class="row">
                                                      <div class="col-md-6">
                                                        <br>
                                                          <i class="voyager-calendar fa-2x" style="padding-left:10px"></i>
                                                      </div>
                                                      <div class="col-xs-10 text-center">
                                                          <div class="huge">Generar Informe de Mantenciones ingresadas al sistema </div>

                                                      </div>
                                                  </div>
                                              </div>

                                                <div class="panel-footer">
                                                    <a href="<?php echo base_url('index.php/reportes/usoMaquina') ?>" class="btn btn-link">
                                                    <span class="pull-left">Obtener reporte</span>
                                                    </a>
                                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                                </div>

                                          </div>
                                      </div>
                                      <div class="col-lg-3 col-md-6">
                                          <div class="panel panel-success">
                                              <div class="panel-heading">
                                                  <div class="row">
                                                      <div class="col-md-6">
                                                        <br>
                                                          <i class="voyager-check fa-2x" style="padding-left:10px"></i>
                                                      </div>
                                                      <div class="col-xs-10 text-center">
                                                          <div class="huge">Generar Informe de Mantenciones ingresadas al sistema entre un mes </div>

                                                      </div>
                                                  </div>
                                              </div>

                                                  <div class="panel-footer">
                                                      <a href="<?php echo base_url('index.php/reportes/Mes') ?>" class="btn btn-link">
                                                      <span class="pull-left">Obtener reporte</span>
                                                      </a>
                                                      <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                                  </div>
                                          </div>
                                      </div>
                                      <div class="col-lg-3 col-md-6">
                                          <div class="panel panel-danger">
                                              <div class="panel-heading">
                                                  <div class="row">
                                                      <div class="col-md-6">
                                                        <br>
                                                          <i class="voyager-boat fa-2x" style="padding-left:10px"></i>
                                                      </div>
                                                      <div class="col-xs-10 text-center">
                                                          <div class="huge">Generar Informe de Mantencion de acuerdo a dos fechas eleguidas </div>

                                                      </div>
                                                  </div>
                                              </div>
                                                  <div class="panel-footer">
                                                    <button type="button" class="btn btn-link"  data-toggle="modal" data-target="#exampleModalCenter">
                                                      <span class="pull-left">Obtener reporte</span>

                                                      </button>
                                                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                                  </div>
                                          </div>
                                      </div>
                                      <div class="col-lg-3 col-md-6">
                                          <div class="panel panel-primary">
                                              <div class="panel-heading">
                                                  <div class="row">
                                                      <div class="col-md-6">
                                                        <br>
                                                          <i class="voyager-person fa-2x" style="padding-left:10px"></i>
                                                      </div>
                                                      <div class="col-xs-9 text-center">
                                                          <div class="huge">Ver total de Mantenciones ABIERTAS Y CERRADAS en el sistema </div>

                                                      </div>
                                                  </div>
                                              </div>
                                                  <div class="panel-footer">
                                                      <a href="<?php echo base_url('index.php/reportes/verEstado') ?>" class="btn btn-link">
                                                      <span class="pull-left">Obtener reporte</span>
                                                      </a>
                                                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                                  </div>
                                          </div>
                                      </div>


                                  </div>
                                </div>
                                <!-- Modal -->
                            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                              <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalCenterTitle">Modal title</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                  <div class="modal-body">
                                    <div class="row">
                                      <label>Desde</label>
                                      <input type="date" name="" value="" class="form-control">
                                    </div>
                                    <div class="row">
                                      <label>Hasta</label>
                                      <input type="date" name="" value="" class="form-control">
                                    </div>
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Save changes</button>
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
