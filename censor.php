<?php 

$text = $_GET["textarea"];
$word = $_GET["censoredWord"];
$newText = str_replace($word, "***", $text);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
</head>
<body>
    


    <h2>Il testo originale è:</h2>

    <h4>
        <?php echo $text ?>
    </h4>
    
    <br>

    <h2>Lunghezza testo originale:</h2>

    <h4>
        <?php echo strlen($text) . " caratteri e spazi" ?> 
    </h4>

    <br>
    <hr>
    <br>

    <h2>Il testo censurato è:</h2>

    <h4>
        <?php echo $newText ?>
    </h4>

    <br>

    <h2>Lunghezza testo censurato:</h2>

    <h4>
        <?php echo strlen($newText) . " caratteri e spazi" ?> 
    <h4>

</body>
</html>