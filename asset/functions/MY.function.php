<?php
function tahun($a)
{
    if ($a) {
        echo "<option selected>$a</option>";
    } else {
        $year = date('Y');
        $min_year = date('Y', strtotime('-20 year'));
        for ($year; $year >= $min_year; $year--) {
            echo "<option value='$year'>$year</option>";
        }
    }
}

function bulan($a)
{
    if ($a) {
        echo "<option selected>". date('F', strtotime("$a/01/0000")) ."</option>" ;
    } else {

    }
}