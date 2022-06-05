<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Games</title>
</head>

<style>
    fieldset
    {
        display: inline-block;
        border-color:rgb(171,020,096); 
        border-width:0.3cm;
    }
    div
    {
        width: 1170px;
    }
    legend
    {
        text-align: center;
        background-color:  rgb(171,020,096);
        font-family: serif;
        color: rgb(219,216,210);
        font-size: xx-large;
    }
    
    button
    {
        background-color: rgb(171,020,096);
        font-family: serif;
        color: rgb(219,216,210);
        font-size:x-large;
        opacity: 0.5;
   }
   .clearfix::after 
   {
        content: "";
        clear: both;
        display: table;
    }
   button:hover
   {
       opacity: 1;
   }
   p
   {
       text-align:justify;
   }
   
</style>
<body bgcolor="midnightblue">
<?php
require('header.php'); 
 
require('navbar.php');
?>
    <br><br>
    <div class="login" style="text-align: center ;">
    <form id="Login" style="color: rgb(219,216,210); font-size: x-large;">
        <fieldset>
            <legend>Table Tennis</legend>
            <br>
            <p><h2>INTRODUCTION</h2></p>
            <p style="text-align:left-justify"><h7>1.	Table Tennis is popular indoor recreation game. It is played in singles, doubles and mixed doubles category.
<br>2.	Table tennis, also known as ping-pong and whiff-whaff. 
<br>3.	The International Table Tennis Federation (ITTF), founded in 1926, is the world-governing body of the sport of table tennis.
<br>4.	The Table Tennis Federation of India (TTFI), established in 1926, is the governing body for table tennis in India. 
<br><br><br>
</h7></p>
        <div>
         <hr><hr>   
        <br><br>
        <div style="display: inline-block; padding: auto ; margin-right: auto; ">
                <button type="button"  style="width: 380px; background-color: rgb(171,020,096);  " onclick="document.location='specification.php'" >
              <h3 style="color:antiquewhite">SPECIFICATIONS</h3> </button> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <button type="button" style="width: 380px;background-color: rgb(171,020,096); height: 10%; " onclick="document.location='rules.php'">
              <h3 style="color:antiquewhite">RULES</h3> </button>
                
            </div>   
            <br><br><br><hr><hr><br>

            <div>
            <p ><h2>SKILLS</h2></p>
            <p style="text-align:left-justify"><br><h7>A. GRIP  : There are two methods of gripping a racket - Pen Hold Grip and Shake Hand Grip
            <br>B. PROPER STANCE [POSTURE] 
            <br>C. SERVICES : 1. Fore Hand Service   2. Back Hand Service
            <br>D. BASIC STROKES : 1. Forehand drive    2. Back Hand Drive :
</h7></p>



            <iframe src="skills.mp4" frameborder="" width="410px" height="300px" >World Diabetes service rules</iframe>
            </div>
        </fieldset>
    </form>
</div>
<?php
require('footer.php');
?>
</body>



