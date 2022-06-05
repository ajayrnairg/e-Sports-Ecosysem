<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>walk</title>
    <style>
        .container {
            border: 5px solid white;
            height: 750px;
            color: blanchedalmond;
        }

        .about {
            color: white;
            font-size: 70;
            height: 350px;
            width: 700px;
            background-color: rgb(207, 59, 133);
            margin-top: 30px;
            margin-left: 650px;
            padding-left: 25px;
            padding: 20px;
            width: 500px;
        }

        .walkpic {
            /* background-image: url('walk3.jpg');  */
            height: 500px;
            width: 600px;
            background-repeat: no-repeat;
            float: left;
             margin-top: 30px; 
            margin-left: 50px;
        }
        .button[id="b2"]
        {
            text-decoration: none;
            background-color: rgb(185, 13, 113);
            color: blanchedalmond;
            width: 150px;
            height: ;
            font-size: 20px;
            float:right;
            margin:right:4px;

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
        <h2 style="background-color: rgb(185, 13, 113); height: 50px; padding-top: 12px;"><b>&nbsp;&nbsp;&nbsp;WALK</b></h2>
        <hr>
        <div class="walkpic">
           <img src="walk3.jpg" alt="walk3" style=" width: 500px; height: 300px;"> 

           <video src="walk4.mp4" controls width="500px" style="margin-top: 10px;"> </video> 
           
        
        </div>

        <div class="about">
            <!-- <h3>WALK</h3> -->
            <img src="step.jpg" alt="steps">
            <hr>
            <p >Walking is a great way to improve or maintain your overall health. Just 30 minutes every day can increase
                cardiovascular fitness, strengthen bones, reduce excess body fat, and boost muscle power and endurance.
                It can also reduce your risk of developing conditions such as heart disease, type 2 diabetes,
                osteoporosis and some cancers. Unlike some other forms of exercise, walking is free and doesn’t require
                any special equipment or training.</p>

                <p style="font-family: Arial, Helvetica, sans-serif;">
                    <ul style="list-style-type:circle">
                        <li>20 minutes <br>15points </li>

                      </ul>
                  </p>


        </div>
        <button type="button" id="b2" onclick="document.location.href='beg.php'">DONE!</button>
        <button type="button" id="b2" onclick="document.location.href='beg.php'">TIRED:(</button>
    </div>
    <?php
    require('footer.php');
?>
</body>

</html>