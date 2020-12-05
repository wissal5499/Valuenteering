<!DOCTYPE html>

<?php

    session_start(); 
    include("databaseconnection.php");

    //$city = $_GET["org_name"];
    $org_name = $_REQUEST["org_name"]; 
    echo $org_name;

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <style>

        .org_details{
            width: 800px;
            padding: 40px;
        }

        .video{
            display: block;
            margin-left: auto;
            margin-right: auto;
            /*width: 50%;*/
            position: absolute;
            right: 50px;
            top: 760px;
        }


        .text_video{

            display: block;
            margin-left: auto;
            margin-right: auto;
            /*width: 50%;*/
            position: absolute;
            right: 310px;
            top: 710px;
        }

        .open_pos{
            display: block;
            margin-left: auto;
            margin-right: auto;
            /*width: 50%;*/
            position: absolute;
            left: 50px;
            top: 710px;
        }


        .open_pos1{
         
            /*width: 50%;*/
            position: absolute;
            left: 50px;
            top: 780px;
            font-weight: normal;

        }
        

        image {
             border-radius: 50%;
             height: 100px;
             width:100px;
             float:left;
             left: 100px;
        }

        .contact_person{
            border-radius: 0%;
            height: 300px;
            width: 450px;
            display: block;
            margin-right: auto;
            margin-left: auto;
            position: absolute;
            right: 0px;
            left: 950px;
            top: 180px;
        }

        .contact_person2{
        
            margin-right: auto;
            margin-left: auto;
            position: absolute;
            right: 0px;
            left: 1200px;
            top: 100px;
        }

        .contact_person3{
        
        margin-right: auto;
        margin-left: auto;
        position: absolute;
        right: 0px;
        left: 1370px;
        top: 470px;
    }

        .reviews{
            top: 400px;
            padding: 40px;
            margin: 20px;
            padding-top: 20px;
            margin-top:20px;
        }

        .details_only{
            padding-left: 150px;
            
        }
        
        .text_only{
            font-weight: normal;
            font-size:20px;
            
        }

        .checked {
        color: orange;
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
    margin-top: 10px;
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
                <a class="active" href="questions.php">Home</a>
                <a href="#news">Add Volunteering Place</a>
                <a href="#contact">Search For Volunteeering Place</a>
                <a href="#about">About</a>
        </div>
        
            <div class= "contact_person2">
                <h1> Our Contact Person: </h1>
            </div>

            <img class="contact_person"  name="contact_person" src="pictures/contact_person.jpg">
    
            <div class="contact_person3">
                <h3> Amir Khoury <h3>
                <h3> +97250157543 <h3>

            </div>
    <?php
    global$conn;     
        $query = "SELECT * FROM valunteering_places WHERE organization_name='Reine Elementary School' ";  
        
        $result = $conn->query($query);
        if ($result->num_rows > 0) {
        // output data of each row
            while($row = $result->fetch_assoc()){ 

                $temp_org_name = $row["organization_name"];
                $temp_org_address = $row["organization_address"]; 
                $temp_org_desc = $row["description"]; ?>
                            

                        <div class="org_details">
                            <h1> Organization Name: </h1> <?php echo '<h2 style="font-weight:normal">'; echo $temp_org_name; echo '</h2>';?>
                            <hr>

                            <h1> Organization Address: </h1> <?php echo '<h2 style="font-weight:normal">'; echo $temp_org_address; echo '</h2>'; ?>
                            <hr>

                            <h1> Organization Description: </h1> <?php echo '<h2 style="font-weight:normal">'; echo $temp_org_desc; echo '</h2>';?>
                        </div>

                        <!---    <br><br><hr>
                            <td> '.$temp_org_address.' </td>
                            <br><br><hr>
                            <td> '.$temp_org_desc.' </td>
                            <br><br><hr>
                            </td>
            -->
                        
    <?php
                
                
            }                                                               
        } 

        else {
            echo "<br><br>";
            echo "No Details Found";
        }

        //$conn->close();
        ?>

    
    <iframe class="video" width="900" height="500" src="https://www.youtube.com/embed/F9ETzcn5np8" frameborder="0"
        allow="accelerometer; autoplay; clipboard-write;
        encrypted-media; gyroscope; picture-in-picture" allowfullscreen style="float: right"> 
   </iframe>


   <div class="open_pos">
        <h1> <u> We're Looking For: </u></h1> 
    </div>    

    <div class="open_pos1">
            <br>
            <h2> 1. We Are Looking For Volunteers For Some Painting Work </h2> <br>
            <h2> 2. We Offer Position For Volunteers Working With Children </h2> <br>
            <h2> 3. Skilled Electrician For Our Kindergarten</h2> <br>
            <h2> 4. Motivated Students For Improving The Curriculum </h2> <br>

    </div>


   <div class="text_video">
        <h2>   See What Our Volunteer Says About Us: </h2>
    </div>

   <hr>
   <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

   <hr>
   <div class="reviews">
   <h1> Reviews: <h1>

    <?php
     $queryReviews = "SELECT * FROM reviews JOIN volunteers on reviews.volunteer_name = volunteers.name WHERE reviews.org_name='Reine Elementary School' ORDER BY reviews.date DESC";  
        
        $result = $conn->query($queryReviews);
        if ($result->num_rows > 0) {
        // output data of each row
            while($row = $result->fetch_assoc()){ 

                $temp_volunteer_name = $row["volunteer_name"];
                $temp_date = $row["date"]; 
                $temp_text = $row["text"]; 
                $temp_volunteered_hours = $row["volunteered_hours"];?>
                    <div class="pic_and_details ">
                        <div class="image">
                        <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['img']); ?>" /> 
                        </div>

                        <?php
                        echo "<div class=details_only>" ;
                        echo " "; echo $temp_volunteer_name;
                        echo " "; echo "<br>";
                        echo "Date: "; echo $temp_date; echo "<br>";
                        echo "Voluntered Hours: "; echo $temp_volunteered_hours;
                        echo "<br>";
                        echo "</div>";
                        echo "</div>";

                        echo'
                                                    
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star "></span>';




                    echo "<div class=text_only>";
                        echo $temp_text;
                    echo "</div>";
                    echo "<br><br>"
                        ?>
                        <!---    <br><br><hr>
                            <td> '.$temp_org_address.' </td>
                            <br><br><hr>
                            <td> '.$temp_org_desc.' </td>
                            <br><br><hr>
                            </td>
                        -->
    <?php
                
                
            }                                                               
        } 
    
        else {
            echo "<br><br>";
            echo "No Details Found";
        }
?>
    </div>          


    <div class="bottom-container">
        <a class="footer-link" href="https://www.linkedin.com/">LinkedIn
        <a class="footer-link" href="https://www.instagram.com/">Instagram
        <a class="footer-link" href="https://www.facebook.com/">Facebook
        <p class="massege-2">© 2020 UltraHack</p>
    </div>

</body>
</html>


