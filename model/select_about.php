<?php
$sjaak = $page_nr2 * NR_ITEMS_PER_PAGE -2;

$sql = "SELECT * FROM characters LIMIT " . $sjaak .", " . NR_ITEMS_PER_PAGE;
//echo $sql;

$result = $mysqli->query($sql);

$result = convertResultToArray($result);