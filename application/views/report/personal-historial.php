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
                            <li class="active">
                                <i class="voyager-person"></i> Tecnicos
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
                              require_once(APPPATH.'views/template/nav-enc.php');
                            break;
                        case 3:
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
                        <i class="fas fa-people-carry"></i> Historial de personal
                    </h1>

                    <?php   require_once(APPPATH.'views/template/msg.php'); ?>


                    <div class="page-content edit-add container-fluid">
                        <div class="row">
                            <div class="col-md-12">

                                <div class="panel panel-bordered">
                                    <!-- form start -->
                                    <div class="panel-body ">
                                        <?php echo form_open('reportes/buscarTecnicos',['name'=>'form']); ?>
                                        <div class="col-4 col-md-2">
                                            <h3> Tipo de Informe</h3>

                                            <div class="custom-control custom-radio">
                                            <input type="radio"  name="customRadio" class="custom-control-input" value="1">
                                            <label class="custom-control-label">Resumen</label>
                                          </div>
                                          <div class="custom-control custom-radio">
                                            <input type="radio"  name="customRadio" class="custom-control-input" value="0">
                                            <label class="custom-control-label">Detalle</label>
                                          </div>

                                        </div>
                                      <div class="col-4 col-md-2">
                                          <h3> Desde</h3>
                                          <br>
                                          <div class="form-group">
                                              <input type="date" class="form-control" name="fechadesde" value="">
                                              <?php echo form_error('fechadesde','<div class="text-danger">','</div>') ?>
                                          </div>
                                      </div>

                                      <div class="col-4 col-md-2">
                                          <h3>Hasta</h3>
                                          <br>
                                          <div class="form-group">
                                              <input type="date" class="form-control" name="fechahasta" value="">
                                              <?php echo form_error('fechahasta','<div class="text-danger">','</div>') ?>
                                          </div>

                                      </div>
                                      <div class="col-4 col-md-3">
                                      <div class="form-group">
                                           <label for="exampleFormControlSelect2">Tecnicos</label>
                                           <select multiple class="form-control" name="persona">
                                             <?php if ($tecnicos): ?>
                                               <?php foreach ($tecnicos as $tecnico): ?>
                                                 <option value=" <?php echo $tecnico-> Codigo; ?>"><?php echo $tecnico-> Nombre; ?></option>
                                               <?php endforeach; ?>
                                             <?php endif; ?>

                                           </select>
                                         </div>
                                         <?php echo form_error('persona','<div class="text-danger">','</div>') ?>
                                       </div>
                                       <div class="col-4 col-md-3">
                                       <div class="form-group">
                                            <br>
                                            <br>
                                        <?php echo form_submit(['name'=>'submit','value'=>'Buscar','class'=>'btn btn-primary']); ?>

                                            </select>
                                          </div>
                                        </div>
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

    <?php   require_once(APPPATH.'views/template/footer.php'); ?>
