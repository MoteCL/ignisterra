<div class="panel panel-bordered">
    <?php $hora=0; ?>
    <?php $totalsub=0; ?>
    <?php $totalhrs=0; ?>
    <div class="panel-body">
      <h2 class="text-center"> Detalle trabajos realizados por trabajador en mantencion</h2>
      <p><strong>Desde <?php echo date('j M Y',strtotime($desde)); ?></strong>   &nbsp;  &nbsp;  &nbsp;  <strong>Hasta <?php echo date('j M Y',strtotime($hasta)); ?>  </strong> </p>
      <h4><?php if ($nombre): ?>
        <?php echo $nombre->Nombre; ?>
      <?php endif; ?></h4>

      <?php $fechas = array(); ?>
      <!-- <?php $fechass = array(); ?> -->
      <?php if ($seguimientos): ?>
      <?php


            foreach ($seguimientos as $seguimiento) {
               $fechas[$seguimiento-> fecha][] = $seguimiento;

            }
            if ($actividades) {
              foreach ($actividades as $actividade) {
                 $fechas[$actividade-> fecha][] = $actividade;

              }
            }

      ?>
      <?php $countTable=0; ?>
      <?php $totalEnd=0; ?>
      <?php foreach ($fechas as $fecha): ?>
        <?php $countTable+=1; ?>
      <table  class="table table-hover dataTable no-footer">
      <thead>
          <tr>
              <th>Fecha</th>
              <th>Orden</th>
              <th>Maquina</th>
              <th>Actividad</th>
              <th>Hora desde</th>
              <th>Hora final</th>
              <th>Total</th>

          </tr>
      </thead>
        <?php $totalsub= 0; ?>
        <?php $subtotal=0; ?>
      <?php   foreach ($fecha as $seguimiento): ?>
      <tr>
          <td style="	width:8%;">
              <?php if (!empty($seguimiento-> fechaSeguimiento)): ?>
                <?php echo  date('j M Y',strtotime($seguimiento-> fechaSeguimiento)); ?>
                <?php else: ?>
                  <?php echo  date('j M Y',strtotime($seguimiento-> fecha)); ?>
              <?php endif; ?>


          </td>
          <td style="	width:5%;">
              <?php echo $seguimiento-> NroSolicitud; ?>
          </td>
          <td style="	width: 10%;">
              <?php if (!empty($seguimiento->actividad)): ?>
                  <?php echo $seguimiento-> actividad; ?>
              <?php else: ?>
                  <?php echo $seguimiento-> maquina; ?>
              <?php endif; ?>


          </td>
          <td style="	width: 50%;">
              <?php echo $seguimiento-> Comentario; ?>
          </td>
          <td style="	width: 10%;">
              <?php
              if (!empty($seguimiento->horaInicio)) {
                $cadena = strtotime($seguimiento->horaInicio);
                $cadena = date("H:i", $cadena);
                echo $cadena;
              }

               ?>

          </td>
          <td style="	width: 10%;">
              <?php
              if (!empty($seguimiento->horaTermino)) {
                $cadena2 = strtotime($seguimiento->horaTermino);
                $cadena2 = date("H:i", $cadena2);
                echo $cadena2;
              }

               ?>

          </td>
          <td style="	width: 10%;">

            <?php if (!empty($seguimiento->TotalHrs)): ?>
            <?php $totalsub= $seguimiento-> TotalHrs ?>

            <?php else: ?>
           <?php $totalsub= $seguimiento-> total ?>
            <?php endif; ?>
            <?php echo $totalsub; ?>

          <?php $subtotal+= $totalsub ?>
          </td>
      </tr>

      <?php endforeach; ?>
          </table>
          <div class="row">
            <div class="col-4 col-sm-9">

            </div>
            <div class="col-4 col-md-2">
              <h5> Total horas por fecha :
                <div class="div-calcular float-right">
                  <?php echo $subtotal; ?>
                </div>

               </h5>
                <h5> Horas turno :
                  <div class="div-calcular float-right">
                    9
                  </div></h5>
                <h5> % Ocupacion por fecha:
                  <div class="div-calcular float-right">
                    <?php echo round($subtotal/9*100,2); ?>
                    <?php $totalEnd+=$subtotal ?>
                  </div></h5>
            </div>
          </div>
      <?php endforeach; ?>
      <div class="row">
          <div class="col-4 col-sm-9">
          </div>
          <div class="col-4 col-md-2" style="border: 1px solid #9d9f9d;">

              <h5>Total horas :  <p style="float:right;"><?php echo $totalEnd ?></p>  </h5>
              <?php $subtotalEnd = $countTable*9; ?>
              <h5>Horas turno :  <p style="float:right;"><?php echo $subtotalEnd; ?></p> </h5>
              <h5>% Ocupacidad por fecha<p style="float:right;"><?php echo round($totalEnd/$subtotalEnd*100,2) ?></p> </h5>
          </div>
      </div>
      <?php endif; ?>
      <button type="submit" name="button" class="btn btn-success" value="" onclick="window.print();">
        <span class="voyager-documentation"></span> Imprimir &nbsp;
      </button>
    </div>
</div>
