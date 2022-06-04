<?php
	if ($_SERVER['REQUEST_METHOD'] === "POST"){
		$flag=false;
		if(empty($_POST['fname'])) {
			echo "First Name Empty";
			$flag=true;
			echo "<br>";
		}
		if(empty($_POST['lname'])) {
			echo "Last Name Empty";
			$flag=true;
			echo "<br>";
		}
		if(empty($_POST['gender'])) {
			echo "Gender Empty";
			$flag=true;
			echo "<br>";
		}
		if(empty($_POST['email'])) {
			echo "Email Empty";
			$flag=true;
			echo "<br>";
		}
			if(empty($_POST['mnum'])) {
			echo "Mobile NO Empty";
			$flag=true;
			echo "<br>";
		}
		if(empty($_POST['road'])) {
			echo "Street/House/Road/Empty";
			$flag=true;
			echo "<br>";
		}
		if(empty($_POST['Country'])) {
			echo "Country Name Empty";
			$flag=true;
			echo "<br>";
		}
		if (!$flag) {
			echo "Registration Successful";
		}
	}
?>