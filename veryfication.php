<?php
#Form fields validation
$nameErr = $emailErr = $phoneErr = $messageErr = ""; // Variables for error notes for the form
//if ($_SERVER["REQUEST_METHOD"] == "POST") {
if (!empty($_POST)){
    $name = htmlspecialchars($_POST["name"]); //This is needed to use as a default  value in form to save results if it is reloaded before sending
    $email = htmlspecialchars($_POST["email"]);
    $phone = htmlspecialchars($_POST["phone"]);
    $message = htmlspecialchars($_POST["message"]);
    if (empty($_POST["name"])) { //Check of the name field
        $nameErr = "Please enter a valid name";
    } else {
        // check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z-' ]*$/", $_POST["name"])) {
            $nameErr = "Only letters and white space allowed";
        }
        // check of the email field
        if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
            $emailErr = "The email address is incorrect";
        }
        if (empty($_POST["phone"])) { //Check of the phone number field
            $phoneErr = "Please enter a phone number!";
        } else
            // check if phone number contains only plus, figures and whitespace
            if (!preg_match("/^[+ \d]*$/", $_POST["phone"])) {
                $phoneErr = "Only plus. figures and white space allowed";
            }
        if (empty($_POST["message"])) { //Check of the message field
            $messageErr = "Please write us something";
        } else {
            formToFile(); //Send to file function
            echo('Your message has been sent to us, thank you!<br><br>');
            $name = $email = $phone = $message = ""; //Cleaning of the form if sent successfully
        }
    }
}



