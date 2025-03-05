<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,200..1000;1,200..1000&family=Roboto+Mono:ital,wght@0,100..700;1,100..700&display=swap"
          rel="stylesheet">
    <style>
        /* Box sizing rules */
        *,
        *::before,
        *::after {
            box-sizing: border-box;
        }

        /* Prevent font size inflation */
        html {
            background-color: #00afa8;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            text-rendering: optimizeLegibility;
            -moz-text-size-adjust: none;
            -webkit-text-size-adjust: none;
            text-size-adjust: none;
            font-family: Roboto Mono, "Courier New", serif;
        }

        /* Remove default margin in favour of better control in authored CSS */
        body,
        h1,
        h2,
        h3,
        h4,
        p,
        figure,
        blockquote,
        dl,
        dd {
            margin-block-end: 0;
        }

        /* Remove list styles on ul, ol elements with a list role, which suggests default styling will be removed */
        ul[role='list'],
        ol[role='list'] {
            list-style: none;
        }

        /* Set core body defaults */
        body {
            min-height: 100vh;
            line-height: 1.5;
            max-width: 60%;
            margin-left: auto;
            margin-right: auto;
            font-size: 1.5em;
        }

        /* Set shorter line heights on headings and interactive elements */
        h1,
        h2,
        h3,
        h4,
        button,
        input,
        label {
            line-height: 1.1;
        }

        label {
            display: block;
        }

        /* Balance text wrapping on headings */
        h1,
        h2,
        h3,
        h4 {
            text-wrap: balance;
        }

        /* A elements that don't have a class get default styles */
        a:not([class]) {
            text-decoration-skip-ink: auto;
            color: currentColor;
        }

        /* Make images easier to work with */
        img,
        picture {
            max-width: 100%;
            display: block;
        }

        /* Inherit fonts for inputs and buttons */
        input,
        button,
        textarea,
        select {
            font-family: inherit;
            font-size: inherit;
            width: 100%;
        }

        /* Make sure textareas without a rows attribute are not tiny */
        textarea:not([rows]) {
            min-height: 10em;
        }
        input,textarea,button{
            padding: 0.15em;
            margin-top: 0.15em;
            margin-bottom: 0.15em;
            background-color: #bbbbbb;
        }

        /* Anything that has been anchored to should have extra scroll margin */
        :target {
            scroll-margin-block: 5ex;
        }

        textarea, input, button {
            border-radius: 0;
            border: 2px solid black;
        }

        *:focus {
            border-radius: 0;
            outline: 4px solid blue;
        }

        button {
            cursor: pointer
        }
        ::selection{
            background: blue;
            color: white;
        }
        ::-moz-selection {
            background: blue;
            color: white;
        }
        .flash-messages {
            margin: 10px 0px;
        }
        .flash-message {
            padding: 10px;
            margin-bottom: 10px;
            border-radius: 4px;
        }
        .flash-success {
            background-color: #d4edda;
            border-color: #c3e6cb;
            color: #155724;
        }
        .flash-error {
            background-color: #f8d7da;
            border-color: #f5c6cb;
            color: #721c24;
        }
    </style>
</head>

<body>
<header>
    <h1>Welcome</h1>
</header>
<nav>
    <a href="/">Home</a>
    <a href="/contact">Contact Form</a>
    <a href="/guestbook">Contact Form</a>

</nav>
<main>
    <?php require_once('_flash.php'); ?>