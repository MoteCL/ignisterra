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
                                <i class="voyager-home"></i> Panel
                                <a href="<?php echo base_url('index.php/main/index'); ?>"  target="_self" style="color:">Panel</a>
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
                        <i class="voyager-truck"></i> Editar Mantencion
                        <?php echo $data-> NroSolicitud ?> &nbsp;


                        <a href="<?php echo base_url('index.php/mantencion/listado');  ?>" class="btn btn-warning">
                <span class="glyphicon glyphicon-list"></span>&nbsp;
                Regresar a listado
            </a>

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
