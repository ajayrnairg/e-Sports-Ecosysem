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
            margin-top: 25px;
            margin-left: 80px;
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
            max-width: 750px;
            position: relative;
            margin-left: 30px;
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
                4</b></h1>
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
                <h2>Routine 4 : 8 Yoga Poses for Beginners</h2> <br>
                Beat stress, ease back pain, and gain flexibility with these simple stretches and breathing exercises.
                <br>
                Contents :
                <ul style="list-style-type: none;">
                    <li>Easy Pose — Sukhasana — to Relieve Stress</li>
                    <li>Cat-Cow to Awaken the Spine and Ease Back Pain</li>
                    <li>Tree Pose — Vrikshasana — to Improve Your Balance</li>
                    <li>Downward-Facing Dog — Adho Mukha Svanasana — to Enhance Flexibility</li>
                    <li>Child's Pose — Balasana — to Help You Relax and Unwind</li>
                    <li>Baby Pigeon Pose to Open Up Your Hips</li>
                    <li>Mountain Pose — Tadasana — to Improve Your Posture</li>
                    <li>Legs-up-the-Wall Pose — Viparita Karani — to Restore and Revitalize</li>
                </ul>
                <button id="b2" type="button" onclick="document.location.href='mode.php'">DONE!</button>




            </header>
        </div>
        <!-- <img src="routine1.jpg" alt="random" style="margin-left: 425px;"> -->
        <!-- Slideshow container -->
        <div class="slideshow-container">

            <!-- Full-width images with number and caption text -->
            <div class="mySlides fade">
                <div class="numbertext">1 / 8</div>
                <img src="sukhasana.jpg" style="width:100%">
                <div class="text">Easy Pose — Sukhasana — to Relieve Stress: Sit cross-legged on a yoga mat with your
                    hands on your knees, palms up. Keep your spine as straight as you can. Push the bones you're sitting
                    on down into the floor — your "sit bones" in yoga-speak. Close your eyes and inhale.
                </div>
            </div>

            <div class="mySlides fade">
                <div class="numbertext">2 / 8</div>
                <img src="cat-cow.jpg" style="width:100%">
                <div class="text">Cat-Cow to Awaken the Spine and Ease Back Pain:Get on your mat on all fours with your
                    hands directly below your shoulders and your knees directly below your hips. Distribute your weight
                    equally between your hands and spread your fingers wide. Inhale and round your back, arching it up
                    as you lower your chin to your chest; feel the stretch from your neck to your tailbone, like a cat.
                    As you exhale, lower your back down all the way to a scoop shape as you lift your head, and tilt it
                    back. </div>
            </div>

            <div class="mySlides fade">
                <div class="numbertext">3 / 8</div>
                <img src="vrksasana.jpg" style="width:100%">
                <div class="text">Tree Pose — Vrikshasana — to Improve Your Balance: Start by standing straight for this
                    pose. Bring your hands together in the prayer position and lift them over your head. Balance on your
                    right leg. Bend your left knee out to the left side and press your left foot to the inner thigh of
                    your right leg. Hold for 30 seconds. Switch legs and repeat.</div>
            </div>

            <div class="mySlides fade">
                <div class="numbertext">4 / 8</div>
                <img src="downwardfacingdog.jpg" style="width:100%">
                <div class="text">Downward-Facing Dog — Adho Mukha Svanasana — to Enhance Flexibility: In
                    Downward-Facing Dog, your body forms an inverted V-shape. Start by placing both hands on the mat in
                    front of you, palms down; your hands should be slightly in front of your shoulders. Place your knees
                    on the ground directly under your hips. Exhale as you lift your knees off the ground and lift your
                    buttocks and hips toward the ceiling. Push the top of your thighs back and stretch your heels down
                    toward the floor. Keep your head down between your upper arms and in line with them, not hanging
                    down. If you notice your lower back rounding, try bending your knees to help lengthen your back.
                </div>
            </div>

            <div class="mySlides fade">
                <div class="numbertext">5 / 8</div>
                <img src="childpose.jpg" style="width:100%">
                <div class="text">Child's Pose — Balasana — to Help You Relax and Unwind: From Downward-Facing Dog,
                    simply bend your knees and lower your butt to your heels as you bring your chest toward the floor
                    over your knees. Lower your shoulders and head to the floor. Place your arms along your sides, palms
                    down, or you can support your head by folding your arms under your forehead. Breathe and relax for
                    as long as you need to. </div>
            </div>

            <div class="mySlides fade">
                <div class="numbertext">6 / 8</div>
                <img src="pigeon.jpg" style="width:100%">
                <div class="text">Baby Pigeon Pose to Open Up Your Hips: From all fours, move your right knee forward
                    between your hands. As though you were doing a lunge, slowly straighten your left leg behind you,
                    keeping the knee and top of the foot on the floor. Now rotate the right knee toward the right wrist
                    and bring it down to the floor with your right calf flat on the floor and your right foot resting
                    under your left groin. Lower your upper body over the bent leg, either all the way to the floor or
                    resting on your elbows. Slowly inhale and exhale five times. Before you change sides, push back on
                    your left leg to stretch the calf muscles. Repeat with your left leg bent and right leg extended.
                </div>
            </div>

            <div class="mySlides fade">
                <div class="numbertext">7 / 8</div>
                <img src="mountainpose.jpg" style="width:100%">
                <div class="text">Mountain Pose — Tadasana — to Improve Your Posture: Stand still, with your chest open
                    and broad and your hands at your sides, and feel your feet on the floor and the sensations in your
                    legs and back. Then analyze your posture in front of a mirror.This pose will show if you have any
                    imbalances in your shoulders and give you clues about what you need to work on. </div>
            </div>

            <div class="mySlides fade">
                <div class="numbertext">8 / 8</div>
                <img src="legsupthewall.jpg" style="width:100%">
                <div class="text">Legs-up-the-Wall Pose — Viparita Karani — to Restore and Revitalize: This is a great
                    ending pose for beginners and those experienced at yoga alike. Lie on the floor with your butt right
                    up against a wall. "Walk" your legs straight up the wall so that your body is in an L shape with
                    your torso flat on the floor and perpendicular to the wall. You may want to place a rolled-up
                    blanket under your lower back for support; keep your elbows out to the sides on the floor for
                    additional support. Flex toes to feel a stretch in the backs of your legs. Breathe deeply and hold
                    the position for as long as you like. To release, bring your knees to your chest and roll over to
                    your side.</div>
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