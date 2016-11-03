<?php
//$offset = $page_nr * NR_ITEMS_PER_PAGE -2;

$sql = "SELECT * FROM `movies`";
//echo $sql;

$result = $mysqli->query($sql);
$result = convertResultToArray($result);
