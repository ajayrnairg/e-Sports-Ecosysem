<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
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
    label
    {
        display: inline block;
        color: rgb(219,216,210);
        position:absolute;
        font-family: serif;
        font-size:x-large; 
   }
    input
    {
        margin-left: 5cm;
        display: inline block;
        width: 150px; 
    }
    select
    {
        margin-left: 5cm;
        display: inline block;
        width: 150px;
        
    }
</style>
</head>

<body bgcolor="midnightblue">
<?php
require('header.php'); 
 
require('navbar.php');
?>
  <br>
   
        <legend>PROFILE</legend> 
        <div id='prof' style="color: white; text-align=centre">    
        <h2 style="color: white; text-align=centre">NAME: VISHAKHA KULKARNI
            <br><br><br>
            EMAIL ID: vishakha0502@gmail.com
            <br><br><br>
            POINTS: 150
            <br><br><br>
            ROUTINES COMPLETED:
            ROUTINE 1, ROUTINE 2, ROUTINE 3, ROUTINE 4
</h2>
</div>
        <?php

$servername="localhost";
$username="root";
$password="";
$db="fitness";
$conn = mysqli_connect($servername,$username,$password,$db);
      
    if($conn === false){
        die("ERROR: Could not connect. ". mysqli_connect_error());
    }
      
            $sql =("INSERT INTO profile VALUES ('50','4','vishakha@gmail.com')");
            $conn->commit();
             
            
            
       
        ?>
    <script src="/script.js"></script>
    <!-- <?php
require('footer.php');
?> -->
</body>
</html>
