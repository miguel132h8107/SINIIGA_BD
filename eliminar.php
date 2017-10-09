<?php
include 'cn.php';
//recibir los datos y almacenarlos en variables
$id         =    $_REQUEST ['id'];

//consulta para insertar
$mostrar = "DELETE FROM usuarios WHERE id='$id'  ";
//ejecutar resultado
$resultado = mysqli_query($conexion, $mostrar);
if ($resultado) {
 header("Location: tabla.php");
} else {
echo 'insercion no exitosa';
}

