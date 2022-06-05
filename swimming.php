<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>swimming</title>
    <style>
        .container {
            border: 5px solid white;
            height: 750px;
            color: blanchedalmond;
        }

        .about {
            color: white;
            font-size: 70;
            height: 450px;
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
    </style>
</head>

<body style="background-color: midnightblue;">
<?php
require('header.php'); 
 
require('navbar.php');
?>
    <div class="container">
        <h2 style="background-color: rgb(185, 13, 113); height: 50px; padding-top: 12px;"><b>&nbsp;&nbsp;&nbsp;SWIMMING</b></h2>
        <hr>
        <div class="walkpic">
           <img src="swimming2.jpg" alt="walk3" style=" width: 500px; height: 300px;"> 

           <video src="swimming.mp4" controls width="500px" style="margin-top: 10px;"> </video> 
           
        
        </div>

        <div class="about">
            <img src="swimming3.jpg" alt="steps" style="width: 125px; height: 100px;">
            <hr>
            <p >Swimming is great for people living with diabetes. It can reduce your risk of cardiovascular disease
                and help manage blood sugar levels in Type 2 and gestational diabetes. It increases insulin
                sensitivity and can contribute to weight loss or maintaining a healthy weight. 30 minutes of swimming a 
                day can reduce coronary heart disease in women by 30 to 40 percent. Regular aerobic exercise can 
                reduce blood pressure. Swimming raises “good” cholesterol HDL levels. For every 1 percent increase in 
                HDL cholesterol, the risk of dying from heart disease drops by 3.5 percent. 

            </p>

                <p style="font-family: Arial, Helvetica, sans-serif;">
                    <ul style="list-style-type:circle">
                        <li>15 minutes<br>20pts</li>
                        <li>30 minutes<br>35pts </li>
                        <li>45 minutes<br>50pts </li>

                      </ul>
                </p>


        </div>
    </div>
    <?php
    require('footer.php');
?>
</body>

</html>