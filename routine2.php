<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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

        header {
            text-align: center;
            color: blanchedalmond;
            background-color: rgb(207, 59, 133);
            margin-top: 10px;
            margin-left: 100px;
            width: 500px;
            height: 500px;
            text-align: left justify;
            padding: 15px;
            padding-top: 80px;
            font-size: 1.5vw;
            border-radius: 10px;

        }

        .flex-container {
            display: flex;
        }


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
            color: black;
            background-color: antiquewhite;


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

        * {
            box-sizing: border-box
        }

        /* Slideshow container */
        .slideshow-container {
            max-width: 900px;
            position: relative;
            margin-left: 50px;
            margin-top: 70px;

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
            font-size: 15px;
            padding: 5px 1px;
            position: absolute;
            bottom: -85px;
            width: 100%;
            text-align: justify;
        }

        /* Number text (1/3 etc) */
        .numbertext {
            color: black;
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

    <nav class="controls">

        <h1 style="background-color: rgb(185, 13, 113); height: 50px; padding-top: 12px;"><b>&nbsp;&nbsp;&nbsp;ROUTINE
                2</b></h1>
        <br>

        <a href="#" class="button" onClick="stopwatch.start();" style="font-size:25px;">Start</a>
        <a href="#" class="button" onClick="stopwatch.lap();" style="font-size:25px;">Lap</a>
        <a href="#" class="button" onClick="stopwatch.stop();" style="font-size:25px;">Stop</a>
        <a href="#" class="button" onClick="stopwatch.restart();" style="font-size:25px;">Restart</a>
        <a href="#" class="button" onClick="stopwatch.clear();" style="font-size:25px;">Clear Laps</a>
        <div class="stopwatch"></div>
    </nav>

    <br><br><br><br><br><br><br><br><br>
    <div class="flex-container">
        <div class="routine1">
        <header id=h2 style="background-color: hotpink;color:black;">
                <h2>Routine 2 : Spinefine-Back exercises for 15 minutes a day</h2> <br>
                <br>
                Contents :
                <ul style="list-style-type: none;">
                    <li>Knee-to-chest stretch</li>
                    <li>Lower back rotational stretch</li>
                    <li>Lower back flexibility exercise</li>
                    <li>Bridge Exercise</li>
                    <li>Cat Stretch</li>
                    <li>Seated lower back rotational stretch</li>
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
                <img src="kneetochest1.jpg" style="width:100%">
                <div class="text">Knee-to-chest stretch- Lie on your back with your knees bent and your feet flat on the
                    floor (A). Using both hands, pull up one knee and press it to your chest (B). Tighten your
                    abdominals and press your spine to the floor. Hold for 5 seconds. Return to the starting position
                    and repeat with the opposite leg (C). Return to the starting position and then repeat with both legs
                    at the same time (D). Repeat each stretch 2 to 3 times — preferably once in the morning and once at
                    night.</div>
            </div>

            <div class="mySlides fade">
                <div class="numbertext">2 / 6</div>
                <img src="lowerbackrotation2.jpg" style="width:100%">
                <div class="text">Lower back rotational stretch- Lie on your back with your knees bent and your feet
                    flat on the floor (A). Keeping your shoulders firmly on the floor, roll your bent knees to one side
                    (B). Hold for 5 to 10 seconds. Return to the starting position (C). Repeat on the opposite side (D).
                    Repeat each stretch 2 to 3 times — preferably once in the morning and once at night.</div>
            </div>

            <div class="mySlides fade">
                <div class="numbertext">3 / 6</div>
                <img src="lowerbackflexibility.jpg" style="width:100%">
                <div class="text">Lower back flexibility exercise- Lie on your back with your knees bent and your feet
                    flat on the floor (A). Tighten your abdominal muscles so your stomach pulls away from your waistband
                    (B). Hold for five seconds and then relax. Flatten your back, pulling your bellybutton toward the
                    floor (C). Hold for five seconds and then relax. Repeat. Start with five repetitions each day and
                    gradually work up to 30.</div>
            </div>

            <div class="mySlides fade">
                <div class="numbertext">4 / 6</div>
                <img src="bridgeexercise4.jpg" style="width:100%">
                <div class="text">Bridge Exercise- Lie on your back with your knees bent and your feet flat on the floor
                    (A). Keeping your shoulders and head relaxed on the floor, tighten your abdominal and gluteal
                    muscles. Then raise your hips to form a straight line from your knees to your shoulders (B). Try to
                    hold the position long enough to complete three deep breaths. Return to the starting position and
                    repeat. Start with five repetitions each day and gradually work up to 30.</div>
            </div>

            <div class="mySlides fade">
                <div class="numbertext">5 / 6</div>
                <img src="catstretch5.jpg" style="width:100%">
                <div class="text">Cat Stretch- Position yourself on your hands and knees (A). Slowly arch your back, as
                    if you're pulling your abdomen up toward the ceiling (B). Then slowly let your back and abdomen sag
                    toward the floor (C). Return to the starting position (A). Repeat 3 to 5 times twice a day.</div>
            </div>

            <div class="mySlides fade">
                <div class="numbertext">6 / 6</div>
                <img src="seatedlowerbackrotationalstretch6.jpg" style="width:100%">
                <div class="text">Seated lower back rotational stretch- Sit on an armless chair or a stool. Cross your
                    right leg over your left leg. Bracing your left elbow against the outside of your right knee, twist
                    and stretch to the side (A). Hold for 10 seconds. Repeat on the opposite side (B). Repeat this
                    stretch 3 to 5 times on each side twice a day.</div>
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



</body>

</html>