<?php

require_once __DIR__ . '/src/PageContent.php';

use App\PageContent;

/** 
 * @codeCoverageIgnore
 */
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo PageContent::getTitle(); ?></title>
    <style>
        body {
            background-color: crimson;
            color: wheat;
            font-family: Arial, sans-serif;
            text-align: center;
            margin-top: 50px;
        }
    </style>
</head>

<body>
    <h1><?php echo PageContent::getTitle(); ?></h1>
    <p><?php echo PageContent::getParagraph(); ?></p>
</body>

</html>