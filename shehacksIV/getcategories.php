<?php

include 'connect.php';

$query = "SELECT * FROM categories";

if ($result = mysqli_query($connection,$query)) {
}else{
	echo 'failed to get categories';
}

echo '<div class="container">';
echo '<div class="row">';
//echo '<div class="col-12">';

while($row = mysqli_fetch_row($result)){

	echo '<div class="col">';
		echo '<input name="choice" id="';
		echo $row[0].'" value="" type="checkbox"/>';
		echo '<label for="';
		echo $row[0] .'">';
		echo "<img src='img/category/";
		echo $row[1]."' alt='".$row[0]."' title='".$row[0]."' style='width: 274px; height: 186px;'>";
		echo '</label>';
	echo '</div>';
}

	echo '</div>';
echo '</div>';

?>
