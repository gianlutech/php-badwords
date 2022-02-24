<?php 

// frase da modificare

$string = "Con le nostre ripetute accuse di tradimento, la flagellammo fino a farla piangere.
So bene che ti tediavo con le mie continue e ripetute lamentele.
Solo dopo le mie ripetute proteste hanno stornato dal conto quella spesa che non avevo fatto.";



// frase con parola modicifata con (***)

$new_string = str_replace('ripetute','(***)',$string);




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
    <h2>Questa è la frase modificata</h2>
    <p><?php echo $new_string ?></p>

</body>
</html>