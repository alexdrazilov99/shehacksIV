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
    
    
   @import "https://fonts.googleapis.com/css?family=Open Sans:300,400,500,600,700";
   
   body {
    font-family: 'Open Sans', sans-serif;
    background: #fafafa;
}

p {
    font-family: 'Open Sans', sans-serif;
    font-size: 1.1em;
    font-weight: 300;
    line-height: 1.7em;
    color: #999;
    font-style: oblique;
}

a,
a:hover,
a:focus {
    color: inherit;
    text-decoration: none;
    transition: all 0.3s;
}

.navbar {
    background: #fff;
    border: none;
    border-radius: 0;
    margin-bottom: 40px;
    box-shadow: 1px 1px 3px rgba(0, 0, 0, 0.1);
}

.navbar-btn {
    box-shadow: none;
    outline: none !important;
    border: none;
}

.line {
    width: 100%;
    height: 1px;
    border-bottom: 1px dashed #ddd;
    margin: 40px 0;
}
        
.box {
    width: 90%;
    background-color: rgba(226, 244, 226, 1);
    padding: 10px;
    border-color: #ddd;
    border-style: ridge;
}

.column1 {
  float: left;
  width: 30%;
  padding: 10px;
}
        
.column2 {
    float: right;
    width: 68%;
    padding: 10px;
}
/* ---------------------------------------------------
    SIDEBAR STYLE
----------------------------------------------------- */


.text-sidebar {
  color: $text-sidebar;
}

.wrapper {
    display: flex;
    width: 95%;
    height: 100%;
    padding-top: 0px;
    align-items: stretch;
}

#sidebar {
    min-width: 250px;
    max-width: 250px;
    min-height: 500px;
    background: #C0D9AF;
    color: #606060;
    transition: all 0.3s;
}

#sidebar.active {
    margin-left: -250px;
}

#sidebar .sidebar-header {
    padding: 20px;
    background: #C0D9AF;
}

#sidebar ul.components {
    padding: 20px 0;
    border-bottom: 1px solid $lila-line;
}

#sidebar ul p {
    color: $text-sidebar;
    padding: 10px;
}

#sidebar ul li a {
    padding: 10px;
    font-size: 1.1em;
    display: block;
}

#sidebar ul li a:hover {
    color: $lila;
    background: $text-sidebar-hover;
}

#sidebar ul li.active>a, a[aria-expanded="true"] {
    color: $text-sidebar;
    background: $lila-60;
}

a[data-toggle="collapse"] {
    position: relative;
}

.dropdown-toggle::after {
    display: block;
    position: absolute;
    top: 50%;
    right: 20px;
    transform: translateY(-50%);
}

ul ul a {
    font-size: 0.9em !important;
    padding-left: 30px !important;
    background: $lila-60;
}

ul.CTAs {
    padding: 20px;
}

ul.CTAs a {
    text-align: center;
    font-size: 0.9em !important;
    display: block;
    border-radius: 5px;
    margin-bottom: 5px;
}

a.download {
    background: $text-sidebar;
    color: $lila;
}

a.article,
a.article:hover {
    background: $lila-60 !important;
    color: $text-sidebar !important;
}

/* ---------------------------------------------------
    CONTENT STYLE
----------------------------------------------------- */

#content {
    width: 100%;
    padding: 20px;
    min-height: 100vh;
    transition: all 0.3s;
}

/* ---------------------------------------------------
    MEDIAQUERIES
----------------------------------------------------- */

@media (max-width: 768px) {
    #sidebar {
        margin-left: -250px;
    }
    #sidebar.active {
        margin-left: 0;
    }
    #sidebarCollapse span {
        display: none;
    }
}
</style></head>
  <body>

	
    <div>
      <div style="width:100%;">
	<a href="index.php">
	  <img style="width: 100%; height: 20%; padding:0;"
          src="img/page-graphics/banner.png"
          alt="banner"
          title="banner">
	</a>
      </div>
    </div>

	<br>

      <!DOCTYPE html>
