<?php

$logFile = 'log.txt';
$message = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $logText = isset($_POST['logText']) ? $_POST['logText'] : '';

    if (!empty($logText)) {
        if (file_put_contents($logFile, $logText . "\n", FILE_APPEND)) {
            $message = "Текст успішно записано в лог.";
        } else {
            $message = "Сталася помилка при записі тексту в лог.";
        }
    } else {
        $message = "Будь ласка, введіть текст для запису.";
    }
}

if (file_exists($logFile)) {
    $logContent = file_get_contents($logFile);
} else {
    $logContent = 'Лог-файл не знайдено.';
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <h1>Результат запису в лог</h1>

    <p><?php echo $message; ?></p>

    <h2>Зміст лог-файлу:</h2>
    <div id="logContent">
        <pre><?php echo htmlspecialchars($logContent); ?></pre>
    </div>

    <br>
    <a href="index.html">Повернутися до форми</a>
</body>
</html>
