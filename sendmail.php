<?php
include_once('db.php');
if(isset($_POST)){
$email=$_POST['email'];
$phone=$_POST['phone'];
$subject=$_POST['subject'];
$message_comment=$_POST['message_comment'];
 
  mysqli_query($conn,"INSERT INTO car_db(email,phone,subject,message_comment)VALUES('$email','$phone','$subject','$message_comment')")
or die (mysqli_error($conn));
}
?>
<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
	h1{
		color: red;
		text-align: center;
		text-shadow: 4px 4px 10px black;
	}
	p{
		color: blue;
		text-align: center;
	}
	</style>
	<title></title>
</head>
<body style="font-family: 'Lato', sans-serif;" style="background-color:#A9A9A9" style="border-color: red;" width="100%" height="100%">
	<table align="center" width="1200" border="0" style="background-color: #FAFBDC">
		<tr>
			<td colspan="2" height="50">
				<img src="img/heading.jpg" width="1200" height="200"><h1 align="center"></h1>
				<a href="http//www.whatsapp.com"><img src="img/whatsapp.jpeg" align="right" height="30" width="30"></a>
				<a href="http//www.instagram.com"><img src="img/instagram.jpg" align="right" height="30" width="30"></a>
				<a href="http//www.twitter.com"><img src="img/twitter.png" width="30" height="30" align="right"></a>
			</td>
		</tr>
		<tr>
		<td colspan="2" align="right" style="background-color: #A9A9A9" align="right">
			<a href="index.html"><button>Home|</button></a>
			<a href="About.html"><button>About|</button></a>
			<a href="News.html"><button>News|</button></a>
			<a href="Contact.html"><button>Contact</button></a>
		</td>
		</tr>
		<tr>
		<td><h1>Welcome</h1>
		<p>Your Message has been Send Successfully!!!<br>
			you will received a responds shortly....
		</p>		
		</td>
		</tr>
</body>
</html>