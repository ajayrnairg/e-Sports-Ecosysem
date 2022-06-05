<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services</title>
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
          <h2 style="background-color: rgb(185, 13, 113); height: 50px; padding-top: 12px;"><b>&nbsp;&nbsp;&nbsp;OUR SERVICES...</b></h2>
        <hr>
        <div class="aboutpic">
            <img src=services.jpg style="width:100% ; height:105%;" > 
        </div>
        <div class="about">
            <h3>HeartBetes</h3>
            <hr>
            <p>1) HeartBetes will help people with heart conditions and diabetes to live a healthy life.<br>

            2) HeartBetes will suggest different exercises and routines.<br>

3) With the help of timer and laps button, users can keep track of the time they have been exercising.<br>
 
4) The website will be helpful for users as they can keep track of their progress.<br>
</p>
        </div>
    </div>
    <?php
    require('footer.php');
?>
</body>

</html>