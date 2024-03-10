<?php 

$host="localhost";
$user="root";
$password="";
$db="vehicle_service_db";

$conn = mysqli_connect($host, $user, $password,$db);

$fname=$_POST['fname'];
$lname=$_POST['lname'];
$uname=$_POST['uname'];
$email=$_POST['email'];
$password = $_POST['pass'];

$sql="insert into clients values ('$fname','$lname','$uname','$email','$password')";

if(mysqli_query($conn, $sql)){
    header('Location: success.html');

echo nl2br("\n$uname\n $password\n ");
} else{
echo "ERROR: Hush! Sorry $sql. "
. mysqli_error($conn);
}
mysqli_close($conn);
?>