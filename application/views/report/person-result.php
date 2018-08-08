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
                        ?>
                        <ul class="nav navbar-nav">
                            <li class="">
                                <a href="<?php echo base_url('index.php/main/index'); ?>" target="_self" style="color:">
                        <span class="icon voyager-documentation"></span> <span class="title">Panel de Control</span> </a>
                            </li>
                            <li class="">
                                <a href="<?php echo base_url('index.php/mantencion/landingPage'); ?>" target="_self" style="color:"> <span class="icon voyager-tag"></span> <span class="title">Solicitar Mant.<span>
                                </a>
                            </li>
                            <li class="dropdown">
                                <a href="#3-dropdown-element" data-toggle="collapse" aria-expanded="false" target="_self" style="color:"> <span class="icon voyager-search"></span> <span class="title">Buscador</span> </a>
                                <div id="3-dropdown-element" class="panel-collapse collapse ">
                                    <div class="panel-body">
                                        <ul class="nav navbar-nav">

                                            <li class="">
                                                <a href="<?php echo base_url('index.php/mantencion/buscarView');  ?>" target="_self" style="color:">
                        <span class="icon voyager-search"></span> <span class="title">Buscar Mantencion</span> </a>
                                            </li>
                                            <li class="">
                                                <a href="<?php echo base_url('index.php/seguimiento/entreFechas');?>" target="_self" style="color:">
                        <span class="icon voyager-calendar"></span> <span class="title">Entre fecha</span> </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="dropdown">
                                <a href="#1-dropdown-element" data-toggle="collapse" aria-expanded="false" target="_self" style="color:"> <span class="icon voyager-list"></span> <span class="title">Listado</span> </a>
                                <div id="1-dropdown-element" class="panel-collapse collapse ">
                                    <div class="panel-body">
                                        <ul class="nav navbar-nav">
                                            <li class="">
                                                <a href="<?php echo base_url('index.php/mantencion/listado');  ?>" target="_self" style="color:">
                        <span class="icon voyager-list"></span> <span class="title">Lista de Mantencion</span> </a>
                                            </li>


                                            <li class="">
                                                <a href="<?php echo base_url('index.php/seguimiento/MAN_Seguimiento');  ?>" target="_self" style="color:">
                        <span class="icon voyager-check"></span> <span class="title">List por Ejecutar</span> </a>
                                            </li>


                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="dropdown">
                                <a href="#2-dropdown-element" data-toggle="collapse" aria-expanded="true" target="_self" style="color:"> <span class="icon voyager-file-text"></span> <span class="title">Reportes</span> </a>
                                <div id="2-dropdown-element" class="panel-collapse collapse in" aria-expanded="true" >
                                    <div class="panel-body">
                                        <ul class="nav navbar-nav">
                                            <!-- <li class="">
                                                <a href="#" target="_self" style="color:">
                        <span class="icon voyager-list"></span> <span class="title">Desempeño Maquinas</span> </a>
                                            </li>
                                            <li class="">
                                                <a href="<?php echo base_url('index.php/reportes/indice');  ?>" target="_self" style="color:">
                        <span class="icon voyager-check"></span> <span class="title">Indice de cumplimiento</span> </a>
                                            </li>
                                            <li class="">
                                                <a href="#" target="_self" style="color:">
                        <span class="icon voyager-person"></span> <span class="title">Informe horas hombres</span> </a>
                                            </li> -->
                                            <li class="">
                                                <a href="<?php echo base_url('index.php/reportes/historialMaquina');  ?>" target="_self" style="color:">
                        <span class="icon voyager-truck"></span> <span class="title">Historial Maquinas</span> </a>
                                            </li>
                                            <li class="active">
                                                <a href="<?php echo base_url('index.php/reportes/historialPersonal');  ?>" target="_self" style="color:">
                        <span class="icon voyager-settings"></span> <span class="title">Informe Tecnicos</span> </a>
                                            </li>
                                            <!-- <li class="">
                                                <a href="#" target="_self" style="color:">
                        <span class="icon voyager-laptop"></span> <span class="title">Programa Mantencion</span> </a>
                                            </li> -->
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="">
                                <a href="<?php echo base_url('index.php/main/otherActivities');  ?>" target="_self" style="color:">
                        <span class="icon voyager-world"></span> <span class="title">Otras actividades</span> </a>
                            </li>
                            <li class="">
                                <a href="<?php echo base_url('index.php/calendario/index');  ?>" target="_self" style="color:">
                        <span class="icon voyager-calendar"></span> <span class="title">Calendarizacion</span> </a>
                            </li>

                        </ul>


                        <?php
                            break;
                        case 4:
                        ?>
                        <ul class="nav navbar-nav">
                            <li class="">
                                <a href="<?php echo base_url('index.php/main/index'); ?>" target="_self" style="color:">
                        <span class="icon voyager-documentation"></span> <span class="title">Panel de Control</span> </a>
                            </li>
                            <li class="">
                                <a href="<?php echo base_url('index.php/mantencion/landingPage'); ?>" target="_self" style="color:"> <span class="icon voyager-tag"></span> <span class="title">Solicitar Mant.<span>
                                </a>
                            </li>
                            <li class="dropdown">
                                <a href="#3-dropdown-element" data-toggle="collapse" aria-expanded="false" target="_self" style="color:"> <span class="icon voyager-search"></span> <span class="title">Buscador</span> </a>
                                <div id="3-dropdown-element" class="panel-collapse collapse ">
                                    <div class="panel-body">
                                        <ul class="nav navbar-nav">

                                            <li class="">
                                                <a href="<?php echo base_url('index.php/mantencion/buscarView');  ?>" target="_self" style="color:">
                        <span class="icon voyager-search"></span> <span class="title">Buscar Mantencion</span> </a>
                                            </li>
                                            <li class="">
                                                <a href="<?php echo base_url('index.php/seguimiento/entreFechas');?>" target="_self" style="color:">
                        <span class="icon voyager-calendar"></span> <span class="title">Entre fecha</span> </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="dropdown">
                                <a href="#1-dropdown-element" data-toggle="collapse" aria-expanded="false" target="_self" style="color:"> <span class="icon voyager-list"></span> <span class="title">Listado</span> </a>
                                <div id="1-dropdown-element" class="panel-collapse collapse ">
                                    <div class="panel-body">
                                        <ul class="nav navbar-nav">
                                            <li class="">
                                                <a href="<?php echo base_url('index.php/mantencion/listado');  ?>" target="_self" style="color:">
                        <span class="icon voyager-list"></span> <span class="title">Lista de Mantencion</span> </a>
                                            </li>


                                            <li class="">
                                                <a href="<?php echo base_url('index.php/seguimiento/MAN_Seguimiento');  ?>" target="_self" style="color:">
                        <span class="icon voyager-check"></span> <span class="title">List por Ejecutar</span> </a>
                                            </li>


                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="dropdown">
                                <a href="#2-dropdown-element" data-toggle="collapse" aria-expanded="true" target="_self" style="color:"> <span class="icon voyager-file-text"></span> <span class="title">Reportes</span> </a>
                                <div id="2-dropdown-element" class="panel-collapse collapse in" aria-expanded="true" >
                                    <div class="panel-body">
                                        <ul class="nav navbar-nav">
                                            <li class="">
                                                <a href="#" target="_self" style="color:">
                        <span class="icon voyager-list"></span> <span class="title">Desempeño Maquinas</span> </a>
                                            </li>
                                            <li class="">
                                                <a href="<?php echo base_url('index.php/reportes/indice');  ?>" target="_self" style="color:">
                        <span class="icon voyager-check"></span> <span class="title">Indice de cumplimiento</span> </a>
                                            </li>
                                            <li class="">
                                                <a href="#" target="_self" style="color:">
                        <span class="icon voyager-person"></span> <span class="title">Informe horas hombres</span> </a>
                                            </li>
                                            <li class="">
                                                <a href="<?php echo base_url('index.php/reportes/historialMaquina');  ?>" target="_self" style="color:">
                        <span class="icon voyager-truck"></span> <span class="title">Historial Maquinas</span> </a>
                                            </li>
                                            <li class="active">
                                                <a href="<?php echo base_url('index.php/reportes/historialPersonal');  ?>" target="_self" style="color:">
                        <span class="icon voyager-settings"></span> <span class="title">Informe Tecnicos</span> </a>
                                            </li>
                                            <li class="">
                                                <a href="#" target="_self" style="color:">
                        <span class="icon voyager-laptop"></span> <span class="title">Programa Mantencion</span> </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="">
                                <a href="<?php echo base_url('index.php/main/otherActivities');  ?>" target="_self" style="color:">
                        <span class="icon voyager-world"></span> <span class="title">Otras actividades</span> </a>
                            </li>
                            <li class="">
                                <a href="<?php echo base_url('index.php/calendario/index');  ?>" target="_self" style="color:">
                        <span class="icon voyager-calendar"></span> <span class="title">Calendarizacion</span> </a>
                            </li>
                            <li class="">
                                <a href="<?php echo base_url('index.php/main/configEmail'); ?>" target="_self" style="color:">
                                  <span class="icon voyager-mail"></span> <span class="title">Config Email<span>
                                </a>
                            </li>
                            <li class="">
                                <a href="<?php echo base_url('index.php/main/listPersonal'); ?>" target="_self" style="color:">
                                  <span class="icon fas fa-user-secret"></span> <span class="title">Privacidad<span>
                                </a>
                            </li>
                        </ul>


                        <?php
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
                    <button type="submit" name="button" class="btn btn-success" value="" onclick="window.print();">
                      <span class="voyager-documentation"></span> Imprimir &nbsp;
                    </button>
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

      //Creamos variables para recorrer fechas y agrupar total x día
        var afecha = new Array(); var fecha = ""; var i = 0; var firsttime = 1;
        var atotal = new Array(); var total = 0; var totaltotal = 0; var contartotal = 0; var multi =0;


      $(".td-calcular").each(function (){
         var HDesde = $(this).data("inicio");
         var HHasta = $(this).data("fin");

         //recoges el valor del día y en la primera entrada lo asignada a la var fecha
         var dia = $(this).data("dia");
         if (firsttime==1) { fecha = dia; firsttime = 0; }

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
         if (fecha != dia) {
        afecha[i] = fecha;
        atotal[i] = total;
        i++;
        total = 0;
     }
     fecha = dia;
         //Incrementas total
         total = parseFloat(total) + parseFloat(TotHorasTrab);

      });
      //Añadimos el valor del último día y mostramos resultados alamacenados en el aray
      afecha[i] = fecha;
      atotal[i] = total;
      for (j=0; j<afecha.length; j++) {
        var fecid = "#"+afecha[j];

        $(fecid).html(atotal[j]);

          totaltotal+=atotal[j];

        //  alert(atotal[j]);

        }

        contartotal = afecha.length;
        multi = parseFloat(afecha.length*9);
        totalResultado = (contartotal* multi)/100;
        $('#totalhrs').html(totaltotal);
        $('#countTotal').html('  ['+contartotal+' dias ]  '+multi);
        $('#totalResultado').html(totalResultado);

          }
    </script>
    </body>
    </html>
