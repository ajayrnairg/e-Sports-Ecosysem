<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Routine1</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            height: max-content;
        }

        html {
            background: midnightblue;
            color: #bbb;
            font-family: Menlo;
        }

        /* BUTTON DELETE */
        button[id=b2]:hover {
            opacity: 0.5;
        }

        button[id=b2] {
            text-decoration: none;
            background-color: midnightblue;
            color: blanchedalmond;
            border-radius: 25px;
            height: 35px;
            width: 150px;
            font-size: 20px;
            float: center;
            margin-top: 30px;
            padding: 5px;
            opacity: 1;
        }

        header[id=h2]{
            text-align: center;
            color: blanchedalmond;
            background-color: rgb(207, 59, 133);
            margin-top: 10px;
            margin-left: 70px;
            width: 500px;
            height: 410px;
            text-align: left justify;
            padding: 15px;
            padding-top: 80px;
            font-size: 1.5vw;
            border-radius: 10px;

        }

        /* .flex-container { 
            display: flex;
        }*/


        .controls {
            position: fixed;
            text-align: center;
            top: 0.5em;
            width: 100%;
        }

        .button {
            color: white;
            font-size: 1.2vw;
            margin: 0 0.7em;
            text-decoration: none;
            

        }

        .button:first-child {
            margin-left: 0;
        }

        .button:last-child {
            margin-right: 0;
        }

        .button:hover {
            background-color: antiquewhite;
            color:black;

        }

        .stopwatch {
            font-size: 3vw;
            height: 63px;
            line-height: 8vh;
            text-align: center;
        }

        .results {
            border-color: lime;
            list-style: none;
            margin: 0;
            padding: 0;
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
        }


        /* Slideshow container */
        .slideshow-container {
            max-width: 600px;
            position: relative;
            margin-left: 700px;
            margin-top:-368px;
            /* margin-bottom: 1000px; */

        }

        /* Hide the images by default */
        .mySlides {
            display: none;
        }

        /* Next & previous buttons */
        .prev,
        .next {
            cursor: pointer;
            position: absolute;
            top: 50%;
            width: auto;
            margin-top: -22px;
            padding: 16px;
            color: white;
            font-weight: bold;
            font-size: 15px;
            transition: 0.6s ease;
            border-radius: 0 2px 2px 0;
            user-select: none;
            background-color: black;

        }

        /* Position the "next button" to the right */
        .next {
            right: 0;
            border-radius: 3px 0 0 3px;
            background-color: grey;
        }

        /* On hover, add a black background color with a little bit see-through */
        .prev:hover,
        .next:hover {
            background-color: rgba(0, 0, 0, 0.8);
        }

        /* Caption text */
        .text {
            color: black;
            background-color: hotpink;
            font-size: 20px;
            padding: 8px 12px;
            position: absolute;
            bottom: 8px;
            width: 95%;
            text-align: center;
        }

        /* Number text (1/3 etc) */
        .numbertext {
            color: #f2f2f2;
            font-size: 12px;
            padding: 8px 12px;
            position: absolute;
            top: 0;
        }

        /* The dots/bullets/indicators */
        .dot {
            cursor: pointer;
            height: 15px;
            width: 15px;
            margin: 0 2px;
            background-color: #bbb;
            border-radius: 50%;
            display: inline-block;
            transition: background-color 0.6s ease;
        }

        .active,
        .dot:hover {
            background-color: #717171;
        }

        /* Fading animation */
        .fade {
            -webkit-animation-name: fade;
            -webkit-animation-duration: 1.5s;
            animation-name: fade;
            animation-duration: 1.5s;
        }

        @-webkit-keyframes fade {
            from {
                opacity: .4
            }

            to {
                opacity: 1
            }
        }

        @keyframes fade {
            from {
                opacity: .4
            }

            to {
                opacity: 1
            }
        }
    </style>
</head>

