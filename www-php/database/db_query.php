<?php

include_once('db_connect.php');
$query = "SELECT * FROM AT3raihan";
$result = $conn->prepare($query);
$result->execute();
$rows = $result->fetchAll(PDO::FETCH_ASSOC);

?>