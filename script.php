
if(isset($_POST['submit'])) 
{ 
	$to= "denimskirty@gmail.com"; 
	$subject= "a question"; 
	$msg= $_POST["value1"]; //textarea value will be send as message here. 
	$header= "Header for mail" //For example: From: abc@xyz.com 
	mail($to,$subject,$msg,$header); 
} 
