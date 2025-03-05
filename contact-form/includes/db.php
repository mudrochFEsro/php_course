<?php
function connectDb(): PDO
{
    $pdo = new PDO('sqlite:' . DB_DIR . '/' . 'db.sqlite');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $pdo;
}

function loadSchema(PDO $pdo, string $schemaFile): void
{
    $sql = file_get_contents($schemaFile);
    if (false === $sql) {
        die("Unable to load schema file: $schemaFile");
    }
    $pdo->exec($sql);
    echo "Schema file loaded successfully\n";
}

function insertMessage(PDO $pdo, string $name, string $email, string $message): bool
{
    $sql = "INSERT INTO messages (name, email, message) VALUES (:name, :email , :message)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        ':name' => $name,
        ':email' => $email,
        ':message' => $message
    ]);
    return $stmt->rowCount() > 0;
}

function getMessages(PDO $pdo)
{
    $sql = "SELECT * FROM messages ORDER BY create_at DESC";
    $stmt = $pdo->query($sql);
    return $stmt->fetchAll(PDO::FETCH_ASSOC );
}

