<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset = "UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Kalam&display=swap" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
</head>
<body>
  <style>
    body{
    min-height: 100vh;
    margin: 0;
    display: flex;
    flex-direction: column;
    font-family: 'Saira Semi Condensed', sans-serif;;
    }

    .footer{
    margin-top: auto;
    display: table;
    width: 100%;
    height: 13vh;
    text-align: center;
    }

    .iframe{
      width: 100%;
      min-height: 800px ;

    }

    nav{
      
      background-color: #090847;
  
    }
    .nav-link,.navbar-brand{  
      color:#fff8f8;
    }
      
  </style>
  <header>
  <nav class="navbar navbar-expand-lg">
      <div class="container-fluid">
        <a class="navbar-brand" href="/php_crud/index.php">CRUD_Estuadiantes</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="/php_crud/index.php">Inicio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="AcercaDe.php">Acerca De</a>
            </li>
           
          </ul>
        </div>
      </div>
    </nav>
  </header>

  <div class="container text-center" style="font-family: 'Kalam', cursive;">
    <h3>??Hola! Esta es la pagina de Informacion </h3>
    <h5>El CRUD_Estudiantes consiste en crear una tabla donde se muestre la informacion de los estudiantes, al igual, que se pueda, agregar nuevos, modificar y eliminar los ya existentes. El Crud se baso en las siguientes instrucciones: </h5>

    <iframe src="tarea_php.pdf" class="iframe"></iframe>
  </div>

  
  <div class="container-fluid footer">
    <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
      <div class="col-md-4 d-flex align-items-center">
        <span class="mb-3 mb-md-0 text-muted">&copy; 2022 Ericka Gonzalez</span>
      </div>
  
      <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
        <li class="ms-3">
          <a style="text-decoration:none; color:rgb(29, 43, 102); font-weight:bold; font-size:20px;font-family: 'Kalam', cursive;" href="https://github.com/amer7361?tab=repositories" target="_blank">
            <i class="bi bi-github"></i> Github
        </a>
      </li>
      </ul>
    </footer>
  </div>
</body>
</html>