<?php


$conn =mysqli_connect('localhost','root','','inmar');


if ($conn->connect_error)
 {
    die("Connection failed: " . $conn->connect_error);
}
 $myemail=$_COOKIE['email'];
$gid=$_POST['gid'];
//echo "$gid";
$sql = "SELECT groupid FROM groups WHERE groupid='$gid' AND uemail='$myemail'";


if ($conn->query($sql) == TRUE) {
	header("Location:ctogrp.html");
	setcookie("grpid",$gid, time() + (86400 * 30), "/");
	//echo "$sql";
/*echo "Contact added successfully";
    header("Location:dashboard1.html");*/
} 
else {
	echo '<script type="text/javascript">'; 
	echo 'alert("Group doesnot exist");'; 
	echo 'window.location.href = "dashboard1.html";';
	echo '</script>';
}

$conn->close();
?>

