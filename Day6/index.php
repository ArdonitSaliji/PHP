<?php
    include('header.php');
?> 
<?php

    $capitals = ['North Macedonia' => 'Skopje', 'Albania' => 'Tirana', 'Kosova' => 'Prishtina'];

    asort($capitals);

    foreach($capitals as $country => $capital) {
        echo 'The capital of '.$country.' is '.$capital.'<br>';
    };

    $my_filename = 'myFile.txt';
    $my_file = fopen($my_filename, 'r');
    $my_size = filesize($my_filename);
    $my_filedata = fread($my_file, $my_size);

    echo $my_filedata;
?> 
