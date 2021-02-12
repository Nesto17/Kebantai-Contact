<?php
	if(isset($_POST['submit'])){
		$fullname=$_POST['fullname'];
		$email=$_POST['email'];
		$messages=$_POST['messages'];

		$to='salim.ernest17@gmail.com'; 
		$subject='Form Submission';
		$message="Name :".$name."\n"."Phone :".$phone."\n"."Wrote the following :"."\n\n".$msg;
		$headers="From: ".$email;

		if(mail($to, $subject, $message, $headers)){
			echo "<h2>Sent Successfully! Thank you"." ".$fullname.", We will contact you shortly!</h2>";
			header('Location: thanks.html');
		}
		else{
			echo "Something went wrong!";
		}
	}
?>





