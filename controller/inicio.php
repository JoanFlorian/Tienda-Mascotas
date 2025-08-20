<?php
session_start();
require_once("../database/conection.php");
$con= new database();
$sql= $con->conectar();
if(isset($_POST['inicio'])){
    $email=$_POST['email'];
    $contrasena=$_POST['password'];
    $contra = htmlentities(addslashes($contrasena));
    $user= $sql->prepare("SELECT * FROM user INNER JOIN tip_user ON user.id_tip_user =tip_user.id_tip_user WHERE correo ='$email'");
    $user->execute();
    $fila = $user-> fetch();
    if(password_verify($contra, $fila['password'])){
            $_SESSION['correo']= $fila['correo'];
            $_SESSION['tipo']= $fila['id_tip_user'];

            
            if ($_SESSION['tipo']==1){
                header("Location: ../model/admin/index.php");
                exit();
                
            }
            
            elseif ($_SESSION['tipo']==2){
                header("Location: ../model/customer/index.php");
                exit();
                
            }
             else{
            echo '<script> alert("USUARIO NO ENCONTRADO")</script>';
            echo "<script>window.location='../index.html'</script>";
            }
        }
}
?>