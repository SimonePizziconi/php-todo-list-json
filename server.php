<?php

// Trasformo il json in una stringa
$string = file_get_contents('todo-list.json');


// Salvo la stringa in un array
$list = json_decode($string);


// Aggiungo item alla lista
if(isset($_POST['newTask'])){
    $addTask = $_POST['newTask'];
    $list[] = $addTask;
    file_put_contents('todo-list.json', json_encode($list));
    
}






// Interpreto il file come json
header('Content-Type: application/json');
echo json_encode($list);