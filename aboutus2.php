<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <style>
        .container {
            height: 3100px;
            color: blanchedalmond;
            border: 3px solid white;
            padding-top: 80px;
        }

        .about {
            border: 2px solid white;
            color: white;
            font-size: 20px;
            /* height: 310px; */
            width: 500px;
            background-color: rgb(207, 59, 133);
            /* border-top-left-radius: 30px ; */
            margin-top: 80px;
            margin-left: 650px;
            padding-left: 30px;
            padding: 20px;
            text-align: justify;
        }


        .aboutpic {
            width: 500px;
            height: 300px;
            background-repeat: no-repeat;
            float: left;
            margin-top: 65px;
            margin-left: 50px;
        }

        button {

            opacity: 1;

        }

        button:hover {
            opacity: 0.8;
        }

        .dietandnutrition {
            background-image: url(dd.jpg);
            background-repeat: no-repeat;
            background-size: 1250px;
            text-align: center;
            color: black;
            padding-top: 90px;
            padding-bottom: 90px;


        }

        mark {
            background-color: black;
            color: white;
        }
    </style>
</head>

<body style="background-color: midnightblue; background-image: url(BG2.jpeg); background-repeat:repeat-x ; ">
<h1 style="padding-left: 550px;color: black; font:sans-serif"><img src="logo2-removebg-preview.png" style="zoom:15%">  HeartBetes</h1>

<?php
 
