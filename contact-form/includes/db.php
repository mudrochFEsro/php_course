<?php
function connectDb(): PDO {
    $pdo = new PDO('sqlite:' . DB_DIR. '/' . 'db.sqlite');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $pdo;
}

function loadSchema(PDO $pdo, string $schemaFile): void {
    $sql = file_get_contents($schemaFile);
    if (false === $sql) {
        die("Unable to load schema file: $schemaFile");
    }
    $pdo->exec($sql);
    echo "Schema file loaded successfully\n";
}