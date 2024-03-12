<?php
$servername="localhost";
$username="root";
$password="";
$dbname="dynamic1";
$conn=new mysqli($servername,$username,$password,$dbname);
if ($conn->connect_error) {
	die("connectionfailed:".$conn->connect_error);
}
else {
	echo "connectionsuccessfully";
}
$id=$_POST['id'];
$phonename= $_POST['phonename'];
$price= $_POST['price'];

$new_image= $_FILES['image']['name'];
$old_image_temp=$_FILES['image']['tmp_name'];

if($old_image_temp != "")
{
    move_uploaded_file($old_image_temp , "image/$new_image");
    $c_update="update homecard2data set phonename='$phonename', price='$price',  image= '$new_image'
     where id='$id'";   
}else
{
    $c_update="update homecard2data set  phonename='$phonename', price='$price'
     where id='$id'";
}

$run_update=mysqli_query($conn, $c_update);
header("Location: homecard2record.php");

?>