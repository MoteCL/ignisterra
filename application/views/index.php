<?php include("template/header.php"); ?>

<body class="login">
<div class="container-fluid">
    <div class="row">
        <div class="faded-bg animated"></div>
        <div class="hidden-xs col-sm-7 col-md-8">
            <div class="clearfix">
                <div class="col-sm-12 col-md-10 col-md-offset-2">
                    <div class="logo-title-container">
                    <img class="img-responsive pull-left logo hidden-xs animated fadeIn" src="<?php echo base_url('assets/img/logo-icon-light.png'); ?>" alt="Logo Icon">
                      <div class="copy animated fadeIn">
                            <h1>IGNISTERRA</h1>
                            <p>Bienvenido Panel de control</p>
                        </div>
                    </div> <!-- .logo-title-container -->
                </div>
            </div>
        </div>

        <div class="col-xs-10 col-sm-5 col-md-4 login-sidebar">

            <div class="login-container">

                <p>Iniciar sesión a continuación:</p>

                   <?php echo form_open_multipart('main/user_login_process'); ?>

                    <div class="form-group form-group-default" id="emailGroup">
                        <label>Nombre Usuario</label>
                        <div class="controls">
                             <?php echo form_input(['name'=>'username','placeholder'=>'Username','class'=>'form-control']); ?>

                         </div>
                         <span class="text-danger"><?php echo form_error('username'); ?></span>
                    </div>

                    <div class="form-group form-group-default" id="passwordGroup">
                        <label>Password</label>
                        <div class="controls">
                            <?php echo form_password(['name'=>'pwd','placeholder'=>'Password','class'=>'form-control']); ?>

                        </div>
                          <span class="text-danger"><?php echo form_error('pwd'); ?></span>
                    </div>

                    <button type="submit" class="btn btn-block login-button">
                        <span class="signingin hidden"><span class="voyager-refresh"></span> Cargando ...</span>
                        <span class="signin">Iniciar sesión</span>
                    </button>


                <?php echo form_close(); ?>



              <div style="clear:both"></div>
            </div> <!-- .login-container -->

        </div> <!-- .login-sidebar -->
    </div> <!-- .row -->
</div> <!-- .container-fluid -->
<script>
    var btn = document.querySelector('button[type="submit"]');
    var form = document.forms[0];
    var email = document.querySelector('[name="email"]');
    var password = document.querySelector('[name="password"]');
    btn.addEventListener('click', function(ev){
        if (form.checkValidity()) {
            btn.querySelector('.signingin').className = 'signingin';
            btn.querySelector('.signin').className = 'signin hidden';
        } else {
            ev.preventDefault();
        }
    });
    email.focus();
    document.getElementById('emailGroup').classList.add("focused");

    // Focus events for email and password fields
    email.addEventListener('focusin', function(e){
        document.getElementById('emailGroup').classList.add("focused");
    });
    email.addEventListener('focusout', function(e){
       document.getElementById('emailGroup').classList.remove("focused");
    });

    password.addEventListener('focusin', function(e){
        document.getElementById('passwordGroup').classList.add("focused");
    });
    password.addEventListener('focusout', function(e){
       document.getElementById('passwordGroup').classList.remove("focused");
    });

</script>
</body>
</html>
