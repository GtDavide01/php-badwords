<?php
$userPar = $_GET["paragrafo"];
$userWordCen = $_GET["word"];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css
    ">
    <title>Paragrafo</title>
</head>

<body>
    <div class="container">
        <div class="paragrafonormale">
            <h2>Paragrafo</h2>
            <br>
            <p>
                <?php echo $userPar; ?>
            </p>
            <h3>Lunghezza :
                <?php
                echo strlen($userPar);
                ?>
            </h3>
        </div>
        <div class="paragrafocensurato">
            <h2>Paragrafo Censurato </h2>
            <p>
                <?php
                $paragrafoSostituito = str_replace("$userWordCen", "***", "$userPar");
                echo $paragrafoSostituito;
                ?>
            </p>
            <h3>Lunghezza :
                <?php
                echo strlen($paragrafoSostituito);
                ?>
            </h3>
        </div>

    </div>

</body>

</html>