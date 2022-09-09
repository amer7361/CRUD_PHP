<!DOCTYPE html>
<html lang="en">
<head>
  <title>CRUD Estudiantes</title>
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
<!-- The Modal -->
<div class="modal fade" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
  
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Datos del Estudiante</h4>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
  
        <!-- Modal body -->
        <div class="modal-body">
            <form action="crud_estudiantes.php" method="POST">
                <div class="mb-3 mt-3">
                    <label for="text" class="form-label">Id:</label>
                    <input type="text" class="form-control" id="txt_id" name="txt_id" placeholder="0" readonly>
                  </div>
                <div class="mb-3 mt-3">
                  <label for="text" class="form-label">Carne:</label>
                  <input type="text" class="form-control" id="txt_carne" name="txt_carne" placeholder="E001" onchange="validacionCarne(this);" required>
                </div>
                <div class="mb-3">
                  <label for="text"  class="form-label">Nombres:</label>
                  <input type="text" class="form-control" id="txt_nombres" name="txt_nombres" placeholder="Ingrese nombres" required>
                </div>
                <div class="mb-3">
                  <label for="text" class="form-label">Apellidos:</label>
                  <input type="text" class="form-control" id="txt_apellidos" name="txt_apellidos" placeholder="Ingrese apellidos" required>
                </div>
                <div class="mb-3">
                    <label for="text" class="form-label">Direccion:</label>
                    <input type="text" class="form-control" id="txt_direccion" name="txt_direccion" placeholder="Ciudad" required>
                  </div>
                <div class="mb-3">
                    <label for="text" class="form-label">Telefono:</label>
                    <input type="text" class="form-control" id="txt_telefono" name="txt_telefono" placeholder="Ingrese telefono" required>
                    </div>
                <div class="mb-3">
                    <label for="text" class="form-label">Email:</label>
                    <input type="text" class="form-control" id="txt_email" name="txt_email" placeholder="Ingrese email" required>
                    </div>
                <div class="mb-3">
                    <label for="text" class="form-label">Tipo de Sangre:</label>
                    <select name="txt_tipo_sangre" id="txt_tipo_sangre" class="form-select" required>
                    <?php
                    include("dbConeccion.php");
                    $db_coneccion=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
                    $db_coneccion->real_query("select id_tipos_sangre, sangre from tipos_sangre;");
                    $resultado = $db_coneccion->use_result();
                    while ($fila = $resultado->fetch_assoc()) {
                        echo "<option value=".$fila['id_tipos_sangre'].">".$fila['sangre']."</option>";
                    }
                      $db_coneccion->close();
                    ?>
                    
                    </select>
                    
                     </div>  
                <div class="mb-3">
                    <label for="text" class="form-label">Fecha de nacimiento:</label>
                    <input type="datetime" class="form-control" id="txt_fecha_nacimiento" name="txt_fecha_nacimiento" placeholder="Ingrese fecha de nacimiento" required>
                    </div>
                    <button type="submit" class="btn btn-primary" name="btn_agregar" id="btn_agregar" value="Agregar">Agregar</button>
                    <button type="submit" class="btn btn-warning" name="btn_modificar" id="btn_modificar" value="Modificar">Modificar</button>
                    <button type="submit" class="btn btn-danger" name="btn_eliminar" id="btn_eliminar" value="eliminar" onclick="javascripts:if(!confirm('Desea Eliminar este estudiante')) return false">Eliminar</button>

              </form>
        </div>
  
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
        </div>
  
      </div>
    </div>
  </div>
