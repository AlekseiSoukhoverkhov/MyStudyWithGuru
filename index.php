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
        <input type="text" name="name" value="<?php echo  htmlspecialchars($name) ?>"></label>
        <span class="error">* <?php if ($nameErr) echo htmlspecialchars($nameErr); ?></span>
    </div>
    <div class="form">
        <label for="email">Email
        <input type="text" name="email" value="<?php echo  htmlspecialchars($email) ?>"></label>
        <span class="error">* <?php if($emailErr) echo htmlspecialchars($emailErr);?></span>
    </div>
    <div class="form">
        <label for="phone">Phone
        <input type="text" name="phone" value="<?php echo  htmlspecialchars($phone) ?>"></label>
        <span class="error">* <?php if($phoneErr) echo htmlspecialchars($phoneErr);?></span>
    </div>
    <div class="form">
        Your message
    </div>
    <div class="form">
        <textarea name="message" rows="5" cols="27">* <?php if($emailErr)  echo htmlspecialchars($message); ?></textarea>
    </div>

        <button type="submit">Отправить</button>

</form>
</body>
</html>