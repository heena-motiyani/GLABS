<?php 
$username=$_POST['Username'];
$password=$_POST['Password'];

    
$con=mysqli_connect('localhost','root','','glabs');
if($con->connect_error)
{
    die('Connection Failed :'.$con->connect_error);
    
}
else
{
   $q="select * from signup where Username='$username'"; 
    $res=mysqli_query($con,$q);
    while($row=$res->fetch_assoc())
    {
    echo "First Name:".$row['FirstName']."<br>Last Name:".$row['LastName']."<br>Username:".$row['Username']."<br>Password:".$row['Password'];
    }
}

?>