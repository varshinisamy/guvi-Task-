<?php
    $hostname='localhost';
    $username='root';
    $password='';
    $dbname = "project1";
    $conn=mysqli_connect($hostname,$username,$password,$dbname);
      if(!$conn){
          die('Could not Connect MySql Server:' .mysql_error());
        }
?>