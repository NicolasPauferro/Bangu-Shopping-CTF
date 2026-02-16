<?php
$string = "host=db dbname=bangushopping user=ctfuser password=ctfpass";
$conn = pg_connect($string);

return $conn;
?>