<!DOCTYPE HTML>
<html>
<head>
<title>
	Template
</title>
<link type="text/css" rel="stylesheet" href="../../Styles/MainStyle.css"></link>
<link type="text/css" rel="stylesheet" href="../../Styles/bootstrap.css"></link>
<link type="text/css" rel="stylesheet" href="../../Styles/loginTableStyles.css"></link>
 <script type="text/javascript" src="../../Scripts/TimeScript.js"></script>

</head>
<body>
	<!-- Header with Links-->
		<header>
			<span class="timeSpan" id="timeKeeper"></span>
				<script type="text/javascript">window.onload = setTimeS("timeKeeper");</script>
			<h1 style="top:0%;" class="content">Rabatseta.co</h1><br/>
			<nav>
			<a class="menuLinks" href="Home.php">Home</a>
			<a class="menuLinks" href="About.php">About</a>
			<a class="menuLinks" href="Contact.php">Contact-Us</a>
			</nav>
			
		</header>
	<!-- Body Content-->
		<div class="bodySection">
		<h2>Welcome to Rabatseta.co.za</h2>&nbsp;... We are under construction...
				<div id = "contentShow">
					
					
				</div>
		</div>
	<!-- Footer With Copyright-->
		<footer>
			<p>&copy; 2016  Rabatseta.co <br/>
    		Date: <time id="dateTimeLocal"></time>
    		</p>
    		<script type="text/javascript">window.onload = setDateS("dateTimeLocal");</script>
		</footer>
</body>
</html>