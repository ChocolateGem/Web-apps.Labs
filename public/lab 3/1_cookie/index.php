<?php
if ($_SERVER["REQUEST_METHOD"] === "POST" && !empty($_POST['name'])) {
    setcookie("username", $_POST['name'], time() + (7 * 24 * 60 * 60));
    header("Location: index.php");
    exit;
}

if (isset($_GET['clear'])) {
    setcookie("username", "", time() - 3600);
    header("Location: index.php");
    exit;
}

$username = $_COOKIE['username'] ?? null;
?>

<form method="post">
    <label>Ім'я: <input type="text" name="name" required></label>
    <button type="submit">Зберегти</button>
</form>

<?php if ($username){ ?>
    <p>Привіт, <?= htmlspecialchars($username) ?>!</p>
    <a href="?clear=1">Видалити cookie</a>
<?php } ?>