
<ul class="nav navbar-nav  navbar-right ">
    <li class="dropdown profile">
        <a href="#" class="dropdown-toggle text-right" data-toggle="dropdown" role="button"

           aria-expanded="false"><img src="<?php echo base_url('assets/img/default.png'); ?>" class="profile-img"> <span
                    class="caret"></span></a>
        <ul class="dropdown-menu dropdown-menu-animated">
            <li class="profile-img">
                <img src="<?php echo base_url('assets/img/default.png'); ?>" class="profile-img">


                <div class="profile-body">
                    <h5><?php echo $Nombre ?> </h5>
                    <h6><?php echo $Codigo ?> </h6>
                </div>

            </li>
            <li class="divider"></li>
            <li >
               <a href="#" target="_blank">
                 <i class="fas fa-home"></i>
                 Inicio
             </a>
             </li>
              <li class="class-full-of-rum">
                <a href="#" >
                  <i class="fas fa-user-circle"></i>
                    Perfil
                </a>
                </li>

                <li>
                   <?php echo form_open_multipart('main/logout'); ?>
                    <button type="submit" class="btn btn-danger btn-block">
                  <i class="fas fa-sign-out-alt"></i> Exit
                    </button>
                  <?php echo form_close(); ?>

                    </li>
        </ul>
    </li>
</ul>
