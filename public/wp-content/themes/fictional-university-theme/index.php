<?php 
    $names = array('N1', 'N2', 'N3', 'N4');

    $count = 0;
    while ( $count < count($names) ) {
        echo "<li>Hi, I'm $names[$count] </li>";
        $count++;
    }
?>