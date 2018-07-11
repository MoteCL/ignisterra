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
      <?php $subtotal ?>
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
               <input type="hidden"  id="horaInicio" value="<?php echo $cadena ?>">
          </td>
          <td style="	width: 10%;">
              <?php
              $cadena2 = strtotime($seguimiento->horaTermino);
              $cadena2 = date("H:i", $cadena2);
              echo $cadena2;
               ?>
               <input type="hidden"  id="horaTermino" value="<?php echo $cadena2 ?>">
          </td>
          <td class="td-calcular" data-inicio="<?php echo $seguimiento->horaInicio;?>" data-fin="<?php echo $seguimiento->horaTermino;?>" data-dia="<?php echo $seguimiento->fecha;?>" >
        </td>
      </tr>
      <?php endforeach; ?>
          </table>
          <div class="row">
            <div class="col-4 col-sm-9">
            </div>
            <div class="col-4 col-md-2">
              <h5> Total horas por fecha :
              <div class="div-calcular" data-calcular="">  </div> </h5>
                <h5> Horas turno :    9</h5>
                <h5> % Ocupacion por fecha: </h5>
            </div>
          </div>
      <?php endforeach; ?>
      <div class="row">
          <div class="col-4 col-sm-9">
          </div>
          <div class="col-4 col-md-2" style="border: 1px solid #9d9f9d;">
              <h5>Total horas :  <p id="totalhrs" style="float:right;"></p>  </h5>
              <h5>Horas turno : <p id="countTotal" style="float:right;"></p> </h5>
              <h5>% Ocupacidad por fecha<p id="totalResultado" style="float:right;"></p> </h5>
          </div>
      </div>
      <?php endif; ?>
      <button type="submit" name="button" class="btn btn-success" value="" onclick="window.print();">
        <span class="voyager-documentation"></span> Imprimir &nbsp;
      </button>
    </div>
</div>
