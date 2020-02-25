<?php

$hit_count = @file_get_contents('count.txt'); // read the hit count from file
echo $hit_count; //  display the hit count
$hit_count++; // increment the hit count by 1
@file_put_contents('count.txt', $hit_count); // store the new hit count

?>