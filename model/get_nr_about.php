<?php
$sql = "SELECT * FROM characters";
$characters = $mysqli->query($sql);


$total_number_characters = $characters->num_rows;
//echo $total_number_articles;

?>