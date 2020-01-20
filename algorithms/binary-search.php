<p>Divide and Conquer</p>

<!--
var primes = [2, 3, 5, 7, 11, 13, 17, 19, 23, 29, 31, 37,
		41, 43, 47, 53, 59, 61, 67, 71, 73, 79, 83, 89, 97];
-->
<?php

$primes = [2, 3, 5, 7, 11, 13, 17, 19, 23, 29, 31, 37, 41, 43, 47, 53, 59, 61, 67, 71, 73, 79, 83, 89, 97];
$right = count($primes);
$left = 0;

$search = 23;
$sanity_check = 0;
divide_and_conquer($left, $right, $search);

function diplay_array($halfway, $left, $right) {
    global $primes;
    echo '<table class="table table-bordered"><tr>';
    for ($i = 0; $i < count($primes); $i++) {
        if ($i >= $left && $i <= $right) {
            echo '<td class="lightblue-highlighting">' . $primes[$i] . '</td>';
        } else {
            echo '<td>' . $primes[$i] . '</td>';
        }
    }
    echo '</tr><tr>';
    for ($i = 0; $i < count($primes); $i++) {
        if ($i >= $left && $i <= $right) {
            echo '<td class="lightblue-highlighting">' . $i . '</td>';
        } else {
            echo '<td>' . $i . '</td>';
        }
    }
    echo '</tr></table>';
}

function divide_and_conquer($left, $right, $search) {
    global $primes;
    global $sanity_check;


    if ($sanity_check > 30) {

        return;
    } else {
        $sanity_check++;
        $half_way_there = $left + round(($right - $left) / 2);

        echo '<div>Comparing ' . $primes[$half_way_there] . ' against ' . $search . '</div>';
        echo '<div>Comparing position ' . $half_way_there . '</div>';
        echo '<div>left: ' . $left . ' - right: ' . $right . '</div>';
        diplay_array($half_way_there, $left, $right);
        if ($primes[$half_way_there] == $search) {
            echo '<div>Found : ' . $search . ' at position :' . $half_way_there . '</div>';
            diplay_array($half_way_there, $left, $right);
        } elseif ($half_way_there < 1) {
            echo '<div>ran out of options</div>';
            diplay_array($half_way_there, $left, $right);
        } elseif($primes[$half_way_there] > $search) {
            echo '<div>' . $primes[$half_way_there] . ' is greater than ' . $search . '</div>';
            $right = $half_way_there;
            diplay_array($half_way_there, $left, $right);
            divide_and_conquer($left, $right, $search);
        } else {
            echo '<div>' . $primes[$half_way_there] . ' is less than ' . $search . '</div>';
            diplay_array($half_way_there, $half_way_there, $right);
            divide_and_conquer($half_way_there, $right , $search);
        }

    }

}

?>