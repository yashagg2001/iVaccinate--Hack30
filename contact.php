<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');
$con = mysqli_connect('localhost', 'root', '','db_connect');

// get the post records
$txtName = $_POST['user_name'];
$txtEmail = $_POST['user_email'];
$txtPassword = $_POST['user_password'];
$txtPhone = $_POST['phone'];
$txtGender = $_POST['gender'];
$txtAge = $_POST['age'];
$txtDisease = $_POST['disease'];


// database insert SQL code
$sql = "INSERT INTO `signupdata` (`Id`, `user_name`, `user_email`, `user_password`, `phone`,`gender`,`age`,`disease`) VALUES ('1', '$txtName', '$txtEmail', '$txtPassword', '$txtPhone','txtGender','$txtAge','$txtDisease')";

// insert in database 
$rs = mysqli_query($con, $sql);
if($rs)
{
	echo "Submitted Succesfully! ";
}
?>  