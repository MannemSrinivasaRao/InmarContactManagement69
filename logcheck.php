<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "inmar";
$mail2="";
$passwd2="";
   $mail1=$_POST['mail'];
   $passwd1=$_POST['passwd'];
   echo "$mail1    $passwd1";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT email,password FROM registrations where email='$mail1'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      $mail2=$row["email"];
      $passwd2=$row["password"];
        //echo "<br> id: ". $row["id"]. " - Name: ". $row["firstname"]. " " . $row["lastname"] . "<br>";
    }
} 
else {

    echo "0 results";
}
echo "<BR>$mail2   $passwd2";
   if(($mail1==$mail2)&&($passwd1==$passwd2))
   {
       setcookie("email",$mail2, time() + (86400 * 30), "/");
       setcookie("test2","x2", time() + (86400 * 30), "/");
       //echo "<h1>This is fine</h1>";
       header("Location:index.php");
   }
   else
   {
        header("Location:login.html");
        //echo '<script type="text/javascript">alert("wrong username or password");</script>';
   }
$conn->close();
?>