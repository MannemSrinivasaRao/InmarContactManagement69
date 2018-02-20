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
    padding: 14px 20px;
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
 

$sql = "SELECT * FROM groups where uemail='$myemail'";

$result = $conn->query($sql);
    if ($result->num_rows > 0) {
      echo "<table border='1'>";
      
    while($row = $result->fetch_assoc()) {
      $v=$row['groupid'];
      echo "<tr>";
      echo "<th>".$row['groupname']."</th>";
      echo "<th>".$row['groupid']."</th>";
      echo "</tr>";

    $sql1 = "SELECT name,cemail,phoneno FROM contacts where uemail='$myemail' and groupid='$v'";
    $result1 = $conn->query($sql1);
    while ($row1 = $result1->fetch_assoc()) {
                          
                          echo "<tr>";
      echo "<td>".$row1['name']."</td>";
      echo "<td>".$row1['cemail']."</td>";
      echo "<td>".$row1['phoneno']."</td>";
      echo "</tr>";

          }      
      
    }
    echo "</table>";
    echo "<br>";
} 

 
else {
    echo "No groups in your database";
    echo "<br>";
  }
echo "<input type='button' class='fun1' name='ok' value='ok' onclick='fu()'/>";

$conn->close();
?>


</body>
</html>

