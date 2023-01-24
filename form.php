<?php
//Variabile $sentence presa dal textarea attraverso l'attributo name
$sentence = $_GET["sentence"];
//Variabile $badword presa dall'imput attraverso l'attributo name
$badword = $_GET["badword"];
//stampa $sentence su schermo
echo ("Frase inserita dall'utente: " . "<br>" . $sentence . "<br>");
//stampa la lunghezza della frase
echo ("Lunghezza della frase: " . strlen($sentence));
?>
<br>
<br>
<br>
<?php
//stampa $baadword su schermo
echo ("Parola da sostituire: " . $badword . "<br>");
?>
<br>
<?php
$new_sentence = str_replace($badword, "***", $sentence);
echo ("Nuova stringa: " . $new_sentence);
echo ("&nbsp; Lunghezza della frase: " . strlen($new_sentence));
