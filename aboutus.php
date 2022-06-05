<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <style>
        .container {
              height: 600px;
              color: blanchedalmond;
              border: 3px solid white;
              border: padding-top:10%;              
        }

        .about{
             border: 2px solid white;
             color: white;
             font-size: 20px;
             /* height: 310px; */
             width: 500px;
             background-color: rgb(207, 59, 133);
             /* border-top-left-radius: 30px ; */
             margin-top:50px;
             margin-left:650px;
             padding-left: 25px;
             padding: 20px;  
             text-align: justify; 
        }
        .aboutpic{
            width: 500px;
            height: 300px;
            background-repeat: no-repeat;
            float: left;
            margin-top: 45px;
            margin-left: 50px;
        }
    </style>
</head>

<body style="background-color: midnightblue;">
<?php
require('header.php'); 
 
require('navbar.php');
?>
<br><br>
    <div class="container">
          <h2 style="background-color: rgb(185, 13, 113); height: 50px; padding-top: 12px;"><b>&nbsp;&nbsp;&nbsp;ABOUT US...</b></h2>
        <hr>
        <div class="aboutpic">
            <img src=about.png style="width:100% ; height:120%;" > 
        </div>
        <div class="about">
            <h3>Our Fitness Center</h3>
            <hr>
            <p>HeartBetes is a digital health and wellness platform specially built for diabetic and heart patients
                that provides services such as workout plans, workout tracking, fitness tutorials, recommendation, and
                games. Developed as a web application, the app takes a holistic lifestyle tracking approach to keep
                users engaged and motivated. It can help you reach your fitness goals. This app also has daily challenges 
                with friends to improve fitness. A motivated training club keeps your spirits up and ensures that you stick
                to the routine.</p>
        </div>
    </div>
    <?php
    require('footer.php');
?>
</body>

</html>