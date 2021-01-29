<?php
    $file = "counter.txt";
    $counter = strval(file_get_contents($file));
    file_put_contents($file, ($counter+1));
    echo "You are visitor number : ".$counter;
?>