<?php
declare(strict_types=1);

session_start();
dispatch($_SERVER['REQUEST_URI'], $_SERVER['REQUEST_METHOD']);

