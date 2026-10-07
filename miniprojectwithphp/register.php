<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

session_start();

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $username = trim($_POST["username"] ?? "");
    $password = trim($_POST["password"] ?? "");

    if ($username === "" || $password === "") {
        echo "All fields are required";
    } else {

        $_SESSION["username"] = $username;
        $_SESSION["password"] = $password;

        echo "Account created successfully";
    }
}

?>

<form method="post">

    <input type="text" name="username" placeholder="Username">

    <input type="password" name="password" placeholder="Password">

    <button type="submit">Register</button>

</form>
</body>
</html>