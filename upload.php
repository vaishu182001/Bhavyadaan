<?php
   $host = "localhost:3307";  
    $user = "root";  
    $password = '';  
    $db_name = "bhavyadaan";  
      
    $con = mysqli_connect($host, $user, $password, $db_name);  
    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    }  
$fn=$_POST['fn'];
$sel=$_POST['sel'];
$badd=$_POST['badd'];
$pno=$_POST['pno'];
$bs=$_POST['bs'];
$pop=$_POST['pop'];

$sql = "INSERT INTO form
VALUES ('$fn','$sel','$badd','$pno','$bs','$pop')";

if ($con->query($sql) === TRUE) {
  echo "Log created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $con->error;
}
 echo "<br>"
 echo "<br>"
 
$con->close();
?>