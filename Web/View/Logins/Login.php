<html>
<head>
<title>What's your name?</title>
</head>
<body> <header>
	<span id=""
	
</header>
<h1>Validating User</h1>
 <?php include  "..\..\Controllers\loginController.php"; ?>
<script type="text\javascript"> alert("Validating User Credantials");</script>
<hr/>
<?php  $userName = $_REQUEST["userName"]; 
		$password= $_REQUEST["password"];  
		$gender = $_REQUEST["gender"];  
		
		$validator=new loginController;
		$userIsValid =  $validator->validLogins($userName,$password);
		
		$gtype = $gender=="Male"?"Boy":"Girl";
		if($userIsValid)
			{
			echo "<script type='text/javascript'> alert('Success : Correct LOGIN Credentials');</script>";
				print "<div><span> Welcome to the site ".
					$userName. " ". $password.	" You are a good".
					$gtype. " </span></div>";
			}else{
			echo "<script type='text/javascript'> alert('Error : Incorrect Credentials');</script>";
			print "Your Login Credentials are invalid, try again";
			
			}
?>
			
			<hr/>
			
	</body>
</html>