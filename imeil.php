<?php
// Включете отчитане на грешки за тестова среда
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Получаване на входните данни
    $name = htmlspecialchars($_POST['name'] ?? '');
    $email = htmlspecialchars($_POST['email'] ?? '');
    $message = htmlspecialchars($_POST['message'] ?? '');

    // Можете да добавите проверка за валидност на полетата (опционално)
    if (empty($name) || empty($email) || empty($message)) {
        die("Моля, попълнете всички полета.");
    }

    // Вместо да изпращате имейл, показвате съобщението
    echo "Неуспешно! В процес на обработка";
} else {
    echo "Невалидна заявка.";
}
?>