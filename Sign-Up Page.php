<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign-Up Page</title>
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
        border-radius:25px;
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
    <!-- echo "<img src="../logo.jpg" alt="random" width="100%" height="10%" style="display: block;margin-left: auto;margin-right: auto; max-width: fit-content;"> ";" -->
    <br>
    <form id="Sign-Up" action="insert.php" style="color: rgb(219,216,210); font-size: x-large;" method="post">
        <fieldset style="margin-top:2%;">
             <legend>SIGN UP</legend> 
            <label for="fname">First Name</label>
            <input type="text" id="fname" pattern="[a-zA-Z]+{2,}" autofocus required title="Please Enter Only Letters" name="fname" placeholder="Enter First Name" required ><br><br>
            <label for="lname">Last Name</label>
            <input type="text" id="lname" pattern="[a-zA-Z]+{2,}" autofocus required title="Please Enter Only Letters" name="lname" placeholder="Enter Last Name" required ><br><br>
            <label for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="Enter Email-Id" required><br><br>
            <label for="birthday">Date of Birth</label>
            <input type="date" id="birthday" name="birthday"><br><br>

            <label for="diseasetype">Disease Type</label>
            <select id="diseasetype" name="diseasetype" form="diseasetype" method="post">
            <option value="no">Select a Disease</option>
            <option value="diabetes1">Diabetes Type 1</option>
            <option value="diabetes2">Diabetes Type 2</option>
            <option value="cardidisease">Cardiovascular Disease</option>
            </select>
            <br><br>

            <label for="medtype">Medications</label>
            <select id="medtype" name="medlist" form="medform" method="post">
            <option value="no">Select a Medication</option>
            <option value="med1">Insulin Injection</option>
            <option value="med2">Gemer</option>
            <option value="med3">Ecosprin</option>
            <option value="med4">No Medications</option>
            </select>
            <br><br>

            <label for="password">Password</label>
            <input type="password" minlength="8" autofocus required title="Password must be atleast of 8 letters" name="password" placeholder="Enter Password" id="password" required><br><br>

            <label for="psw-repeat">Confirm Password</label>
            <input type="password" placeholder="Confirm Password" id="psw-repeat" name="psw-repeat" required><br><br>
            <button type="cancel" value="CANCEL" onclick="cancel()">CANCEL</button>
             
             <button type="register" id="REGISTER" onclick="login page.php">REGISTER</button> 
            
        </fieldset>
    </form>
    <script src="/script.js"></script>
    <?php
require('footer.php');
?>
</body>
</html>