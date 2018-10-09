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
                                <a href="<?php echo base_url('index.php/mantencion/listCerradas'); ?>" target="_self" style="color:">Listado</a>
                            </li>
                            <li class="active">
                                Autorizar
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
                        <li class="">
                            <a href="<?php echo base_url('index.php/mantencion/listByArea'); ?>" target="_self" style="color:"> <span class="icon voyager-list"></span> <span class="title">List Solicitud<span>
                            </a>
                        </li>
                        <li class="active">
                            <a href="<?php echo base_url('index.php/mantencion/listCerradas'); ?>" target="_self" style="color:"> <span class="icon voyager-check"></span> <span class="title">List Cerradas<span>
                            </a>
                        </li>
                        <li class="dropdown">
                            <a href="#2-dropdown-element" data-toggle="collapse" aria-expanded="false" target="_self" style="color:"> <span class="icon voyager-file-text"></span> <span class="title">Reportes</span> </a>
                            <div id="2-dropdown-element" class="panel-collapse collapse ">
                                <div class="panel-body">
                                    <ul class="nav navbar-nav">

                                        <li class="">
                                            <a href="<?php echo base_url('index.php/supervisor/historialMaquina');  ?>" target="_self" style="color:">
                    <span class="icon voyager-truck"></span> <span class="title">Historial Maquinas</span> </a>
                                        </li>


                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>


                    <?php
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
                <?php if ($data): ?>
                <div class="side-body padding-top">

                    <h1 class="page-title">

                        <i class="voyager-truck"></i> Mantencion Tecnica
                        <?php echo $data-> NroSolicitud ?> &nbsp;
                        <?php endif; ?>
                        <a href="<?php echo base_url('index.php/mantencion/listCerradas');  ?>" class="btn btn-warning">
                            <span class="glyphicon glyphicon-list"></span>&nbsp;
                            Regresar a listado Cerradas
                        </a>
                    </h1>
                    <div class="page-content container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="panel panel-bordered">
                                    <div class="panel-body">

                                        <div class="row">
                                            <div class="col-4 col-md-4">
                                                <h5>Numero de Solicitud</h5>
                                                <p>
                                                    <?php echo $data-> NroSolicitud; ?>
                                                </p>
                                            </div>


                                            <div class="col-4 col-md-4">
                                                <h5>Fecha de Solicitud Emitida</h5>
                                                <p>
                                                    <?php echo date('j M Y',strtotime($data-> fechasolicitud)); ?>
                                                </p>
                                            </div>
                                            <div class="col-4 col-md-4">
                                                <h5>Maquina</h5>
                                                <p>
                                                    <?php echo $data-> maquina; ?>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row">

                                            <div class="col-4 col-md-4">
                                                <h5>Codigo de Solicitante</h5>
                                                <p>
                                                    <?php echo $data-> cod_detecta; ?>
                                                </p>
                                            </div>
                                            <div class="col-4 col-md-4">
                                                <h5>Tipo Mantencion </h5>
                                                <p>
                                                    <?php echo $data-> tipomantencion; ?>

                                                </p>
                                            </div>

                                        </div>


                                        <div class="row">

                                            <div class="col-4 col-md-6">
                                                <h4>Detalle</h4>
                                                <h3>
                                                    <?php echo $data-> detalle; ?>
                                                </h3>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4 col-md-12">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="panel panel-bordered">
                                    <div class="panel-body">
                                        <div class="page-header text-center">
                                             <?php if ($detalles!=null): ?>

                                            <i class="fa fa-industry" aria-hidden="true"></i> Mantencion realizada
                                        </div>

                                        <div class="table-responsive">

                                            <table class="table table-hover dataTable no-footer" id="dynamic_field">
                                                <thead>
                                                    <tr>
                                                        <th>Fecha</th>
                                                        <th>Comentario</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                  <?php foreach ($detalles as $detalle): ?>
                                                    <tr>
                                                        <td width="10%"> <?php echo $detalle->fecha  ?></td>

                                                        <td width="30%"> <?php echo $detalle->Comentario  ?></td>
                                                    </tr>
                                                  <?php endforeach; ?>

                                                </tbody>
                                            </table>
                                        </div>
                                         <?php else: ?>
                                        <div class="col-5 col-xl-12">
                                            <h4>ESTA MANTENCION NO TIENE SEGUIMIENTOS</h4>
                                            <br>
                                        </div>
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
