

<footer class="app-footer">
    <div class="site-footer-right">
                    Made with <i class="voyager-heart"></i>
                                    - v1.1.0
            </div>
</footer>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo base_url('assets/vendor/tcg/voyager/assets/js/app.js'); ?>"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.16/datatables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.flash.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.colVis.min.js"></script>


<script>
   $(document).ready(function(){
    $('#tbl_personal').DataTable({
      "order": [
                  [0, "desc"]
              ],
      "columnDefs" :[{
          "targets": [0],
          "searchable": false,
          "sortable": false
      }],
      dom: 'Bfrtip',
      buttons: [


            {
                extend: 'pdfHtml5',
                exportOptions: {
                    columns: [ 0, 1, 2, 3 ]
                }
            },
            'colvis',

        ],
      "language": idioma_espanol
      });
   mostrar_mensaje();


   });

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

<script type="text/javascript">
    // Start jQuery function after page is loaded
      $(document).ready(function(){

        // Start jQuery click function to view Bootstrap modal when view info button is clicked
          $('.view_data').click(function(){
            // Get the id of selected phone and assign it in a variable called phoneData
              var phoneData = $(this).attr('id');

              $.ajax({
                // Path for controller function which fetches selected phone data
                  url: "<?php echo base_url() ?>index.php/seguimiento/get_phone_result",
                  // Method of getting data
                  method: "POST",
                  // Data is sent to the server
                  data: {phoneData:phoneData},
                  // Callback function that is executed after data is successfully sent and recieved
                  success: function(data){
                    // Print the fetched data of the selected phone in the section called #phone_result
                    // within the Bootstrap modal
                      $('#phone_result').html(data);
                      // Display the Bootstrap modal
                      $('#phoneModal').modal('show');

                  }

            });
            // End AJAX function
        });
    });
  </script>



</body>
</html>
