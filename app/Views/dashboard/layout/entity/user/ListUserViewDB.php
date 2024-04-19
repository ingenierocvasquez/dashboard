<main>
    <div class="container">
        <h2>Listar Usuarios</h2>
        <br>
        <button type="button" id="btn_crear" class="btn btn-success">Crear Usuarios</button>
<table id="list" class="table table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre de Usuario</th>
                <th>Estado</th>
                <th>Fecha de Creación</th>
                <th>Fecha de Actualización</th>
               <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $u) : ?>
            <tr>
                <td><?= $u->id ?></td>
                <td><?= $u->username ?></td>
                <td><?= $u->active ?></td>
                <td><?= $u->created_at ?></td>
                <td><?= $u->updated_at ?></td>
               <td><button type="button" class="btn btn-light btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> </button>
                    <button type="button" class="btn btn-light btn-sm"><i class="fa fa-pencil" aria-hidden="true"></i> </button>
                    <button type="button" class="btn btn-light btn-sm"><i class="fa fa-trash" aria-hidden="true"></i> </button>
                </td>
            </tr>
            <?php endforeach ?>
        </tbody>
    </table>
    <br>
    </div>
</main>