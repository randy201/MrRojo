<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form action="<?php echo site_url('Login/log/');?>" method="post">
        <input type="text" name="name" id="name">
        <input type="password" name="psd" id="psd">
        <input type="submit" value="Valider">
    </form>
</body>
</html>