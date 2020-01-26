<?php

$primes = [2, 3, 5, 7, 11, 13, 17, 19, 23, 29, 31, 37, 41, 43, 47, 53, 59, 61, 67, 71, 73, 79, 83, 89, 97];
$right = count($primes);
$left = 0;

$search = 3;
echo '<p>Search array for <span class="badge badge-primary">' . $search . '</span></p>';
divide_and_conquer($left, $right, $search);

function display_row($left, $right, $middle, $display_value) {
    global $primes;
    global $search;

    for ($i = 0; $i < count($primes); $i++) {
        $backgroundColor = "";
        if ($i == $middle) {
            $backgroundColor = "bg-primary";
        } elseif ($i >= $left && $i <= $right) {
            $backgroundColor = "alert alert-primary";
        }

        $value = $display_value ? $primes[$i] : $i;
        echo '<td class="' . $backgroundColor . '">' . $value . '</td>';
    }
}

function diplay_array($left, $right, $middle) {
    echo '<table class="table table-bordered"><tr>';
    display_row($left, $right, $middle, true);
    echo '</tr><tr>';
    display_row($left, $right, $middle, false);
    echo '</tr></table>';
}

function divide_and_conquer($left, $right, $search) {
    global $primes;

    $middle = $left + round(($right - $left) / 2);
    $array_value = $primes[$middle];

    echo '<hr /><div>Comparing ' . $array_value . ' against ' . $search . ' at position ' . $middle . '</div>';

    diplay_array($left, $right, $middle);

    if ($array_value == $search) {
        echo '<h2>Ding Ding Ding, Winner!</h2>';
        return;
    } elseif( $middle < 1 ) {
        echo '<div>' . $search . ' does not exist in array</div>';
        diplay_array($left, $right, $middle);
        return;
    } elseif( $array_value > $search ) {
        echo '<div>' . $array_value . ' is greater than ' . $search . '</div><hr />';
        $right = $middle;
    } else {
        echo '<div>' . $array_value . ' is less than ' . $search . '</div>';
        $left = $middle;
    }

    divide_and_conquer($left, $right , $search);
}

?>