<?php

// Trasformo il json in una stringa
$string = file_get_contents('todo-list.json');



// Salvo la stringa in un array
$list = json_decode($string);






// Interpreto il file come json
header('Content-Type: application/json');
echo json_encode($list);