<!DOCTYPE html>
<!-- <html lang="en"> -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badword Risultato</title>
</head>
<body>
    <?php 
        $text = $_GET['user-text'];
        $badWords = $_GET['badwords'];
        $replace = '***';
        $censuredText = str_replace($badWords, $replace, $text);
    ?>
    
    <p>PARAGRAFO: </p>
    <?php echo $text; ?><br>
    <span>La Lunghezza del paragrafo è di <?php echo strlen($text); ?> caratteri.</span><br>
    <span>Questa parola è stata censurata: <?php echo $badWords; ?></span>
    <p>Paragrafo aggiornato: <?php echo $censuredText;?></p>
    <span>Lunghezza del paragrafo aggiornato: <?php echo strlen($censuredText); ?> caratteri</span>
</body>
</html>