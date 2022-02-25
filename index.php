<?php 

// frase da modificare

$string = "Con le nostre ripetute accuse di tradimento, la flagellammo fino a farla piangere.
So bene che ti tediavo con le mie continue e ripetute lamentele.
Solo dopo le mie ripetute proteste hanno stornato dal conto quella spesa che non avevo fatto.";

$badword = $_GET['word'];


// frase con parola modicifata con (***)

$change = str_replace($badword, '***', $string);






?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Questa è la frase da modificare</h2>
    <p><?php echo $string ?></p>
    <p>La frase è lunga <?= strlen ($string) ?> caratteri!</p>
    <hr />
    <h2>Questa è la frase modificata</h2>
    <p><?php echo $change ?></p> 
    <p>La frase è lunga <?= strlen ($change) ?> caratteri!</p>

</body>
</html>