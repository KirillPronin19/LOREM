<?php
// Проверка метода POST
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = $_POST['full_name'];
    $email = $_POST['email_address'];
    $agreement = isset($_POST['agreement']);

    if ($agreement && !empty($name) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Здесь код обработки формы, например отправка письма администратору
        echo "<p>Спасибо! Ваше сообщение успешно отправлено!</p>";
    } else {
        echo "<p>Ошибка при отправке сообщения. Пожалуйста, проверьте введённые данные.</p>";
    }
} else {
    header("Location: /");
    exit();
}
?>