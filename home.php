<?php
session_start();
if(!isset($_SESSION['user_name'])){
    header('location:login.php');
}
if(!isset($_SESSION['disease'])){
    header('location:login.php');
}
if(!isset($_SESSION['ivac'])){
    header('location:login.php');
}


?> 

<!DOCTYPE html>
<html lang="en">
<head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/res.css">
    <title>Result</title>
</head>
<body>
    <div class="background">
        <h1 class="res">RESULT <br><br>Welcome, <?php echo $_SESSION['user_name']; ?></h1>
            <h2>Considering your age and other health issues, your Risk Score is: <?php echo $_SESSION['disease']; ?> </h2>
            <h2>Your Priority Number of vaccination is: <?php echo $_SESSION['ivac']; ?> </h2>
            <h3>Note: Please keep signing-in at frequent intervals to check your updated Priority Number.<br></h3>  
            <a href="logout.php"> LOGOUT</a>
    </div>
    </body>
</html>