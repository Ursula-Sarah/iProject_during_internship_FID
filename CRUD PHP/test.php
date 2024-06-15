<?php 
    $date_activation=('2021-02-03');
    $newDate_activation= date("d-m-y",strtotime($date_activation));
    $date=date('d-m-y');
    echo $newDate_activation;
    $date_expiration=strtotime('2021-04-03');
    $date_autre=strtotime('2020-04-03');
    $jours= $date_expiration-$date_autre;
    echo $total=($jours)/(60*24*60);
    $newjours=('66');
    $date_autre=strtotime('20/02/23');
    $a=$newjours+$date_autre;
    echo $j=date("d-m-y",strtotime($a));
?>
