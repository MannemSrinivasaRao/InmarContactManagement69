<?php


$conn =mysqli_connect('localhost','root','','inmar');


if ($conn->connect_error)
 {
    die("Connection failed: " . $conn->connect_error);
}
 $myemail=$_COOKIE['email'];
$name=$_POST['name'];
$email=$_POST['mail'];
$phone=$_POST['phoneno'];
$gname='NULL';
$gid='NULL';

$sql = "INSERT INTO contacts(name,cemail,phoneno,uemail,groupname,groupid) VALUES ('$name', '$email','$phone','$myemail','$gname','$gid')";


if ($conn->query($sql) === TRUE) {
	echo '<script type="text/javascript">'; 
echo 'alert("Contact added successfully");'; 
echo 'window.location.href = "dashboard1.html";';
echo '</script>';
/*echo "Contact added successfully";
    header("Location:dashboard1.html");*/
} 
else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

