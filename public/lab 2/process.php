<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_FILES['file'])) {
    if (is_uploaded_file($_FILES['file']['tmp_name'])) {
        $file_name = $_FILES['file']['name'];
        $file_tmp = $_FILES['file']['tmp_name'];
        $file_size = $_FILES['file']['size'];
        $file_error = $_FILES['file']['error'];
        
        if ($file_error === 0) {
            $file_ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));
            $allowed_extensions = ['jpg', 'jpeg', 'png'];
            
            if (in_array($file_ext, $allowed_extensions)) {
                if ($file_size <= 2 * 1024 * 1024) {
                    $upload_dir = 'uploads/';
                    $upload_path = $upload_dir . $file_name;
                    $counter = 1;
                    while (file_exists($upload_path)) {
                        $new_file_name = pathinfo($file_name, PATHINFO_FILENAME) . '_' . $counter . '.' . $file_ext;
                        $upload_path = $upload_dir . $new_file_name;
                        $counter++;
                    }

                    if (move_uploaded_file($file_tmp, $upload_path)) {
                        $file_size_kb = round($file_size / 1024, 2);
                        $file_url = 'uploads/' . basename($upload_path);

                        echo "<p>Файл успішно завантажено! Його ім'я: " . basename($upload_path) . "</p>";
                        echo "<p>Розмір файлу: " . $file_size_kb . " КБ</p>";
                        echo "<p><a href='" . $file_url . "' target='_blank'>Завантажити файл</a></p>";
                    } else {
                        echo "Помилка при переміщенні файлу.";
                    }
                } else {
                    echo "Розмір файлу перевищує 2 МБ.";
                }
            } else {
                echo "Недопустимий формат файлу. Тільки зображення: JPG, JPEG, PNG.";
            }
        } else {
            echo "Сталася помилка при завантаженні файлу. Код помилки: $file_error.";
        }
    } else {
        echo "Файл не був завантажений через форму.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<body>
    <a href="index.html">Повернутися до форми</a>
</body>
</html>
