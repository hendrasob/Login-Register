<?php

require_once("config.php");

if(isset($_POST['register'])){

    // filter the input data
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
    // enkripsi password
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);


    // set up a query
    $sql = "INSERT INTO users (name, username, email, password) 
            VALUES (:name, :username, :email, :password)";
    $stmt = $db->prepare($sql);

    // bind parameter to query
    $params = array(
        ":name" => $name,
        ":username" => $username,
        ":password" => $password,
        ":email" => $email
    );

    // query execution to save to database
    $saved = $stmt->execute($params);

    // if the save query is successful, then the user is registered
    // then switch to the login page
    if($saved) header("Location: login.php");
}

// define title
$title = 'Register'; 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?=isset($title) ? $title : null;?></title>

     <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/sb-admin-2.min.css" />
</head>
<body class="bg-gradient-primary">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                            </div>

        <form action="" method="POST">

            <div class="form-group">
                <label for="name">Full name</label>
                <input class="form-control" type="text" name="name" placeholder="Your Name" />
            </div>

            <div class="form-group">
                <label for="username">Username</label>
                <input class="form-control" type="text" name="username" placeholder="Username" />
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input class="form-control" type="email" name="email" placeholder="Email" />
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input class="form-control" type="password" name="password" placeholder="Password" />
            </div>

            <input type="submit" class="btn btn-success btn-block" name="register" value="Register" />

        </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="login.php">Login to your account!</a>
                                    </div>
            
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</body>
</html>