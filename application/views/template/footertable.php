

<footer class="app-footer">
    <div class="site-footer-right">
                    Made with <i class="voyager-heart"></i>
                                    - v1.1.0
            </div>
</footer>

<!-- Javascript Libs -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo base_url('assets/vendor/tcg/voyager/assets/js/app.js'); ?>"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.16/datatables.min.js"></script>
<script>
$(document).ready(function(){
 $('#tbl_personal').DataTable({
"order": [
            [0, "desc"]
        ],
      
"language": idioma_espanol
});
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



</body>
</html>
