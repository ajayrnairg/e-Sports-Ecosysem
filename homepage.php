<!DOCTYPE html>
<html lang="en">
<?php
$bg="bg3 (2).jpeg";
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME page</title>
    <style>
        #logo{
            padding-top: 10px;
            padding-left: 900px;
            background-image: url(/logo.jpg);
            height: 150px;
        }
        .main{
           
            background-image: url(/bg1.jpg);
            height: 800px;
            
            color: white;    
            background-repeat: no-repeat;
        }
        #fit{
            
            padding-left:35%;
            padding-top: 50px;
            color: white;
        }

        a:hover{
            background-color: rgb(180, 100, 147) ;
        }
        button{
            text-decoration: none;
            background-color: rgb(185, 13, 113);
            color: blanchedalmond;
            width: 150px;
            height: ;
            font-size: 20px;
            
            padding: 5px;
            border-radius: 25px;
            opacity: 1;
        }
        button:hover{
            opacity: 0.5;
        }
        div[class="main"]
        {
            background-image: url('<?php echo $bg;?>');
        }
        h1[id="fit"]
        {
            color: midnightblue;
        }
        h2[id="para"]
        {
            background-color: midnightblue;
        }
    </style>

</head>
<body style="background-color: midnightblue;">


<?php
require('header.php'); 
 
require('navbar.php');
?>
    <div class="main" >
      <h1 id="fit" style="font-weight: bold !important"><br><br><br>Welcome To Khel Kud E-Pathshala</h1><br>
      <!-- <p><h2 id="para">E-Sports Ecosystem aims at providing healthcare to
heart and diabetic patients through a portal. This app classifies the user
according to the age and severity of their present health condition.</h2>
</p> -->
        
        
      <button type="button" style="margin-left:600px;" onclick="document.location.href='lg.php'">LET'S BEGIN!</button>
      
      </div>
    <?php
    require('footer.php');
?>
</body>
</html>