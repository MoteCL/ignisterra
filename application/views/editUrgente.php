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
                                <a href="<?php echo base_url('index.php/mantencion/listByArea'); ?>" target="_self" style="color:"> <i class="voyager-list"></i> Listado </a>
                            </li>
                            <li class="active">
                              <i class="voyager-edit"></i>
                              Editar Mantencion N <?php echo $dato->NroSolicitud ?>
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
                            <i class="voyager-news"></i> Editar mantencion <?php echo $dato->NroSolicitud ?>
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
                                        <div class="table-responsive">
                                          <p> Maquina : <strong> <?php echo $dato-> maquina ?></strong> </p>
                                          <p> Fecha Solicitud : <strong> <?php echo  date('j M Y',strtotime($dato-> fechasolicitud)); ?></strong> </p>
                                          <p> Hora Solicitud : <strong> <?php echo $dato-> horasolicitud ?></strong> </p>
                                          <p> Tipo Mantencion : <strong> <?php echo $dato-> tipomantencion ?></strong> </p>
                                          <p> Tipo Trabajo : <strong> <?php echo $dato-> tipotrabajo ?></strong> </p>
                                          <p> Detalle  : <strong> <?php echo $dato-> detalle ?></strong> </p>
                                          <p> Urgente  : <strong> <?php echo $dato-> urgente ?></strong> </p>
                                          <div class="panel-footer text-center">
                                              <button type="button" class="btn btn-info" value="" data-toggle="modal" data-target="#exampleModalCenter">
                                                <span class="glyphicon glyphicon-edit"></span> &nbsp; Modificar a urgente
                                              </button>


                                        </div>
                                        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalCenterTitle">Modificar Solicitud  </h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                      <span aria-hidden="true">&times;</span>
                                                    </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        ¿Estas seguro que deseas modificar Solicitud
                                                        <?php echo $dato-> NroSolicitud ?>?  <br>
                                                        Este generar un correo detallando la modificacion
                                                    </div>
                                                    <?php echo form_open("mantencion/editarPorSub/{$dato->NroSolicitud}"); ?>
                                                    <div class="modal-footer">
                                                      <input type="hidden" name="codigo" value="<?php echo $Codigo; ?>">
                                                        <?php if ($dato->urgente=='NO'): ?>
                                                              <input type="hidden" name="urgente" value="SI">
                                                        <?php endif; ?>
                                                        <?php if ($dato->urgente=='SI'): ?>
                                                              <input type="hidden" name="urgente" value="NO">
                                                        <?php endif; ?>

                                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Salir</button>

                                                        <button type="submit" class="btn btn-success">Cambiar</button>
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



</body>

</html>
