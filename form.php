<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <h3>Parola da sostituire:
        <?php
        //Variabile $sentence presa dal textarea attraverso l'attributo name
        $sentence = strtolower($_POST["sentence"]);
        //Variabile $badword presa dall'imput attraverso l'attributo name
        //converti stringa in lowercase e trim spazi bianchi prima e dopo
        $badword = strtolower(trim(($_POST["badword"])));
        //stampa $badword su schermo
        echo $badword;
        ?>
    </h3>
    <h2>Frase inserita dall'utente:</h2>
    <p>
        <?php
        //stampa $sentence su schermo
        echo $sentence;
        ?>
    </p>
    <p>Lunghezza della frase:
        <?php
        //stampa la lunghezza della frase
        echo strlen($sentence);
        ?>
    </p>
    <br>
    <h2>Frase con parola sostituita:</h2>
    <p>
        <?php
        $new_sentence = str_replace($badword, "***", $sentence);
        echo $new_sentence;
        ?>
    </p>
    <p>Nuova unghezza della frase:
        <?php
        echo strlen($new_sentence);
        ?>
    </p>


</body>

</html>