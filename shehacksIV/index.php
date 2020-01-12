<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
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
      <div id="wrapper" style="width:100%; overflow:hidden; "><img style="width: 100%; height: 20%"
          src="img/page-graphics/banner.png"
          alt="banner"
          title="banner">
      </div>
    </div>
    <div style="text-align: center;"><img src="img/page-graphics/mainpageupdated.png" alt="Invest With Heart" title="main pic"
    id="banner" style="width: 70%; height: 40%;"></div>
    <br>
    <br>
    <p> </p>
    <br>
    <p><br>
    </p>
    <p><br>
    </p>
    <table style="width: 100%;" border="0">
      <tbody>
        <tr>
          <td style="width: 30.9333px;"><br>
          </td>
          <td style="width: 1286.07px;">
            <p style="font-family: Open Sans; color: #818080; font-size: 40px; text-align: left; line-height: 10px;">Let's
              begin investing!</p>
          </td>
        </tr>
        <tr>
          <td><br>
          </td>
          <td>
            <p style="font-family: Open Sans; color: #818080; font-size: 25px; text-align: left; line-height: 10px;">Which
              causes would you like to help through your investments?</p>
            <p style="font-family: Open Sans; color: #818080; font-size: 25px; text-align: left; line-height: 10px;"><br>
            </p>
            <br>
            <table style="width: 100%;" border="0">
              <tbody>
                <tr>
                  <td style="width: 277px;"><input name="choice" id="choose-1" value="1"
                      type="checkbox">
                    <label for="choose-1"> <img src="img/category/womensrights.png"
                        alt="Women's Rights"
                        title="Women's Rights"
                        style="width: 274px; height: 186px;">
                    </label><br>
                  </td>
                  <td style="width: 47.1333px;"><br>
                  </td>
                  <td style="width: 277px;"><input type="checkbox" name="choice" id="choose-2" value="2"/>
                      <label for="choose-2">
                        <img src="img/category/environment.png" alt="Environment"
                        title="Environment"
                        style="width: 274px; height: 186px;">
                      </label><br>
                  </td>
                    
                  <td style="width: 54.9667px;"><br>
                  </td>
                    
                    <td style="width: 277px;"><input type="checkbox" name="choice" id="choose-3" value="3"/>
                      <label for="choose-3">
                        <img src="img/category/animals.png" alt="Animals"
                        title="Animals"
                        style="width: 274px; height: 186px;">
                      </label><br>
                  </td>
                  <td style="width: 608.967px;"><br>
                  </td>
                </tr>
                <tr>
                  <td><br>
                  </td>
                  <td><br>
                  </td>
                  <td style="height: 47.2px;"><br>
                  </td>
                  <td><br>
                  </td>
                  <td><br>
                  </td>
                </tr>
                <tr>
                  <td style="width: 277px;"><input type="checkbox" name="choice" id="choose-4" value="4"/>
                      <label for="choose-4">
                        <img src="img/category/communitydevelopment.png" alt="Community Development"
                        title="Community Development"
                        style="width: 274px; height: 186px;">
                      </label><br>
                  </td>
                  <td><br>
                  </td>
                  <td style="width: 277px;"><input type="checkbox" name="choice" id="choose-5" value="5"/>
                      <label for="choose-5">
                        <img src="img/category/health.png" alt="Health"
                        title="Health"
                        style="width: 274px; height: 186px;">
                      </label><br>
                  </td>
                  <td><br>
                  </td>
                  <td style="width: 277px;"><input type="checkbox" name="choice" id="choose-6" value="6"/>
                      <label for="choose-6">
                        <img src="img/category/education.png" alt="Education"
                        title="Education"
                        style="width: 274px; height: 186px;">
                      </label><br>
                  </td>
                </tr>
              </tbody>
            </table>
          </td>
        </tr>
      </tbody>
    </table>
    <br>
       <div style="text-align: right;"><img src="img/page-graphics/next.png" alt="Next Page" title="Next Page"
    style="width: 10%; height: 10%;"></div>
  </body>
</html>
