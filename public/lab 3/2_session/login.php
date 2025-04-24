<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $login = $_POST['login'];
    $password = $_POST['password'];

    if ($login === 'admin' && $password === '1234') {
        $_SESSION['user'] = $login;
        header("Location: welcome.php");
        exit;
    } else {
        $error = "Невірні дані!";
    }
}
?>

<form method="post">
    <input type="text" name="login" placeholder="Логін" required>
    <input type="password" name="password" placeholder="Пароль" required>
    <button type="submit">Увійти</button>
</form>

<?php if (!empty($error)) echo "<p style='color:red;'>$error</p>"; ?>