require('navbar.php');
?>
    
    <div class="container">
        <h2 style="background-color: rgb(185, 13, 113); height: 50px; padding-top: 12px;"><b>&nbsp;&nbsp;&nbsp;ABOUT
                US...</b></h2>
        <hr>

        <div class="aboutpic">
            <img src=about.png style="width:100% ; height:115%; border: solid 15px midnightblue;">
        </div>
        <div class="about">
            <h3>Our Fitness Center</h3>
            <hr>
            <p>HeartBetes is a digital health and wellness platform specially built for diabetic and heart patients
                that provides services such as workout plans, workout tracking, fitness tutorials, recommendation,
                and
                games. Developed as a web application, the app takes a holistic lifestyle tracking approach to keep
                users engaged and motivated. It can help you reach your fitness goals. This app also has daily
                challenges
                with friends to improve fitness. A motivated training club keeps your spirits up and ensures that
                you stick
                to the routine.</p>
        </div>
        <br><br><br><br><br><br><br><br>

        <h2 style="background-color: rgb(185, 13, 113); height: 35px; padding: 8px; text-align: center;">
            <b>&nbsp;&nbsp;&nbsp;DIABETES</b>
        </h2>
        <div style="width: 1170px; margin-left: 50px; margin-top: 70px;">
            <a href="games.php"><img src=aboutdiabetes.jpg alt="random" style="width: 380px;height: 310px;"></a>
            <a href="routineoption.php"><img src=cause.jpg style="width: 380px;height: 310px;"></a>
            <a href="routineoption.php"><img src=beatO.jpg style="width: 380px;height: 310px;"></a>

        </div>

        <div
            style="display: inline-block; padding: auto ; margin-right: auto; width: 1170px; margin-left:50px; margin-bottom: 70px ;">
            <button type="button" style="width: 380px; background-color: rgb(171,020,096); "
                onclick="location.href='https://www.cdc.gov/diabetes/basics/diabetes.html#:~:text=Diabetes%20is%20a%20chronic%20'">
                <h2 style="color:antiquewhite">About Diabetes</h2>
            </button>
            <button type="button" style="width: 380px;background-color: rgb(171,020,096); height: 10%; "
                onclick="location.href='https://www.diabetes.co.uk/diabetes-causes.html'">
                <h2 style="color:antiquewhite">Cause of type-1 and type-2 diabetes</h2>
            </button>
            <button type="button" style="width: 380px; background-color: rgb(171,020,096);  "
                onclick="document.location='https://www.republicworld.com/initiatives/india-beats-diabetes/beato-launches-a-nationwide-diabetes-awareness-program-india-beats-diabetes.html'">
                <h2 style="color:antiquewhite">Awareness Program- BeatO</h2>
            </button>
        </div>


        <h2 style="background-color: rgb(185, 13, 113); height: 25px; padding: 5px; text-align: center">
            <b>&nbsp;&nbsp;&nbsp;CARDIOVASCULAR DISEASES</b>
        </h2>
        <div style="width: 1170px; margin-left: 50px; margin-top: 70px;">
            <a href="games.php"><img src=cardiovascular.png alt="random" style="width: 380px;height: 310px;"></a>
            <a href="routineoption.php"><img src=hearthealth.jpg style="width: 380px;height: 310px;"></a>
            <a href="routineoption.php"><img src=signs.jpg style="width: 380px;height: 310px;"></a>

        </div>

        <div
            style="display: inline-block; padding: auto ; margin-right: auto; width: 1170px; margin-left:50px; margin-bottom: 70px ;">
            <button type="button" style="width: 380px; background-color: rgb(171,020,096); "
                onclick="location.href='https://www.who.int/news-room/fact-sheets/detail/cardiovascular-diseases-(cvds)'">
                <h2 style="color:antiquewhite"> CVDs</h2>
            </button>
            <button type="button" style="width: 380px;background-color: rgb(171,020,096); height: 10%; "
                onclick="location.href='https://www.heartfoundation.org.au/heart-health-education/keeping-your-heart-healthy'">
                <h2 style="color:antiquewhite">Keeping your heart healthy</h2>
            </button>
            <button type="button" style="width: 380px; background-color: rgb(171,020,096);  "
                onclick="document.location='https://aging.com/10-signs-of-an-unhealthy-heart-you-need-to-know/'">
                <h2 style="color:antiquewhite">Signs of unhealthy heart</h2>
            </button>
         </div>









        <h2 style="background-color: rgb(185, 13, 113); height: 25px; padding: 5px; text-align: center">
            <b>&nbsp;&nbsp;&nbsp;DIET AND NUTRITION</b>
        </h2>
        <div class="dietandnutrition">
             
            <mark> Make your calories count with these nutritious foods. Choose healthy carbohydrates, fiber-rich foods,
                fish
                and "good" fats. <br> </mark>
            <b>Vegetables</b> <br>
            <li>Nonstarchy: includes broccoli, carrots, greens, peppers, and tomatoes</li>
            <li>Starchy: includes potatoes, corn, and green peas</li> <br><br>
            <b>Fruits</b> <br>
            <li>Includes oranges, melon, berries, apples, bananas, and grapes</li><br><br>
            <b>Grains</b> <br>
            <li>At least half of your grains for the day should be whole grains</li>
            <li>Includes wheat, rice, oats, cornmeal, barley, and quinoa</li><br><br>
            <b>Protein</b> <br>
            <li>Lean meat</li>
            <li>Chicken or turkey without the skin</li>
            <li>Fish</li>
            <li>Eggs</li>
            <li>Nuts and peanuts</li>
            <li>Dried beans and certain peas, such as chickpeas and split peas</li>
            <li>Meat substitutes, such as tofu</li><br><br>
            <b>Dairy</b> <br>
            <li>Nonfat or low fat</li><br><br>
            <b>Milk or Lactose</b> <br>
            <li>Yogurt</li>
            <li>Cheese</li>
        </div>


        <h2 style="background-color: rgb(185, 13, 113); height: 25px; padding: 5px; text-align: center">
            <b>&nbsp;&nbsp;&nbsp;AWARENESS CAMPAIGNS</b>
        </h2>



        <iframe src="awareness.mp4" frameborder="" width="410px" height="300px">World Diabetes Awareness</iframe>
        <iframe src="heartcampaign.mp4" frameborder="0" width="410" height="300">Heart Campaigns</iframe>
        <iframe src="ahealthyplate.mp4" frameborder="0" width="410" height="300">A healthy plate</iframe>


       <!-- <h4> World Diabetes Awareness &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Heart Campaigns &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;A healthy plate</h4>  -->
       <br>
       <br>
       <br>



    </div>



    <?php
require('footer.php');
?>




</body>

</html>