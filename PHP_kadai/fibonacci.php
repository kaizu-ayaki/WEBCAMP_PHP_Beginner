<?php
$previous = 0;
$current = 1;
echo $previous . "\n" . $current . "\n";

while ($current <= 10000) {
    $next = $previous + $current;
    echo $next . "\n";
    $previous = $current;
    $current = $next;
}
?>