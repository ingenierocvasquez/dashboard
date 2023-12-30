<main>
    <div class="container">
        <h2>Listar Usuarios</h2>
        <br>
        <button type="button" class="btn btn-success">C</button>
<table id="list_user" class="table table-bordered" style="width:100%">
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
                <td><button type="button" class="btn btn-primary">R</button>
                    <button type="button" class="btn btn-warning">U</button>
                    <button type="button" class="btn btn-danger">D</button>
                </td>
            </tr>
            <?php endforeach ?>
        </tbody>
    </table>
    <br>
    </div>
</main>