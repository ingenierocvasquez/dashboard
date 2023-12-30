<main>
    <div class="container">

        <h2>Registro No <?= $formacion['id']?> </h2>
        <br>        
            <b><p>Titulo del Programa:</b> <?= $formacion['nombre_programa']?></p>    
            <b><p>Instución Educativa:</b> <?= $formacion['institucion']?></p>
            <b><p>Tipo de Formación:</b> <?= $formacion['tipo_programa']?></p>
            <b><p>Categoria de Formación:</b> <?= $formacion['categoria_programa']?></p>
            <b><p>Fecha de Certificación:</b> <?= $formacion['fecha_certificacion']?></p>
           
            <a href="<?= base_url().'education'?>"><button type="button" class="btn btn-primary">Regresar</button></a>
        <br>
        <br>
    </div>
</main>