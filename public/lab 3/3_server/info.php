<?php
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header("Location: form.html");
    exit;
}

echo "<p>IP: " . $_SERVER['REMOTE_ADDR'] . "</p>";
echo "<p>Браузер: " . $_SERVER['HTTP_USER_AGENT'] . "</p>";
echo "<p>Скрипт: " . $_SERVER['PHP_SELF'] . "</p>";
echo "<p>Метод: " . $_SERVER['REQUEST_METHOD'] . "</p>";
echo "<p>Шлях на сервері: " . $_SERVER['SCRIPT_FILENAME'] . "</p>";
?>