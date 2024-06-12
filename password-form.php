<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Genera Password </h1>
    <form action="password-generator.php" method="post">
        <label for="length">Lunghezza della Password:</label>
        <input type="number" id="length" name="length" min="1" required>
        <button type="submit">Genera Password</button>
    </form>
</body>

</html>