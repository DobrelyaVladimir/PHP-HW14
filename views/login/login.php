
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

<form action="<?= url("login", "findUser")?>" method="post">
    <input type="text" name="login" placeholder="login"><br>
    <input type="password" name="pass" placeholder="password"><br>
    <button type="submit" >Login</button>
</form>
</body>
</html>