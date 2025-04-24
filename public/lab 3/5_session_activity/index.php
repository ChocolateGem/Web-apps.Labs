<?php
session_start();
$timeout = 300;

if (isset($_SESSION['last_activity']) && (time() - $_SESSION['last_activity']) > $timeout) {
    session_unset();
    session_destroy();
    echo "Сесію завершено через неактивність.";
} else {
    $_SESSION['last_activity'] = time();
    echo "Сесія активна!";
}
?>