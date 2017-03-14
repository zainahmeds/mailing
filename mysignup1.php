<?php
//session_start();
//include_once ("config.php");

//$current_url = urlencode($url = "http://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']);
?>
<?php

// if (isset($_POST['name']) && (isset($_POST['email'])) && (isset($_POST['pass'])))
// 	{
// 	$dob = '00/00/0000';
// 	$addr = 'NULL';
// 	$name = $_POST['name'];
$email = "zainahmeds123@gmail.com";
// $pass = $_POST['pass'];
// $dob = $_POST['dob'];
// $addr = $_POST['addr'];

// $pass=md5($pass);
// // $myemail="siddheysankhe1996@gmail.com";

$sentOtp = mt_rand(1000, 9999);


// }
// if($verified==0)
// {
// 	$query="UPDATE users SET Password='$pass' WHERE Email='$email'";
// 	$result=mysqli_query($dbc,$query);
// }
// else
// {
// 	header("Location:index.php?alreadyPresent=1");
// }
// // //$dbc=mysqli_connect("localhost","root","","online_groc") or die("Error connecting sql server");
// // $results = $mysqli->query("INSERT INTO users (Firstname,Email,Password,Date of Birth,Address) VALUES ('$name','$email','$pass','$dob','$addr')");
// // $query="INSERT INTO users (Firstname,Email,Password,Date of Birth,Address) VALUES ('$name','$email','$pass','$dob','$addr')";
// // $subject="Thank You for signing up";
// // $msg="This is system generated mail please do not reply";

require 'PHPMailer1/PHPMailerAutoload.php';

$mail = new PHPMailer;
$mail->isSMTP(); // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com'; // Specify main and backup SMTP servers
$mail->SMTPAuth = true; // Enable SMTP authentication
$mail->Username = 'onlinegrocerystores@gmail.com'; // SMTP username
$mail->Password = 'nahibatanaja'; // SMTP password
$mail->SMTPSecure = 'tls'; // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587; // TCP port to connect to
$mail->setFrom('onlinegrocerystores@gmail.com', 'Online Grocery Stores');
$mail->addAddress($email); // Add a recipient
$mail->isHTML(true); // Set email format to HTML
$mail->Subject = "Login Authentication";
$mail->Body = "Thank You for Sign up OTP:$sentOtp";
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
if (!$mail->send())
{
    echo "Sorry. The Mail could not be sent to $email Due to some network Issues. Please Try Again From The SignUp Process";
}
else
{
    echo "Message has been sent to $email";
}
?>
