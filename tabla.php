<!DOCTYPE html>
<html>
<head>
    
    <title>TABLA</title>
    </head>
    <body>
    <center>
        <table bgcolor="yellow" border="4">
        <thead>
            <tr> 
            <th colspan="1"><a href="index.html">Nuevo</a></th>
            <th colspan="20">Lista De Usuarios</th>
             </tr>
            </thead>
            <tbody>
<tr>
    <td>Id Usuario</td>
    <td>Clave UPP</td>
    <td>Nombre Del Productor</td>
    <td>Nombre Del Predio</td>
    <td>Nombre Del Tecnico</td>
    <td>Serie Del</td>
    <td>AL</td>
    <td>Total De Paquetes Completos</td>
    <td>Fecha de Aretado</td>
    <td>Numero SINIIGA</td>
    <td>Arete Campana</td>
    <td>Mes</td>
    <td>Anio</td>
    <td>Genero</td>
    <td>Raza</td>
    <td>Raza/Cruza</td>
    <td>Empadre</td>
    <td>Padre</td>
    <td>Madre</td>
        
    <td colspan="2">Operaciones</td>
    
                </tr>
                <?php
                include 'cn.php';
                $mostrar = "SELECT * FROM usuarios";
                $resultado = mysqli_query($conexion, $mostrar);
                while($row=$resultado->fetch_assoc()){
                ?>
                <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['ClaveUpp']; ?></td>
                <td><?php echo $row['NomProduc']; ?></td>
                <td><?php echo $row['NomPredio']; ?></td>
                <td><?php echo $row['NomTecni']; ?></td>
                <td><?php echo $row['SerieDel']; ?></td>
                <td><?php echo $row['AL']; ?></td>
                <td><?php echo $row['TotalPaqComp']; ?></td>
                <td><?php echo $row['FechaAre']; ?></td>
                <td><?php echo $row['NumSini']; ?></td>
                <td><?php echo $row['AreteCam']; ?></td>
                <td><?php echo $row['Mes']; ?></td>
                <td><?php echo $row['Anio']; ?></td>
                <td><?php echo $row['Genero']; ?></td>
                <td><?php echo $row['Raza']; ?></td>
                <td><?php echo $row['RazaCruza']; ?></td>
                <td><?php echo $row['Empadre']; ?></td>
                <td><?php echo $row['Padre']; ?></td>
                <td><?php echo $row['Madre']; ?></td>
                <td><a href="modificar.php?id=<?php echo $row['id']; ?>">Modificar</a></td>
                <td><a href="Eliminar.php?id=<?php echo $row['id']; ?>">Eliminar</a></td>
                </tr>
                <?php
                 
                    
                }
                ?>
            </tbody>
        </table>
        </center>
    </body>
</html>