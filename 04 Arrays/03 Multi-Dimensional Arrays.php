<?php
$people = array(
    'online'=>array('David', 'Amy'),
    'offline'=>array('John', 'Rob', 'Jack'),
    'away'=>array('Arthur', 'Daniel')
);
echo $people['online'][0]; // David
echo "\n";
echo $people['away'][1]; // Daniel
?>