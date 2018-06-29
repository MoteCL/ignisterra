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


    <?php if ($seguimientos): ?>
      <?php $fechas = array();
            foreach ($seguimientos as $seguimiento) {
               $fechas[$seguimiento-> fecha][] = $seguimiento;

            }
      ?>
      <?php foreach ($fechas as $fecha): ?>
      <table class="table table-hover dataTable no-footer">
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
      <?php   foreach ($fecha as $seguimiento): ?>
      <tr>
          <td style="	width:8%;">

              <?php echo  date('j M Y',strtotime($seguimiento-> fecha)); ?>
          </td>
          <td style="	width:5%;">
              <?php echo $seguimiento-> NroSolicitud; ?>
          </td>
          <td style="	width: 10%;">
              <?php echo $seguimiento-> maquina; ?>
          </td>
          <td style="	width: 50%;">
              <?php echo $seguimiento-> Comentario; ?>
          </td>
          <td style="	width: 10%;">
              <?php
              $cadena = strtotime($seguimiento->horaInicio);
              $cadena = date("H:i", $cadena);
              echo $cadena;
               ?>
               <input type="hidden" name="horaInicio" id="horaInicio" value="<?php echo $cadena ?>">
          </td>
          <td style="	width: 10%;">
              <?php
              $cadena2 = strtotime($seguimiento->horaTermino);
              $cadena2 = date("H:i", $cadena2);
              echo $cadena2;
               ?>
               <input type="hidden" name="horaTermino" id="horaTermino" value="<?php echo $cadena2 ?>">
          </td>
          <td style="	width: 10%;">
            <?php
            $hora= $cadena2 - $cadena;
          //  echo $hora;
            $totalsub+=$hora;
            ?>
            <input type="text" name="resultado"  class="form-control" id="resultado" value="">
          </td>
      </tr>

      <?php endforeach; ?>
          </table>
          <div class="row">
            <div class="col-4 col-sm-9">

            </div>
            <div class="col-4 col-md-2">
                <h5> Total horas por fecha :
                <?php
                  echo $totalsub;
                  $totalhrs+=$totalsub;

                ?></h5>
                <h5> Horas turno :    9</h5>
                <h5> % Ocupacion por fecha:
                  <?php
                    $calculo =($totalsub*9)%100;
                    echo $calculo;
                    $totalsub=0;
                   ?></h5>

            </div>
          </div>

      <?php endforeach; ?>
      <div class="row">
          <div class="col-4 col-sm-9">

          </div>
          <div class="col-4 col-md-2" style="border: 1px solid #9d9f9d;">
              <h5>Total horas : <?php echo $totalhrs ?></h5>
              <h5>Horas turno (5 dias) : 45.00</h5>
              <h5>% Ocupacidad por fecha
              <?php
              echo ($totalhrs*45.00)%100;
               ?></h5>
          </div>
      </div>
      <?php endif; ?>


      <button type="submit" name="button" class="btn btn-success" value="" onclick="window.print();">
        <span class="voyager-documentation"></span> Imprimir &nbsp;
      </button>
    </div>
</div>
