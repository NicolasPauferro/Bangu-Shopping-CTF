<?php
$conn = require_once("database.php");

$search = "";
if(isset($_GET['q'])){
    $search = $_GET['q'];
}


$query = "SELECT * FROM events WHERE event_name ILIKE'%".$search."%'";
if ($search == "") {
    $query = "SELECT * FROM events LIMIT 3";
}

$result = pg_query($conn, $query);
$events = pg_fetch_all($result);
if ($events == NULL){
    echo "Nenhum evento encontrado";
}

foreach ($events as $event){
    echo "<div class='card'>";
    echo "<img src='{$event['event_image']}' alt='{$event['event_name']}' class='card-img'>";
    echo "<div class='card-content'>";
    echo "<div class='card-title'>{$event['event_name']}</div>";
    echo "<div class='card-info'>{$event['event_date']}</div>";
    echo "</div>";
    echo "</div>";
}
?>