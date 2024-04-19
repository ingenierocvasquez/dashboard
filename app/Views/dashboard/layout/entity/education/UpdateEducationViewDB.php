<main>
    <div class="container">

        <h2>Actualizar Registro</h2>
        <br>
        
  <form action="<?= base_url().'education/update/'.$formacion['id']?>" method="POST">

  <div class="form-group">
      <label for="titulo_programa">Titulo del Programa</label> 
      <input id="titulo_programa" name="titulo_programa" placeholder="Título del Programa" type="text" required="required" class="form-control" value="<?= $formacion['nombre_programa']?>">
  </div>

  <div class="form-group">
      <label for="i_educativa">Institución Educativa</label> 
    <div>
        <select id="i_educativa" name="i_educativa" aria-describedby="i_educativaHelpBlock" required="required" class="custom-select">
            <option value="<?= $formacion['institucion']?>"><?= $formacion['institucion']?></option>
            <?php foreach ($lts_instituciones as $i) : ?>
              <option value="<?= $i['id']?>"><?= $i['nombre_institucion']?></option>
            <?php endforeach ?>   
        </select> 
          <span id="i_educativaHelpBlock" class="form-text text-muted">Seleccione la Institución  Educativa</span>
    </div>
  </div>
  
  <div class="form-group">
        <label for="t_formacion">Tipo de Formación</label> 
    <div>
      <select id="t_formacion" name="t_formacion" aria-describedby="t_formacionHelpBlock" required="required" class="custom-select">
          <option value="<?= $formacion['tipo_programa']?>"><?= $formacion['tipo_programa']?></option> 
          <?php foreach ($lts_tp_programas as $tp) : ?>
            <option value="<?= $tp['id']?>"><?= $tp['tipo_programa']?></option>
          <?php endforeach ?> 
      </select> 
      <span id="t_formacionHelpBlock" class="form-text text-muted">Seleccione el Tipo de Formación</span>
    </div>

  </div>
    <div class="form-group">
    <label for="c_formacion">Categoría de Formación</label> 
        <div>
    <select id="c_formacion" name="c_formacion" class="custom-select" aria-describedby="c_formacionHelpBlock" required="required">
        <option value="<?= $formacion['categoria_programa']?>"><?= $formacion['categoria_programa']?></option> 
        <?php foreach ($lts_cat_pformacion as $cat) : ?>
          <option value="<?= $cat['id']?>"><?= $cat['nombre_categoria']?></option>
        <?php endforeach ?>  
    </select> 
        <span id="c_formacionHelpBlock" class="form-text text-muted">Seleccione la Categoría de la Formación</span>
        </div>
    </div>

    <div class="form-group">
        <label for="f_certificacion">Fecha de Certificación</label> 
        <input id="f_certificacion" name="f_certificacion" type="date" class="form-control" required="required" value="<?= $formacion['fecha_certificacion']?>">
    </div> 

    <div class="form-group">
      <?php if($formacion['id']) : ?>
        <label for="diploma">Diploma</label> 
        <input id="diploma" name="diploma" type="file" class="form-control"  value="">
      <?php endif ?>
    </div> 

    <div class="form-group">
        <button class="btn btn-success" name="submit" type="submit" class="btn btn-primary">Actualizar</button>
    </div>
</form>        

        <a href="<?= base_url().'education'?>"><button type="button" class="btn btn-primary">Regresar</button></a>
    </div>
</main>