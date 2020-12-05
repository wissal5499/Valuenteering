
<!DOCTYPE html>

<?php

    session_start(); 
    include("databaseconnection.php");
    
?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
    <style>

            body {
            color: #40514E;
            margin: 0;
            text-align: center;
            font-family: 'Merriweather', serif;
            }


            .center{
                margin-left: auto;
                margin-right: auto;
                margin-top: 20px;
            }
            .middle-container {
            margin: 100px 0 100px 0;
            margin-top:80px;
            margin-bottom: 20px;
            }
            h2 {
            font-size: 2.5rem;
            font-family: 'Montserrat', sans-serif;
            color: #66BFBF;
            font-weight: normal;
            padding-bottom: 10px;

            }
            p{
            line-height:1;
            }
            .quote-row {
            width: 50%;
            margin: 100px auto 100px auto;
            text-align: left;
            line-height: 1;
            }

            .quote1-row {
            width: 50%;
            margin: 100px auto 100px auto;
            text-align: left;
            line-height: 2;
            }
            .elz {
            width: 25%;
            height: 170px;
            float: right;
            margin-right: 30px;

            }



            body {​​​​
            color: #40514E;
            margin: 0;
            text-align: center;
            font-family: 'Merriweather', serif;
            }​​​​

            .all_slide_show{
                margin-top: 700px;
                margin-bottom: 10px;

            }


            * {
      box-sizing: border-box;
    }

    body {
      font-family: Verdana, sans-serif;
margin: 0;
text-align: center;
font-family: 'Merriweather', serif;
    }

    .mySlides {
      display: none;
    }

    img {
      vertical-align: middle;
      border-radius: 50%;

    }

    h2 {
      font-size: 2.5rem;
      font-family: 'Montserrat', sans-serif;
      color: black;
      font-weight: normal;
      padding-bottom: 10px;

    }

    /* Slideshow container */
    .slideshow-container {
      max-width: 1000px;
      position: relative;
      margin: auto;
      
    }

    /* Caption text */
    .text {
      color: black;
      font-size: 15px;
      padding: 8px 12px;
      position: absolute;
      bottom: 8px;
      width: 100%;
      text-align: center;
    }
    .e{
      margin-left: 10px;
    }

    .text1 {
      font-size: 20px;
      margin-left: 50px;

    }
    .text2 {
      font-size: 20px;
      margin-left: 50px;
      margin-top: 30px;

    }

    .text3 {
      font-size: 20px;
      margin-left: 50px;
    }

    .text4 {
      font-size: 25px;
      margin-left: 10px;
    }

    /* Number text (1/3 etc) */
    .numbertext {
      color: #f2f2f2;
      font-size: 12px;
      padding: 8px 12px;
      position: absolute;
      top: 0;
    }

    /* The dots/bullets/indicators */
    .dot {
      height: 15px;
      width: 15px;
      margin: 0 2px;
      background-color: #bbb;
      border-radius: 50%;
      display: inline-block;
      transition: background-color 0.6s ease;
    }

    .active {
      background-color: #717171;
    }

    .contact-massege {
      width: 30%;
      margin: 40px auto 60px;
    }

    .massege-2 {
      color: #eaf6f6;
      font-size: 0.75rem;
      padding: 20px 0;

    }

    .bottom-container {
      background-color: #66BFBF;
      padding: 50px 0 20px;
    }

    /* Fading animation */
    .fade {
      -webkit-animation-name: fade;
      -webkit-animation-duration: 1.5s;
      animation-name: fade;
      animation-duration: 1.5s;
    }

    @-webkit-keyframes fade {
      from {
        opacity: .4
      }

      to {
        opacity: 1
      }
    }

    @keyframes fade {
      from {
        opacity: .4
      }

      to {
        opacity: 1
      }
    }

    /* On smaller screens, decrease text size */
    @media only screen and (max-width: 300px) {
      .text {
        font-size: 11px
      }
    }








    .contact-massege {
    width: 30%;
    margin: 40px auto 60px;
    
    }

    .massege-2 {
    color: #eaf6f6;
    font-size: 0.75rem;
    padding: 20px 0;
    padding-left: 120px;


    }

    .bottom-container {
    background-color: #333;
    padding: 100px 0px 20px ;
    padding-left: 780px;
    padding-bottom: 0px;
    margin-top: 1000px;
    right: 0px;
    left: 0px;

    }

    a {
    color: #4CAF50;
    font-family: 'Montserrat', sans-serif;
    margin: 10px 20px;
    text-decoration: none;
    }
    a:hover{
    color: #eaf6f6;
    }


    </style>


