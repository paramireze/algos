<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// global functions
function cave_man_debugger($message) {
    error_log(print_r($message, 1));
}

function root_http_path() {
    return 'http://' . $_SERVER['HTTP_HOST'] . '/algos';
}

?>