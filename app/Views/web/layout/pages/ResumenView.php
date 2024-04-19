<div class="container" id="main">
<h1 class="secondfont mb-3 font-weight-bold" style="text-align: center;">¡Bienvenido a mi página de formación académica y complementaria!</h1>
<p>Aquí encontrarás un registro detallado de todas las formaciones que he completado a lo largo del tiempo, desde los cursos más antiguos hasta los más recientes. Esta lista representa mi compromiso continuo con el aprendizaje y el crecimiento personal y profesional.
Explora cada formación para descubrir los temas que me apasionan y las habilidades que he desarrollado a lo largo del tiempo. ¡Espero que encuentres inspiración en mi viaje educativo y que te motive a perseguir tus propias metas de aprendizaje!</p>

<p>Gracias por unirte a mí en este viaje de descubrimiento y desarrollo. ¡Que este registro sea un recurso valioso para tu propio camino de aprendizaje!</p>

<h2>Formación Acádemica</h2>
<hr>
<table id="list_ac" class="table table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>Titulo del Programa</th>
                        <th>Institución Educativa</th>
                        <th>Tipo de Formación</th>
                        <th>Categoria de Formación</th>
                        <th>Fecha de Certificación</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($listar_form_academicas as $fa) : ?>
                    <tr>
                        <td><?= $fa['nombre_programa']?></td>
                        <td><?= $fa['nombre_institucion']?></td>
                        <td><?= $fa['tipo_programa']?></td>
                        <td><?= $fa['nombre_categoria']?></td>
                        <td><?= $fa['fecha_certificacion']?></td>
                    </tr>
                    <?php endforeach ?>
                </tbody>
            </table>

<hr>
<h2>Formación Complementaria</h2>
<?php foreach ($contar_cat_pformacion as $contar_cat) : ?>
<button id="badget" type="button" class="btn btn-primary">
<?= $contar_cat['nombre_categoria']?> <span class="badge badge-light"><?= $contar_cat['Total']?></span>
</button>
<?php endforeach ?>
<hr>
<table id="list_cp" class="table table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>Titulo del Programa</th>
                        <th>Institución Educativa</th>
                        <th>Tipo de Formación</th>
                        <th>Categoria de Formación</th>
                        <th>Fecha de Certificación</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($listar_form_complementaria as $fc) : ?>
                    <tr>
                        <td><?= $fc['nombre_programa']?></td>
                        <td><?= $fc['nombre_institucion']?></td>
                        <td><?= $fc['tipo_programa']?></td>
                        <td><?= $fc['nombre_categoria']?></td>
                        <td><?= $fc['fecha_certificacion']?></td>
                    </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
<hr>


</div>