---
layout: page
title: ask us
permalink: /askus/
main_nav: true
---


<fieldset>
  

  <form>

    <p><label for="text_area">ask away:</label>
      <textarea id="text_area"></textarea></p>
 
    <p><input type="submit" value="submit" /></p>
    
  </form>
  
</fieldset>

{{< php >}}
if(isset($_POST['submit'])) 
{
	$to= "denimskirt@gmail.com"; 
	$subject= "Subject for your email"; 
	$msg= $_POST["text_area"]; //textarea value will be send as message here. 
	$header= "a question!" //For example: From: abc@xyz.com 
	mail($to,$subject,$msg,$header); 
}
{{< /php >}}





