<?php


$conn =mysqli_connect('localhost','root','','inmar');


if ($conn->connect_error)
 {
    die("Connection failed: " . $conn->connect_error);
}
 $myemail=$_COOKIE['email'];
$gname=$_POST['gname'];
$gid=$_POST['gid'];

$sql = "INSERT INTO groups(groupname,groupid,uemail) VALUES ('$gname', '$gid','$myemail')";


if ($conn->query($sql) === TRUE) {
	echo '<script type="text/javascript">'; 
echo 'alert("Group created successfully");'; 
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

