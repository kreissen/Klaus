<?php
    $to: "kreissen@utexas.edu";
    $errors = array();
    foreach ($_POST as $name => $value)
		{
			if ($name != "captcha-solution" && $name != "captcha-response")
			{
				$email .= "$name: $value\n";
			}
		}
    if($errors)
    {
        $email = "New Form Submission!" /n;

        if (isset($_POST["name"]) && isset($_POST["email"]) && isset($_POST["message"]))
        {
            echo = "Form Submission Completed!"
        }
        else()
        {
            echo = "Message Failed to Send!";
        }
    }
    $host = $_SERVER[”HTTP_HOST”];

    $path = rtrim(dirname(&_SERVER[”PHP_SELF”]_, “/\\”);

    header(”Location: https://kreissen.github.io/klaus/);    
      
?>
    
