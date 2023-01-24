<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <form action="./form.php" method="POST">
            <div class="mb-3">
                <label for="badword">Inserire parola da nascondere</label>
                <br>
                <div class="input-area">
                    <input class="form-control" type="text" name="badword" id="badword">
                    <button class="btn btn-primary" type="submit">Replace</button>
                </div>
            </div>
            <br>
            <div class="mb-3">
                <label for="sentence">Inserire del testo</label>
                <br>
                <textarea class="form-control" type="text" name="sentence" id="sentence" method="GET" rows="4" cols="55"></textarea>
            </div>
        </form>
    </div>
</body>

</html>