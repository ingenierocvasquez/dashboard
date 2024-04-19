<main>
    <div class="container">
        <h2>Listar Programas de Formación</h2>
        <?php if(session('mensaje')):?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong><?= session('mensaje') ?></strong> 
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <?php endif?>
        <a href="<?= base_url().'education/new' ?>"><button type="button" id="btn_crear" class="btn btn-success"><i class="fa fa-plus" aria-hidden="true"></i> Crear Formación</button></a>
            <table id="list" class="table table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Titulo del Programa</th>
                        <th>Institución Educativa</th>
                        <th>Tipo de Formación</th>
                        <th>Categoria de Formación</th>
                        <th>Fecha de Certificación</th>
                        <th>Acciones </th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($listar_programas as $f) : ?>
                    <tr>
                        <td><?= $f['id']?></td>
                        <td><?= $f['nombre_programa']?></td>
                        <td><?= $f['nombre_institucion']?></td>
                        <td><?= $f['tipo_programa']?></td>
                        <td><?= $f['nombre_categoria']?></td>
                        <td><?= $f['fecha_certificacion']?></td>
                        <td><a href="<?= base_url().'education/'.$f['id']?>">
                        <div id="action">
                            <!-- Boton Leer -->
                            <button type="button" class="btn btn-light btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> </button></a>
                            <a href="<?= base_url().'education/edit/'.$f['id']?>">
                            <!-- Boton Editar -->
                            <button type="button" class="btn btn-light btn-sm"><i class="fa fa-pencil" aria-hidden="true"></i> </button></a>
                            <!-- Boton Eliminar -->
                            <form action="<?= base_url().'education/delete/'.$f['id']?>" method="POST" id="delete_button">
                            <button type="submit" class="btn btn-light btn-sm"><i class="fa fa-trash" aria-hidden="true"></i> </button>
                            </form>
                        </div>
                        </td>
                    </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
    </div>
</main>
