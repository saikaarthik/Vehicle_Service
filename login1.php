<?php 

$host="localhost";
$user="root";
$password="";
$db="vehicle_service_db";

$conn = mysqli_connect($host, $user, $password,$db);


if(! $conn ) {
         die('Could not connect: ' . mysqli_error($conn));
      }
$retval = mysqli_select_db( $conn, 'vehicle_service_db' );
if(! $retval ) {
         die('Could not select database: ' . mysqli_error($conn));
      }
#echo'worked';
if(isset($_POST['uname'])){
function validate($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
$uname=validate($_POST['uname']);
$password=validate($_POST['pass']);

if(empty($uname)){
   header("Location: ../login1.html");
   exit();
}
else if(empty($password)){
    header("Location: login1.html");
    exit();
}
else
{
$sql="select username,password from clients where username ='".$uname."'AND password='".$password."' limit 1";
    
$result=mysqli_query($conn,$sql); 
if(mysqli_num_rows($result)==1){
    header('Location: ./index.php');
    die();
    }
else {
    header('Location: unsuccess.html');
    die();
}
}
}  
?>