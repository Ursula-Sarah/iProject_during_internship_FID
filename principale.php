<html>
 <head>
 <meta charset="utf-8">
 <!-- importer le fichier de style -->
 <link rel="stylesheet" href="style2.css" media="screen" type="text/css" />
 </head>
 <body style='background:#fff;'>
 <div id="content">
 <!-- tester si l'utilisateur est connecté -->
 <?php
 session_start();
 if($_SESSION['username'] !== ""){
 $user = $_SESSION['username'];
 // afficher un message
 echo "Bonjour $user, vous êtes connecté";
 }
 ?>
 
 </div>
 </body>
</html>
<?php

if(isset($_GET['deconnexion']))
 { 
 if($_GET['deconnexion']==true)
 { 
 session_unset();
 header("location:login.php");
 echo "decconet";
 }
 }
 else if($_SESSION['username'] !== ""){
 $user = $_SESSION['username'];
 // afficher un message
 echo "<br>Bonjour $user, vous êtes connectés";
 }
 ?>