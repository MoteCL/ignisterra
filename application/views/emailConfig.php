<?php include("template/header.php"); ?>

<body class="voyager ">

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
                                 <a href="<?php echo base_url('index.php/main/index'); ?>"  target="_self" style="color:">Panel</a>
                            </li>

                            <li class="active">
                              <i class="voyager-mail"></i> 
                                Config Email
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
                            include('template/nav-enc.php');
                            break;
                        case 3:
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
                        <i class="voyager-mail"></i> Configuracion Email &nbsp;

                    </h1>
                    <div class="page-content container-fluid">
                      <div class="alerts"><?php include("template/msg.php"); ?></div>
                        <div class="row">
                            <div class="col-md-12">
                              <?php if ($email!=false): ?>
                                <?php foreach ($email as $mail): ?>

                                      <div class="panel panel-bordered">
                                          <div class="panel-body">
                                                <?php echo form_open("main/editConfig"); ?>
                                            <div class="form-group  col-md-12">
                                            <label for="name">Protocol</label>
                                            <?php echo form_input(['maxlength'=>'6','name'=>'protocol','class'=>'form-control','value'=>set_value('protocol',$mail-> protocol)]); ?>
                                          <!-- <input class="form-control" name="protocol" placeholder="Protocol" value="" type="text"> -->
                                            </div>
                                            <div class="col-md-5">
                                                <?php echo form_error('protocol','<div class="text-danger">','</div>') ?>
                                            </div>
                                            <div class="form-group  col-md-12">
                                            <label for="name">SMTP Host</label>
                                            <?php echo form_input(['name'=>'smtp_host','class'=>'form-control','value'=>set_value('smtp_host',$mail-> smtp_host)]); ?>
                                          <!-- <input class="form-control" name="smtp_host" placeholder="Host" value="" type="text"> -->
                                            </div>
                                            <div class="col-md-5">
                                                <?php echo form_error('smtp_host','<div class="text-danger">','</div>') ?>
                                            </div>
                                            <div class="form-group  col-md-12">
                                            <label for="name">SMTP Puerto</label>
                                            <?php echo form_input(['name'=>'smtp_port','class'=>'form-control','value'=>set_value('smtp_port',$mail-> smtp_port)]); ?>
                                          <!-- <input class="form-control" name="smtp_port" placeholder="Port" value="" type="text"> -->
                                            </div>
                                            <div class="col-md-5">
                                                <?php echo form_error('smtp_port','<div class="text-danger">','</div>') ?>
                                            </div>
                                            <div class="form-group  col-md-12">
                                            <label for="name">SMTP User</label>
                                            <?php echo form_input(['name'=>'smtp_user','class'=>'form-control','value'=>set_value('smtp_user',$mail-> smtp_user)]); ?>
                                          <!-- <input class="form-control" name="smtp_user" placeholder="" value="" type="text"> -->
                                            </div>
                                            <div class="col-md-5">
                                                <?php echo form_error('smtp_user','<div class="text-danger">','</div>') ?>
                                            </div>
                                            <div class="form-group  col-md-12">
                                            <label for="name">SMTP Password</label>
                                            <?php echo form_password(['name'=>'smtp_pass','class'=>'form-control','value'=>set_value('smtp_pass',$mail-> smtp_pass)]); ?>
                                          <!-- <input class="form-control" name="smtp_pass" placeholder="" value="" type="password"> -->
                                            </div>
                                            <div class="col-md-5">
                                                <?php echo form_error('smtp_pass','<div class="text-danger">','</div>') ?>
                                            </div>
                                            <div class="form-group  col-md-12">
                                            <label for="name">Codigo Encargado</label>
                                            <?php echo form_input(['name'=>'codigoEncargado','class'=>'form-control','value'=>set_value('codigoEncargado',$mail-> codigoEncargado)]); ?>
                                            <?php if ($personas): ?>
                                              <?php foreach ($personas as $key): ?>
                                                <?php if ($key-> Codigo == $mail-> codigoEncargado): ?>
                                                  <div style="margin-top: 10px;">

                                                    <p><?php echo $key-> Nombre; ?></p>
                                                  </div>
                                                <?php endif; ?>
                                              <?php endforeach; ?>
                                            <?php endif; ?>
                                          <!-- <input class="form-control" name="smtp_user" placeholder="" value="" type="text"> -->
                                            </div>
                                            <div class="col-md-5">
                                                <?php echo form_error('codigoEncargado','<div class="text-danger">','</div>') ?>
                                            </div>
                                            <div class="form-group  col-md-12">
                                            <label for="name">Codigo CC Urgente</label>
                                            <?php echo form_input(['name'=>'codigoCC','class'=>'form-control','value'=>set_value('codigoCC',$mail-> codigoCC)]); ?>
                                            <?php if ($personas): ?>
                                              <?php foreach ($personas as $key): ?>
                                                <?php if ($key-> Codigo == $mail-> codigoCC): ?>
                                                  <div style="margin-top: 10px;">

                                                    <p><?php echo $key-> Nombre; ?></p>
                                                  </div>
                                                <?php endif; ?>
                                              <?php endforeach; ?>
                                            <?php endif; ?>

                                          <!-- <input class="form-control" name="smtp_user" placeholder="" value="" type="text"> -->
                                            </div>
                                            <div class="col-md-5">
                                                <?php echo form_error('codigoCC','<div class="text-danger">','</div>') ?>
                                            </div>
                                          </div>
                                          <div class="panel-footer">
                                              <button type="submit" class="btn btn-warning edit"> <i class="voyager-edit"></i>  Editar</button>
                                              <a href="<?php echo base_url('index.php/main/deleteConfig');  ?>" class="btn btn-danger" onclick=" return confirm('¿Estas seguro que deseas eliminar Configuracion?');">
                                                <i class="voyager-trash"></i> Eliminar</a>
                                          </div>
                                          <?php echo form_close(); ?>
                                        </div>
                                      </div>

                                <?php endforeach; ?>

                                <?php else: ?>

                                      <div class="panel panel-bordered">
                                          <div class="panel-body">
                                                <?php echo form_open('main/saveConfig'); ?>
                                            <div class="form-group  col-md-12">
                                            <label for="name">Protocol</label>
                                          <input class="form-control" name="protocol" placeholder="Protocol" value="" type="text">
                                            </div>
                                            <div class="col-md-5">
                                                <?php echo form_error('protocol','<div class="text-danger">','</div>') ?>
                                            </div>
                                            <div class="form-group  col-md-12">
                                            <label for="name">SMTP Host</label>
                                          <input class="form-control" name="smtp_host" placeholder="Host" value="" type="text">
                                            </div>
                                            <div class="col-md-5">
                                                <?php echo form_error('smtp_host','<div class="text-danger">','</div>') ?>
                                            </div>
                                            <div class="form-group  col-md-12">
                                            <label for="name">SMTP Puerto</label>
                                          <input class="form-control" name="smtp_port" placeholder="Port" value="" type="text">
                                            </div>
                                            <div class="col-md-5">
                                                <?php echo form_error('smtp_port','<div class="text-danger">','</div>') ?>
                                            </div>
                                            <div class="form-group  col-md-12">
                                            <label for="name">SMTP User</label>
                                          <input class="form-control" name="smtp_user" placeholder="" value="" type="text">
                                            </div>
                                            <div class="col-md-5">
                                                <?php echo form_error('smtp_user','<div class="text-danger">','</div>') ?>
                                            </div>
                                            <div class="form-group  col-md-12">
                                            <label for="name">SMTP Password</label>
                                          <input class="form-control" name="smtp_pass" placeholder="" value="" type="password">
                                            </div>
                                            <div class="col-md-5">
                                                <?php echo form_error('smtp_pass','<div class="text-danger">','</div>') ?>
                                            </div>
                                            <hr>
                                            <div class="form-group  col-md-12">
                                            <label for="name">Codigo encargado</label>
                                          <input class="form-control" name="codigoEncargado" placeholder="" value="" type="text">
                                            </div>
                                            <div class="col-md-5">
                                                <?php echo form_error('codigoEncargado','<div class="text-danger">','</div>') ?>
                                            </div>
                                            <div class="form-group  col-md-12">
                                            <label for="name">Codigo CC Urgente</label>
                                          <input class="form-control" name="codigoCC" placeholder="" value="" type="text">
                                            </div>
                                            <div class="col-md-5">
                                                <?php echo form_error('codigoCC','<div class="text-danger">','</div>') ?>
                                            </div>
                                          </div>
                                          <div class="panel-footer">
                                              <button type="submit" class="btn btn-primary save">Save</button>
                                          </div>
                                          <?php echo form_close(); ?>
                                        </div>
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
    <?php include("template/footerMantencion.php"); ?>
