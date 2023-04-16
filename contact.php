<?php 
$con=mysqli_connect("localhost","root","","myhmsdb");
// if(isset($_POST['send'])){
//     // Get the message from the input field
//     $message = $_POST['message'];

//     // Get the sender's email address (you may want to validate this input)
//     $from = $_POST['from'];

    // Do something with the message, like send an email or save to database
    // For example, to send an email using PHP's built-in mail function:
    if(isset($_POST['btnSubmit']))
{
	$name = $_POST['txtName'];
	$email = $_POST['txtEmail'];
	$contact = $_POST['txtPhone'];
	$message = $_POST['txtMsg'];

	$query="insert into contact(name,email,contact,message) values('$name','$email','$contact','$message');";
	$to = 'yashsharma4197@gmail.com';
    $subject = 'New message';
    $body = 'You received a new message from '.$to.': '.$message;
    $headers = 'From: '.$to;

    if(mail($to, $subject, $body, $headers)){
        echo 'Message sent successfully';
    }else{
        echo 'Failed to send message';
    }
}


// if(isset($_POST['btnSubmit']))
// {
// 	$name = $_POST['txtName'];
// 	$email = $_POST['txtEmail'];
// 	$contact = $_POST['txtPhone'];
// 	$message = $_POST['txtMsg'];

// 	$query="insert into contact(name,email,contact,message) values('$name','$email','$contact','$message');";
// 	$result = mysqli_query($con,$query);
	
// 	if($result)
//     {
//     	echo '<script type="text/javascript">'; 
// 		echo 'alert("Message sent successfully!");'; 
// 		echo 'window.location.href = "contact.html";';
// 		echo '</script>';
//     }
// }
?>
