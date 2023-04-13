<?php

session_start();

if(!isset($_SESSION['arrayDeTasks'])){
    $_SESSION['arrayDeTasks'] = array();
}

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    echo $_POST['name'];
    array_push($_SESSION['arrayDeTasks'], $_POST['name']);
    echo $_POST['details'];
    array_push($_SESSION['arrayDeTasks'], $_POST['details']);
}



print_r($_SESSION['arrayDeTasks']);
