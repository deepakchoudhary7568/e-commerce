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

if(isset($_POST['submit'])){


 $image=$_FILES['image']['name'];
 $phonename=$_POST['phonename'];

$price=$_POST['price'];

$query = "INSERT INTO homecard3data(image,phonename,price)VALUES('$image','$phonename','$price')";
$query_run = mysqli_query($conn,$query);





if ($query_run) {
	move_uploaded_file($_FILES["image"]["tmp_name"], "image/".$_FILES["image"]["name"]);
	 header("location:homecard3record.php");
}

}





?>