<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    echo "The email $email was submitted!";
    die;
}
?>
<html lang="sk">
<body>
<h1>
    Please submit the forms
</h1>
<form method="POST">
    <label for="email">Email:</label>
    <input id="email" type="email" name="email"/>
    <button>Submit</button>
</form>
</body>
</html>
