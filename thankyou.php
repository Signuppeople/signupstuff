<!DOCTYPE html>
<html lang="en">
	<head>
        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/form-elements.css">
        <link rel="stylesheet" href="css/style.css">
	</head>
	<body background="img/backgrounds/red.jpg">
		<div id="signupdone">
			<p>Thank you for signing up! <?php echo $_POST["form-username"]; ?><br>Your pass is: <?php echo $_POST["form-password"]; ?></p>
			<p>We will contact you via email shortly with information on how we pick the winners!</p>
		</div>
	</body>
</html>