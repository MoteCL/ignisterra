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
                                <a href="<?php echo base_url('index.php/seguimiento/MAN_Seguimiento'); ?>" target="_self" style="color:">Listado</a>
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
                <?php if ($data): ?>
                <div class="side-body padding-top">

                    <h1 class="page-title">

                        <i class="voyager-truck"></i> Mantencion Tecnica
                        <?php echo $data-> NroSolicitud ?> &nbsp;
                        <?php endif; ?>
                        <a href="<?php echo base_url('index.php/seguimiento/MAN_Seguimiento');  ?>" class="btn btn-warning">
                <span class="glyphicon glyphicon-list"></span>&nbsp;
                Regresar a listado
                  </a>
                    </h1>
                    <div class="page-content container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="panel panel-bordered">
                                    <div class="panel-body">

                                        <div class="row">
                                            <div class="col-4 col-md-4">Numero de Solicitud
                                                <p>
                                                    <?php echo $data-> NroSolicitud; ?>
                                                </p>
                                            </div>

                                            <?php if ($datos): ?>
                                            <?php foreach ($datos as $dato): ?>
                                            <?php if ($dato -> NroSolicitud == $data-> NroSolicitud): ?>
                                            <div class="col-4 col-md-4">Fecha de Solicitud Emitida
                                                <p>
                                                    <?php echo $dato-> fechasolicitud; ?>
                                                </p>
                                            </div>
                                            <div class="col-4 col-md-4">Maquina
                                                <p>
                                                    <?php echo $dato-> maquina; ?>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row">

                                            <div class="col-4 col-md-4">Codigo de Solicitante
                                                <p>
                                                    <?php echo $dato-> cod_detecta; ?> </p>
                                            </div>
                                            <?php if ($personas): ?>
                                            <?php foreach ($personas as $persona): ?>
                                            <?php if ($persona-> Codigo == $dato-> cod_detecta): ?>
                                            <div class="col-4 col-md-4">Nombre
                                                <p>
                                                    <?php echo $persona-> Nombre; ?>
                                                </p>
                                            </div>
                                            <div class="col-4 col-md-4">Area de Solicitante
                                                <p>
                                                    <?php echo $persona-> Area ?>
                                                </p>
                                            </div>
                                        </div>
                                        <?php endif; ?>
                                        <?php endforeach; ?>
                                        <?php endif; ?>
                                        <?php endif; ?>
                                        <?php endforeach; ?>
                                        <?php endif; ?>
                                        <div class="row">

                                        </div>
                                        <div class="row">
                                            <div class="col-4 col-md-4">Clasificacion
                                                <p>
                                                    <?php echo $data-> clasificacion; ?>
                                                </p>
                                            </div>
                                            <div class="col-4 col-md-4">Tipo de detencion
                                                <p>
                                                    <?php echo $data-> tipo_detencion; ?>
                                                </p>
                                            </div>
                                            <div class="col-4 col-md-4">Fecha Mantencion Realizada
                                                <p>
                                                    <?php echo $data-> fecha; ?>
                                                </p>
                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="col-4 col-md-4">ID Tecnico
                                                <p>
                                                    <?php echo $data-> id_tecnico; ?>
                                                </p>

                                            </div>
                                            <?php if ($personas): ?>
                                            <?php foreach ($personas as $persona): ?>
                                            <?php if ($persona-> Codigo == $data->id_tecnico): ?>
                                            <div class="col-4 col-md-4">Nombre Tecnico
                                                <p>
                                                    <?php echo $persona-> Nombre; ?>
                                                </p>

                                            </div>
                                            <?php endif; ?>

                                            <?php endforeach; ?>
                                            <?php endif; ?>

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
                                        <div class="page-header">
                                            <i class="fa fa-industry" aria-hidden="true"></i> Mantencion realizada

                                        </div>
                                        <div class="col-5 col-xl-12">
                                            <div class="row">
                                              <div class="col-4 col-md-1">Fecha
                                                  <p>
                                                      <?php echo $data-> fecha; ?>
                                                  </p>
                                              </div>
                                                <div class="col-4 col-md-1">Hora de Inicio
                                                    <p>
                                                        <?php echo $data-> horaInicio; ?>
                                                    </p>
                                                </div>
                                                <div class="col-4 col-md-1">Hora de Termino
                                                    <p>
                                                        <?php echo $data-> horaTermino; ?>
                                                    </p>
                                                </div>
                                                <div class="col-4 col-md-1">HH
                                                    <p>
                                                        <?php echo $data-> HH; ?>
                                                    </p>
                                                </div>
                                                <div class="col-4 col-md-1">HM
                                                    <p>
                                                        <?php echo $data-> HM; ?>
                                                    </p>
                                                </div>
                                                <div class="col-4 col-md-2">Interrumpe
                                                    <p>
                                                        <?php echo $data-> Int_Prod; ?>
                                                    </p>
                                                </div>
                                                <div class="col-4 col-md-4">Comentario
                                                    <p>
                                                        <?php echo $data-> Comentario; ?>
                                                    </p>
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

            <div class="panel-footer text-center">
                <button type="button" class="btn btn-info" value="" data-toggle="modal" data-target="#exampleModalCenter">
                  <span class="glyphicon glyphicon-pencil"></span> &nbsp; Autorizacion de Repecion
                </button>

            </div>
            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalCenterTitle">Autorizacion </h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                        <div class="modal-body">
                            ¿Estas seguro que deseas autorizar mantencion
                            <?php echo $data-> NroSolicitud ?>?
                        </div>
                        <?php echo form_open("seguimiento/save/{$data->NroSolicitud}"); ?>
                        <div class="modal-footer">
                          <input type="hidden" name="id_seguimiento" value="<?php echo $data-> idMan_Tecnico; ?>">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Salir</button>

                            <button type="submit" class="btn btn-success">Confirmar</button>
                            <?php echo form_close(); ?>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    </div>
    </div>

    <?php include("template/footerMantencion.php"); ?>
