<?php

session_start();
header('location:login.php');
$con = mysqli_connect('localhost','root');
if($con)
{
    echo "Sign Up Successfully";    
}
else{
    echo "no connection";
}

mysqli_select_db($con, 'signup');
$user_name = $_POST['user_name'];
$user_email = $_POST['user_email'];
$user_password = $_POST['user_password'];
$phone = $_POST['phone'];
$gender= $_POST['gender'];
$y=10;
$age= $_POST['age'];
$age_score = floor($_POST['age']/$y);
$disease = $_POST['disease'];

$q = "SELECT * from signupdata where user_email = '$user_email' ";
$result = mysqli_query($con, $q);
$num = mysqli_num_rows($result);
if($num ==1){
    echo "This email has already registered";
}
else{
    $N = count($disease);
    $score=$age_score;
    for($i=0; $i<$N;$i++)
    {   $score+=$disease[$i];}

        $qy= " INSERT INTO signupdata(user_name, user_email, user_password, phone, gender, age, disease) values ('$user_name','$user_email','$user_password','$phone','$gender','$age','$score') ";
        mysqli_query($con,$qy);
        $qy3="SELECT * FROM `signupdata` ORDER BY disease DESC,dt_time ASC";
        mysqli_query($con,$qy3);
    
    
}

?>