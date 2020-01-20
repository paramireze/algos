<?php

$array = [9, 7, 5, 11, 12, 2, 14, 3, 10, 4, 6];

function do_nothing() {
    cave_man_debugger("I am doing nothing because that is what I do.");
}

function swap( $indexOne, $indexTwo) {
    global $array;

    $temp = $array[$indexOne];
    $array[$indexOne] = $array[$indexTwo];
    $array[$indexTwo] = $temp;
    return;
}

function is_group_boundary($j, $q) {
    return $j == $q;
}

function show_row( $r, $q, $i = null) {
    global $array;

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

function partition( $p, $r) {
    global $array;

    if (count($array) < 2) {
        do_nothing();
    } else {
        $q = $p;
        echo '<div class="text-right">Pivot = ' . $array[$r] . '</div>';
        echo '<table class="table table-bordered">';

        for ($i = $p; $i <= $r - 1; $i++) {
            if ($array[$i] > $array[$r]) {
                show_row($r, $q, null);
            } else {
                show_row($r, $q, $i);
                swap( $i, $q);
                $q++;
            }
        }

        show_row($r, $q , count($array) - 1);
        swap($r, $q);
        show_row( $r, $q + 1 , null);
        echo '</table>';

        return $q;
    }
}

function quickSort( $p, $r) {
    global $array;


    if ($p < $r) {
        $q = partition( $p, $r);

        quickSort($p, $q - 1);
        quickSort( $q + 1, $r);
    }
}

$count = count($array) - 1;
?>

<div><span class="green-highlighting"> &nbsp;&nbsp;&nbsp;&nbsp; </span> &nbsp;- left most position of upper group</div>
<div><span class="lightblue-highlighting"> &nbsp;&nbsp;&nbsp;&nbsp; </span> &nbsp;- item being swapped into the lower group</div>
<?php quickSort(0, $count); ?>



