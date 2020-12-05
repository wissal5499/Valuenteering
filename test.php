
<!DOCTYPE html>
<?php

/*
    $city = $_POST["cities"];
    $domain  = $_POST["domain"];
*/
?>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="styles.css">
  <link rel="icon" href="favicon .ico">
  <style>
    .menu {
      background-color: #333;
      overflow: hidden;
      position: absolute;
      top: 0px;
      left: 0px;
      width: 100%;
    }

    /* Style the links inside the navigation bar */
    .menu a {
      float: left;
      color: #f2f2f2;
      text-align: center;
      padding: 14px 16px;
      text-decoration: none;
      font-size: 17px;
    }

    /* Change the color of links on hover */
    .menu a:hover {
      background-color: #ddd;
      color: black;
    }

    /* Add a color to the active/current link */
    .menu a.active {
      background-color: #4CAF50;
      color: white;
    }


    .box {
      margin: 20px auto;
      margin-top: 150px;
      width: 100%;
      height: 40px;
      text-align: center;
    }

    .box .container-1 input {
      width: 100%;
    }

    .box .container-1 select {
      min-height: 35px;
      font-size: 25px;
      width: 150px;
    }

    .bottom-cloud {
      position: absolute;
      left: 250px;
      bottom: auto;
    }

    .top-cloud {
      position: absolute;
      right: 300px;
      top: 80px;
    }

    .btn {
      background: #77F63D;
      background-image: -webkit-linear-gradient(top, #77F63D, #1E62D0);
      background-image: -moz-linear-gradient(top, #77F63D, #1E62D0);
      background-image: -ms-linear-gradient(top, #77F63D, #1E62D0);
      background-image: -o-linear-gradient(top, #77F63D, #1E62D0);
      background-image: -webkit-gradient(to bottom, #77F63D, #1E62D0);
      -webkit-border-radius: 8px;
      -moz-border-radius: 8px;
      border-radius: 8px;
      height: 0;
      line-height: 0;
      color: #FFFFFF;
      font-family: 'Montserrat', sans-serif;
      width: 163px;
      font-size: 20px;
      font-weight: 200;
      padding: 20px;
      -webkit-box-shadow: 1px 1px 20px 0 #000000;
      -moz-box-shadow: 1px 1px 20px 0 #000000;
      box-shadow: 1px 1px 20px 0 #000000;
      text-shadow: 1px 1px 20px #000000;
      border: solid #337FED 1px;
      text-decoration: none;
      display: inline-block;
      cursor: pointer;
      text-align: center;
    }

    .btn:hover {
      border: solid #000000 1px;
      background: #24D01E;
      background-image: -webkit-linear-gradient(top, #24D01E, #3D94F6);
      background-image: -moz-linear-gradient(top, #24D01E, #3D94F6);
      background-image: -ms-linear-gradient(top, #24D01E, #3D94F6);
      background-image: -o-linear-gradient(top, #24D01E, #3D94F6);
      background-image: -webkit-gradient(to bottom, #24D01E, #3D94F6);
      -webkit-border-radius: 20px;
      -moz-border-radius: 20px;
      border-radius: 20px;
      text-decoration: none;
    }

    }
  </style>
</head>


<body>

  <div class="menu">
    <a class="active" href="questions.php">Home</a>
    <a href="#news">Add Volunteering Place</a>
    <a href="#contact">Search For Volunteeering Place</a>
    <a href="#about">About</a>
  </div>
  <div class="top-container">
    <img class="top-cloud" src="images/cloud.png" alt="cloud-image">

    <form onclick="index.html" action="index.html" method="POST">

      <div class="box">
        <div class="container-1">

          <label for="cause" style="font-size:25px;">
            <p>Volunteer Because:</p>
          </label>

          <select name="cause" id="cause">
            <option value="choose"> Choose</option>
            <option value="Nazareth"> Give Back To Society</option>
            <option value="Nof HaGalil"> Meet New People</option>
            <option value="Reine">Have Free Time</option>
            <option value="Reine">Have To</option>

          </select>
          <br><br>

          <?php //echo $city;
                      //echo $domain;?>

          <!--
                <label for="cities" style="font-size:25px;">Where:</label>
                <select name="Sphere" id="sphere">
                    <option value="Health"> Health</option>
                    <option value="social services"> Social services </option>
                    <option value="Studies"> Studies</option>
                </select>
                <br><br><br>
                -->

          <label for="type_org" style="font-size:25px;">
            <p>Prefred Type Of Organization:</p>
          </label>
          <select name="type_org" id="type_org">
            <option value="choose"> Choose</option>
            <option value="Health"> Nonprofit</option>
            <option value="social services"> For-profit </option>
            <option value="Studies"> Non Governmental</option>
          </select>
          <br><br><br>

          <label for="language" style="font-size:25px;">
            <p>Language:</p>
          </label>
          <select name="language" id="language">
            <option value="choose"> Choose</option>
            <option value="Health"> Arabic</option>
            <option value="social services"> Hebrew </option>
            <option value="Studies"> English</option>
          </select>
          <br><br><br>

          <!---
                    <input type="submit" value="Submit" onclick="volunteering_places.php?city=<?php //echo $city;?>&&domain=<?php//echo $domain; ?>">
                -->

        </div>
        <div class="but">
          <a class="btn" href="file:///C:/Users/new/Desktop/Web%20Development/UltraHack/index.html">Submit</a>

        </div>
    </form>
    <img class="bottom-cloud" src="images/cloud.png" alt="cloud-image">
  </div>
</body>

</html>

