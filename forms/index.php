<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
        // define variables and set to empty values
        $nameErr = $emailErr = $commentErr = "";
        $name = $email  = $comment =  "";
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST["name"])) {
              $nameErr = "Name is required";
            } else {
              $name = test_input($_POST["name"]);}
            }
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST["email"])) {
                $emailErr = "email is required";
            } else {
                $email = test_input($_POST["email"]);}
            }
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST["comment"])) {
                $commentErr = "comment is required";
            } else {
                $comment = test_input($_POST["comment"]);}
            }
    ?>
    <form action="" method="POST">
        name: <input type="text" name="name" required value="<?php echo $name;?>">
        <span class="error">* <?php echo $nameErr;?></span>
        <br><br>
        email: <input type="email" name="name" required value="<?php echo $email;?>">
        <span class="error">* <?php echo $emailErr;?></span>
        <br><br>
        comment: <textarea name="name" rows="5" cols="40" required value="<?php echo $comment;?>"></textarea>
        <span class="error">* <?php echo $nameErr;?></span>
        <br><br>
       <input type="submit" name="submit" value="submit">

    </form>
</body>
</html>