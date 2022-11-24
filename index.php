<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-BADWORDS</title>
    <link rel="stylesheet" href="css/style.css
    ">
</head>

<body>
    <div class="container">
        <form action="paragrafo.php" method="get">
            <label for="paragrafo">Paragrafo</label>
            <input type="text" id="paragrafo" placeholder="inserisci..." name="paragrafo">
            <br>
            <label for="word">Parola da censurare</label>
            <input type="text" id="word" placeholder="inserisci..." name="word">
            <br>
            <button type="submit">Invia</button>
            <button type="reset">Reset</button>
        </form>
    </div>
</body>

</html>