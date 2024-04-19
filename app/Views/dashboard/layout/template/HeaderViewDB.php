<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard @ingenierocvasquez</title>
    
    <!-- librerias CSS -->
    <link href="<?= base_url('assets/frontend/css/main.css') ?>" rel="stylesheet"/>
    <link rel="stylesheet" href="<?= base_url().'assets/datatables/css/dataTables.bootstrap4.min.css' ?>">
    <link rel="stylesheet" href="<?= base_url().'assets/main_dashboard.css' ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        
    <!-- Header -->
    <div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light rounded">
            <a class="navbar-brand" href="#">Dashboard</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample09" aria-controls="navbarsExample09" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>    
    <div class="collapse navbar-collapse" id="navbarsExample09">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                  <a class="nav-link" href="<?= base_url().'dashboard' ?>">Inicio <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?= base_url().'user' ?>">Usuarios <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Formación Académica</a>
                  <div class="dropdown-menu" aria-labelledby="dropdown01">
                    <a class="dropdown-item" href="<?= base_url().'education' ?>">Formación</a>
                    <a class="dropdown-item" href="#">Instituciones Educativas</a>
                    <a class="dropdown-item" href="">Tipo de Formación</a>
                    <a class="dropdown-item" href="">Categorias de Formación</a>
                  </div>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="dropdown02" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Perfil</a>
                  <div class="dropdown-menu" aria-labelledby="dropdown02">
                    <a class="dropdown-item" href="<?= base_url().'logout' ?>">Cerrar Sesión</a>
                  </div>
                </li>
              </ul>
            </div>
          </nav>   
    </div>
    </body>
    </html>

</head>
<body>