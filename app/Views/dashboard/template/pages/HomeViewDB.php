<main role="main" class="container">
      <h1 class="mt-5">Bienvenido al Dashboard ******</h1>
      <p class="lead">El siguiente panel es un resumen de los logros academicos alcanzados.</p>
      <p>Incluye todas las <a href="<?= base_url().'education'?>">Formaciones</a> realizadas.</p>

      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/chart.js@3.0.0/dist/chart.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@2.0.0"></script>
  
      <div class="container">
    <h2>Gráfica de Certificaciones por Año</h2>
      <canvas id="graf1"></canvas>

  <div class="row">
    <div class="col">
      <h2>Grafica de Tipos de Cursos</h2>
      <canvas id="graf2"></canvas>
    </div>
    <div class="col">
      2 of 2
    </div>
    </div>
    <!-- Close container -->
  </div> 
    
  
  <!-- Grafica de Formaciones por Año -->
  <script>
    year = [];
    counter = [];
    <?php foreach ($datosGrafico1 as $dg) : ?>
      year.push(<?= $dg['year'] ?>);
      counter.push(<?= $dg['counter'] ?>);
      //console.log(year);
      //console.log(counter);
    <?php endforeach ?>

    const ctx1 = document.getElementById('graf1');
      new Chart(ctx1, 
      {
        type: 'bar',
        data: {
          labels: year, 
          datasets: [{
            label: '# de Formaciones por Año',
            data: counter, 
            backgroundColor: [
              '#9ad0f5',
        ],
            borderWidth: 1
          }]
        },
        plugins: [ChartDataLabels],
        options: {
          scales: {
            y: {
              beginAtZero: true
            }
          }
        }   
      });
  </script>


<!-- Grafica de Tipo de Formación-->
  <script>
    type_course = [];
    counter2 = [];
    <?php foreach ($datosGrafico2 as $dg2) : ?>
      //type_course.push(<?= $dg2['categoria_programa'] ?>);
      counter2.push(<?= $dg2['total'] ?>);
      console.log(type_course);
      console.log(counter2);
    <?php endforeach ?>
  const ctx2 = document.getElementById('graf2');

  new Chart(ctx2, {
    type: 'bar',
    data: {
      labels: type_course,
      datasets: [{
        label: '# de Cursos Por Categoria',
        data: counter2,
        backgroundColor: [
              '#9ad0f5',
        ],
        borderWidth: 1
      }]
    },
    plugins: [ChartDataLabels],
        options: {
          scales: {
            y: {
              beginAtZero: true
            }
          }
        }
  });
</script> 


    </main>