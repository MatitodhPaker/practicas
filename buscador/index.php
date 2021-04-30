<?php
  $conexion=mysqli_connect('localhost','root','','practicas');
  $sql="SELECT * FROM t_paises";
  $result=mysqli_query($conexion,$sql);
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="css/select2.min.css">
  <script
  src="https://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>
  <script src="js/select2.min.js"></script>
</head>
<body>
  <section style="text-align: center;">
    <select id="controlBuscador" style="width: 50%">
      <?php while ($ver=mysqli_fetch_row($result)) {?>
      <option value="<?php echo $ver[0];?>">
        <?php echo $ver[1]?>
      </option>
      <?php } ?>
    </select>
  </section>
</body>
</html>
<script>
  $(document).ready(function(){
    $('#controlBuscador').select2();
  });
</script>