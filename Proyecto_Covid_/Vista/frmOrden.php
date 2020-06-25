<?php 

?>
<html>
<head>
    <meta charset="UTF-8">
  <title>Projecto COVID 19</title>
  <!-- Latest compiled and minified CSS -->
  
 <link href="https://stackpath.bootstrapcdn.com/bootswatch/4.1.3/flatly/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
  <!-- Optional theme -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css"  crossorigin="anonymous">

  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"  crossorigin="anonymous"></script>

</head>


<body>

 <div class="jumbotron">
<!-- INICIA LA COLUMNA -->
    <center><h1 class="display-3">Orden de Entrada</h1></center>
<hr class="my-4">
<hr class="my-4">
<div class="row">
    <div class="col-md-4"></div>
         <div class="col-md-4">
             <form method="POST" action="../controlador/NuevoClienteControlador.php" >
        
    <div class="form-group">
      <label for="Nombre_hospital">Nombre Hospital</label>
      <input type="text" name="Nombre_hospital" class="form-control" id="Nombre_hospital">
    </div>
     <div class="form-group">
      <label for="paciente">Nombre Paciente</label>
      <input type="text" name="paciente" class="form-control" id="paciente">
    </div>
     <div class="form-group">
      <label for="fecha_ingreso">Fecha de Ingreso</label>
      <input type="date" name="fecha_ingreso" class="form-control" id="fecha_ingreso">
    </div>
     <div class="form-group">
      <label for="hora">Hora Ingreso</label>
      <input type="time" name="hora" class="form-control" id="hora">
    </div>  

    <center>
       <input type="submit" value="Crear" class="btn btn-outline-success" name="btn_crear">
       <input type="submit" value="Listar" class="btn btn-outline-info" name="btn_listar">       
       <input type="submit" value="Modificar" class="btn btn-outline-danger" name="btn_modificar">      
    </center>

        </form>
<hr class="my-4">
     </div>
</div>

 </div>
  
</body>
</html>

