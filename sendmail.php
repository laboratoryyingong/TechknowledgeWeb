<?php

	require_once "email.class.php";

	$smtpserver = "ssl://smtp.gmail.com";
	$smtpserverport = 465;//Port 465(SSL required) Port 587 (TLS required)
	$smtpusermail = "info.tkie@gmail.com";
	$smtpemailto = "max.g.laboratory@gmail.com";//send to whom
	$smtpuser = "info.tkie";//input user name
	$smtppass = "tkieau123";//input password
	$mailtitle = @$_POST['title'];
	$mailcontent = "<h1>Hi, I am ".@$_POST['name']."</h1>"."<h2>My email is ".@$_POST['email']."</h2>"."<p>I may need some help: ".@$_POST['content']."</p>";
	$mailtype = "HTML";//format (HTML/TXT)

	$smtp = new smtp($smtpserver,$smtpserverport,true,$smtpuser,$smtppass);//ture stand for ID
	$smtp->debug = true;
	$state = $smtp->sendmail($smtpemailto, $smtpusermail, $mailtitle, $mailcontent, $mailtype);

	echo "<div style='width:300px; margin:36px auto;'>";
	if($state==""){
		echo "Sorry, email send fails! please check if the email is correct";
		echo "<a href='/'>Click to return</a>";
		exit();
	}
	echo "Congratulation!";
	echo "<a href='/'>Click to return/a>";
	echo "</div>";

?>
