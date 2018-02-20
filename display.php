<!DOCTYPE html>
<html>
<head>
  <title></title>
  <style type="text/css">
    body{
  background-image: url("inmar.jpg");
  background-size: 1370px 670px;
  background-repeat: no-repeat;
    }
    table{
      margin-left: 400px;
      font-size: 25px;
    }
    .fun1{
      margin-left: 480px;
      width: 20%;
  height:10%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 50px;
    font-size: 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    }
  </style>
</head>
<body>

<?php
echo "<script language='javascript'>

function fu(){
  window.location.href='dashboard1.html'
}

</script>";


$conn =mysqli_connect('localhost','root','','inmar');
$myemail=$_COOKIE['email'];

if ($conn->connect_error)
 {
    die("Connection failed: " . $conn->connect_error);
}
 

$sql = "SELECT * FROM contacts where uemail='$myemail'";

$result = $conn->query($sql);
    if ($result->num_rows > 0) {
    	echo "<table border='1'>
      <tr>
      <th>Name</th>
      <th>Email</th>
      <th>Phoneno</th>
      </tr>";
      
    while($row = $result->fetch_assoc()) {
      echo "<tr>";
      echo "<td>".$row['name']."</td>";
      echo "<td>".$row['cemail']."</td>";
      echo "<td>".$row['phoneno']."</td>";
      echo "</tr>";
      
      
    }
    echo "</table>";
    echo "<br>";
} 
 
else {
    echo "No contacts in your databse";
    echo "<br>";
}
echo "<input type='button' class='fun1' name='ok' value='ok' onclick='fu()'/>";

$conn->close();
?>

</body>
</html>