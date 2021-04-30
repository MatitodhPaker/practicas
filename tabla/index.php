<?php
  $conexion=mysqli_connect('localhost','root','','login');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mostrar datos</title>
</head>
<body>
  <table border="1">
    <tr>
      <td>id</td>
      <td>id rol</td>
      <td>usuario</td>
      <td>password</td>
      <td>fecha</td>
    </tr>
    <?php
      $sql="SELECT * FROM t_usuarios";
      $result=mysqli_query($conexion,$sql);
      while ($mostrar=mysqli_fetch_array($result)) {
    ?>
    <tr>
      <td><?php echo $mostrar['id_usuario'];?></td>
      <td><?php echo $mostrar['id_rol_usuario'];?></td>
      <td><?php echo $mostrar['usuario'];?></td>
      <td><?php echo $mostrar['password'];?></td>
      <td><?php echo $mostrar['fechainsert'];?></td>
    </tr>
    <?php
      }
    ?>
  </table>
</body>
</html>