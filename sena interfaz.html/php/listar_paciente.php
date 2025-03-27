<DOCTYPE html>
<html lang="en">
<head>
    <meta charset="URF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>document</title>
    <link rel="stylesheet" href="https://stackpath.bootswatch/4.5.2/slate/bootstrap.min.css" crossorign="anonymous">

</head>
<body>
    <a href="index.php" class="nav-link"><--inicio</a>
    <div class="container">
        <table class="table table-borderet">
            <thead>
                <tr>
                    <th>consecutivo</th>
                    <th>tipo documento</th>
                    <th>nro documento</th>
                    <th>fecha de nacimiento</th>
                    <th>nombre</th>
                    <th>apellido</th>
                    <th>sexo</th>
                    <th>acciones</th>
</tr>
</thead>
<tbody id="tabla_persona">
             <?php
                  require_once "php/conexion.php";
                  require_once "controlador/consultasController.php";
                  $sentencia = new consultas();
                  $mostrardatos = $sentencia->select_paciente();
                  foreach($mostrardatos as $res){
                     $cons = $res['consecutivo'];
                      echo "<tr>";
                      echo "<td>".$cons."</td>";
                      echo "<td>".$res["tipo_doc"]."</td>";
                      echo "<td>".$res["documento"]."</td>";
                      echo "<td>".$res["fecha"]."</td>";
                      echo "<td>".$res["nombre"]."</td>";
                      echo "<td>".$res["apellidos"]."</td>";
                      echo "<td>".$res["sexo"]."</td>";
                      echo "<td class ='text-center'>
                      <button class='btn btn-primary btn-sm' onClick='editar($cons);'>editar</button>
                      <button class='btn btn-danger btn-sm' onClick='eliminar($cons);'>eliminar</button>
                      </td>";
                      echo "</tr>";
                  }
              ?>
           </tbody>
           </table>
       </div>
</body>
</html>