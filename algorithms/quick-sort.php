<?php

function do_nothing() {
    cave_man_debugger("I am doing nothing because that is what I do.");
}

function quick_sort($array, $q) {

    if (count($array) < 2) {
        do_nothing();
    } else {
        $lower_boundary = 0;

        for ($i = 0; $i <= $q - 1; $i++) {
            cave_man_debugger($array[$i]);

            if ($array[$i] <= $array[$q]) {
                // lower group
                $lower_boundary++;
            } else {
                // upper group
                
            }
        }
    }

}

$array = [9, 7, 5, 11, 12, 2, 14, 3, 10, 4, 6];

$count = count($array) - 1;

quick_sort($array, $count);

?>

<ul>
    <li>Count: <?php echo $count; ?></li>
</ul>

