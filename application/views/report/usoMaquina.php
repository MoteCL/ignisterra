<?php include("header.php"); ?>

<body class="voyager ">

    <div id="voyager-loader">
        <?php echo base_url('assets/img/logo-icon.png'); ?>
        <img src="<?php echo base_url('assets/img/logo-icon.png'); ?>" alt="Voyager Loader">
    </div>
    <div class="app-container">
        <div class="fadetoblack visible-xs"></div>
        <div class="row content-container">
            <nav class="navbar navbar-default navbar-fixed-top navbar-top">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button class="hamburger btn-link">
          <span class="hamburger-inner"></span>
          </button>
                        <ol class="breadcrumb hidden-xs">
                            <li class="">
                                <i class="voyager-home"></i>
                                <a href="<?php echo base_url('index.php/main/menu'); ?>"  target="_self" style="color:">Panel</a>
                            </li>
                            <li class="">
                              <a href="#"></a>
                                <i class="voyager-file-text"></i>
                                <a href="<?php echo base_url('index.php/reportes/index'); ?>"  target="_self" style="color:">Reportes</a>
                            </li>
                            <li class="active">
                                <i class="voyager-calendar"></i> Informe
                            </li>
                        </ol>
                    </div>
                    <?php include('nav-top.php'); ?>
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
                        <i class="voyager-file-text"></i> Informe de Manteciones ingresadas
                    </h1>



                    <div class="page-content edit-add container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="panel panel-bordered">
                                    <div class="panel-body">
                                      <canvas id="myChart" width="10" height="10"></canvas>
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
                        Made with <i class="voyager-heart"></i>
                                      - v1.1.0
                </div>
    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/vendor/tcg/voyager/assets/js/app.js'); ?>"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.16/datatables.min.js"></script>



    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>


<script>
var paramNombres = [];
var paramEdades = [];
var bgColor = [];
var bgBorder = [];
$(document).ready(function(){
	$.post("<?php echo base_url();?>index.php/Reportes/getdata",
		function(data){
			var obj = JSON.parse(data);

			paramNombres = [];
			paramEdades = [];
			bgColor = [];
			bgBorder = [];
			$.each(obj, function(i,item){
				var r = Math.random() * 255;
				r = Math.round(r);

				var g = Math.random() * 255;
				g = Math.round(g);

				var b = Math.random() * 255;
				b = Math.round(b);

				paramNombres.push(item.fechasolicitud);
				paramEdades.push(item.contador);
				bgColor.push('rgba('+r+','+g+','+b+', 0.3)');
				bgBorder.push('rgba('+r+','+g+','+b+', 1)');
			});




			var ctx = $("#myChart");
			var myChart = new Chart(ctx, {
			    type: 'line',
			    data: {
			        labels: paramNombres,
			        datasets: [{
			            label: 'Fechas',
                  steppedLine: paramEdades,
			            data: paramEdades,

			            borderColor: '#ff6384',
			            borderWidth: 1
			        }]
			    },
			    options: {
            responsive: true,
        title: {
          display: true,

        }
			    }
			});

		});
});
</script>

    </body>
    </html>
