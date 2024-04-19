<!--------------------------------------
FOOTER
--------------------------------------->
<div class="container mt-5">
	<footer class="bg-white border-top p-3 text-muted small">
	<div class="row align-items-center justify-content-between">
		<div>
            <span class="navbar-brand mr-2"><strong>ingenierocvasquez</strong></span> Copyright &copy;
			<?= date("Y"); ?>
			. All rights reserved. 
      <p>Página Cargada en <span class="badge badge-dark">{elapsed_time}</span> segundos </p>

		</div>
		<div>
			<!--Made with <a target="_blank" class="text-secondary font-weight-bold" href="https://www.wowthemes.net/mundana-free-html-bootstrap-template/">Mundana Theme</a> by WowThemes.net.-->
		</div>
	</div>
	</footer>
</div>
<!-- End Footer -->
    
<!--------------------------------------
JAVASCRIPTS LIBRERIAS
--------------------------------------->
<!-- Web -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap4.min.js"></script>

<!-- Local -->
<script src="<?php base_url('assets/web/js/vendor/jquery.min.js')?>" type="text/javascript"></script>
<script src="<?php base_url('assets/web/js/vendor/popper.min.js') ?>" type="text/javascript"></script>
<script src="<?php base_url('assets/web/js/vendor/bootstrap.min.js') ?>" type="text/javascript"></script>
<script src="<?php base_url('assets/web/js/functions.js') ?>" type="text/javascript"></script>


<script>
//Cargar Datatables
//new DataTable('#listar_proyectos');
new DataTable('#list_cp', {
  language: {
      info: 'Mostrando Página _PAGE_ de _PAGES_ - _MAX_ Registros en Total',
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

$(document).ready(function() {
    var table = $('#list_cp').DataTable();

    table.on( 'draw.dt', function () {
        var info = table.page.info();
        var recordsDisplay = table.rows( { search: 'applied' } ).count();
        $('#list_cp_info').html('Mostrando ' + recordsDisplay + ' de ' + info.recordsDisplay + ' registros');
    } );
} );
</script>
</body>
</html>