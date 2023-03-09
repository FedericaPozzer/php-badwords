<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
</head>
<body>
    
    <h2>Inserisici un testo</h2>
    <form method="GET" action="./censor.php">
        <textarea name="textarea" cols="30" rows="10"> </textarea>
        <br>
        <br>
        <label for="word-to-censor">Parola da censurare</label>
        <br>
        <input type="text" id="word-to-censor" name="censoredWord">
    </form>

</body>
</html>