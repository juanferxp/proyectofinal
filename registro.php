<html>
<html>
<head>
<title>Problema</title>
</head>
<body>
<?php

$conexion=mysqli_connect("localhost","root","","proyectofinal") or
    die("Problemas con la conexión");

mysqli_query($conexion,"insert into registro(usuario,contraseña,nombre,apellido,direccion,correo,edad,sexo) values 
                       ('$_REQUEST[usuario]','$_REQUEST[password]','$_REQUEST[nombre]','$_REQUEST[apellido]','$_REQUEST[direccion]','$_REQUEST[correo]','$_REQUEST[edad]','$_REQUEST[sexo]')")
  or die("Problemas en el select".mysqli_error($conexion));
echo "El cliente fue guardado.";
mysqli_close($conexion);

?>
</body>
</html>