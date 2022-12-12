<?php
include("dbcon.php");
// Create connection
if(isset($_POST["Nom"])){
$nom =$_POST["Nom"];
$prenom=$_POST["prenom"];
$pay=$_POST["pay"];
$tele =$_POST["tele"];
$email=$_POST["email"];
$resedent=$_POST["specialite"];
$lieutrav=$_POST["lieu"]; 
$sql = "INSERT INTO `users` (`id`, `nom`, `prenom`, `pay`, `tele`, `email`, `resedent`, `lieutrav`) VALUES (NULL, '$nom', '$prenom', '$pay', '$tele', '$email', '$resedent', '$lieutrav');";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
header('Location:../index.php'); 
}




?>

