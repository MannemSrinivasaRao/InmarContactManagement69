<?php


$conn =mysqli_connect('localhost','root','','inmar');


if ($conn->connect_error)
 {
    die("Connection failed: " . $conn->connect_error);
}
 $myemail=$_COOKIE['email'];
 $gid=$_COOKIE['grpid'];
$email=$_POST['mail'];

//$sql="SELECT groupname,groupid from groups where groupid='$gid'";

//$result = $conn->query($sql);

/*if ($result->num_rows > 0) {
    // output data of each row
    $row = $result->fetch_assoc();
        //echo "<br> id: ". $row["id"]. " - Name: ". $row["firstname"]. " " . $row["lastname"] . "<br>";
}
else
{
	echo "Cannot fetch data";
}*/
//$v1=$row['groupname'];
//$v2=$row['groupid'];
$sql1 = "UPDATE contacts SET groupname = NULL , groupid = NULL where uemail='$myemail' and cemail='$email'";

if ($conn->query($sql1) == TRUE) {


	echo '<script type="text/javascript">'; 
echo 'alert("Contact deleted successfully from group");'; 
echo 'window.location.href = "dashboard1.html";';
echo '</script>';
/*echo "Contact added successfully";
    header("Location:dashboard1.html");*/
}
else {
    echo "Cannot update data";
}

$conn->close();
?>

