<?php

$students = [
    "Emmanuel"  => 42,
    "Thierry"   => 51,
    "Pascal"    => 45,
    "Eric"      => 48,
    "Nicolas"   => 19
];
$nbrestudents=count($students);
$sommeage=array_sum($students);

foreach ($students as $name=>$age) {
    echo $name." ".$age . '<br />';
}
echo $sommeage/$nbrestudents;

?>