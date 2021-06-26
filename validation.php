<?php

session_start();
$con = mysqli_connect('localhost','root');
if($con)
{
    echo "Sign Up Successfully";
}
else{
    echo "no connection";
}

mysqli_select_db($con, 'signup');

$user_email = $_POST['user_email'];
$user_password = $_POST['user_password'];


$q = "SELECT * from signupdata where user_email = '$user_email' && user_password='$user_password' ";
$result = mysqli_query($con, $q);
$num = mysqli_num_rows($result);

$q1 = "SELECT * FROM signupdata ORDER BY disease DESC, dt_time ASC";
$result1 = mysqli_query($con, $q1);


if($num ==1){

	while($row = $result->fetch_assoc()) 
	  { 
	    $user_name = $row['user_name'];
        $sco= $row['disease'];
        $gender= $row['gender'];
	  }
     
      $count=1;
      while($row2= $result1 -> fetch_assoc())
      {
          
          if($row2['disease']==$sco && $row2['user_name']==$user_name)
          {   

              break;
          }
          else{
              $count++;
          }
      }

    $_SESSION['user_name'] = $user_name;
    $_SESSION['gender'] = $gender;
    $_SESSION['disease'] = $sco;
    $_SESSION['ivac']= $count;

    header('location:home.php');


}
else{
    header('location:login.php');
}


?>