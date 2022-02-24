<?php 

$bad_word = $_GET['word'];

$exercise = 'PHP-Badwords';
$text = 'Diotima fa notare a Socrate che essere non-bello non significa necessariamente essere brutto. In termini logici, fra "bello" e "brutto" c\'è una relazione di contrarietà e non di contraddittorietà. Mentre non si può essere contemporaneamente belli e non belli senza violare il principio di non contraddizione è invece possibile essere allo stesso tempo non-belli e non-brutti. Fra l\'estremo del bello e quello del brutto c\'è una gradazione: possiamo dunque dire che chi è brutto non è bello e chi è bello non è brutto, ma l\'essere non-bello di un termine non implica affatto che esso sia brutto: potrebbe infatti trovarsi, nella scala della piacevolezza estetica, a un grado intermedio, diverso da quello, estremo, della bruttezza.';
$new_text = str_replace($bad_word, '***', $text);
/* 
|Creare una variabile con un paragrafo di testo a vostra scelta.
|Stampare a schermo il paragrafo e la sua lunghezza.
|Una parola da censurare viene passata dall'utente tramite parametro GET.
|Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare. 
*/

?>
<!DOCTYPE html>
<html lang="it">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title><?php echo $exercise ?></title>
</head>
<body>
   <form action="index.php" method="GET">
   <input type="text" placeholder="Scrivi una parola da censurare" name="word">
   <button type="submit">Invia</button>   
   </form>
   <p><?php echo $text ?></p>
   <p>Lunghezza: <?php echo strlen($text) ?></p>
   <p><?php echo $new_text ?></p>
   <p>Lunghezza: <?php echo strlen($new_text) ?></p>
</body>
</html>