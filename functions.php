<?php

function view($fileName, $data = []) {
    $output = '';
    ob_start();
    extract($data);
    include __DIR__ . "/{$fileName}.php";
    $output = ob_get_contents();
    ob_clean(); 
    return $output;
}

function renderView($fileName, $data = [])
{
    echo view($fileName, $data);
}
function redirect($to) {
    header("Location: $to");
}