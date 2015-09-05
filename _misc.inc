<?php

function misc_version_compare($v1, $v2)
{
    $a1 = explode('.', $v1);
    $n1 = count($a1);

    $a2 = explode('.', $v2);
    $n2 = count($a2);

    $n = min($n1, $n2);

    for($i = 0; $i < $n; $i++) {
        if((int) $a1[$i] < (int) $a2[$i])
            return -1;
        if((int) $a1[$i] > (int) $a2[$i])
            return +1;
    }

    return ($n1 - $n2);
}

function misc_version_compare_rev($v1, $v2)
{
    return misc_version_compare($v2, $v1);
}

?>
