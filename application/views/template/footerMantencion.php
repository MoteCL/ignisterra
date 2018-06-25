

<footer class="app-footer">
    <div class="site-footer-right">
                    Made with <i class="voyager-heart"></i>
                                    - v1.1.0
            </div>
</footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo base_url('assets/vendor/tcg/voyager/assets/js/app.js'); ?>"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.16/datatables.min.js"></script>
<script type="text/javascript" src="<?php echo base_url('assets/vendor/tcg/voyager/assets/js/jquery.timepicker.js'); ?>"></script>


<script>

$(document).ready(function(){

    //  var i=1;
    //  $('#add').click(function(){
    //       i++;
    //        $('#dynamic_field').append('<tr id="row'+i+'"><td><div class="col-sm-10"><div class="form-group row"><label  class="form-label">Cod. Tecnico:</label><input type="text" name="id_tecnico[]"  value="" class="form-control"></div></div></td><td><div class="col-sm-8"><div class="form-group row"><label  class="form-label">Desde:</label><input name="horaInicio[]" id="horaInicio" placeholder="00:00" class="form-control" type="text"></div></div></td><td><div class="col-sm-8"><div class="form-group row"><label  class="form-label">Hasta:</label><input name="horaTermino[]" id="horaTermino" placeholder="00:00" class="form-control" type="text"></div></div></td><td><div class="col-sm-6"><div class="form-group row"><label  class="form-label">HH:</label><input name="HH[]"  class="form-control" type="number"></div></div></td><td><div class="col-sm-6"><div class="form-group row"><label  class="form-label">HM:</label><input name="HM[]"  class="form-control" type="number"></div></div></td><td><div class="col-sm-8"><div class="form-check"><label class="form-check">Interrumpe Produccion?</label><div class="form-check form-check-inline"><input class="form-check-input" type="radio" name="Int_Prod[]" value="Si"><label class="form-check-label" for="inlineRadio1">Si</label></div></div></div></td><td><textarea name="Comentario[]" rows="2" placeholder="Comentario"  class="form-control" cols="60"></textarea></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">Quitar</button></td></tr>');
    //
    // });
    //  $(document).on('click', '.btn_remove', function(){
    //       var button_id = $(this).attr("id");
    //       $('#row'+button_id+'').remove();
    //  });
     $("#codigo_tecnico").keyup(function(){
        buscar = $("#codigo_tecnico").val();
        mostraTecnico(buscar);
     });
     $('#horaInicio').timepicker({ 'scrollDefault': 'now' , 'timeFormat': 'G:i' });

     $('#horaTermino').timepicker({ 'scrollDefault': 'now' , 'timeFormat': 'G:i' });


     $("#horaTermino").keypress(function(event)
     {

     })
     $(document).on('click', '.btn_add', function(){
        ObtieneTotHoras();
     });

     function ObtieneTotHoras()
     {       contar = 0;
             HDesde=$('#horaInicio').val();
             HHasta=$('#horaTermino').val();

             hora1 = (HDesde).split(":");
             hora2 = (HHasta).split(":");
             HoraDesde=(hora1[0]);
             MinutoDesde=(hora1[1]);
             HoraHasta=(hora2[0]);
             MinutoHasta=(hora2[1]);
             TotDesde=parseInt((HoraDesde*60)) + parseInt(MinutoDesde);
             TotHasta=parseInt(HoraHasta*60) + parseInt(MinutoHasta);
             RestaHoras=(TotHasta - TotDesde);
             var opcion = confirm('DESCUENTA COLACIÓN?');
              if (opcion==true)
              {
                var Resta=(RestaHoras / 60);
                    TotHorasTrab=(Resta-0.5).toFixed(2);
              }
              else{
                  TotHorasTrab=(RestaHoras / 60).toFixed(2);
                  //RestaHoras1 =RestaHoras
              }

             // if(TotDesde<=780 && TotHasta>=810)
             // {
             //         var Resta=(RestaHoras / 60);
             //         TotHorasTrab=(Resta-0.5).toFixed(2);
             // }
             // else {
             //
             // }
             if ($('#id_tecnico1').val().length != 0) {
                contar+=1;
             }
             if ($('#id_tecnico2').val().length != 0) {
                contar+=1;
             }
             if ($('#id_tecnico3').val().length != 0) {
                contar+=1;
             }

             $('#resultado').val(TotHorasTrab);
             $('#resultadoFinal').val(TotHorasTrab * contar);
     }

});

</script>

</body>
</html>
