<?php
session_start();
if (!isset($_SESSION['login'])) {
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome to Tech Gadget Store</title>
</head>
<body>
    <h1>Welcome to the Tech Gadget Store</h1>
    <p>Hello, <?php echo $_SESSION['firstName'] . " " . $_SESSION['lastName'] . " (" . $_SESSION['pronouns'] . ")"; ?>. You are logged in!</p>

    <h2>Tech Gadgets</h2>
    <ul>
        <li>Virtual Reality Headset</li>
        <li>Smart Thermostat</li>
        <li>Wireless Charging Pad</li>
        <li>Bluetooth Speaker</li>
        <li>Fitness Smart Scale</li>
    </ul>

    <a href="logout.inc.php">Logout</a>
</body>
</html>
