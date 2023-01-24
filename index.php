<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>

<body>
    <form action="./form.php" method="POST">
        <label for="badword">Inserire parola da nascondere</label>
        <input type="text" name="badword" id="badword">
        <button type="submit">Replace</button>
        <br>
        <br>
        <label for="sentence">Inserire del testo</label>
        <br>
        <textarea type="text" name="sentence" id="sentence" method="GET" rows="4" cols="55"></textarea>
    </form>



</body>

</html>