<html>
<!-- https://bootstrapious.com/p/bootstrap-sidebar -->
<body>
    <div class="column1">
    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
            </div>

            <ul class="list-unstyled components">
                <p>Your Filters!</p>
                <li class="active">
                    <a href="#EnviroSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Environment</a>
                    <ul class="collapse list-unstyled" id="EnviroSubmenu">
                        <li>
                            <a href="#">Ocean Conservation</a>
                        </li>
                        <li>
                            <a href="#">Environmental Pollution</a>
                        </li>
                        <li>
                            <a href="#">Parks and Nature Centres</a>
                        </li>
                    </ul>
                </li>
                
                <li class="active">
                    <a href="#WomenSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Women's Rights</a>
                    <ul class="collapse list-unstyled" id="WomenSubmenu">
                        <li>
                            <a href="#">Women's Health</a>
                        </li>
                        <li>
                            <a href="#">Women's Education</a>
                        </li>
                        <li>
                            <a href="#">Violence Prevention</a>
                        </li>
                    </ul>
                </li>
                
                <li class="active">
                    <a href="#CommSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Community Development</a>
                    <ul class="collapse list-unstyled" id="CommSubmenu">
                        <li>
                            <a href="#">Poverty</a>
                        </li>
                        <li>
                            <a href="#">Housing</a>
                        </li>
                        <li>
                            <a href="#">After School Programs</a>
                        </li>
                    </ul>
                </li>
                
                <li class="active">
                    <a href="#AnimalSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Animals</a>
                    <ul class="collapse list-unstyled" id="AnimalSubmenu">
                        <li>
                            <a href="#">Animal Health</a>
                        </li>
                        <li>
                            <a href="#">Wildlife Habitat</a>
                        </li>
                        <li>
                            <a href="#">Animal Cruelty</a>
                        </li>
                    </ul>
                </li>
                
                <li class="active">
                    <a href="#HealthSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Health</a>
                    <ul class="collapse list-unstyled" id="HealthSubmenu">
                        <li>
                            <a href="#">Mental Health</a>
                        </li>
                        <li>
                            <a href="#">Physical Health</a>
                        </li>
                        <li>
                            <a href="#">Medical Research</a>
                        </li>
                    </ul>
                </li>
                
                <li class="active">
                    <a href="#EduSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Education</a>
                    <ul class="collapse list-unstyled" id="EduSubmenu">
                        <li>
                            <a href="#">Technology</a>
                        </li>
                        <li>
                            <a href="#">School Supplies</a>
                        </li>
                        <li>
                            <a href="#">School Development</a>
                        </li>
                    </ul>
                </li>
                
            </ul>
        </nav>
    </div>
    </div>
                
    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });
    </script>
    
    <!-----MAIN PAGE------------------------------------->
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


		while($charity = mysqli_fetch_row($result)){
                $query = 'SELECT * FROM donates WHERE charity = "';
                $query = $query . $charity[0].'";';

                if ($result_2 = mysqli_query($connection,$query)) {
                        while($donation = mysqli_fetch_row($result_2)){
                                $query = 'SELECT * FROM companies WHERE name = "';
                                $query = $query . $donation[0].'";';


		if ($result_3 = mysqli_query($connection,$query)){		
		while($company = mysqli_fetch_row($result_3)){

$query = 'SELECT * FROM data WHERE company = "';
$query = $query . $company[0] . '"';
	if ($result_3 = mysqli_query($connection,$query)) {
                $data_points = [];
                while($stock = mysqli_fetch_row($result_3)){
                        array_push($data_points, $stock[2]);
                }
        }
echo '<div class="column2"> <div class="box"> <h2 style="color: #606060;">'. $company[0] . '<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script> <script src=https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.bundle.js></script> <canvas id="';
echo $company[0] . '" width="200" height="78"></canvas><script>';


echo "DataResult = [";

foreach ($data_points as $value) {
echo $value . ',';

}
echo "], LabelResult = ['18 Dec 2019', '19 Dec 2019', '20 Dec 2019', '23 Dec 2019', '24 Dec 2019', '26 Dec 2019', '27 Dec 2019', '30 Dec 2019', '31 Dec 2019', '2 Jan 2020', '3 Jan 2020', '6 Jan 2020', '7 Jan 2020', '8 Jan 2020', '9 Jan 2020', '10 Jan 2020'];";
echo "var ctx = document.getElementById('";

echo $company[0] . "').getContext('2d'); var myChart = new Chart(ctx, { type: 'line', data: {labels: LabelResult, datasets: [{ label: '$ CAD', data: DataResult, backgroundColor: [";
echo "'rgba(2, 100,64, 0.2)'], borderColor: ['rgba(255, 255, 255, 1)',],borderWidth: 1 }] }, options: { scales: { yAxes: [{ ticks: { beginAtZero: false } }] } } }); </script> ";
echo '<br><img src="logo/company/';
echo $company[1] . '" style="width: 140px; height: 120px; float: left;"><img src="logo/charity/';
echo $charity[3] . '" style="width: 140px; height: 120px; float: right;"<h4 style="color: #606060;">Stock Price:';
echo $company[2] . ' </h4>';
echo '<h4 style="color: #606060;">Amount of Money Donated:';
echo $donation[2] . ' </h4> </div> </div>';
	}
}}}}}

?>

</body>

</html>

  </body>
</html>
