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
            margin-top: 7px;
            margin-left: 100px;
            width: 500px;
            height: 550px;
            text-align: left justify;
            padding: 10px;
            padding-top: 20px;
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

    <nav class="controls">

        <h1 style="background-color: rgb(185, 13, 113); height: 50px; padding-top: 12px;"><b>&nbsp;&nbsp;&nbsp;ROUTINE
                3</b></h1>
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
                <h2>Routine 3 : A guide to basic Stretches</h2>
                Stretching safely
                It's helpful to include stretching in your exercise regimen. Stretching can increase flexibility and
                improve your joints' range of motion, helping you move more freely. <br>

                Hold a stretch for about 30 seconds, to the point of a slight pull, on each side. Repeat the stretch on
                both sides 2 to 4 times. <br>
                <br>
                Contents :
                <ul style="list-style-type: none;">
                    <li>Calf stretch</li>
                    <li>Hamstring stretch</li>
                    <li>Quadriceps stretch</li>
                    <li>Hip flexor stretch</li>
                    <li>Iliotibial band (ITB) stretch</li>
                    <li>Shoulder stretch</li>
                    <li>Neck stretch</li>
                </ul>
                <button id="b2" type="button" onclick="document.location.href='mode.php'">DONE!</button>




            </header>
        </div>
        <!-- <img src="routine1.jpg" alt="random" style="margin-left: 425px;"> -->
        <!-- Slideshow container -->
        <div class="slideshow-container">

            <!-- Full-width images with number and caption text -->
            <div class="mySlides fade">
                <div class="numbertext">1 / 7</div>
                <img src="calfstretch.jpg" style="width:100%">
                <div class="text">Calf stretch- Stand at arm's length from a wall or a piece of sturdy exercise
                    equipment. Place your right foot behind your left foot. Slowly bend your left leg forward, keeping
                    your right knee straight and your right heel on the floor. Hold your back straight and your hips
                    forward. Don't rotate your feet inward or outward. Hold for about 30 seconds. Switch legs and
                    repeat. To deepen the stretch, slightly bend your right knee as you bend your left leg forward.
                </div>
            </div>

            <div class="mySlides fade">
                <div class="numbertext">2 / 7</div>
                <img src="hamstringstretch.jpg" style="width:100%">
                <div class="text">Hamstring stretch- Lie on the floor near the outer corner of a wall or a door frame.
                    Raise your left leg and rest your left heel against the wall. Keep your left knee slightly bent.
                    Gently straighten your left leg until you feel a stretch along the back of your left thigh. Hold for
                    about 30 seconds. Switch legs and repeat. As your flexibility increases, maximize the stretch by
                    gradually scooting yourself closer to the wall or door frame.</div>
            </div>

            <div class="mySlides fade">
                <div class="numbertext">3 / 7</div>
                <img src="quadricepsstreych.jpg" style="width:100%">
                <div class="text">Quadriceps stretch- Stand near a wall or a piece of sturdy exercise equipment for
                    support. Grasp your ankle and gently pull your heel up and back until you feel a stretch in the
                    front of your thigh. Tighten your stomach muscles to prevent your stomach from sagging outward, and
                    keep your knees close together. Hold for about 30 seconds. Switch legs and repeat.</div>
            </div>

            <div class="mySlides fade">
                <div class="numbertext">4 / 7</div>
                <img src="hipflexorstretch.jpg" style="width:100%">
                <div class="text">Hip flexor stretch- Kneel on your right knee, cushioning your kneecap with a folded
                    towel. Place your left foot in front of you, bending your knee and placing your left hand on your
                    left leg for stability. Place your right hand on your right hip to avoid bending at the waist. Keep
                    your back straight and abdominal muscles tight. Lean forward, shifting more body weight onto your
                    front leg. You'll feel a stretch in your right thigh. Hold for about 30 seconds. Switch legs and
                    repeat.</div>
            </div>

            <div class="mySlides fade">
                <div class="numbertext">5 / 7</div>
                <img src="ITB.jpg" style="width:100%">
                <div class="text">Iliotibial band (ITB) stretch- Stand near a wall or a piece of sturdy exercise
                    equipment for support. Cross your left leg over your right leg at the ankle. Extend your left arm
                    overhead, reaching toward your right side. You'll feel a stretch along your left hip. Hold for about
                    30 seconds. Switch sides and repeat.</div>
            </div>

            <div class="mySlides fade">
                <div class="numbertext">6 / 7</div>
                <img src="shoulderstretch.jpg" style="width:100%">
                <div class="text">Shoulder stretch- Bring your left arm across your body and hold it with your right
                    arm, either above or below the elbow. Hold for about 30 seconds. Switch arms and repeat.</div>
            </div>

            <div class="mySlides fade">
                <div class="numbertext">7 / 7</div>
                <img src="neckstretch.jpg" style="width:100%">
                <div class="text">Neck stretch- Bend your head forward and slightly to the right. With your right hand,
                    gently pull your head downward. You'll feel a nice, easy stretch along the back left side of your
                    neck. Hold for about 30 seconds. Repeat on the opposite side.</div>
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