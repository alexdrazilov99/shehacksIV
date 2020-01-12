<?php

include 'connect.php';

if($_POST['subcategories'] == []){
	echo 'empty';
}

foreach ($_POST['subcategories'] as $key => $value) {

	$query = 'SELECT * FROM charities WHERE subcategory = "';
	$query = $query . $value.'";';

	echo $query . '<br>';

	if ($result = mysqli_query($connection,$query)) {
	}else{
	        echo 'failed to get categories';
	}

	while($charity = mysqli_fetch_row($result)){
		$query = 'SELECT * FROM donates WHERE charity = "';
		$query = $query . $charity[0].'";';

		echo $query . '<br>';

		if ($result_2 = mysqli_query($connection,$query)) {
			while($donation = mysqli_fetch_row($result_2)){
				echo "donation: " . $donation[2];

				$query = 'SELECT * FROM companies WHERE name = "';
				$query = $query . $donation[0].'";';

				echo $query . '<br>';

					/*
					while($company = mysqli_fetch_row($result_2)){
						$query = 'SELECT * FROM company WHERE company = "';
						$query = $query . $company[0].'";';
					}*/

?>
