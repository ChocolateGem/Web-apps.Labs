<?php
$directory = 'uploads/';
    
    $files = array_diff(scandir($directory), array('..', '.'));

    if (count($files) > 0) {
        echo '<h2>Список файлів:</h2>';
        echo '<ul>';
        foreach ($files as $file) {
            $file_path = $directory . $file;
            echo '<li><a href="' . $file_path . '" target="_blank">' . htmlspecialchars($file) . '</a></li>';
        }
        echo '</ul>';
    } else {
        echo 'Файли не знайдені.';
    }

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Список файлів</title>
</head>
<body>
    <a href="index.html">Повернутися до форми</a>
</body>
</html>