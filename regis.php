<?php


$conn =mysqli_connect('localhost','root','','inmar');


if ($conn->connect_error)
 {
    die("Connection failed: " . $conn->connect_error);
}
 
$fn=$_POST['fname'];
$ln=$_POST['lname'];
$em=$_POST['mail'];
$ad=$_POST['aadhar'];
$ph=$_POST['phoneno'];
$pwd=$_POST['passwd'];


$sql = "INSERT INTO registrations(fname,lname,email,aadhar,phoneno,password ) VALUES ('$fn', '$ln', '$em','$ad','$ph','$pwd')";


if ($conn->query($sql) === TRUE) {
    header("Location:login.html");
} 
else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

