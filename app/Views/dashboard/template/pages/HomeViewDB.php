<main role="main" class="container">
      <h1 class="mt-5">Bienvenido al Dashboard ******</h1>
      <p class="lead">El siguiente panel es un resumen de los logros academicos alcanzados.</p>
      <p>Incluye todas las <a href="<?= base_url().'education'?>">Formaciones</a> realizadas.</p>

      <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/chart.js@3.0.0/dist/chart.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@2.0.0"></script>
  <div>
      <canvas id="myChart"></canvas>
  </div> 
    
  
  <!-- Grafica de Formaciones por Año -->

  <script>
    year = [];
    counter = [];
    <?php foreach ($datosGrafico as $dg) : ?>
      year.push(<?= $dg['year'] ?>);
      counter.push(<?= $dg['counter'] ?>);
      //console.log(year);
      //console.log(counter);
    <?php endforeach ?>

    const ctx = document.getElementById('myChart');
      new Chart(ctx, 
      {
        type: 'bar',
        data: {
          labels: year,
          datasets: [{
            label: '# de Formaciones por Año',
            data: counter,
            backgroundColor: [
              'rgba(255, 159, 64, 0.2)',
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