<body>
    <?php
    // require('header.php'); 

    ?><br><br>
    <nav class="controls">
        <h1 style="background-color: rgb(185, 13, 113); height: 50px; padding-top: 12px;"><b>&nbsp;&nbsp;&nbsp;ROUTINE
                1</b></h1>
        <br>

        <a href="#" class="button" onClick="stopwatch.start();" style="font-size:25px;">Start</a>
        <a href="#" class="button" onClick="stopwatch.lap();" style="font-size:25px;">Lap</a>
        <a href="#" class="button" onClick="stopwatch.stop();" style="font-size:25px;">Stop</a>
        <a href="#" class="button" onClick="stopwatch.restart();" style="font-size:25px;">Restart</a>
        <a href="#" class="button" onClick="stopwatch.clear();" style="font-size:25px;">Clear Laps</a>
        <div class="stopwatch"></div>
    </nav>

    <br><br><br><br><br><br><br>
     <div class="flex-container" > 
        <div class="routine1" style="height:500px;" >
            <header id=h2 style="background-color: hotpink;color:black;">
                <h2>Routine 1 : Bodyweight Workout</h2> <br>
                Pre-requisites-Warm up at an easy-moderate pace (5 minutes). You should feel comfortable and be able to
                talk
                easily. Allow your heart rate to rise gradually by slowly increasing your pace, resistance.<br>
                Contents :
                <ul style="list-style-type: none;">
                    <li>Bodyweight squats: 20 reps</li>
                    <li>Push-ups: 10 reps</li>
                    <li>Walking lunges: 10 each leg</li>
                    <li>Dumbbell rows (using a gallon milk jug or another weight): 10 each arm.</li>
                    <li>Plank: 15 seconds</li>
                    <li>Jumping Jacks: 30 reps</li>
                </ul>
                <button id="b2" type="button" onclick="document.location.href='mode.php'">DONE!</button>
           </header>
        </div>
        <!-- <img src="routine1.jpg" alt="random" style="margin-left: 425px;"> -->
        <!-- Slideshow container -->
        <div class="slideshow-container">

            <!-- Full-width images with number and caption text -->
            <div class="mySlides fade">
                <div class="numbertext">1 / 6</div>
                <img src="r11.jpg" style="width:100%;">
                <div class="text">Bodyweight squats</div>
            </div>

            <div class="mySlides fade">
                <div class="numbertext">2 / 6</div>
                <img src="r12.jpg" style="width:100%">
                <div class="text">Push-ups</div>
            </div>

            <div class="mySlides fade">
                <div class="numbertext">3 / 6</div>
                <img src="r13.jpg" style="width:100%">
                <div class="text">Walking lunges</div>
            </div>

            <div class="mySlides fade">
                <div class="numbertext">4 / 6</div>
                <img src="r14.jpg" style="width:100%">
                <div class="text">Dumbbell rows</div>
            </div>

            <div class="mySlides fade">
                <div class="numbertext">5 / 6</div>
                <img src="r15.jpg" style="width:100%">
                <div class="text">Plank</div>
            </div>

            <div class="mySlides fade">
                <div class="numbertext">6 / 6</div>
                <img src="r16.jpg" style="width:100%">
                <div class="text">Jumping Jacks</div>
            </div>

            <!-- Next and previous buttons -->
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
        </div>
        <br>

        <!-- The dots/circles -->
        <!-- <div style="text-align:center">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
            <span class="dot" onclick="currentSlide(4)"></span>
            <span class="dot" onclick="currentSlide(5)"></span>
            <span class="dot" onclick="currentSlide(6)"></span>
        </div> -->

    </div>





    <ul class="results"></ul>

    <script>
        class Stopwatch {
            constructor(display, results) {
                this.running = false;
                this.display = display;
                this.results = results;
                this.laps = [];
                this.reset();
                this.print(this.times);
            }

            reset() {
                this.times = [0, 0, 0];
            }

            start() {
                if (!this.time) this.time = performance.now();
                if (!this.running) {
                    this.running = true;
                    requestAnimationFrame(this.step.bind(this));
                }
            }

            lap() {
                let times = this.times;
                let li = document.createElement('li');
                li.innerText = this.format(times);
                this.results.appendChild(li);
            }

            stop() {
                this.running = false;
                this.time = null;
            }

            restart() {
                if (!this.time) this.time = performance.now();
                if (!this.running) {
                    this.running = true;
                    requestAnimationFrame(this.step.bind(this));
                }
                this.reset();
            }

            clear() {
                clearChildren(this.results);
            }

            step(timestamp) {
                if (!this.running) return;
                this.calculate(timestamp);
                this.time = timestamp;
                this.print();
                requestAnimationFrame(this.step.bind(this));
            }

            calculate(timestamp) {
                var diff = timestamp - this.time;
                // Hundredths of a second are 100 ms
                this.times[2] += diff / 10;
                // Seconds are 100 hundredths of a second
                if (this.times[2] >= 100) {
                    this.times[1] += 1;
                    this.times[2] -= 100;
                }
                // Minutes are 60 seconds
                if (this.times[1] >= 60) {
                    this.times[0] += 1;
                    this.times[1] -= 60;
                }
            }

            print() {
                this.display.innerText = this.format(this.times);
            }

            format(times) {
                return `\
${pad0(times[0], 2)}:\
${pad0(times[1], 2)}:\
${pad0(Math.floor(times[2]), 2)}`;
            }
        }

        function pad0(value, count) {
            var result = value.toString();
            for (; result.length < count; --count)
                result = '0' + result;
            return result;
        }

        function clearChildren(node) {
            while (node.lastChild)
                node.removeChild(node.lastChild);
        }

        let stopwatch = new Stopwatch(
            document.querySelector('.stopwatch'),
            document.querySelector('.results'));
    </script>

    <script src="slideshow.js"></script>


    <?php
    // require('footer.php');
?>
</body>

</html>