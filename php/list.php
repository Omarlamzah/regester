<?php
include("dbcon.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    @import url(https://fonts.googleapis.com/css?family=Open+Sans:400,600);

*, *:before, *:after {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  background: #105469;
  font-family: 'Open Sans', sans-serif;
}
table {
  background: #012B39;
  border-radius: 0.25em;
  border-collapse: collapse;
  margin: 1em;
}
th {
  border-bottom: 1px solid #364043;
  color: #E2B842;
  font-size: 0.85em;
  font-weight: 600;
  padding: 0.5em 1em;
  text-align: left;
}
td {
  color: #fff;
  font-weight: 400;
  padding: 0.65em 1em;
}
.disabled td {
  color: #4F5F64;
}
tbody tr {
  transition: background 0.25s ease;
}
tbody tr:hover {
  background: #014055;
}


</style>
<body>
    
<table>
  <thead>
    <tr>
      <th>ID
      <th>nom
      <th>prenom
      <th>pay
      <th>telephone
      <th>emaill
      <th>resedent
      <th>lieutrav
  </thead>
  <tbody>


  
    <tr>
      <td>1
      <td>Malcolm
      <td>Reynolds
      <td>Mal, Cap'n
      <td>M
      <td>Captain
      <td>Yes
      <tr>
   <?php
  // Create connection
 
$sql = "SELECT * FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "</tr>";
    echo "<td>" . $row["id"]."</td>";
    echo "<td>" . $row["nom"]."</td>";
    echo "<td>" . $row["prenom"]."</td>";
    echo "<td>" . $row["tele"]."</td>";
    echo "<td>" . $row["email"]."</td>";
    echo "<td>" . $row["resedent"]."</td>";
    echo "<td>" . $row["lieutrav"]."</td>";
    echo "</tr>";
  }
} else {
  echo "0 results";
}

$conn->close();

?>
 
    
  </tbody>
</table>
</body>
</html>

