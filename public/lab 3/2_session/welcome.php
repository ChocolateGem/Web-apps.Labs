<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit;
}
?>

<p>Вітаємо, <?= htmlspecialchars($_SESSION['user']) ?>!</p>
<a href="logout.php">Вийти</a>