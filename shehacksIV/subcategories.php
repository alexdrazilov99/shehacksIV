<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
    <title>Home</title><style type="text/css">
#banner {
  z-index: -1;
}
img {
  width: 20vw;
  height: 20vw;
  padding:0;
}

input[type=checkbox] {
  display: none;
}

body{

        background-image: url('img/page-graphics/background.png');
        background-size: 1940px 1080px;

}

img:active {
  opacity:0.4;
  cursor: pointer;
}

input[type=checkbox]:checked + label > img {
  border: 5px solid rgb(113, 138, 144);
}

table {
    border-collapse: collapse;
    width: 100%;
}

td {
    width: 50%;
    height: 2em;
    border: 1px solid #ccc;
}

</style></head>
  <body>
	<?php

                include 'connect.php';
        ?>

   <div>
      <div style="width:100%;">
          <img style="width: 100%; height: 20%; padding:0;"
          src="img/page-graphics/banner.png"
          alt="banner"
          title="banner">
      </div>
    </div>
	<br>
    <h2 style="font-family: Open Sans; color: #818080; font-size: 40px; text-align: left; padding-left: 50px;">Which subcategories would you like to focus on?</h1>
	<br>
	<form action="test.php" method="post">
	<input type="checkbox" id="myCheckbox1" />
	<div class="container">
		<div class="row">

			<?php include 'getsubcategories.php'; ?>
	</div>
	</div>

	<div style="text-align: right; padding-right: 20px;"><input type="image" name="submit" src="img/page-graphics/submit.png" alt="Next Page" style="width: 15%; height: 15%;"></div>
	</form>
  </body>
</html>
