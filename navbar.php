<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
        button[id=b1]{
            text-decoration: none;
            background-color: rgb(185, 13, 113);
            color: blanchedalmond;
            height: 35px;
            width: 150px;
            font-size: 20px;
            float:right;
            padding: 5px;
            opacity: 1;
            border-radius: 25px;
        }
        button[id=b1]:hover
   {
       opacity: 0.5;
   }
   button[id=b2]:hover
   {
       opacity: 0.5;
   }
   button[id=b2]{
            text-decoration: none;
            background-color: rgb(185, 13, 113);
            color: blanchedalmond;
            border-radius: 25px;
            height: 35px;
            width: 150px;
            font-size: 20px;
            float:left;
            padding: 5px;
            opacity: 1;
        }
    </style>

</head>

<header>
    <i class="fa-solid fa-heart-pulse"></i>
    <button id="b1" type="button" onclick="document.location.href='services.php'">SERVICES</button>;
    <button id="b1" type="button" onclick="document.location.href='profile.php'">PROFILE</button>;
    <button id="b1" type="button" onclick="document.location.href='aboutus2.php'">ABOUT US</button>;
    <button id="b1" type="button" onclick="document.location.href='homepage.php'">HOME</button>;
    <button id="b2" type="button" onclick="history.go(-1);">BACK</button>;
</header>

