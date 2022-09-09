<?php  
    require_once 'conexion.php';
    $usuario=$_POST['usuario'];
    $contrasena=$_POST['contrasena'];
   
    session_start();

    $_SESSION['usuario']=$usuario;
     
    
    $conexion=conectar();

    $consulta="SELECT * FROM funcionario WHERE Ci='$usuario' and Contrasena='$contrasena'";

    
    

    $resultado=mysqli_query($conexion,$consulta);

    $filas=mysqli_num_rows($resultado);
     

    if($filas) {
    	header("location:Funcionario/FuncionarioView.php");
    }

    elseif($usuario == "admin" && $contrasena == "admin") {

    	header("location:Admin/AdminView.php");
    	
    }

    else{
    
    ?>
    <?php 
    include 'index.php';
     ?>

    <h1>Inicio de sesion no valido</h1>

    <?php  

    }

    mysqli_free_result($resultado);
    mysqli_close($conexion);


  ?>
