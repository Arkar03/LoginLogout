<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Welcome</title>
</head>

<body>
    <?php
    $username = $_GET['username'];
    $password = $_GET['password'];
    ?>
    
    <?php if (strtoupper($username) == 'ARKAR' && $password == 'password') : ?>
        <div class="container">
            <div style="height:250px;"></div>

            <h1 class="h1 text-center">WELCOME <?= strtoupper($username) ?>! </h1>
        </div>
    <?php else : ?>
        <?php header('location:./index.php?incorrect=1'); ?>
    <?php endif ?>
</body>

</html>
