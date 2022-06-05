<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Games</title>
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
        opacity: 1;
   }
   .clearfix::after 
   {
        content: "";
        clear: both;
        display: table;
    }
   button:hover
   {
       opacity: 0.8;
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
            <a href="https://www.nytimes.com/games/wordle/index.html"><img src=wordle.jpg alt="random" style="width: 285px;height: 310px;" ></a>
            <a href="https://www.dictionary.com/e/crossword/"><img src=crossword.jpg style="width: 285px;height: 310px;" ></a>
            <a href="https://sudoku.com/"><img src=sudoku.jpg style="width: 285px;height: 310px;" ></a>   
            <a href="https://www.chess.com/play"><img src=chess.jpg style="width: 285px;height: 310px;" ></a>
        </div>
            
            <div style="display: inline-block; padding: auto ; ">
                <button type="button"  style="width: 285px; background-color: rgb(171,020,096);  " onclick="location.href='https://www.nytimes.com/games/wordle/index.html'" >
              <h3 style="color:antiquewhite">Wordle</h3><h5>A simple word game to guess the word in 6 attempts.</h5> </button>
                <button type="button" style="width: 285px;background-color: rgb(171,020,096); height: 10%; " onclick="location.href='https://www.dictionary.com/e/crossword/'">
              <h3 style="color:antiquewhite">Crossword</h3><h5>Guess the words with the help of the clues.</h5>  </button>
              <button type="button" style="width: 285px;background-color: rgb(171,020,096); height: 10%; " onclick="location.href='https://sudoku.com/'">
              <h3 style="color:antiquewhite">Sudoku</h3><h5>A combinational number-placement puzzle.</h5>  </button>
              <button type="button" style="width: 285px;background-color: rgb(171,020,096); height: 10%; " onclick="location.href='https://www.chess.com/play'">
              <h3 style="color:antiquewhite">Chess</h3><h5>Online chess to build your brain strength.</h5>  </button>
            </div>    
        </fieldset>
    </form>
</div>

<?php
require('footer.php');
?>
</body>



