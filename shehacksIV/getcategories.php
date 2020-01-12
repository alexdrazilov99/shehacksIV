<?php

include 'connect.php';

$query = "SELECT * FROM categories";

if ($result = mysqli_query($connection,$query)) {
}else{
	echo 'failed to get categories';
}

echo '<div class="container">';
echo '<div class="row">';

while($row = mysqli_fetch_row($result)){

	echo '<div class="col">';
		echo '<input name="categories[]" id="';
		echo $row[0].'" value="';
		echo $row[0]. '" type="checkbox"/>';
		echo '<label for="';
		echo $row[0] .'">';
		echo "<img src='img/category/";
		echo $row[1]."' alt='".$row[0]."' title='".$row[0]."' style='width: 324px; height: 236px;'>";
		echo '</label>';
	echo '</div>';
}

	echo '</div>';
echo '</div>';

?>
