<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>
<body>
    <div class="crad text-center">
        SpaNix Reservas
    </div>
    <div class="row pt-5 justify-content-center">
        <!--inicio del formulario-->
        <form action=""id="form" class="form-horizontal">
        <div class="card-header">
        <input type="text" name= "tipo_operacion" value="guardar" hidden="true">
        <div>
            <h5>Reserva tu cita</h5>
        </div>
        <div class="form-group">
            <select name="tipo_doc" id="tipo_doc" class= "form-control">
                <option value="">selecione el documento de identidad</option>
                <option value="CC">cedula de ciudadania</option>
                <option value="TI">tarjeta de identidad</option>
                <option value="CR">cedula de esxtranjeria</option>
                <option value="RC">registro civil</option>
                <option value="NIT">nit</option>
                </select>
        </div>
        <div class="form-group">
            <input type="text" name="documento" id="documento" name="documento" class="form-control" placeholder="digite su numero de identidad">
    </div>
    <div class="form-group">
            <input type="text" name="documento" id="fecha" class="form-control" placeholder="digite numero telefonico">
</div>
            <div class="form-group">
            <input type="date" name="fecha" id="fecha" class="form-control">
    </div>
    <div class="form-group">
        <input type="text" name="nombre" id="nombre" class="form-control" placeholder="digite su nombre">
    </div>
     <div class="form-group">
        <input type="text" name="apellidos" id="apellidos" class="form-control"placeholder="digite su apellido">
</div>
<div class="form-group">
            <select name="sexo" id="sexo" class= "form-control">
                <option value="">selecione el sexo</option>
                <option value="masculino">masculino</option>
                <option value="femenino">femenino</option>
                </select>
        </div>
</div class="form-group">
<button type="submit" class="btn.info btn-block">siguiente</button>
</div>
</div>
<a href="" class="mav-link"href="index.php"><--index</a>
</form>
</div>
</body>
</html>