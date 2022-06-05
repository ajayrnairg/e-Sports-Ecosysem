<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mode</title>
</head>

<style>
    fieldset
    {
        border-color:rgb(171,020,096); 
        border-width:0.3cm;
    }
    legend
    {
        text-align: center;
        background-color:  rgb(171,020,096);
        font-family: serif;
        color: rgb(219,216,210);
        font-size: xx-large;
    }
    label
    {
        display: inline block;
        color: rgb(219,216,210);
        position: absolute;
        font-family: serif;
        font-size:x-large;
    }
    input
    {
        margin-left: 5cm;
        display: inline block;
        width: 150px; 
    }
    input[type="checkbox"]
    {
        margin-left: -4cm;
        display: inline-block;
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
</style>
<body bgcolor="midnightblue">
<?php
require('header.php'); 
 
require('navbar.php');
?>
    <br>
    <div class="login" style="text-align: center ;">
    <br>
    <form id="Login" style="color: rgb(219,216,210); font-size: x-large;" >
        <fieldset>
            
            <legend>Select Mode</legend>
            <br><br><br>
            <button type="button" style="border: rgb(171,020,096); background-color: rgb(171,020,096); height: 30%; width: 50%;" onclick="document.location.href='routine1.php'">
                <h3 style="color:antiquewhite">Routine 1 : Bodyweight Workout</h3><h5>Work your full body out with some intense excercises</h5> </button><br>
                <h5 style="background-color: midnightblue; color: midnightblue;">z</h5>
            <button type="button" style="border: rgb(171,020,096); background-color: rgb(171,020,096); height: 30%; width: 50%;" onclick="document.location='routine2.php'">
                <h3 style="color:antiquewhite">Routine 2 : Spinefine-Back Exercises</h3><h5>Excercises to maintain a healthy spine</h5> </button>
                <h5 style="background-color: midnightblue; color: midnightblue;">z</h5>
                <button type="button" style="border: rgb(171,020,096); background-color: rgb(171,020,096); height: 30%; width: 50%;" onclick="document.location='routine3.php'">
                <h3 style="color:antiquewhite">Routine 3 : Stretching Excercises</h3><h5>A guide to basic stretches</h5></h3> </button>
                <h5 style="background-color: midnightblue; color: midnightblue;">z</h5>
                <button type="button" style="border: rgb(171,020,096); background-color: rgb(171,020,096); height: 30%; width: 50%;" onclick="document.location='routine4.php'">
                <h3 style="color:antiquewhite">Routine 4 : Yoga</h3><h5>Yoga routines for beginners</h5></h3> </button>
                
                <br><br><br>
        </fieldset>
    </form>
</div>
<?php
require('footer.php');
?>
</body>