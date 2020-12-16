<?php
	if(isset($_POST['submit'])){
		$name=$_POST['name'];
		$email=$_POST['email'];
		$message=$_POST['message'];

		$to='harshitkotnala5@gmail.com'; // Receiver Email ID, Replace with your email ID
		$subject='Form Submission';
		$message="Name :".$name."\n"."Wrote the following :"."\n\n".$message;
		$headers="From: ".$email;

		if(mail($to, $subject, $message, $headers)){
			echo "<h3>Sent Successfully! Thank you"." ".$name.", We will Stay in Touch!</h3>";
		}
		else{
			echo "<h3>Something went wrong!</h3>";
		}
	}
?>