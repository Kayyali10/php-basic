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

    $username = $_POST["username"] ?? "";
    $password = $_POST["password"] ?? "";

    if (
        isset($_SESSION["username"]) &&
        isset($_SESSION["password"]) &&
        $username === $_SESSION["username"] &&
        $password === $_SESSION["password"]
    ) {

        header("Location: dashboard.php");
        exit;

    } else {

        echo "Invalid username or password";
    }
}

?>

<form method="post">

    <input type="text" name="username" placeholder="Username">

    <input type="password" name="password" placeholder="Password">

    <button type="submit">Login</button>

</form>
    
</body>
</html>