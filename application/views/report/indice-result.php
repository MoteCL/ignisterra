<?php require_once(APPPATH."views/template/header.php"); ?>

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
                            </li>
                            <li class="">
                                <a href="<?php echo base_url('index.php/reportes/indice');  ?>" target="_self" style="color:">
                                <i class="fas fa-dolly"></i> Indice
                                </a>
                            </li>
                            <li class="active">
                                <i class="fas fa-check-circle"></i> Resultado
                            </li>
                        </ol>
                    </div>
                    <?php require_once(APPPATH.'views/template/nav-top.php'); ?>
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
                            require_once(APPPATH.'views/template/nav-user.php');
                          break;
                        case 2:
                              require_once(APPPATH.'views/template/nav-sup.php');
                            break;
                        case 3:
                                  require_once(APPPATH.'views/template/nav-enc.php');
                            break;
                        case 4:
                              require_once(APPPATH.'views/template/nav-adm.php');
                            break;
                    }
                    ?>
                </nav>
            </div>
            <!-- Main Content -->
            <div class="container-fluid">
                <div class="side-body padding-top">
                    <h1 class="page-title">
                        <i class="fas fa-dolly"></i> Indice de cumplimiento de Mantencion
                    </h1>
                    <?php   require_once(APPPATH.'views/template/msg.php'); ?>
                    <div class="page-content edit-add container-fluid">
                        <div class="row">
                            <div class="col-md-12">

                                <div class="panel panel-bordered">
                                    <!-- form start -->
                                    <div class="panel-body ">
                                      <h2 class="text-center"> Correctiva </h2>
                                      <p><strong>Desde </strong> <?php echo date('j M Y',strtotime($desde));  ?> <strong>Hasta </strong> <?php echo date('j M Y',strtotime($hasta)); ?></p>
                                        <?php if ($correctivas): ?>
                                          <?php $contador = count($correctivas);
                                                $contador2 = 0;
                                                $contador3 = 0;
                                                $contador4 = 0; ?>
                                            total <?php echo $contador?>
                                            <?php foreach ($correctivas as $correctiva): ?>
                                              <?php if ($correctiva->estado=='CERRADA'): ?>
                                              <?php     $contador2 += 1; ?>
                                              <?php endif; ?>
                                              <?php if ($correctiva->urgente=='SI'): ?>
                                              <?php     $contador3 += 1; ?>
                                              <?php if ($correctiva->estado=='CERRADA'): ?>
                                                  <?php     $contador4 += 1; ?>
                                              <?php endif; ?>
                                              <?php endif; ?>
                                            <?php endforeach; ?>
                                            total <?php echo $contador2 ?> <br>
                                            <?php echo $contador3 ?>  <br>
                                            <?php echo $contador4 ?> <br>
                                            <?php $calculo = ($contador*100)%$contador2; ?>
                                            <?php echo $calculo; ?>

                                        <?php endif; ?>
                                      <h2 class="text-center"> Mejora </h2>
                                      <h2 class="text-center"> Preventiva </h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php   require_once(APPPATH.'views/template/footer.php'); ?>
