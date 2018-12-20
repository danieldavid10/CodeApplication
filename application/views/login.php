<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>CodeApp|Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <h1>Login</h1>
    <ul>
        <?php foreach ($menu as $item):?>
        <li><a href="<?= $item['url'];?>"><?= $item['title'];?></a></li>
        <?php endforeach?>
    </ul>
</body>
</html>