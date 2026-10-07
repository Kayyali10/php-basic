<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- PHP Form Handling, Validation  , Super global -->
<!-- <?php
$name = '';
if (($_SERVER['REQUEST_METHOD'] ?? 'GET') === 'POST') {
    $name = trim($_POST['name'] ?? '');
}
echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['HTTP_HOST'];
echo "<br>";
echo $_SERVER['HTTP_REFERER'];
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];
?>
<form method="post">
  <label>Your name <input name="name" value="<?= htmlspecialchars($name) ?>"></label>
  <button>Send</button>
</form>
<?php if ($name !== ''): ?>
  <p>Hello, <?= htmlspecialchars($name) ?>.</p>
<?php endif; ?> -->

<!-- Session -->
<!-- <?php

session_start();

$_SESSION["username"] = "Ahmad";
$_SESSION["email"] = "ahmedkayyali2002@gmail.com";

echo "You are logged in " . $_SESSION["username"] . "<br>";
echo "You are logged in " . $_SESSION["email"];
?> -->


<!-- Cookies -->
 <!-- <?php

setcookie("username", "Ahmad", time() + 3600);

echo "Cookie created";

?> -->

<!-- Build login and register using session -->


</body>
</html>