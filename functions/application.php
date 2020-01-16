<?php
// a place for functions used in more than one area of the website

function cave_man_debugger($message) {
    error_log(print_r($message, 1));
}

function root_http_path() {
    return 'http://' . $_SERVER['HTTP_HOST'] . '/algos';
}

?>