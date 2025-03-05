<?php

use JetBrains\PhpStorm\NoReturn;

#[NoReturn] function exceptionHandler(Throwable $exception): void
{
    $message = "Uncaught exception: ("
        . get_class($exception)
        . ") "
        . $exception->getFile()
        . "on line "
        . $exception->getLine();

    error_log($message);

    serverError("An unexpected error occurred. Please try again later.");
}

#[NoReturn] function errorHandler(
    int    $errorNo,
    string $errorStr,
    string $errorFile,
    int    $errorLine): bool
{
    $message = "Error[$errorNo] $errorStr on line $errorLine in file $errorFile";

    error_log($message);

    serverError("An error occurred. Please try again later.");
}
    
