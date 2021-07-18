<?php
$name = $_POST['name'];
$plan = $_POST['plan'];

$conn = new mysqli('localhost', 'root', '','form');
if($conn->connection_error){
  die('connection failed : .$conn->connection_error');

}else {
  $stmt = $conn->prepare("insert into todo(name, plan) value(?, ?)");
 $stmt->bind_param("ss", $name, $plan);
 $stmt->execute();
 echo "registration sucessful";
 $stmt->close();
 $conn->close(); 
}
?> 

