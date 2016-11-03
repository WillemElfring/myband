<?php
$sql = "SELECT * FROM newsarticles";
$articles = $mysqli->query($sql);


$total_number_articles = $articles->num_rows;
//echo $total_number_articles;

?>