<footer class="blog-footer">
    <p>Dashboard Desarrollado con CI4 por <a href="https://twitter.com/mdo">@ingenierocvasquez</a> © Copyright <?php echo date('Y');?>.</p>
    <p>Página Cargada en <span class="badge badge-dark">{elapsed_time}</span> segundos </p>

<!-- Librerias de JavaScript-->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js@3.0.0/dist/chart.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@2.0.0"></script>


<script>
//Cargar Datatables programas de formacion
new DataTable('#list', {
 stateSave: true,
 language: {
      info: 'Mostrando Página _PAGE_ de _PAGES_',
      infoEmpty: 'No Existen Registros',
      infoFiltered: '(Filtrando de _MAX_ Registros en Total)',
      lengthMenu: 'Mostrando _MENU_ Registros por Página',
      zeroRecords: 'No hay Coincidencia - :(',
      "paginate": {
        "first": "Primero",
        "previous": "Anterior",
        "next": "Siguiente",
        "last": "Ultimo"
        },
        "search": "Buscar:",
  },
});
</script>

<script>
    //Confirma Eliminar Registro
    $(document).ready(function() {
        $('#delete_button').on('click', function(e) {
            e.preventDefault(); // Previene el comportamiento predeterminado del enlace

            var url = document.getElementById("delete_button").action; // Obtiene la URL de eliminación desde el atributo href
            console.log(url);
            // Muestra un cuadro de diálogo de confirmación
            if (confirm('¿Estás seguro de que quieres eliminar este registro?')) {
                // Si el usuario confirma, redirige a la URL de eliminación
                window.location.href = url;
            }
        });
    });
</script>


</footer>



