<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('localhost', 'root', '','profile');

$txtemail = $_POST['email'];
$txtpassword = $_POST['password'];
$txtfullname = $_POST['name'];
$txtdate = $_POST['date'];
$txtcontact= $_POST['telephone'];
$txtcourse = $_POST['course'];
$txtcollege = $_POST['college'];
$txtgender = $_POST['gender'];

$sql = "INSERT INTO `profiletable`(`id`, `email`, `password`, `fullname`, `DOB`, `phonenumber`, `course`, `college`, `gendr`) VALUES ('0','$txtemail','$txtpassword','$txtfullname','$txtdate','$txtcontact','$txtcourse','$txtcollege','$txtgender')";


$rs = mysqli_query($con, $sql);

if($rs)
{
	// echo "Contact Records Inserted";
    header("Location: login.html");
    exit();
}

?>