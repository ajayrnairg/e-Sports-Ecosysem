<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
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
?><br>
    <div class="login" style="text-align: center ;">
     <form id="Login" action="login.php" style="color: rgb(219,216,210); font-size: x-large;" method="post">
        <fieldset>
            <legend>LOGIN</legend>
            
            <img src="prof.png" style="zoom: 150%;"><br><br>
            <label for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="Enter Email-Id" required /><br><br>
            <label for="password">Password</label>
            <input type="password" minlength="8" autofocus required title="Invalid Password" name="password" placeholder="Enter Password" id="password" required /><br><br>
            <br>
            
            <button type="cancel" value="CANCEL" onclick="cancel()">CANCEL</button>
            <button type="submit" onclick="document.location.href='mode.php'">LET'S BEGIN THE WORKOUT!</button>
        </fieldset>
    </form> 
    
</div>
<script src="/script.js"></script>
<?php
    require('footer.php');
?>   

</body>