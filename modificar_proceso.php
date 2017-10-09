<?php
include 'cn.php';
//recibir los datos y almacenarlos en variables
  $id            = $_REQUEST ['id'];
  $ClaveUpp      = $_POST["ClaveUpp"];
  $NomProduc     = $_POST["NomProduc"];
  $NomPredio     = $_POST["NomPredio"];
  $NomTecni      = $_POST["NomTecni"];
  $SerieDel      = $_POST["SerieDel"];
  $AL            = $_POST["AL"];
  $TotalPaqComp  = $_POST["TotalPaqComp"];
  $FechaAre      = $_POST["FechaAre"];
  $NumSini       = $_POST["NumSini"];
  $AreteCam      = $_POST["AreteCam"];
  $Mes           = $_POST["Mes"];
  $Anio          = $_POST["Anio"];
  $Genero        = $_POST["Genero"];
  $Raza          = $_POST["Raza"];
  $RazaCruza     = $_POST["RazaCruza"];
  $Empadre       = $_POST["Empadre"];
  $Padre         = $_POST["Padre"];
  $Madre         = $_POST["Madre"];
//consulta para insertar
$mostrar = "UPDATE usuarios SET ClaveUpp='$ClaveUpp', NomProduc='$NomProduc', NomPredio='$NomPredio', NomTecni='$NomTecni', SerieDel='$SerieDel', AL='$AL',TotalPaqComp='$TotalPaqComp', FechaAre='$FechaAre', NumSini='$NumSini', AreteCam='$AreteCam', Mes='$Mes', Anio='$Anio', Genero='$Genero', Raza='$Raza', RazaCruza='$RazaCruza', Empadre='$Empadre', Padre='$Padre', Madre='$Madre'  WHERE id='$id'  ";
//ejecutar resultado
$resultado = mysqli_query($conexion, $mostrar);
if ($resultado) {
 header("Location: tabla.php");
} else {
echo 'insercion no exitosa';
}
