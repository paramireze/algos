<?php

function do_nothing() {
    cave_man_debugger("I am doing nothing because that is what I do.");
}

function quick_sort($array, $start, $q) {

    if (count($array) < 2) {
        do_nothing();
    } else {

        for ($i = 0; $i <= count($array); $i++) {

        }
    }

}

$array = [9, 7, 5, 11, 12, 2, 14, 3, 10, 4, 6];

$q = count($array) - 1;

quick_sort($array, 0 , $q);

?>