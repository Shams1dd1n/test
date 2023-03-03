<!doctype html>
<?php
use App\Services\Service;
use App\Models\Link;
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="static/css/bootstrap.css">
    <link rel="stylesheet" href="static/css/style.css">
    <title>Document</title>
</head>
<body>
<header>
    <div class="container">
        <div class="row text-uppercase content text-center"><h1>ln.kg</h1></div>
        <div class="row">
            <form action="" method="GET">
                <div class="input-group mb-3">
                    <input type="text" name="ln.kg" class="form-control" placeholder="Вставьте ссылку"
                           aria-describedby="button-addon2">
                    <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Выполнить</button>
                </div>
            </form>
        </div>
    </div>
</header>
</body>
</html>

