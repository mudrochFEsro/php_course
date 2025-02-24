<?php
session_start();
$hasCookie = isset($_COOKIE['user']);
if (!$hasCookie) {
    $welcomeMessage = "Welcome back user!";
} else {
    $welcomeMessage = "Welcome back " . htmlspecialchars($_COOKIE['user']);
}
if (!isset($_SESSION['visits'])) {
    $_SESSION['visits'] = 1;
} else {
    $_SESSION['visits']++;
}
$visitMessage = "This is your " . $_SESSION['visits'] . " visit.";

?>

<html lang="">
<body>
<?php if (!$hasCookie): ?>
    <form method="POST">
        <label for="name">Your name:</label>
        <input id="name" type="text" name="name"/>
        <button>Track</button>
    </form>
<?php endif; ?>
<p><?=$welcomeMessage ?></p>
<p><?=$visitMessage ?></p>
</body>

</html>
