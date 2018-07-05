<?php require_once(APPPATH."views/template/header.php"); ?>

<body class="voyager">

    <!-- <div id="voyager-loader">
        <?php echo base_url('assets/img/logo-icon.png'); ?>
        <img src="<?php echo base_url('assets/img/logo-icon.png'); ?>" alt="Voyager Loader">
    </div> -->
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
                                <i class="voyager-home"></i> <a href="<?php echo base_url('index.php/main/index'); ?>" target="_self" style="color:">Panel</a>
                            </li>
                            <li class="active">
                                <i class="voyager-person"></i>
                                <a href="<?php echo base_url('index.php/reportes/historialPersonal'); ?>" target="_self" style="color:">Tecnicos</a>
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
                        <i class="fas fa-people-carry"></i>
                        <?php if ($tipo==0): ?>
                            Detalle
                        <?php endif; ?>
                        <?php if ($tipo==1): ?>
                            Resumen
                        <?php endif; ?>
                    </h1>
                      <img src="<?php echo base_url('assets/img/logofull.png'); ?>" class="avatar float-right" alt="Logo">

                    <?php   require_once(APPPATH.'views/template/msg.php'); ?>

                    <style type="text/css">
                          @media print {
                              .btn-success{
                                display: none;
                              }
                              .app-footer{
                                display: none;
                              }
                              .col-4 .col-md-2{
                              float: right;
                              }
                              .table{
                                 font-size: 7.5pt;
                              }
                              .card-body {
                                font-size: 9.5pt;
                              }
                          }
                      </style>
                    <div class="page-content edit-add container-fluid">
                        <div class="row">
                            <div class="col-md-12">

                                <?php if ($tipo==0): ?>
                                  <?php   include('type/detalle.php'); ?>
                                <?php endif; ?>
                                <?php if ($tipo==1): ?>
                                  <?php   include('type/resumen.php'); ?>
                                <?php endif; ?>

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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/js/bootstrap-select.min.js"></script>

    <script>
    $(document).ready(function() {
      ObtieneTotHoras();

    });
    function ObtieneTotHoras()
    {

      //Creamos variables para recorrer fechas
// var afecha; var fecha = ""; var i = 0;
// var atotal;
  var total = 0;

    $(".td-calcular").each(function (){
       var HDesde = $(this).data("inicio");
       var HHasta = $(this).data("fin");

       //recoges el valor del día y en la primera entrada lo asignada a la var fecha
       // var dia = $(this).data("dia");
       // if (i=0) { fecha = dia; }

       hora1 = (HDesde).split(":");
       hora2 = (HHasta).split(":");
       HoraDesde=(hora1[0]);
       MinutoDesde=(hora1[1]);
       HoraHasta=(hora2[0]);
       MinutoHasta=(hora2[1]);
       TotDesde=parseInt((HoraDesde*60)) + parseInt(MinutoDesde);
       TotHasta=parseInt(HoraHasta*60) + parseInt(MinutoHasta);
       RestaHoras=(TotHasta - TotDesde);
       TotHorasTrab=(RestaHoras / 60).toFixed(2);

       $(this).html(TotHorasTrab);

       //Ahora en el momento que cambies la fecha guardas los valores de fecha y total en dos arrays y pones total a 0
       // if (fecha != dia) {
       //    afecha[i] = día;
       //    atotal[i] = total;
       //    i++;
       //    total=O;
       // }
       //Incrementas total
       total += parseFloat(TotHorasTrab);
       $('#subtotal').html(total);

    });
          }
    </script>
    </body>
    </html>
