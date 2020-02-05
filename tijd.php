<?php

$length = count($argv);
for($i=$length; $i>=0; $i--){
    $time = substr($argv[$i], -1);
    $timespent = $argv[$i];
    switch ($time) {
        case "s":
            $S = (int)$timespent;
            break;
        case "m":
            $M = (int)$timespent * 60;
            break;
        case "u":
            $U = (int)$timespent * 3600;
            break;
        case "d":
            $D = (int)$timespent * 86400;
            break;
    }
}
$timetotal = $S + $M + $U + $D;
echo("$timetotal seconden");


?>