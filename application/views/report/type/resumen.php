<div class="panel panel-bordered">
    <?php $hora=0; ?>
    <?php $totalsub=0; ?>
    <?php $totalhrs=0; ?>
    <div class="panel-body">
      <h2 class="text-center"> Detalle trabajos realizados por trabajador en mantencion </h2>
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

      <?php   foreach ($fecha as $seguimiento): ?>

            <?php
            $hora= $seguimiento->horaTermino - $seguimiento->horaInicio;

            $totalsub+=$hora;
            ?>


      <?php endforeach; ?>

          <div class="row">
            <div class="col-4 col-sm-9">

            </div>
            <div class="col-4 col-md-2">

                <?php

                  $totalhrs+=$totalsub;
                  $totalsub=0;
                ?>

            </div>
          </div>

      <?php endforeach; ?>
      <div class="row">
          <div class="col-4 col-sm-9">

          </div>
          <div class="col-4 col-md-2" style="border: 1px solid #9d9f9d;">
              <h5>Total horas : <?php echo $totalhrs ?></h5>
              <h5>Horas turno (5 dias) : 45.00</h5>
              <h5>% Ocupacidad por fecha</h5>
          </div>
      </div>
      <?php endif; ?>


      <button type="submit" name="button" class="btn btn-success" value="" onclick="window.print();">
        <span class="voyager-documentation"></span> Imprimir &nbsp;
      </button>
    </div>
</div>
