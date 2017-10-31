<?php

error_reporting(E_ALL & ~E_NOTICE & ~E_WARNING);
$time_start = microtime(true);

// DO SOME STUFF!!

$time_end = microtime(true);
//dividing with 60 will give the execution time in minutes other wise seconds
$execution_time = ($time_end - $time_start); //  /60

//execution time of the script
echo '<b>Total Execution Time:</b> '.$execution_time.' seconds';

?>