<div class="container mt-3">
  <h2 style="font-family: 'Kalam', cursive;">Datos Estudiantes</h2>
  <p style="font-family: 'Kalam', cursive;">Tabla que contiene los datos de los estudiantes ingresados:</p>  
  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal" onclick="Limpiar();">
    Nuevo
  </button>
  <br> <br>  
  <table class="table table-dark table-striped">
    <thead>
      <tr>
        <th>Carne</th>
        <th>Nombres</th>
        <th>Apellidos</th>
        <th>Direccion</th>
        <th>Telefono</th>
        <th>Correo</th>
        <th>Tipos de Sangre</th>
        <th>Fecha de Nacimiento</th>
      </tr>
    </thead>
    <tbody id="tabla_estudiantes">
         <?php
           
            include("dbConeccion.php");
            $db_coneccion=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
            $db_coneccion->real_query("select e.id_estudiante,e.carne,e.nombres,e.apellidos,e.direccion,e.telefono,e.correo_electronico,ts.id_tipos_sangre,ts.sangre,date_format(e.fecha_nacimiento,'%Y-%m-%d') as fecha_nacimiento from estudiantes  as e inner join tipos_sangre as ts on e.id_tipo_sangre=ts.id_tipos_sangre order by e.carne;");
            $resultado = $db_coneccion->use_result();
            while ($fila = $resultado->fetch_assoc()) {
                echo "<tr data-id_estudiante=".$fila['id_estudiante']." data-id_tipos_sangre=".$fila['id_tipos_sangre'].">";
                echo "<td>".$fila['carne']."</td>";
                echo "<td>".$fila['nombres']."</td>";
                echo "<td>".$fila['apellidos']."</td>";
                echo "<td>".$fila['direccion']."</td>";
                echo "<td>".$fila['telefono']."</td>";
                echo "<td>".$fila['correo_electronico']."</td>";
                echo "<td>".$fila['sangre']."</td>";
                echo "<td>".$fila['fecha_nacimiento']."</td>";
                echo "</tr>";
            }
              $db_coneccion->close();
        ?>
       
        
    </tbody>
  </table>
</div>
<div class="container-fluid footer">
  <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
    <div class="col-md-4 d-flex align-items-center">
      <span class="mb-3 mb-md-0 text-muted">&copy; 2022 Ericka Gonzalez</span>
    </div>

    <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
      <li class="ms-3">
        <a style="text-decoration:none; color:rgb(29, 43, 102); font-weight:bold; font-size:20px; font-family: 'Kalam', cursive;" href="https://github.com/amer7361?tab=repositories" target="_blank">
          <i class="bi bi-github"></i> Github
      </a>
    </li>
    </ul>
  </footer>
</div>
<script>
  function validacionCarne( carne) {
      const pattern = /(^E{1})([0-9]{3})$/;
    if (carne.value === "") {
      carne.setCustomValidity
        ('Ingrese el Carnet');
    } else if (!pattern.test(carne.value)) {
      carne.setCustomValidity
        ('Ingrese un carnet Valido: E001-E999');
    }else {
      carne.setCustomValidity('');
  }
  return true;
  }
  function Limpiar(){
    $("#txt_id").val(0);
      $("#txt_carne").val("");
      $("#txt_nombres").val("");
      $("#txt_apellidos").val("");
      $("#txt_direccion").val("");
      $("#txt_telefono").val("");
      $("#txt_email").val("");
      $("#txt_fecha_nacimiento").val("");
      $("#btn_agregar").show();
      $("#btn_modificar").hide();
      $("#btn_eliminar").hide();
  }
      
  
</script>
<script type="text/javascript">
$('#tabla_estudiantes').on('click','tr td', function(evt){
  var target;
  var id_estudiantes,carne,nombre,apellidos,direccion,telefono,correo_electronico,id_tipo_sangre,fecha_nacimiento;
  target = $(evt.target);
  id_estudiantes = target.parent().data('id_estudiante');
  id_tipo_sangre = target.parent().data('id_tipos_sangre');
  carne = target.parent("tr").find("td").eq(0).html();
  nombres = target.parent("tr").find("td").eq(1).html();
  apellidos = target.parent("tr").find("td").eq(2).html();
  direccion = target.parent("tr").find("td").eq(3).html();
  telefono = target.parent("tr").find("td").eq(4).html();
  correo_electronico = target.parent("tr").find("td").eq(5).html();
  fecha_nacimiento = target.parent("tr").find("td").eq(7).html();
  $('#txt_id').val(id_estudiantes);
  $('#txt_carne').val(carne);
  $('#txt_nombres').val(nombres);
  $('#txt_apellidos').val(apellidos);
  $('#txt_direccion').val(direccion);
  $('#txt_telefono').val(telefono);
  $('#txt_email').val(correo_electronico);
  $('#txt_tipo_sangre').val(id_tipo_sangre);
  $('#txt_fecha_nacimiento').val(fecha_nacimiento);
  $('#btn_agregar').hide();
  $('#btn_modificar').show();
  $('#btn_eliminar').show();
  $('#myModal').modal('show');
});

</script>

<script>
    $(document).ready(()=>{
       $("#btn_modificar").hide();
       $("#btn_eliminar").hide();
       $("#btn_agregar").show();
    });
</script>

</body>
</html>