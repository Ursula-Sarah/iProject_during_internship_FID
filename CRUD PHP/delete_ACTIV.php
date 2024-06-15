<?php
include 'connect.php';
if(isset($_GET['deleteid'])){
    $id_activation=$_GET['deleteid'];
    $sql="delete from activation where id_activation= $id_activation";
    $result=mysqli_query($con,$sql);
    if($result){
        $action_type="delete";
        $table="activation";
        $date=date("y-m-d: h-i-s");
        $sql_insert="INSERT INTO historique (action_type,table_concernee,date_action) values ('$action_type','$table','$date') ";
        mysqli_query($con,$sql_insert);
        if(mysqli_query($con,$sql_insert)){
            echo "ok insert";
        }else{
            echo "not inserted";
        }
        echo"Suppression réussie";
        header('location:index_ACTIV.php');
    }else{
        die(mysqli_error($con));
    }
}
?>