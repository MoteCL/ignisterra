

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
   $(document).ready(function(){
    $('#tbl_personal').DataTable({
   "order": [
               [0, "desc"]
           ],
   "language": idioma_espanol
   });

   $("#id_maquinaria").change(function() {
  var valor = $(this).val(); // Capturamos el valor del select
  var texto = $(this).find('option:selected').text(); // Capturamos el texto del option seleccionado

  $("#CodArea").val(valor);
  $("#maquina").val(texto);
  });

  $("#tipo_mantencion3").click(function() {

    $("#divhidden").first().show("fast", function() {
                });
      $('#tipotrabajo1').prop("checked");
        });

  $("#tipo_mantencion1").click(function() {
      $("#divhidden").hide(100);
      $("input[name=tipotrabajo]:checked").prop('checked', false);
        });
  $("#tipo_mantencion2").click(function() {
      $("#divhidden").hide(100);
      $("input[name=tipotrabajo]:checked").prop('checked', false);
        });
  mostrar_mensaje();
   });




   $("#trabajo1").click(function() {
       $("#divhidden").first().show("fast", function() {
          });
      });
      $(".check").click(function() {
          $("#divhidden").hide(100);
          $("input[name=subtrabajo]:checked").prop('checked', false);
            });



   $('.selectpicker').selectpicker({
     size: 4
      });

   var mostrar_mensaje = function() {
       $(".mensaje").fadeOut(5000, function() {
           $(this).html("");
           $(this).fadeIn(1000);
       });
   }

// $(document).ready(function(){
//      var i=1;
//      $('#add').click(function(){
//           i++;
//            $('#dynamic_field').append('<tr id="row'+i+'"><td><div class="col-sm-4"><div class="form-group row"><label  class="form-label">Desde:</label><input name="horaInicio[]"  class="form-control" type="text"></div></div></td><td><div class="col-sm-4"><div class="form-group row"><label  class="form-label">Hasta:</label><input name="horaTermino[]"  class="form-control" type="text"></div></div></td><td><div class="col-sm-4"><div class="form-group row"><label  class="form-label">HH:</label><input name="HH[]"  class="form-control" type="number"></div></div></td><td><div class="col-sm-4"><div class="form-group row"><label  class="form-label">HM:</label><input name="HM[]"  class="form-control" type="number"></div></div></td><td><div class="col-sm-8"><div class="form-check"><label class="form-check">Interrumpe Produccion?</label><div class="form-check form-check-inline"><input class="form-check-input" type="radio" name="interrumpe[]" value="Si"><label class="form-check-label" for="inlineRadio1">Si</label></div></div></div></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">Quitar</button></td></tr>');
//
//     });
//      $(document).on('click', '.btn_remove', function(){
//           var button_id = $(this).attr("id");
//           $('#row'+button_id+'').remove();
//      });
//
// });
   var idioma_espanol = {    
       "sProcessing":      "Procesando...",
           "sLengthMenu":      "Mostrar _MENU_ registros",
           "sZeroRecords":     "No se encontraron resultados",
           "sEmptyTable":      "Ningún dato disponible en esta tabla",
           "sInfo":            "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
           "sInfoEmpty":       "Mostrando registros del 0 al 0 de un total de 0 registros",
           "sInfoFiltered":    "(filtrado de un total de _MAX_ registros)",
           "sInfoPostFix":     "",
           "sSearch":          "Buscar:",
           "sUrl":             "",
           "sInfoThousands":   ",",
           "sLoadingRecords": "Cargando...",
           "oPaginate": {        
           "sFirst":     "Primero",
                   "sLast":      "Último",
                   "sNext":      "Siguiente",
                   "sPrevious": "Anterior"    
       },
           "oAria": {        
           "sSortAscending":   ": Activar para ordenar la columna de manera ascendente",
                   "sSortDescending": ": Activar para ordenar la columna de manera descendente"    
       }
   }
</script>
<script>
// Start jQuery function after page is loaded
  $(document).ready(function(){

      $('.view_data').keyup(function(){

          var phoneData = $('#phoneData').val();
          $.ajax({
              url: "<?php echo base_url() ?>index.php/main/get_personal",
              method: "POST",
              data: {phoneData:phoneData},
              success: function(data){
                // within the Bootstrap modal
                  $('#phone_result').html(data);

              }

        });
        // End AJAX function
    });
});

</script>
</body>
</html>
