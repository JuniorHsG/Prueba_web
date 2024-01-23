<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<body>
<h1>hola mundo</h1>    
<div class="container-fluid row">
<form class="col-4 p-3">
    <h3 class= "text-center tex-secondary" >  REGISTRO DE PERSONAL</h3>
</div>

<form>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nombre de la persona</label>
    <input type="text" class="form-control" name="nombre">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Apellido de la persona</label>
    <input type="text" class="form-control" name="apellido">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Fecha de nacimiento de la persona</label>
    <input type="date" class="form-control" name="fecha">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">correo de la persona</label>
    <input type="text" class="form-control" name="nombre">

  <button type="submit" class="btn btn-primary" name="registrar" value="ok" >registrar</button>
</form>    
<div class="col-8 p-4">
<table class="table">
  <thead class="bd-info">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">NOMBRES</th>
      <th scope="col">APELLIDOS</th>
      <th scope="col">FECHA DE NACIMIENTO</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    <?php ?>  include"modelo/conecion.php";
    &sql=$conexion->query("select *from persona");
    while($datos=$sql->fetch_object){ 

    
<tr> 
    <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
      <td>Mark</td>
      <td> 
        <a href=""> editar</a>
        <a href=""> eliinar</a>
      </td>
    
 
    </tr>
   

    } 
    <?php   
    ?>
    
  </tbody>
</table>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>