<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beginner</title>
</head>

<style>
    fieldset
    {
        display: inline-block;
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
    <form id="Login" style="color: rgb(219,216,210); font-size: x-large;">
        <fieldset>
            <legend>LEVEL : BEGINNER</legend>
            <br>
        <!-- <div><img src="walk.jpg" alt="random" style="float: left;width: 380px;height: 310px;" > -->
             <!-- </div> -->
            
            <div style="display: inline-block; padding: auto ; margin-right: auto; ">
                <button type="button"  style="width: 380px; margin-left: 0%;float: left; background-color: rgb(171,020,096);" onclick="document.location.href='walk.php'" >
                <img src="walk.jpg" alt="random" style="float: left;width: 360px;height: 310px;" >
                <h3 style="color:antiquewhite">Walk</h3> </button>
                <button type="button" style="width: 380px;background-color: rgb(171,020,096); height: 10%; " onclick="document.location='\'">
                <img src="yoga.jpg" style="float: left;width: 380px;height: 310px;" >
                <h3 style="color:antiquewhite">Yoga</h3> </button>
                <button type="button" style="width: 380px; float:right; background-color: rgb(171,020,096); height: 10%; " onclick="document.location='\'">
                <img src="jogging.jpg" style="float: left;width: 380px;height: 310px;" >
       <h3 style="color:antiquewhite">Jogging</h3> </button>
            </div>    
        </fieldset>
    </form>
</div>
<?php
require('footer.php');
?>
    
</body>