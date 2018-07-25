

<footer class="app-footer">
    <div class="site-footer-right">
                    Made with <i class="voyager-heart"></i>
                                  - v1.1.0
            </div>
</footer>
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.min.js'); ?>"></script>

<script type="text/javascript" src="<?php echo base_url('assets/vendor/tcg/voyager/assets/js/app.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/datatables.min.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap-select.min.js'); ?>"></script>




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
  if ($(this).find('option:selected').text() === 'Otros') {

      $("#CodArea").attr("readonly", false);
    }
  });


  var now = new Date();

		 var day = ("0" + now.getDate()).slice(-2);
		 var month = ("0" + (now.getMonth() + 1)).slice(-2);

		 var today = now.getFullYear()+"-"+(month)+"-"+(day) ;


		$('#datePicker').val(today);
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
