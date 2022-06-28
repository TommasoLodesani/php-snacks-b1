<!-- Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta -->

<?php



$my_array = [];

while (count($my_array)< 15){
    $number = rand(1, 15);

    if(!in_array($number,$my_array )){
        $my_array[] = $number;

    }
};


var_dump($my_array);



?>