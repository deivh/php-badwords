<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
                            <!-- Creare una variabile con un paragrafo di
                            testo.
                            Visualizzare a schermo il paragrafo con la
                            relative lunghezza e sostituire la
                            badword passata in GET con tre *. -->
</body>
<?php
    $badWord = $_GET['badword'];
    $sentence = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis hic harum, iure cumque praesentium nulla cum fugit ea, ut, nesciunt totam numquam mollitia molestiae tempora tenetur eum quod esse corrupti!";
    $replace = str_replace($badWord, "***", $sentence);
    echo "<br>";
    echo $replace;
?>
</html>