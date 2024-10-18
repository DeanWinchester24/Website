<?php
session_start();

include('database.php');

if (isset($_POST['emailAddress']) && isset($_POST['password'])) {
    
    $email = $_POST['emailAddress'];
    $password = $_POST['password'];
    
    $sql = "SELECT * FROM your_shop_Managers WHERE emailAddress = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();

        if (hash('sha256', $password) === $user['password']) {

            $_SESSION['login'] = true;
            $_SESSION['emailAddress'] = $user['emailAddress'];
            $_SESSION['firstName'] = $user['firstName'];
            $_SESSION['lastName'] = $user['lastName'];
            $_SESSION['pronouns'] = $user['pronouns'];

            header('Location: main.inc.php');
            exit();
        } else {

            header('Location: index.php?error=Incorrect Password');
            exit();
        }
    } else {

        header('Location: index.php?error=Email Not Found');
        exit();
    }
} else {

    header('Location: index.php?error=Invalid Form Submission');
    exit();
}

?>
