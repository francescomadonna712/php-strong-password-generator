<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Password Generata</h1>
    <?php
    $length = intval($_POST["length"]);

    $allowed_characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*(){}[]:;<>,.\|?~`/';

    $password = "";
    $max_index = strlen($allowed_characters) - 1;

    for ($i = 0; $i < $length; $i++) {
        $random_index = rand(0, $max_index);
        $password .= $allowed_characters[$random_index];
    }

    echo "<p>La tua password è: $password</p>";
    ?>
</body>

</html>