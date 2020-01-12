<?php

include 'connect.php';

if($_POST['subcategories'] == []){
	echo 'empty';
}

foreach ($_POST['subcategories'] as $key => $value) {

	$query = 'SELECT * FROM charities WHERE subcategory = "';
	$query = $query . $value.'";';

	if ($result = mysqli_query($connection,$query)) {
	}else{
	        echo 'failed to get categories';
	}

	while($row = mysqli_fetch_row($result)){
		$query = 'SELECT * FROM donates WHERE charity = "';
		$query = $query . $row[0].'";';

		if ($result_2 = mysqli_query($connection,$query)) {
			while($row_2 = mysqli_fetch_row($result_2)){
				$query = 'SELECT * FROM company WHERE name = "';
				$query = $query . $row_2[0].'";';

				if ($result_3 = mysqli_query($connection,$query)) {
				}else{
					echo $row_3[0];
				}
			}
		}

	}
}

?>
