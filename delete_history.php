<?php
include 'connect.php';
if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];
    $sql="DELETE FROM historique where id= $id";
    $result=mysqli_query($con,$sql);
    if($result){
    echo"Suppression réussie";
        header('location:history.php');
    }else{
        die(mysqli_error($con));
    }
}
?>