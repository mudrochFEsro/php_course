<?php
$name = $_POST['name'] ?? '';
$email = $_POST['email'] ?? '';
$message = $_POST['message'] ?? '';

if (empty($name) || empty($email) || empty($message)) {
    badRequest('All fields are required');
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    badRequest('Email address is not valid');
}

$inserted = insertMessage(
    connectDb(),
    name: $name,
    email: $email,
    message: $message
);

if ($inserted) {
    $safeName = htmlspecialchars($name, ENT_QUOTES, 'UTF-8');
    addFlashMessage('success',"Thank you $safeName for your message. It was stored.");
}
addFlashMessage('error', 'Could not store the message, sorry');
header('Location: /guestbook');


