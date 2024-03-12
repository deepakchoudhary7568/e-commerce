<?php
$servername="localhost";
$username="root";
$password="";
$dbname="dynamic1";
$conn=new mysqli($servername,$username,$password,$dbname);
if ($conn->connect_error) {
	die("connection failed:".$conn->connect_error);
}
else{
	echo "connection successfully";
}


$name=$_POST['name'];
$lname=$_POST['lname'];
$gmail=$_POST['gmail'];
$message=$_POST['message'];





$sql=" INSERT INTO contactdata(name,lname,gmail,message)VALUES('$name','$lname','$gmail','$message')";
if ($conn->query($sql)===TRUE){
	echo "data insert successfully";
	header('Location: contact.php');
}
else {
	echo "error on table";
	$conn->error;}
    $conn->close();

?>