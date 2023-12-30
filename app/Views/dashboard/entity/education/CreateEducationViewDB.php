<main>
    <div class="container">

        <h2>Crear Registro</h2>
        <br>
        
        <form action="<?= base_url().'education/create'?>" method="POST">
  <div class="form-group">
    <label for="titulo_programa">Titulo del Programa</label> 
    <input id="titulo_programa" name="titulo_programa" placeholder="Título del Programa" type="text" required="required" class="form-control">
  </div>
  <div class="form-group">
    <label for="i_educativa">Institución Educativa</label> 
    <div>
      <select id="i_educativa" name="i_educativa" aria-describedby="i_educativaHelpBlock" required="required" class="custom-select">
        <option value="Seleccione">Seleccione...</option>
        <option value="SENA">SENA</option>
        <option value="UDEMY">UDEMY</option>
        <option value="LINKEDIN">LINKEDIN</option>
      </select> 
      <span id="i_educativaHelpBlock" class="form-text text-muted">Seleccione la Institución  Educativa</span>
    </div>
  </div>
    <div class="form-group">
        <label for="t_formacion">Tipo de Formación</label> 
        <div>
        <select id="t_formacion" name="t_formacion" aria-describedby="t_formacionHelpBlock" required="required" class="custom-select">
            <option value="Seleccione">Seleccione...</option>
            <option value="Primaria">Primaria</option>
            <option value="Secundaria">Secundaria</option>
            <option value="Pregrado">Pregrado</option>
            <option value="Postgrado">Postgrado</option>
            <option value="Curso Complementario">Curso Complementario</option>
            <option value="Certificación Internacional">Certificación Internacional</option>
            <option value="Seminario">Seminario</option>
            <option value="Diplomado">Diplomado</option>
        </select> 
            <span id="t_formacionHelpBlock" class="form-text text-muted">Seleccione el Tipo de Formación</span>
        </div>
  </div>
    <div class="form-group">
    <label for="c_formacion">Categoría de Formación</label> 
        <div>
        <select id="c_formacion" name="c_formacion" class="custom-select" aria-describedby="c_formacionHelpBlock" required="required">
            <option value="Seleccione">Seleccione...</option>
            <option value="Desarrollo">Desarrollo</option>
            <option value="Análisis de Datos">Análisis de Datos</option>
            <option value="Proyectos">Proyectos</option>
        </select> 
        <span id="c_formacionHelpBlock" class="form-text text-muted">Seleccione la Categoría de la Formación</span>
        </div>
    </div>
    <div class="form-group">
        <label for="f_certificacion">Fecha de Certificación</label> 
        <input id="f_certificacion" name="f_certificacion" type="date" class="form-control" required="required">
    </div> 
    <div class="form-group">
        <button class="btn btn-success" name="submit" type="submit" class="btn btn-primary">Registrar</button>
    </div>
</form>
        

        <a href="<?= base_url().'education'?>"><button type="button" class="btn btn-primary">Regresar</button></a>
        <br>
        <br>
        <br>
    </div>
</main>