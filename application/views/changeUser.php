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
                                    <a href="<?php echo base_url('index.php/main/listPersonal'); ?>" target="_self" style="color:">Listo Personal</a>
                            </li>
                            <li class="active">
                                <i class="voyager-edit"></i> Dar Permisos
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
                        <i class="fas fa-unlock-alt"></i> Permisos
                    </h1>

                    <?php include('template/msg.php'); ?>


                    <div class="page-content edit-add container-fluid">
                        <div class="row">
                            <div class="col-md-12">

                                <div class="panel panel-bordered">
                                    <!-- form start -->
                                    <div class="panel-body">
                                      <div class="form-group  col-md-12">
                                      <h5>Codigo </h5>
                                      <!--    <?php echo form_input(['name'=>'protocol','class'=>'form-control','value'=>set_value('protocol',$user-> Codigo)]); ?> -->
                                      <p> <?php echo $user-> Codigo ?></p>
                                      </div>
                                      <div class="form-group  col-md-12">
                                      <h5>Nombre </h5>
                                      <p> <?php echo $user-> Nombre ?></p>

                                      </div>
                                      <div class="form-group col-md-12">
                                          <h5>Permiso </h5>
                                          <?php
                                            $options = array(

                                              '1'         => 'Normal',
                                              '2'           => 'Supervisor',
                                              '3'           => 'Encargado',
                                              '4'           => 'Administrador',
                                            );
                                           ?>
                                              <div class="col-md-3">
                                                  <?php echo form_dropdown('tipo_usuario', $options,set_value('tipo_usuario',$user->tipo_usuario),['class'=>'form-control']);?>
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
