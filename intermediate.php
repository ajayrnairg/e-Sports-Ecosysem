<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Intermediate</title>
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
?><br>
    <div class="login" style="text-align: center ;">
    <form id="Login" style="color: rgb(219,216,210); font-size: x-large;">
        <fieldset>
            <legend>LEVEL : INTERMEDIATE</legend>
            <br>
        <div><img src="/planks.jpg" alt="random" style="float: left;width: 380px;height: 310px;" >
            <img src="/lunges.png" style="float: left;width: 380px;height: 310px;" >
            <img src="/squats.png" style="float: left;width: 380px;height: 310px;" >
        </div>
            
            <div style="display: inline-block; padding: auto ; margin-right: auto; ">
                <button type="button"  style="width: 380px; margin-left: 0%;float: left; background-color: rgb(171,020,096);  " onclick="document.location='\walk.html'" >
              <h3 style="color:antiquewhite">Planks</h3> </button>
                <button type="button" style="width: 380px;background-color: rgb(171,020,096); height: 10%; " onclick="document.location='\'">
              <h3 style="color:antiquewhite">Lunges</h3> </button>
                <button type="button" style="width: 380px; float:right; background-color: rgb(171,020,096); height: 10%; " onclick="document.location='\'">
              <h3 style="color:antiquewhite">Squats</h3> </button>
            </div>    
        </fieldset>
    </form>
</div>

<?php
    require('footer.php');
?>
</body>