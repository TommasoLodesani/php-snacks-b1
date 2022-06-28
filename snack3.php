<!-- Creare un array di array. Ogni array figlio avrà come chiave una data in questo formato: DD-MM-YYYY es 01-01-2007 e come valore un array di post associati a quella data. Stampare ogni data con i relativi post. -->

<?php

$posts = [

    '10/01/2019' => [
        [
            'title' => 'Post 1',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 1'
        ],
        [
            'title' => 'Post 2',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 2'
        ],
    ],
    '10/02/2019' => [
        [
            'title' => 'Post 3',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 3'
        ]
    ],
    '15/05/2019' => [
        [
            'title' => 'Post 4',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 4'
        ],
        [
            'title' => 'Post 5',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 5'
        ],
        [
            'title' => 'Post 6',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 6'
        ]
    ],
];

  // $keys_posts = array_keys($posts);
    // // var_dump($keys_posts);
    // $n_posts = count($posts);

	// for ($i = 0; $i < $n_posts ; $i++) {
    //     $key = $keys_posts[$i];
    //     echo "{$keys_posts[$i]}";

    //     $posts_of_date = $posts[$key];
    //     $n_posts_of_date = count($posts_of_date);
    //     for ($_j=0; $_j < $n_posts_of_date ; $_j++) { 
    //         # code...
    //     }

	// } 



?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>

    <?php
    foreach($posts as $data => $post_of_date){ ?>
        <h1><?= $data?></h1><?php
        foreach($post_of_date as $post){ ?>
        <div>
            <h3><?= $post['title']?></h3> 
            <h4><?= $post['author']?></h4> 
            <h4><?= $post['text']?></h4> 

        </div><?php
            
        }
        
    } 
    ?>


</body>
