<?php 
$firstname=$_POST['FirstName'];
$lastname=$_POST['LastName'];
$username=$_POST['Username'];
$password=$_POST['Password'];

    
$con=mysqli_connect('localhost','root','','glabs');
if($con->connect_error)
{
    die('Connection Failed :'.$con->connect_error);
    
}
else
{
   $q="insert into Signup values('$firstname','$lastname','$username','$password')"; 
    $res=mysqli_query($con,$q);
}

?>