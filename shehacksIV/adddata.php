<!DOCTYPE html>
<html>
<body>
<?php
include "connect.php";
?>
<?php

  $company = $_POST["company"];


    $query = "INSERT INTO data (company, data_point) VALUES ('".$company."', '".$_POST["19"]."')";
      $result = mysqli_query($connection,$query);
      if (!$result) {
        echo $query;
        echo '<br>1<br>';
        echo "Error";
          die("");
      }else{
        echo 'in';
      }

      $query = "INSERT INTO data (company, data_point) VALUES ('".$company."', '".$_POST["2"]."')";
      $result = mysqli_query($connection,$query);
      if (!$result) {
        echo $query;
        echo "Error";
          die("");
      }else{
        echo 'in';
      }

      $query = "INSERT INTO data (company, data_point) VALUES ('".$company."', '".$_POST["3"]."')";
      $result = mysqli_query($connection,$query);
      if (!$result) {
        echo $query;
        echo "Error";
          die("");
      }
      $query = "INSERT INTO data (company, data_point) VALUES ('".$company."', '".$_POST["4"]."')";
      $result = mysqli_query($connection,$query);
      if (!$result) {
        echo $query;
        echo "Error";
          die("");
      }
      $query = "INSERT INTO data (company, data_point) VALUES ('".$company."', '".$_POST["5"]."')";
      $result = mysqli_query($connection,$query);
      if (!$result) {
        echo $query;
        echo "Error";
          die("");
      }
      $query = "INSERT INTO data (company, data_point) VALUES ('".$company."', '".$_POST["6"]."')";
      $result = mysqli_query($connection,$query);
      if (!$result) {
        echo $query;
        echo "Error";
          die("");
      }
      $query = "INSERT INTO data (company, data_point) VALUES ('".$company."', '".$_POST["7"]."')";
      $result = mysqli_query($connection,$query);
      if (!$result) {
        echo $query;
        echo "Error";
          die("");
      }
      $query = "INSERT INTO data (company, data_point) VALUES ('".$company."', '".$_POST["8"]."')";
      $result = mysqli_query($connection,$query);
      if (!$result) {
        echo $query;
        echo "Error";
          die("");
      }
      $query = "INSERT INTO data (company, data_point) VALUES ('".$company."', '".$_POST["9"]."')";
      $result = mysqli_query($connection,$query);
      if (!$result) {
        echo $query;
        echo "Error";
          die("");
      }
      $query = "INSERT INTO data (company, data) VALUES ('".$company."', '".$_POST["10"]."')";
      $result = mysqli_query($connection,$query);
      if (!$result) {
        echo $query;
        echo "Error";
          die("");
      }
      $query = "INSERT INTO data (company, data) VALUES ('".$company."', '".$_POST["18"]."')";
      $result = mysqli_query($connection,$query);
      if (!$result) {
        echo $query;
        echo "Error";
          die("");
      }
      $query = "INSERT INTO data (company, data) VALUES ('".$company."', '".$_POST["19"]."')";
      $result = mysqli_query($connection,$query);
      if (!$result) {
        echo $query;
        echo "Error";
          die("");
      }
      $query = "INSERT INTO data (company, data) VALUES ('".$company."', '".$_POST["20"]."')";
      $result = mysqli_query($connection,$query);
      if (!$result) {
        echo $query;
        echo "Error";
          die("");
      }
      $query = "INSERT INTO data (company, data) VALUES ('".$company."', '".$_POST["21"]."')";
      $result = mysqli_query($connection,$query);
      if (!$result) {
        echo $query;
        echo "Error";
          die("");
      }
      $query = "INSERT INTO data (company, data) VALUES ('".$company."', '".$_POST["22"]."')";
      $result = mysqli_query($connection,$query);
      if (!$result) {
        echo $query;
        echo "Error";
          die("");
      }
      $query = "INSERT INTO data (company, data) VALUES ('".$company."', '".$_POST["23"]."')";
      $result = mysqli_query($connection,$query);
      if (!$result) {
        echo $query;
        echo "Error";
          die("");
      }
      $query = "INSERT INTO data (company, data) VALUES ('".$company."', '".$_POST["24"]."')";
      $result = mysqli_query($connection,$query);
      if (!$result) {
        echo $query;
        echo "Error";
          die("");
      }
      $query = "INSERT INTO data (company, data) VALUES ('".$company."', '".$_POST["25"]."')";
      $result = mysqli_query($connection,$query);
      if (!$result) {
        echo $query;
        echo "Error";
          die("");
      }
      $query = "INSERT INTO data (company, data) VALUES ('".$company."', '".$_POST["26"]."')";
      $result = mysqli_query($connection,$query);
      if (!$result) {
        echo $query;
        echo "Error";
          die("");
      }
      $query = "INSERT INTO data (company, data) VALUES ('".$company."', '".$_POST["27"]."')";
      $result = mysqli_query($connection,$query);
      if (!$result) {
        echo $query;
        echo "Error";
          die("");
      }

      $query = "INSERT INTO data (company, data) VALUES ('".$company."', '".$_POST["28"]."')";
      $result = mysqli_query($connection,$query);
      if (!$result) {
        echo $query;
        echo "Error";
          die("");
      }

      $query = "INSERT INTO data (company, data) VALUES ('".$company."', '".$_POST["29"]."')";
      $result = mysqli_query($connection,$query);
      if (!$result) {
        echo $query;
        echo "Error";
          die("");
      }

      $query = "INSERT INTO data (company, data) VALUES ('".$company."', '".$_POST["30"]."')";
      $result = mysqli_query($connection,$query);
      if (!$result) {
        echo $query;
        echo "Error";
          die("");
      }

      $query = "INSERT INTO data (company, data) VALUES ('".$company."', '".$_POST["31"]."')";
      $result = mysqli_query($connection,$query);
      if (!$result) {
        echo $query;
        echo "Error";
          die("");
      }





?>      
<br>
<a href="index.php">Go to home page</a>
</body>
</html>