<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excercises</title>
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
    <form id="Login" style="color: rgb(219,216,210); font-size: x-large;" >
        <fieldset>
            <legend>Select Level</legend>
            <br>
    <button type="button" style="border: rgb(171,020,096); background-color: rgb(171,020,096); height: 10%; width: 30%; " onclick="document.location.href='beg.php'">
              <h3 style="color:antiquewhite">BEGINNER</h3> </button><br>
    <h5 style="background-color: midnightblue; color: midnightblue;">z</h5>
    <button type="button" style="border: rgb(171,020,096); background-color: rgb(171,020,096); height: 10%; width: 30%;" onclick="document.location='/intermediate.html'">
              <h3 style="color:antiquewhite">INTERMEDIATE</h3> </button>
     <h5 style="background-color: midnightblue; color: midnightblue;">z</h5>
     <button type="button" style="border: rgb(171,020,096); background-color: rgb(171,020,096); height: 10%; width: 30%;" onclick="document.location.href='advanced.php'">
              <h3 style="color:antiquewhite">ADVANCED</h3> </button>
            
        </fieldset>
    </form>
    
</div>
<?php
require('footer.php');
?>
</body>