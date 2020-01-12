<!DOCTYPE html>
<html>
  <head>
      <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
    <title>Home</title>
    <style type="text/css">
#banner {
  z-index: -1;
}
img {
  width: 20vw;
  height: 20vw;
  padding: 2vw;
}

body{

	background-image: url('img/page-graphics/background.png');
	background-size: 1940px 1080px;

}

input[type=checkbox] {
  display: none;
}

img:active {
  opacity:0.4;
  cursor: pointer;
}

input[type=checkbox]:checked + label > img {
  border: 10px solid rgb(113, 138, 144);
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

            <h1 style="font-family: Open Sans; color: #818080; font-size: 40px; text-align: left; padding-left: 50px;line-height: 10px;">Let's
              begin investing!</h1>
		<br>
            <h2 style="font-family: Open Sans; color: #818080; font-size: 25px; text-align: left; line-height: 10px; padding-left: 50px;">Which
              causes would you like to help through your investments?</h2>
            <p style="font-family: Open Sans; color: #818080; font-size: 25px; text-align: left; line-height: 10px;"><br>
            </p>

	<form action="subcategories.php" method="post">
	<input type="checkbox" id="myCheckbox1" />
        <?php include 'getcategories.php'; ?>
	</input>
	<div style="text-align: right; padding-right: 20px;"><input type="image" name="submit" src="img/page-graphics/next.png" alt="Next Page" style="width: 15%; height: 15%;"></div>
	</form>

  </body>
</html>
