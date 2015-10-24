<?php

if($_GET["incorrectPass"] == "true"){
	
	$alert = "<div class='alert alert-danger alert-big' role='alert'>
		Incorrect username or password. <br>Please contact us at WeDontCareAboutYou@GetYourStuff.right thank you for using our services
	</div>";
}

echo"
<!DOCTYPE HTML>
<html>

<head>
	<link rel='stylesheet' href='estilo.css'>

	<script src='script.js'></script>
	
	<link rel='stylesheet' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css'>

	<script src='https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js'></script>

	<script src='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js'></script>
	
	<meta name='viewport' content='initial-scale=1'>
	
</head>

<body>
<div class='container'>
<h3>Log-in here:</h3>

<form class='form-horizontal' action='login.php' method='post'>
  <div class='form-group'>
    <label for='idEmail' class='col-sm-2 control-label'>Email</label>
    <div class='col-sm-10'>
      <input type='email' class='form-control' id='idEmail' placeholder='Email' name='email'>
    </div>
  </div>
  <div class='form-group'>
    <label for='idPass' class='col-sm-2 control-label'>Password</label>
    <div class='col-sm-10'>
      <input type='password' class='form-control' id='idPass' placeholder='Password' name='pass'>
	<br>$alert
   </div>
  </div>
  <div class='form-group'>
    <div class='col-sm-offset-2 col-sm-10'>
      <div class='checkbox'>
        <label>
          <input type='checkbox' name='remember'> Remember me
        </label>
      </div>
    </div>
  </div>
  <div class='form-group'>
    <div class='col-sm-offset-2 col-sm-10'>
      <button type='submit' class='btn btn-default'>Sign in</button>
    </div>
  </div>
</form>

</div>


</body>

</html>";
?>