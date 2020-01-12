<?php

include 'connect.php';

$query = "SELECT * FROM categories";

if ($result = $connection->query($queryx)) {
  echo "Returned rows are: " . $result -> num_rows;
  // Free result set
  $result -> free_result();
}
?>
