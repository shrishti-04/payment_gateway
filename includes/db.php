<?php 

     $server = "sql207.epizy.com";
     $username = "epiz_29179254	";
     $password = "avuW0OB0cquNKPF";
     $dbname = "epiz_29179254_playpen";

     $conn = mysqli_connect($server, $username, $password, $dbname);

     if(!$conn){
         die("Connection failed:".mysqli_connect_error());
     }



?>