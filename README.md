<!-- markdownlint-disable MD033 MD041 -->

<div align="center">

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
    die("Terjadi masalah: " . $e->getMessage());
}
```

Replace `$ db_host`, `$ db_user`, `$ db_pass`, and `$ db_name` with the ones you use.

Then run the feature by opening [http://localhost:8080/](http://localhost:8080/)

## License

```
Copyright (c) 2021 Mahendra

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in
all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
THE SOFTWARE.
```