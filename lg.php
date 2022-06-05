<!DOCTYPE = html>

<html>

<head>
    <title>login/signup</title>
    <style>
        .rectangle {
            margin-top:3%;
            color: blanchedalmond;
            border: 3px solid white;
            border: padding-top:10%;  
            height: 450px;
        } 
        button[id=b2]:hover
   {
       opacity: 1;
   }
   button[id=b2]
    {
        border: rgb(171,020,096);
        background-color: rgb(171,020,096); 
        color: blanchedalmond;
        
        opacity: 0.5;
        
   }
        </style>
</head>
<body style="background-color:midnightblue">
<?php
require('header.php'); 
 
require('navbar.php');
?>
    <div class="rectangle"><br><br><br><br><br><br>
    <button id="b2" type="menu" style="margin-left: 500px; height: 50px; width:200px" onclick="document.location.href='login page.php'">LOGIN<br> (Existing Users)</button><br>
    <h5 style="background-color: midnightblue; color: midnightblue;">z</h5>
    
    <button id="b2" type="menu" style="margin-left: 500px; height: 50px; width:200px" onclick="document.location.href='Sign-Up Page.php'">SIGNUP<br> (New Users)</button><br>
    <h5 style="background-color: midnightblue; color: midnightblue;">z</h5>
    
    <button id="b2" type="menu" style="margin-left: 500px; height: 50px; width:200px">LANGUAGE</button>
    </div> 
              <?php
    require('footer.php');
?>
    
</body>
</html>