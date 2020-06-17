
<?php

$conn = mysqli_connect('localhost','root','','scrap');

if(!$conn)
{
	die('Connection failed!'.mysqli_error($conn));
}


$name = $_POST['name'];
$mobile=$_POST['mn'];
$email=$_POST['e'];
$sell=$_POST['sid'];

$type=$_POST['typ'];

$adre=$_POST['add'];
$wed=$_POST['w'];
$zipcode=$_POST['z'];
$sql = "INSERT INTO login(cname,mobileno,email,sellerid,type,weight,zip,adress) VALUES('$name','$mobile','$email','$sell','$type','$wed','$zipcode','$adre')";

if(mysqli_query($conn,$sql))
{
	echo "Request send succsefully";
}
else
{
	echo mysqli_error($conn);
}

?>
