<?php

function display_array_insert($array, $j, $current_index = null) {

    for ($i = 0; $i < count($array); $i++) {

        $change_background_color = '';
        if ($i == $j) {
            $change_background_color =  ' lightblue-highlighting';
        } elseif (!empty($current_index) && $current_index == $i) {
            $change_background_color = ' green-highlighting ';
        }

        if ($i == 0) {
            echo '<span class="' . $change_background_color . '">' . $array[$i]  . '</span>';
        } else {
            echo ', ' . '<span class="' . $change_background_color . '">' . $array[$i] . '</span>';
        }
    }

    echo '<br />';
}

function go_backwards($current_index) {
    global $array;

    echo '<br />';

    for ($j = $current_index; $j >= 0; $j--) {

        if ($j <> $current_index) {
            if ($array[$current_index] < $array[$j]) {
                display_array_insert($array, $j, $current_index);
                swap($current_index, $j);
                $current_index = $j;
            } else {
                display_array_insert($array, $j);
                return;
            }
        }

    }

    echo '<br />';
}

$array = [2, 5, 2, 4, 3, 6, 9, 8, 22, 42, 1, 4, 0, 04, 20];

for($i = 0; $i < count($array); $i++) {
    // echo $array[$i];
    if ($i > 0) {
        go_backwards($i);
    }

    // if the current item is less than the item to the  left
}

display_array($array);



?>