</head>

<body>

        <div class="menu">
                <a href="questions.php">Home</a>
                <a class="active" href="#news">Add Volunteering Place</a>
                <a href="#contact">Search For Volunteeering Place</a>
                <a href="#about">About</a>
        </div>

<div class="row">
    <?php

/*
        $city = $_REQUEST["cities"];
        $domain  = $_REQUEST["domain"]; 
        */

      

       // $user = $_SESSION['username'];

       // WHERE organization_address='$city' and domain='$domain'
        global$conn;     
        $query = "SELECT * FROM valunteering_places ORDER BY rating DESC ";  
        
        
        echo '<table class="center" border="1" cellspacing="2" cellpadding="5">
                <tr>
                    <th width=200px>  Organization Name </th>
                    <th width=200px>  Organization Address </th>
                    <th width=200px>  Rating </th>
                    <th width=200px>  Site </th>
                </tr>';
        $result = $conn->query($query);
        if ($result->num_rows > 0) {
        // output data of each row
            while($row = $result->fetch_assoc()){ 
                ?>
                
                <?php
                $temp_org_name = $row["organization_name"];
                $temp_org_address = $row["organization_address"]; 
                $temp_org_rate = $row["rating"]; 
                    
                echo '<tr  class="active-row">  
                            
                            <td> '.$temp_org_name.' </td>
                            <td> '.$temp_org_address.' </td>
                            <td> '.$temp_org_rate.' </td>

                            <td>  <form action="org_site.php?org_name=<?php echo '.$temp_org_name.'; ?>" method="post" > <input type="submit" value="To Organization" > 
                                  </form>
                            </td>
                        </tr>';
                
                 echo "</div>";
            }                                                               
        } 

        else {
            echo "<br><br>";
            echo "No Places To Volunteering According Your Search Input: City: "; echo $city; echo" "; echo "Domain: "; echo $domain;
        }

        $conn->close();
       /*
        echo $city;
        echo $domain;
*/
    ?>

<div class="all_slide_show">

        <h2>Influencer Quotes: </h2>

        <div class="slideshow-container">

            <div class="mySlides fade">
            <div class="numbertext">1 / 3</div>
            <h3 class="e" >Elizabeth Andrew</h3>
            <img src="pictures/eliz.gif" style="width:15% height:20%">
            <p class="text1">Volunteers do not necessarily have the time, they just have the heart.💜</p>
            </div>

            <div class="mySlides fade">
            <div class="numbertext">2 / 3</div>
            <h3>جبران خليل جبران</h3>
            <img src="pictures/jubran.png" style="width:15%">
            <div class="text2" style="font-size:20px">🧡ان تعطي مما تملك فانك تعطي القليل امّا ان تهب من نفسك فهذا عين العطاء</div>
            </div>

            <div class="mySlides fade">
            <div class="numbertext">3 / 3</div>
            <h3>Audrey Hepburn</h3>
            <img src="pictures/aud.jpg" style="width:15%">
            <div class="text3">
                <p>As you grow older, you will discover that you have tow hands.</p>
                <p>one for helping yourself, the other for helping others💙</p>
            </div>
            </div>

            <div class="mySlides fade">
                <div class="numbertext">2 / 3</div>
                <h3>Anne Frank</h3>
                <img src="pictures/anne.png" style="width:15%">
                <div class="text4" style="font-size:20px">
                    <p>💚لم يجلب العطاء فقرًا على احدٍ ابدًا</p>
                </div>
            </div>
            </div>
    </div>

    </div>
    <br>

    <div style="text-align:center">
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
    </div>
    </div>

  <script>
    var slideIndex = 0;
    showSlides();

    function showSlides() {
      var i;
      var slides = document.getElementsByClassName("mySlides");
      var dots = document.getElementsByClassName("dot");
      for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
      }
      slideIndex++;
      if (slideIndex > slides.length) {
        slideIndex = 1
      }
      for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
      }
      slides[slideIndex - 1].style.display = "block";
      dots[slideIndex - 1].className += " active";
      setTimeout(showSlides, 3000); // Change image every 2 seconds
    }
  </script>

</div>
  








</body>


</html>


