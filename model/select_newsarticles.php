<?php
$offset = $page_nr * NR_ITEMS_PER_PAGE -2;

$sql = "SELECT * FROM newsarticles LIMIT " . $offset .", " . NR_ITEMS_PER_PAGE;
//echo $sql;

$result = $mysqli->query($sql);

$result = convertResultToArray($result);
