<?php
include 'connect.php';
if(isset($_GET['deleteid'])){
    $id_user=$_GET['deleteid'];
    $sql="delete from user where id_user= $id_user";
    $result=mysqli_query($con,$sql);
    if($result){
    echo"Suppression réussie";
        header('location:index_USER.php');
    }else{
        die(mysqli_error($con));
    }
}
?>