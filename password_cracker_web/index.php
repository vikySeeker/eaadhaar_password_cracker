<?php

if(isset($_POST['submit'])) {
	include_once($_SERVER['DOCUMENT_ROOT']."/__validateInput.php");
	if(!validateInput(array($_POST['startyear'],$_POST['endyear']))){
		echo "You can only input numbers ranging from ".strval($MIN_YEAR)." to ".strval($MAX_YEAR);
	}else{
		session_start();
		$_SESSION['sy'] = $_POST['startyear'];
		$_SESSION['ey'] = $_POST['endyear'];
		include_once($_SERVER['DOCUMENT_ROOT']."/__fileHandler.php");
		$result = savefile();
		echo $result;
	}
}else{
	$HOME_PAGE = <<<HOMEPAGE
	<!DOCTYPE html>
	<html lang="en">
		<head>
			<meta charset="UTF-8">
			<meta http-equiv="X-UA-Compatible" content="IE=edge">
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<title>Aadhar password cracker</title>
		</head>

		<body>
			<center>
				<h1>welcome to EAadhar PDF password cracker!</h1>
				<h5>Upload your aadhar file here!</h5>
				<p>This service created to help the people who are struggling to find the password of their aadhar card pdf from
					india <br>The steps to use this service is given below
				</p><br>
				<p>
			</center>

				<b>Step 1</b> Enter your target's brith year range for <b>eg.</b> 
				if you suspect your target is born in the range of 2000 to 2010 then enter the years in the following from and to fields. 
				<br><b>Step 2</b>Now upload your aadhar pdf by clicking the "Browse" button and click submit.
				<br><br><br>

			<center>
				<form action="/" method="post" enctype="multipart/form-data">
					<input type="number" placeholder="starting year" name="startyear">
					<input type="number" placeholder="ending year" name="endyear"><br><br>
					<input type="file" name="pdffile"><br><br>
					<input type="submit" value="Upload" name="submit">
				</form>
			</center>
		</body>
	</html>
	HOMEPAGE;
	echo $HOME_PAGE;
}
?>
