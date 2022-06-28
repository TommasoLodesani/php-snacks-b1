<!-- Snack 2
Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->
<?php

$name = isset($_GET['name']) ? $_GET['name'] : '' ;
$mail = $_GET['mail'] ?? '' ;
$age = $_GET['age'] ??  '';

// Controllo lunghezza stringa
$name_length = strlen($name);


// Controllo chiocciola e punto
$inclued_chiocciola = strpos($mail, '@');
$inclued_punto = strpos($mail, '.');


// Controllo numero
$age_is_int = is_numeric($age);

var_dump( is_numeric($age));

if($name_length > 3 && $inclued_chiocciola && $inclued_punto !== false && $age_is_int !== false){

    echo "ACCESSO CONSENTITO";
} else{
    echo "ACCESSO NEGATO";

}

?>