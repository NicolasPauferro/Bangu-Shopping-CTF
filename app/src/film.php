<?php
$conn2 = require __DIR__ . "/database.php";

$query = "SELECT * FROM films LIMIT 4";
$films = pg_query($conn2, $query);
$result = pg_fetch_all($films);

foreach ($result as $film){
    echo "<div class='card movie-card'>";
    echo "<img src='{$film['film_image']}' alt='{$film['film_name']}' class='movie-img'>";
    echo "<div class='card-content'>";
    echo "<div class='movie-title'>{$film['film_name']}</div>";
    echo "</div>";
    echo "</div>";
}

?>