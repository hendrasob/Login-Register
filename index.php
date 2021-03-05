<?php

// define title
$title = 'Welcome'; 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?=isset($title) ? $title : null;?></title>

     <link rel="stylesheet" href="css/bootstrap.min.css" />
</head>
<body class="bg-light">
    <header>
        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <h1>Welcome to Website</h1>
                        <p>Join millions of other people ...</p>
                    </div>
                    <div class="col-md-4">
                        <a href="login.php" class="btn btn-secondary">Login</a>
                        <a href="register.php" class="btn btn-success">Register</a>
                    </div>
                </div>
            </div>
        </div>
    </header>

</body>
</html>