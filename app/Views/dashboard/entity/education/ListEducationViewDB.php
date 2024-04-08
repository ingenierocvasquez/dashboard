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
        <a href="<?= base_url().'education/new' ?>"><button type="button" class="btn btn-success"><i class="fa fa-plus" aria-hidden="true"></i> Crear Formación</button></a>
            <table id="list" class="table table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Titulo del Programa</th>
                        <th>Instución Educativa</th>
                        <th>Tipo de Formación</th>
                        <th>Categoria de Formación</th>
                        <th>Fecha de Certificación</th>
                        <th>Realizar Funciones </th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($formaciones as $f) : ?>
                    <tr>
                        <td><?= $f['id']?></td>
                        <td><?= $f['nombre_programa']?></td>
                        <td><?= $f['institucion']?></td>
                        <td><?= $f['tipo_programa']?></td>
                        <td><?= $f['categoria_programa']?></td>
                        <td><?= $f['fecha_certificacion']?></td>
                        <td id="action"><a href="<?= base_url().'education/'.$f['id']?>">
                        <button type="button" class="btn btn-light btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> Ver</button></a>
                            <a href="<?= base_url().'education/edit/'.$f['id']?>">
                        <button type="button" class="btn btn-light btn-sm"><i class="fa fa-pencil" aria-hidden="true"></i> Editar</button></a>
                            <form action="<?= base_url().'education/delete/'.$f['id']?>" method="POST">
                        <button type="submit" class="btn btn-light btn-sm"><i class="fa fa-trash" aria-hidden="true"></i> Eliminar</button>
                            </form>
                        </td>
                    </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
    </div>
</main>