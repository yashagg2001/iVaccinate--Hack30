<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign Up Form</title>
  <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Aguafina+Script" />
  <link rel="stylesheet" type="text/css" href="login.css">
  <link href='https://fonts.googleapis.com/css?family=Nunito:400,300' rel='stylesheet' type='text/css'>
  <script src="login.js"></script>
  
</head>

<body>
<div class="login-wrap">
	<div class="login-html">
		<form action="registration.php" method="post">
		
		<input id="tab-2" type="radio" name="tab" class="sign-up" checked><label for="tab-2" class="tab">Sign Up</label>
		
		<div class="login-form">
		
			<div class="sign-up-htm">
				<div class="group">
					<label for="name" class="label">Username</label>
					<input id="name" type="text" class="input" name="user_name" required>
				</div>
				<div class="group">
					<label for="mail" class="label">Email Address</label>
					<input id="mail" type="email" class="input" name="user_email" required>
				</div>
				<div class="group">
					<label for="password" class="label">Password</label>
					<input id="password" type="password" class="input" data-type="password" name="user_password" required>
				</div>
				
				<div class="group">
					<label for="phone" class="label">Phone number</label>
					<input id="phone" type="tel" class="input" name="phone" pattern="[0-9]{10}" required>
				</div>
				<div class="group">
					<label for="age" class="label">Age</label>
					<input id="age" type="text" class="input" name="age" pattern="[0-99]{2}" required>
				</div>
				<div class="group">
					<label for="gender" class="label">Gender</label>
					<input id="MALE" type="radio" class="input" name="gender" value="male" required>
					<label for="MALE">Male</label>
					<input id="FEMALE" type="radio" class="input" name="gender" value="female" required>
					<label for="FEMALE">Female</label>
				</div>
				<br>

				<label>Diseases:</label><br>
				<div class="newspaper">
      				<span style="white-space: nowrap;"><input type="checkbox" id="hypertension" value="6" name="disease[]"><label class="light" for="hypertension">Hypertension</label></span><br>
      				<span style="white-space: nowrap;"><input type="checkbox" id="Diabetes" value="5" name="disease[]"><label class="light" for="Diabetes">Diabetes</label></span><br>
      				<span style="white-space: nowrap;"><input type="checkbox" id="heartdisease" value="4" name="disease[]"><label class="light" for="heartdisease">Heart Disease</label></span><br>
      				<span style="white-space: nowrap;"><input type="checkbox" id="renalfailure" value="3" name="disease[]"><label class="light" for="renalfailure">Renal Failure</label></span><br>
      				<span style="white-space: nowrap;"><input type="checkbox" id="asthama" value="2" name="disease[]"><label class="light" for="asthama">Asthama</label></span><br>
      				<span style="white-space: nowrap;"><input type="checkbox" id="copd" value="2" name="disease[]"><label class="light" for="COPD">COPD</label></span><br>
      				<span style="white-space: nowrap;"><input type="checkbox" id="pulmonaryfibrosis" value="2" name="disease[]"><label class="light" for="pulmonaryfibrosis">Pulmonary fibrosis</label></span><br>
      				<span style="white-space: nowrap;"><input type="checkbox" id="leukaemia" value="2" name="disease[]"><label class="light" for="leukaemia">Leukaemia</label></span>
				</div><br>
				<div class="group">
					<button type="submit" class="button">Sign Up</button>
				</div>

				<div class="hr">
				Already registered? <u><a href="login.php">Sign In</a></u>
				</div>
			
				
				
			</div>
		</div>
		</form>
	</div>
</div>
</body>
</html>