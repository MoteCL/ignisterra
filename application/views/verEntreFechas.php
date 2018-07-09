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
                              <i class="voyager-search"></i>
                              <a href="<?php echo base_url('index.php/seguimiento/get_fechas'); ?>" target="_self" style="color:">Buscador</a>

                            </li>
                            <li class="active">
                                Entre Fechas
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
                            <i class="voyager-news"></i> Listado entre fechas


                        </h1>

                          <?php echo 'Desde '.$start.' Hasta '.$end; ?>
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
                                        <div class="table-responsive">
                                            <table id="tbl_personal" class="table table-hover dataTable">
                                                <thead>
                                                    <tr>
                                                        <th>NroSolicitud</th>
                                                        <th>Maquina</th>
                                                        <th>Tipo</th>
                                                        <th>Tipo de Trabajo</th>
                                                        <th>Fecha</th>
                                                        <th>Estado</th>
                                                        <th>Urgente</th>
                                                        <th>Solicitante</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                  <?php if ($datos): ?>
                                                    <?php foreach ($datos as $dato): ?>
                                                      <tr>
                                                        <td>
                                                          <?php echo $dato-> NroSolicitud ?>
                                                        </td>
                                                        <td>
                                                          <?php echo $dato-> maquina ?>
                                                        </td>
                                                        <td>
                                                          <?php echo $dato-> tipomantencion ?>
                                                        </td>
                                                        <td>
                                                          <?php echo $dato-> tipotrabajo ?>
                                                        </td>
                                                        <td>
                                                          <?php echo $dato-> fechasolicitud ?>
                                                        </td>
                                                        <td>
                                                          <?php echo $dato-> estado ?>
                                                        </td>
                                                        <td>
                                                          <?php echo $dato-> urgente ?>
                                                        </td>
                                                        <td>
                                                          <?php echo $dato-> Nombre ?>
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

    <?php include("template/footertable.php"); ?>
