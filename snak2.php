<!-- Snack 2
Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->
<?php


// Controllo lunghezza stringa
// $name_length = strlen($name);
// if($name_length > 3){
//     echo "ACCESSO RIUSCITO";

// } else{
//     echo "ACCESSO NEGATO";

// }

// Controllo chiocciola e punto
// $mail = $_GET['mail'];
// $inclued_chiocciola = strpos($mail, '@');
// $inclued_punto = strpos($mail, '.');

// if ($inclued_chiocciola !== false && $inclued_punto !== false) {
//     echo "ACCESSO RIUSCITO";
// } else {
//     echo "ACCESSO negato";
// };

// Controllo numero

$age = $_GET['age'];
var_dump( is_numeric($age));

?>