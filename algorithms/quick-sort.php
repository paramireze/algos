<?php

function do_nothing() {
    cave_man_debugger("I am doing nothing because that is what I do.");
}

function swap($array, $indexOne, $indexTwo) {
    $temp = $array[$indexOne];
    $array[$indexOne] = $array[$indexTwo];
    $array[$indexTwo] = $temp;
    return $array;
}

function is_group_boundary($j, $q) {
    return $j == $q;
}

function show_row($array, $r, $q, $i = null) {
    echo '<tr>';
    for ($j = 0; $j <= count($array) - 1; $j++) {

        if (is_group_boundary($j, $q)) {
            echo '<td class="green-highlighting">' . $array[$j] . '</td>';
        } else {
            if (!empty($i) && $i == $j) {
                echo '<td class="lightblue-highlighting">' . $array[$j] . '</td>';
            } else {
                echo '<td>' . $array[$j] . '</td>';
            }
        }
    }
    echo '</tr>';
}

function quick_sort($array, $p, $r) {

    if (count($array) < 2) {
        do_nothing();
    } else {
        $q = 0;
        echo '<div class="text-right">Pivot = ' . $array[$r] . '</div>';
        echo '<table class="table table-bordered">';
        for ($i = $p; $i <= $r - 1; $i++) {


            if ($array[$i] > $array[$r]) {

                // lower group
                // swap
                // increment
                show_row($array, $r, $q, null);

            } else {
                show_row($array, $r, $q, $i);
                $array = swap($array, $i, $q);
                $q++;

            }
        }


        show_row($array, $r, $q , count($array) - 1);
        $array = swap($array, $r, $q);
        show_row($array, $r, $q + 1 , null);
        echo '</table>';

    }
}

$array = [9, 7, 5, 11, 12, 2, 14, 3, 10, 4, 6];

$count = count($array) - 1;

?>

<div><span class="green-highlighting"> &nbsp;&nbsp;&nbsp;&nbsp; </span> &nbsp;- left most position of upper group</div>
<div><span class="lightblue-highlighting"> &nbsp;&nbsp;&nbsp;&nbsp; </span> &nbsp;- item being swapped into the lower group</div>
<?php
quick_sort($array, 0, $count);

?>



