

<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>SINIIGA</title>
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>

      <link rel="stylesheet" href="css/style.css">

  
</head>

<body>
 
<!-- ** -->
<!-- ** -->
<div class="container"> <!-- contenedor general  -->
  
    
    <?php
               $id = $_REQUEST['id'];
        
                include 'cn.php';
                $mostrar = "SELECT * FROM usuarios WHERE id ='$id'";
                $resultado = mysqli_query($conexion, $mostrar);
                $row=$resultado->fetch_assoc();
   ?>
    
    <form action="modificar_proceso.php?id=<?php echo $row['id']; ?>" method="POST"> <!--Iniciamos formulario, donde tenemos campos de entrada de datos/confirmacion, Botones, envio-->
    <div class="row"><!-- Definimos contenedor donde estaran la caja del Formulario -->
   
       
        <center> <img width="136px" height="126px" src="img/LogoSAGARPA.jpg" > </center><!-- Imagen de SINIIGA-->

       
        
     <h2>SISTEMA NACIONAL DE IDENTIFICACION INDIVIDUAL DE GANADO(SINIIGA)</h2>  
     <h3>CEDULA DE IDENTIFICACION ESPECIE (BOVINA)</h3> <!--Titulo -->
     
        
        
        <h4>Clave UPP</h4> <!-- nombre de la caja-->
        <div class="input-group input-group-icon"> <!-- inicio campo Clave UPP-->
        <input type="text" name="ClaveUpp" id="ClaveUpp"  placeholder="Clave UPP" value="<?php echo $row['ClaveUpp']; ?>" /> <!-- Nombre de la caja de ingresar texto-->
        <div class="input-icon"><i class="fa fa-wrench" aria-hidden="true"></i></div> <!-- Imagen Del Icono Para El Formulario-->
      </div> <!-- Fin campo Clave UPP-->
     
    <h4>Nombre Del Productor</h4> <!--Nombre de la caja-->
      <div class="input-group input-group-icon"><!--inicio campo Nom. Productor-->
        <input type="text" name="NomProduc" id="NomProduc" placeholder="Nombre Del Productor" value="<?php echo $row['NomProduc']; ?>"/><!--Nombre dela caja-->
       <div class="input-icon"><i class="fa fa-user" aria-hidden="true"></i></div> <!--icono para el input text-->
      </div> <!-- Fin campo Nom. Productor-->
    
      
        
        <div class="row"> <!--Contenedro Donde estaran nombre del predio y nombre del tecnico-->
        <div class="col-half">  <!-- iniciamos datos del nombre predio-->
        <h4>Nombre Del Predio</h4> <!--titulo de la caja-->
        <div class="input-group input-group-icon"> <!-- Inicio campo Nombre predio-->
        <input type="text" name="NomPredio" id="NomPredio" placeholder="Nombre Del Predio" value="<?php echo $row['NomPredio']; ?>"/> <!-- nombre dela caja-->
        <div class="input-icon"><i class="fa fa-map-marker" aria-hidden="true"></i></div> <!--Icono-->
      </div> <!--finalizamos campo nombre Predio-->
      </div> <!--terminamos datos del predio-->
      
        
           
           
           
           <div class="col-half"> <!--Iniciamos datos-->
        <h4>Nombre Del Tecnico</h4>
        <div class="input-group input-group-icon">
        <input type="text" name="NomTecni" id="NomTecni" placeholder="Nombre Del Tecnico" value="<?php echo $row['NomTecni']; ?>"/>
        <div class="input-icon"><i class="fa fa-user" aria-hidden="true"></i></div>
      </div>
      </div> <!--Finaizamos Datos--> 
    </div> <!--Finalizamos contenedor-->
        
       <div class="row"> <!--iniciamos contenedor serie del y AL-->
      <div class="col-half">
        <h4>Serie Del</h4>
        <div class="input-group input-group-icon">
        <input type="text" name="SerieDel" id="SerieDel" placeholder="Serie Del" value="<?php echo $row['SerieDel']; ?>"/>
        <div class="input-icon"><i class="fa fa-sort-numeric-asc" aria-hidden="true"></i></div>
      </div>
      </div>
      <div class="col-half">
        
          
          
          <h4>AL</h4>
        <div class="input-group input-group-icon">
        <input type="text" name="AL" id="AL" placeholder="AL" value="<?php echo $row['AL']; ?>"/>
        <div class="input-icon"><i class="fa fa-list-alt" aria-hidden="true"></i></div>
      </div>
      </div>
       </div>  <!--finalizamos contenedor--> 
        
        
     <div class="row"> <!--iniciamos contenedor campos Total. paq. compl, Fech. Aretado-->
       <div class="col-half">
        <h4>Total De Paq. Compl.</h4>
        <div class="input-group input-group-icon">
        <input type="text" name="TotalPaqComp" id="TotalPaqComp" placeholder="Total Paq. Completos" value="<?php echo $row['TotalPaqComp']; ?>"/>
        <div class="input-icon"><i class="fa fa-th-list" aria-hidden="true"></i></div>
      </div>
      </div>
         
         
         
         <div class="col-half">
        <h4>Fecha Del Aretado</h4>
        <div class="input-group">
      <input type="date" name="FechaAre" id="FechaAre">  <!--Iniciamos un input de type Date, para la fecha-->
        </div>
        </div>
        </div> <!--Finalizamos contenedor Campos Tota. Paq. Comple, Fech. Aretado-->
      
       <label>Campos Obligatorios**</label>   <!-- formulario tipo label, para tener como referencia que apartir de ahi son datos obligatorios-->
      <div class="row"> <!--iniciamos contenedor NO. SINIIGA, ARETe CAMPANA-->
      <div class="col-half">
        <h4>No. SINIIGA**</h4>
        <div class="input-group input-group-icon">
        <input type="text" name="NumSini" placeholder="No. SINIIGA" value="<?php echo $row['NumSini']; ?>" required/>
        <div class="input-icon"><i class="fa fa-sort-numeric-asc" aria-hidden="true"></i></div>
      </div>
      </div>
      
          
          
          <div class="col-half">
        <h4>Arete Campaña**</h4>
        <div class="input-group input-group-icon">
        <input type="text" name="AreteCam" placeholder="Arete Campaña" value="<?php echo $row['AreteCam']; ?>" required/>
        <div class="input-icon"><i class="fa fa-building-o" aria-hidden="true"></i></div>
      </div>
      </div>
    </div> <!--Finaizamos Contenedor No. SINIIGA, ARETE CAMAPANA-->
         
         <div class="row"> <!--Iniciamos contenedor Campos Fecha de nacimiento del Bovino, Genero-->
         <div class="col-half">
        <h4>Fecha De Nacimiento**</h4>
        <div class="input-group">
          <div class="col-third">
            <input type="text" name="Mes" placeholder="MM" value="<?php echo $row['Mes']; ?>" required/>
          </div>
          <div class="col-third">
            <input type="text" name="Anio" placeholder="AAAA" value="<?php echo $row['Anio']; ?>" required/>
          </div>
        </div>
        </div>
             
          
             
             <div class="col-half">
         <h4>Género**</h4>
            <div class="input-group input-group-icon">
        <input type="text" name="Genero" placeholder="Hembra o Macho" value="<?php echo $row['Genero']; ?>" required/>
        <div class="input-icon"><i class="fa fa-venus" aria-hidden="true"></i></div>
        </div>
      </div>
    </div> <!-- Cerramos contenedor Campos Fecha y Genero-->
   
         <label>Raza: Pura, Cruza, Criollo*</label>  
        <div class="row"> <!-- iniciamos contenedor Raza, Especificar Raza/Cruza-->
        <div class="col-half">
        <h4>Raza**</h4>
        <div class="input-group input-group-icon">
        <input type="text" name="Raza" placeholder="Raza" value="<?php echo $row['Raza']; ?>" required/>
        <div class="input-icon"><i class="fa fa-building-o" aria-hidden="true"></i></div>
            
           </div>
            </div>
 
             
             
             <div class="col-half">
        <h4>Especificar Raza/Cruza**</h4>
        <div class="input-group input-group-icon">
          <input type="text" name="RazaCruza" placeholder="Especificar Raza/Cruza" value="<?php echo $row['RazaCruza']; ?>" required/>
          <div class="input-icon"><i class="fa fa-random" aria-hidden="true"></i></div>
        </div>
      </div>
        </div> <!--Finalizamos contenedor Raza, Especificar raza/cruza-->
        
         <label>Empadre: Monta Natural, Inseminacion Artificial, Transferencia Embrionaria**</label>   
        <div class="row"> <!-- iniciamos contenedor -->
 <div class="col-half">
        <h4>Empadre**</h4>
        <div class="input-group input-group-icon">
        <input type="text" name="Empadre" placeholder="Empadre" value="<?php echo $row['Empadre']; ?>" required/>
        <div class="input-icon"><i class="fa fa-building-o" aria-hidden="true"></i></div>
           </div>
            </div>
 
             
             
             <div class="col-half">
        <h4>Raza/No. SINIIGA**</h4>
        <div class="input-group input-group-icon">
          <input type="text" name="Padre" placeholder="Padre" value="<?php echo $row['Padre']; ?>" required/>
          <div class="input-icon"><i class="fa fa-mars" aria-hidden="true"></i></div>
        </div>
     <div class="input-group input-group-icon">
          <input type="text" name="Madre" placeholder="Madre" value="<?php echo $row['Madre']; ?>" required/>
          <div class="input-icon"><i class="fa fa-venus" aria-hidden="true"></i></div>
        </div>
      </div>
        </div>  <!-- Finalizamos al contenedor, de campos empadre, Raza/Num. SINIIGA-->
        
       
        
        
        <div class="row">  <!-- nicio contenedor Guardar-->
             <input type="submit" value="Guardar Registro"/>
      </div> <!--Fin contenedor Guardar-->
   
      
      
      
      
      </div> <!--Finalizamos contenedor donde estan los formularios-->
  </form>  <!--finalizamos Formulario-->
</div> <!--Finaizamos contenedor General-->
  <script src='http://misoftlife.com/wp-content/formulario_trial/jquery.min.js'></script>

  
</body>
</html>
