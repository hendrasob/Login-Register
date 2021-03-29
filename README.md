<!-- markdownlint-disable MD033 MD041 -->

<div align="center">
<img width="100px" src="https://github.com/hendrasob/Login-Register/blob/master/assets/github.gif" align="center" />

# Login & Register
<a href="https://github.com/hendrasob/Login-Register/search?l=php"><img src="https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white" alt="GitHub" /></a>
<a href="https://github.com/hendrasob/Login-Register/search?l=css"><img src="https://img.shields.io/badge/CSS3-1572B6?style=for-the-badge&logo=css3&logoColor=white" alt="GitHub" /></a>

</div>

Example of a register and login system using PHP.

## Using

To use this feature, you must import a database that is located in `database / users.sql`.

Next, you must link this feature to the database earlier.  You have to make settings in the `config.php` file.

```
<?php

$db_host = "localhost";
$db_user = "localhost";
$db_pass = "";
$db_name = "users";

try {    
    //create PDO connection 
    $db = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_pass);
} catch(PDOException $e) {
    //show error
    die("Something went wrong: " . $e->getMessage());
}
```

Replace `$ db_host`, `$ db_user`, `$ db_pass`, and `$ db_name` with the ones you use.

Then run the feature by opening [http://localhost:8080/](http://localhost:8080/)

## License

This repo is under <a href="https://github.com/hendrasob/Login-Register/blob/master/LICENSE">MIT License</a>
