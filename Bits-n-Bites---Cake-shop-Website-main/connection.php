<?php
	$name = "";
	$email = "";
	$msg = "";
	$error = array();	
	$con = mysqli_connect('sql305.epizy.com','epiz_27284877','duFJuG6d3F','epiz_27284877_BitsnBites');

	if($con){
			echo "<script>alert('Congratulation Connected to MySQL.')</script>";
		}else{
			echo "<script>alert('xx MySQL Connection Error. xx')</script>";
		}

?>