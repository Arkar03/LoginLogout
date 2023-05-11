<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Login Logout</title>
</head>

<body>

    <?php
    // $username = $_GET['username'];
    // $password = $_GET['password'];

    // if (strtoupper($username) === 'ARKAR' && $password === 'password') {
    //     header('location:./welcome.php');

    // }


    ?>

    <div style="height:150px;"></div>
    <div class="container col-3">
    <?php if (isset($_GET['incorrect'])) : ?>
           <div class="alert alert-warning">
                incorrect username or password
           </div>
    <?php endif ?>
        
        <h1 class="text-center h2">Login</h1>

        <form action="welcome.php" class="form-control align-center" method="GET">
            <div class="col">
                <label for="username" class="form-label text-end">Username</label>
                <input class="form-control" type="text" name="username" id="username">
            </div>
            <div class="col">
                <label for="password" class="form-label text-end">Password</label>
                <input class="form-control" type="password" name="password" id="password">
            </div>
            <input type="submit" class="btn btn-secondary mt-4" value="submit">
        </form>
    </div>


</body>

</html>