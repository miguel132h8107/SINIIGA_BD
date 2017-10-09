<?php
include 'cn.php';
//recibir los datos y almacenarlos en variables
  $ClaveUpp      = $_POST['ClaveUpp'];
  $NomProduc     = $_POST['NomProduc'];
  $NomPredio     = $_POST['NomPredio'];
  $NomTecni      = $_POST['NomTecni'];
  $SerieDel      = $_POST['SerieDel'];
  $AL            = $_POST['AL'];
  $TotalPaqComp  = $_POST['TotalPaqComp'];
  $FechaAre      = $_POST['FechaAre'];
  $NumSini       = $_POST['NumSini'];
  $AreteCam      = $_POST['AreteCam'];
  $Mes           = $_POST['Mes'];
  $Anio          = $_POST['Anio'];
  $Genero        = $_POST['Genero'];
  $Raza          = $_POST['Raza'];
  $RazaCruza     = $_POST['RazaCruza'];
  $Empadre       = $_POST['Empadre'];
  $Padre         = $_POST['Padre'];
  $Madre         = $_POST['Madre'];
  
//consulta para insertar
$insertar = "INSERT INTO usuarios(ClaveUpp, NomProduc, NomPredio, NomTecni, SerieDel, AL, TotalPaqComp, FechaAre, NumSini, AreteCam, Mes, Anio, Genero, Raza, RazaCruza, Empadre, Padre, Madre ) VALUES ('$ClaveUpp', '$NomProduc', '$NomPredio', '$NomTecni', '$SerieDel', '$AL', '$TotalPaqComp', '$FechaAre', '$NumSini', '$AreteCam', '$Mes', '$Anio', '$Genero', '$Raza', '$RazaCruza', '$Empadre', '$Padre', '$Madre')";
//ejecutar resultado
$resultado = mysqli_query($conexion, $insertar);
if (!$resultado) {
 echo 'error al registrarse';
} else {
    header ("Location: tabla.php");
}
//cerrar conexion
mysqli_close($conexion);
