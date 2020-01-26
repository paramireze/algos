<?php
/*
 * SELECT SORT LOGIC
 * AUTHOR: paul ramirez
 * DESCRIPTION: step through each item of the array, starting at position 0, and swap with any item with a lower value.
 * RESULT: the array will eventually be sorted lowest -> highest
 * */


function run_the_array($array) {
    $current_index = 0;

    echo '<div><span class="green-highlighting">&nbsp;&nbsp;&nbsp;</span> Current Index</div>
    <div><span class="lightblue-highlighting">&nbsp;&nbsp;&nbsp;</span> Item being compared against</div><hr />
    <div>array[';

    for($i = 0; $i < count($array); $i++) {
        echo $array[$i];
        if ($i < count($array) - 1) {
            echo ', ';
        }
    }

    echo ']</div><hr />';
    echo '<table class="table-bordered">';

    for($i = 0; $i < count($array); $i++) {
        $current_index = run_the_loop($array, $current_index);
    }
    echo '</table><hr />';
}

function display_the_array($current_index, $i) {
    global $array;

    foreach($array as $index => $value) {
        if ($index == $current_index) {
            echo '<td class="green-highlighting">' . $value . '</td>';
        } elseif ($index == $i) {
            echo '<td class="lightblue-highlighting">' . $value . '</td>';
        } else {
            echo '<td>' . $value . '</td>';
        }
    }
}

function run_the_loop($array, $current_index) {
    global $array;

    $lowest_value_index = $current_index;
    for($i = $current_index; $i < count($array); $i++) {
        echo '<tr>';

        if ($array[$lowest_value_index] > $array[$i]) {
            swap($lowest_value_index, $i);
        }

        display_the_array($current_index, $i);
        echo '</tr>';
    }

    return $current_index + 1;
}
/*
 * Sort the following arrays
 * */
?>
<div class="container">
    <div class="row">
        <div class="col-sm"><?php
            $array = [18, 6, 66, 44, 9, 22, 14];
            run_the_array($array); ?>
        </div>
        <div class="col-sm"><?php
            $array = [4, 28, 42, 2, 42, 8 , 82, 0, 2, 9, -2];
            run_the_array($array); ?>
        </div>
        <div class="col-sm"><?php
            $array = [7, 2, 4, 3, 10, 83, 3, 48, 2, 21, 12, 33];
            run_the_array($array); ?>
        </div>
    </div>
</div>
<?php



?>

