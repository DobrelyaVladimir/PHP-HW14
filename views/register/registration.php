<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Registration</h1>
<form action="<?= url("register", "checkUsers")?>" method="post">
    <input type="text" name="login" placeholder="login"><br>
    <input type="password" name="pass" placeholder="password"><br>
    <input type="password" name="confirmPass" placeholder="confirm pass"><br>
    <input type="email" name="email" placeholder="email"><br>
    <input type="text" name="phone" placeholder="phone"><br>
    <button type="submit" name="reg">Register</button>
</form>
</body>
</html>