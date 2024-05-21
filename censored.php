<?php

// Debug
var_dump(empty($_GET["user_text"]));

// Controlla se le variabili user_text o bad_word sono vuote
if (empty($_GET["user_text"]) || empty($_GET["bad_word"])) {
    // Se una delle due è vuota, mostra un messaggio di errore
    echo "Errore";

    // Termina l'esecuzione
    die();
}

// Assegna i valori delle variabili
$text = $_GET["user_text"];
$word = $_GET["bad_word"];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
</head>

<body>
    <section>
        <h1>Il testo:</h1>
        
        <p> <?php echo $text; ?> </p>
        
        <p>La sua lunghezza è di: <?php echo strlen($text); ?> caratteri</p>
    </section>

    <section>
        <h1>Il testo censurato è : <?php echo $word; ?></h1>
        <?php
        
        $censoredText = str_ireplace($word, "***", $text);
        
        echo $censoredText;
        ?>
        
        <p>La sua lunghezza è di: <?php echo strlen($text); ?> caratteri</p>
    </section>
</body>

</html>