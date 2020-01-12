<?php

include 'connect.php';

if($_POST['categories'] == []){

}

foreach ($_POST['categories'] as $key => $value) {

	$query = 'SELECT * FROM subcategories WHERE category = "';
	$query = $query . $value.'";';

	echo '<div class="col-4"> <div class="row"> <h2 style="font-family: Open Sans; color: #818080; text-align: left;">'.$value.'</h2>';

	if ($result = mysqli_query($connection,$query)) {
	}else{
	        echo 'failed to get categories';
	}

	while($row = mysqli_fetch_row($result)){

		echo '<input name="subcategories[]" id="' .$row[0].'" value="';
		echo $row[0].'" type="checkbox"><label for="';
		echo $row[0].'">';
		echo '<img src="img/subcategory/';
		echo $row[2]. '" alt=';
		echo $row[0] . '" title="';
		echo $row[0] . '" style="height:125%;">';
		echo '</label>';
	}

	echo '</div></div>';
}

?>
