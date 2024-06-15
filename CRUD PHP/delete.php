<?php
include 'connect.php';
if(isset($_GET['deleteid'])){
    $id_codeActivation=$_GET['deleteid'];
    $sql="DELETE from code_activation where id_codeActivation= $id_codeActivation";
    $result=mysqli_query($con,$sql);
    if($result){
    echo"Suppression réussie";
        header('location:index.php');
    }else{
        die(mysqli_error($con));
    }
}
?>