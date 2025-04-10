<?php
// Отримання значень з форми
$first_name = $_POST['first_name'] ?? '';
$last_name = $_POST['last_name'] ?? '';

// Перевірка на пустоту
if (empty($first_name) || empty($last_name)) {
    echo "Будь ласка, заповніть усі поля!";
    exit;
}
elseif (!is_string($first_name) || !is_string($last_name)) { // перевірка на тип
    echo "Невірний тип даних.";
    exit;
}
else{
    // Виведення привітання
    echo "<h2>Привіт, $first_name $last_name!</h2>";
}
?>