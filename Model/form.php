<?php
declare(strict_types=1);
ini_set('display_errors', "1");
ini_set('display_startup_errors', "1");
error_reporting(E_ALL);
//require 'connection.php';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body class="text-center">

<form action="" method="get">
    <h1>Welcome to our StudentBook</h1>

    </br>
    <label for="first_name">Name:</label>
    <input name="first_name" id="first_name" type="text" maxlength="255" required/></br>

    </br>
    <label for="last_name">Last Name:</label>
    <input name="last_name" id="last_name" type="text" maxlength="255" required/></br>

    </br>
    <label for="username">User Name:</label>
    <input name="username" id="username" type="text" maxlength="255" required/></br>

    </br>
    <label for="gender">gender:</label>
    <input name="gender" id="gender" type="text" maxlength="255" required/></br>

    </br>
    <label for="linkedin">linkedin:</label>
    <input name="linkedin" id="linkedin" type="text" maxlength="255" required/></br>

    </br>
    <label for="github">github:</label>
    <input name="github" id="github" type="text" maxlength="255" required/></br>

    </br>
    <label for="email">email:</label>
    <input name="email" id="email" type="text" maxlength="255" required/></br>

    </br>
    <label for="preferred_language">preferred_language:</label>
    <input name="preferred_language" id="preferred_language" type="text" maxlength="255" required/></br>


    </br>
    <label for="gb-content">avatar:</label>
    <input name="avatar" id="avatar" type="text" maxlength="255" required/></br>

    </br>
    <label for="video">video:</label>
    <input name="video" id="video" type="text" maxlength="255" required/></br>

    </br>
    <label for="quote">quote:</label>
    <input name="quote" id="quote" type="text" maxlength="255" required/></br>

    </br>
    <label for="quote_author">quote_author:</label>
    <input name="quote_author" id="quote_author" type="text" maxlength="255" required/></br>

    </br>
    <label for="date">Date:</label>
    <input name="date" id="date" type="date" maxlength="255" required/></br>

    </br>
    <input type="submit" value="Submit"/></br>
</form>


</body>
</html>