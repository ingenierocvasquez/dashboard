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
      <option value="SELECCIONE">SELECCIONE</option>
      <option value="SERVICIO NACIONAL DE APRENDIZAJE (SENA)">SERVICIO NACIONAL DE APRENDIZAJE (SENA)</option>
      <option value="LINKEND LEARNING">LINKEND LEARNING</option>
      <option value="UDEMY">UDEMY</option>
      <option value="FUNDACIÓN UNIVERSITARIA TECNOLOGICO DE COMFENALCO">FUNDACIÓN UNIVERSITARIA TECNOLOGICO DE COMFENALCO</option>
      <option value="FUNDACIÓN POLITECNICO GRAN COLOMBIANO">FUNDACIÓN POLITECNICO GRAN COLOMBIANO</option>
      <option value="UNIVERSIDAD TECNOLOGICA DE BOLIVAR">UNIVERSIDAD TECNOLOGICA DE BOLIVAR</option>
      <option value="INSTITUCIÓN EDUCATIVA REPUBLICA DE ARGENTINA">INSTITUCIÓN EDUCATIVA REPUBLICA DE ARGENTINA</option>
      <option value="INSTITUCIÓN EDUCATIVA SEMINARIO DE CARTAGENA">INSTITUCIÓN EDUCATIVA SEMINARIO DE CARTAGENA</option>

      </select> 
      <span id="i_educativaHelpBlock" class="form-text text-muted">Seleccione la Institución  Educativa</span>
    </div>
  </div>
    <div class="form-group">
        <label for="t_formacion">Tipo de Formación</label> 
        <div>
        <select id="t_formacion" name="t_formacion" aria-describedby="t_formacionHelpBlock" required="required" class="custom-select">
        <option value="SELECCIONE">SELECCIONE</option>
        <option value="PRIMARIA">PRIMARIA</option>
        <option value="SECUNDARIA">SECUNDARIA</option>
        <option value="TECNICO">TECNICO</option>
        <option value="TECNOLOGO">TECNOLOGO</option>
        <option value="PREGRADO">PREGRADO</option>
        <option value="POSTGRADO">POSTGRADO</option>
        <option value="CURSO COMPLEMENTARIO">CURSO COMPLEMENTARIO</option>
        <option value="SEMINARIO Y/O TALLER">SEMINARIO Y/O TALLER</option>
        <option value="DIPLOMADO">DIPLOMADO</option>
        <option value="ITINERARIO">ITINERARIO</option>
        <option value="CERTIFICACION INTERNACIONAL">CERTIFICACION INTERNACIONAL</option>


        </select> 
            <span id="t_formacionHelpBlock" class="form-text text-muted">Seleccione el Tipo de Formación</span>
        </div>
  </div>
    <div class="form-group">
    <label for="c_formacion">Categoría de Formación</label> 
        <div>
        <select id="c_formacion" name="c_formacion" class="custom-select" aria-describedby="c_formacionHelpBlock" required="required">
        <option value="SELECCIONE">SELECCIONE</option>
        <option value="ADMINISTRACIÓN">ADMINISTRACIÓN</option>
        <option value="DATOS">DATOS</option>
        <option value="PROGRAMACIÓN">PROGRAMACIÓN</option>
        <option value="DISEÑO">DISEÑO</option>
        <option value="HSEQ">HSEQ</option>
        <option value="IDIOMAS">IDIOMAS</option>
        <option value="INFORMATICA">INFORMATICA</option>
        <option value="PEDAGOGIA">PEDAGOGIA</option>
        <option value="PROYECTOS">PROYECTOS</option>
        <option value="REDES">REDES</option>
        <option value="SOPORTE TECNICO">SOPORTE TECNICO</option>

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