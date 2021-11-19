<?php
require_once 'functions.php';
require_once 'veryfication.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="formstyle.css">
</head>
<body>
<h2>Contact Form</h2>
<p><span class="error">* required field</span></p>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
    <div class="form">
        <label for="name">Name
        <input type="text" name="name" value="<?php echo $name ?>"></label>
        <span class="error">* <?php echo $nameErr;?></span>
    </div>
    <div class="form">
        <label for="email">Email
        <input type="text" name="email" value="<?php echo $email ?>"></label>
        <span class="error">* <?php echo $emailErr;?></span>
    </div>
    <div class="form">
        <label for="phone">Phone
        <input type="text" name="phone" value="<?php echo $phone ?>"></label>
        <span class="error">* <?php echo $phoneErr;?></span>
    </div>
    <div class="form">
        Your message
    </div>
    <div class="form">
        <textarea name="message" rows="5" cols="27"><?php echo $message ?></textarea>
    </div>

        <button type="submit">Отправить</button>

</form>
</body>
</html>