<?php
include_once '/home/varshini/Documents/register/php/db.php';
if(isset($_POST['submit']))
{    
     $name = $_POST['name'];
     $email = $_POST['email'];
     $email = $_POST['password'];
     $mobile = $_POST['mobile'];
     $result = mysqli_query($conn,"insert into users values('','$name','$email','$password',$'number')" );
     
}
?>