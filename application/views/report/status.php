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
                        <i class="voyager-file-text"></i> Estado <code>ABIERTA</code> e <code>CERRADA</code>

                    </h1>
                    <div class="page-content edit-add container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="panel panel-bordered">
                                  <button type="submit" name="button" class="btn btn-success" value="" onclick="window.print();">
                                    <span class="voyager-documentation"></span> Imprimir &nbsp;
                                  </button>
                                    <div class="panel-body">
                                      <div id="canvas-holder" style="width:30%">
                                    		<canvas id="chart-area"></canvas>
                                    	</div>
                                     <table>
                                       <tr>
                                         <td>
                                           <div id="piechart_div" style="border:1px solid #ccc"> </div>
                                           <div id="barchart_div" style="border:1px solid #ccc"> </div>
                                         </td>
                                       </tr>
                                     </table>

                                     <div id="barchart_material" style="width: 900px; height: 500px;"></div>


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
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

   <script>
     $(document).ready(function(){
       $.ajax({
          url : "<?php echo base_url();?>index.php/Reportes/getStatus",
          dataType: "JSON",
          success: function(result){
            google.charts.load('current',{
              'packages' : ['corechart']
            });
            google.charts.setOnLoadCallback(function () {
              drawChart(result);
            });
          }
       });

       function  drawChart (result){
         var data = new google.visualization.DataTable();
         data.addColumn('string','Maquina');
         data.addColumn('string','Contador');
         var dataArray=[];
         $.each(result, function (i,obj) {
           dataArray.push([obj.maquina, parseInt(obj.contador)]);

         });
         data.addRows(dataArray);
         var piechart_options= {
           title : 'Titulo',
           width: 400,
           height: 300
         };
         var piechart = new google.visualization.pieChart(document.getElementById('piechart_div'));
         pieChart.draw(data,piechart_options);
         var barchart_options = {
           title : 'Titulo 2',
           width: 400,
           height: 300,
           legend : 'none'
         };
         var  barchart = new google.visualization.BarChart(document.getElementById('barchart_div'));
         barchart.draw(data,barchart_options);
       }
     });
   </script>

   <script type="text/javascript">
     google.charts.load('current', {'packages':['bar']});
     google.charts.setOnLoadCallback(drawChart);

     function drawChart() {
       var data = google.visualization.arrayToDataTable([
         ['Year', 'Sales', 'Expenses', 'Profit'],
         ['2014', 1000, 400, 200],
         ['2015', 1170, 460, 250],
         ['2016', 660, 1120, 300],
         ['2017', 1030, 540, 350]
       ]);

       var options = {
         chart: {
           title: 'Company Performance',
           subtitle: 'Sales, Expenses, and Profit: 2014-2017',
         },
         bars: 'horizontal' // Required for Material Bar Charts.
       };

       var chart = new google.charts.Bar(document.getElementById('barchart_material'));

       chart.draw(data, google.charts.Bar.convertOptions(options));
     }
   </script>


<script>

var paramNombres = [];
var paramEdades = [];
$(document).ready(function(){
	$.post("<?php echo base_url();?>index.php/Reportes/getStatus",
		function(data){
			var obj = JSON.parse(data);

			paramNombres = [];
			paramEdades = [];

			$.each(obj, function(i,item){

				paramNombres.push(item.estado);
        paramEdades.push(item.contador);

			});
      var config = {
  			type: 'doughnut',
  			data: {
  				datasets: [{
  					data: paramEdades,
  					backgroundColor: [
  						'#36a2eb',
  						'#ff6384',
              '#4bc0c0',

  					],
  					label: 'Dataset 1'
  				}],
  				labels: paramNombres
  			},
  			options: {
  				responsive: true,
  				legend: {
  					position: 'top',
  				},
  				title: {
  					display: true,
  					text: 'Grafico de Mantenciones'
  				},
  				animation: {
  					animateScale: true,
  					animateRotate: true
  				}
  			}
  		};

      var ctx = document.getElementById('chart-area').getContext('2d');
			window.myDoughnut = new Chart(ctx, config);



		});
});
</script>
    </body>
    </html>
