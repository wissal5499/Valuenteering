<!DOCTYPE html>
<?php

/*
$city = $_POST["cities"];
$domain = $_POST["domain"];
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
    .p{
        margin-bottom: 10px;
        
    }

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
      width: 200px;
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
      /*
      background-image: -webkit-gradient(to bottom, #77F63D, #1E62D0);*/
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
      /*
      background-image: -webkit-gradient(to bottom, #24D01E, #3D94F6);*/
      -webkit-border-radius: 20px;
      -moz-border-radius: 20px;
      border-radius: 20px;
      text-decoration: none;
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

















/*

    .nd_half{
        height: 200px;
        width: 300px;
        background: black;

        position: fixed;
        top: 50%;
        left: 50%;
        margin-top: 90px;
        margin-left: -200px;
    }


    * {
         box-sizing: border-box;
    }

        /* Create three columns of equal width */
        .columns {
        float: left;
        width: 33.3%;
        padding: 8px;
        }

        /* Style the list */
        .price {
        list-style-type: none;
        border: 1px solid #eee;
        margin: 0;
        padding: 0;
        -webkit-transition: 0.3s;
        transition: 0.3s;
        }

        /* Add shadows on hover */
        .price:hover {
        box-shadow: 0 8px 12px 0 rgba(0,0,0,0.2)
        }

        /* Pricing header */
        .price .header {
        background-color: #111;
        color: white;
        font-size: 25px;
        }

        /* List items */
        .price li {
        border-bottom: 1px solid #eee;
        padding: 20px;
        text-align: center;
        }

        /* Grey list item */
        .price .grey {
        background-color: #eee;
        font-size: 20px;
        }

        /* The "Sign Up" button */
        .button {
        background-color: #4CAF50;
        border: none;
        color: white;
        padding: 10px 25px;
        text-align: center;
        text-decoration: none;
        font-size: 18px;
        }

        /* Change the width of the three columns to 100%
        (to stack horizontally on small screens) */
        @media only screen and (max-width: 600px) {
        .columns {
            width: 100%;
        }
        }
























        @import url(https://fonts.googleapis.com/css?family=Open+Sans:400,600);
html {
  background: rgb(246, 248, 248);
}
body {
  padding: 40px;
  font-family: 'Open Sans', sans-serif;
  font-size: 14px;
  font-weight: 400;  
}
.promos {
  width: 800px;
  margin: 0 auto;
  margin-top: 500px;
  margin-left: 530px;
}
.promo {
  width: 250px;
  background: #333; 
  color: #f9f9f9;
  float: left;
}
.deal {
  padding: 10px 0 0 0;
}
.deal span {
  display: block;
  text-align: center;
}
.deal span:first-of-type {
  font-size: 23px;  
}
.deal span:last-of-type {
  font-size: 13px;
}
.promo .price {
  display: block;
  width: 250px;  
  background: #292b2e;
  margin: 15px 0 10px 0;
  text-align: center;
  font-size: 23px;
  padding: 17px 0 17px 0;
}
ul {
  display: block;
  margin: 20px 0 10px 0;
  padding: 0;
  list-style-type: none;
  text-align: center;
  color: #999999;
}
li {
  display: block;
  margin: 10px 0 0 0;
}
button {
  border: none;
  border-radius: 40px;
  background: #292b2e;
  color: #f9f9f9;
  padding: 10px 37px;
  margin: 10px 0 20px 60px;
}
.scale {
  transform: scale(1.2);
  box-shadow: 0 0 4px 1px rgba(20, 20, 20, 0.8);
}
.scale button {
  background: #64AAA4;
}
.scale .price {
  color: #64AAA4;
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

    <img class="top-cloud" src="pictures/cloud.png" alt="cloud-image">

    <form onclick="index.html" action="index.html" method="post">

        <div class="box">
            <div class="container-1">

                <label for="cause" style="font-size:25px;"><p>I Volunteer Because I:</p></label>

                <select name="cause" id="cause">
                <option value="choose"> Choose</option>
                <option value="Want Give Back To Society">Want Give Back To Society</option>
                <option value="Want To Meet New People"> Want To Meet New People</option>
                <option value="Have Free Time">Have Free Time</option>
                <option value="Have To">Have To</option>

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

                <label for="type_org" style="font-size:25px;"><p>My Preferred Type Of Organization:</p></label>
                <select name="type_org" id="type_org">
                <option value="choose"> Choose</option>
                <option value="Nonprofit" title="Is a legal entity operated for a collective benefit, not aiming to generate a profit for its owners "> Nonprofit</option>
                <option value="For-profit" title="A for-profit corporation is an organization which aims to earn profit through its operations and is concerned with its own interests"> For-profit </option>
                <option value="Non Governmental" title=" Organizations which are independent of government involvement"> Non Governmental</option>
                </select>
                <br><br><br>

                <!--
                <label for="language" style="font-size:25px;"><p>Language:</p></label>
                <select name="language" id="language">
                <option value="choose"> Choose</option>
                <option value="Health"> Arabic</option>
                <option value="social services"> Hebrew </option>
                <option value="Studies"> English</option>
                </select>
                <br><br><br>
                -->

                
                <!---
                <input type="submit" value="Submit" onclick="volunteering_places.php?city=<?php //echo $city;?>&&domain=<?php//echo $domain; ?>">
                -->

        </div>

    </form>

    <a class="btn" href="index.html">Submit</a>
    </div>

    <img class="bottom-cloud" src="pictures/cloud.png" alt="cloud-image">

    <!---
        <section class= "nd_half">

            <div class="columns">
                <ul class="price">
                    <li class="header">1st Place</li>
                    <li class="grey">124512 / year</li>
                    <li> <img  height = 100 width=150 src= "pictures/1st_Firm.jpg"> </li>
                    <li> Germany </li>
                    <li>Helping older people</li>
                    <li class="grey"><a href="#" class="button">Sign Up</a></li>
                </ul>

                <ul class="price">
                    <li class="header">2nd Place</li>
                    <li class="grey">104512 / year</li>
                    <li> <img  height = 100 width=150 src= "pictures/2nd_Firm.jpg"> </li>
                    <li> USA </li>
                    <li> Cleaning Trails</li>
                    <li class="grey"><a href="#" class="button">Sign Up</a></li>
                </ul>

            </div>
        </section>
    -->

    

    <div class="promos">  
<div class="promo">
  <div class="deal">
    <span>2nd Place</span>
    <span> XYZ Company</span>
  </div>
  <span class="price"> 12472 <br> volunteering hours </span>
  <ul class="features">
    <li> </li>
    <li>Environment Category</li>
  </ul>
  <button> To Page </button>
</div>
<div class="promo scale">
  <div class="deal">
    <span>1st Place</span>
    <span> Mitha Solutions Ltd</span>
  </div>
  <span class="price"> 15172 <br> volunteering hours </span>
  <ul class="features">
    <li>Health Category</li> 
  </ul>
  <button> To Page </button>
</div>
<div class="promo">
  <div class="deal">
    <span>3rd Place</span>
    <span> ZYX Company</span>
  </div>
  <span class="price"> 14801 <br> volunteering hours </span>
  <ul class="features">
    <li> Social Category</li>
     
  </ul>
  <button>To Page</button>
</div>
</div>



    <div class="bottom-container">
        <a class="footer-link" href="https://www.linkedin.com/">LinkedIn
        <a class="footer-link" href="https://www.instagram.com/">Instagram
        <a class="footer-link" href="https://www.facebook.com/">Facebook
        <p class="massege-2">© 2020 UltraHack</p>
    </div>


















































</body>









</html>