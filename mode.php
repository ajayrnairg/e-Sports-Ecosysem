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
            <br>
        <div>
            <a href="games.php"><img src=mind.jpg alt="random" style="width: 380px;height: 310px;" ></a>
            
            
            <a href="routineoption.php"><img src=excercise.jpg style="width: 380px;height: 310px;" ></a>
        </div>
            
            <div style="display: inline-block; padding: auto ; margin-right: auto; ">
                <button type="button"  style="width: 380px; background-color: rgb(171,020,096);  " onclick="document.location='games.php'" >
              <h3 style="color:antiquewhite">Games</h3> </button>
                <button type="button" style="width: 380px;background-color: rgb(171,020,096); height: 10%; " onclick="document.location='routineoption.php'">
              <h3 style="color:antiquewhite">Exercises</h3> </button>
                
            </div>    
        </fieldset>
    </form>
</div>

<?php
require('footer.php');
?>
</body>



