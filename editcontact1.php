<?php


$conn =mysqli_connect('localhost','root','','inmar');


if ($conn->connect_error)
 {
    die("Connection failed: " . $conn->connect_error);
}
 $myemail=$_COOKIE['email'];
 $cemail1=$_COOKIE['cemail1'];
$name=$_POST['name'];
$email=$_POST['mail'];
$phoneno=$_POST['phoneno'];

/*$sql="SELECT groupname,groupid from groups where groupid='$gid'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    $row = $result->fetch_assoc();
        //echo "<br> id: ". $row["id"]. " - Name: ". $row["firstname"]. " " . $row["lastname"] . "<br>";
}
else
{
	echo "Cannot fetch data";
}
$v1=$row['groupname'];
$v2=$row['groupid'];*/
$sql1 = "UPDATE contacts SET name='$name',cemail='$email', phoneno='$phoneno' where uemail='$myemail' and cemail='$cemail1'";

if ($conn->query($sql1) === TRUE) {


	echo '<script type="text/javascript">'; 
echo 'alert("Contact updated successfully to group");'; 
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
