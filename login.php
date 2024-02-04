<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if ($_POST['email']) {
        $_SESSION['saved_email'] = $_POST['email'];
    }

    if (!$_POST['password']) {
        $passworderror = "Password address is Required";
    }

    if ($_SESSION['saved_email']) {
        $emailValue = $_SESSION['saved_email'];
        if (preg_match('/@bcit\.ca$/i', $emailValue)) {
            $_SESSION['BCIT'] = true;
            header('Location: secret.php');
        } else {
            if ($_POST['password']) {
                header('Location: index.php');
            }
        }
    } else {
        $emailerror = "Email address is Required";
    }

} 



?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="styles.css">
    <title>Login</title>
</head>
<body>

<span id="logo">~</span>

<h1>Sign in to your account</h1>
<p>Don't have an account? <a href="">Register</a></p>

<form action="" method="post">

<div class="error"><?= $emailerror ?></div>
<label for="email">Email Address</label>
<input type="email" name="email" id="email" value="<?php echo $emailValue; ?>">

<div class="error"><?= $passworderror ?></div>
<label for="password">Password</label>
<input type="password" name="password" id="password">

<div class="forgot">
<a href="">Forgot your password?</a>
</div>

<input type="submit" value="Sign In" id="submit">

</form>

</body>
</html>
