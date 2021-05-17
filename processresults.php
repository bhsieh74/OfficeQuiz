
<html>
    <head>
        <title>Quiz Result</title>
        <style>
            body {
                color: white;
                background-color: black;
                overflow: hidden;
            }
            
            @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap');
            #result {
                margin: auto;
                text-align: center;
                width: 600;
                height: 720;
                border: 1px solid white;
                font-family: 'Montserrat', sans-serif;
            }
            .fade-in {
                animation: fadeIn ease 5s;
            }
            @keyframes fadeIn {
                0% {opacity:0;}
                100% {opacity:1;}
            }
            #again {
                margin-top: 10px;
            }
            #results, a {
                width: 500px;
                margin: auto;
                text-align: center;
                color: cyan;
                font-family: 'Montserrat', sans-serif;
                text-decoration: none;
            }
            a:hover {
                color: red;
            }

        </style>
    </head>

    <body>
        <div id="result" class='fade-in'>
            <h1 id="text">You are ___</h1>
            <img id='image' height=600 width=550>
            <button id="again" onclick="window.location.href='index.php'">Try again?</button>
        </div>

        
        <div id="results">
            <a href="reports.php"><h2>See other users' results!</h2></a>
            <a href="results.php"><h2>See aggregate results!</h2><a>
        </div>
        </body>

<?php
    $message = "Please make sure to select a choice.";
    

    $filenam = '/xampp/htdocs/finalproj/data/data.txt';
    $filename = '/home/bch305/public_html/webdev/finalproj/data/data.txt';
    $reports = '/home/bch305/public_html/webdev/finalproj/data/reports.txt';
    // grab the incoming data from the form
    $name = $_COOKIE['name'];

    $workday = $_GET['workday'];
    $dreamjob = $_GET['dreamjob'];
    $live = $_GET['live'];
    $death = $_GET['death'];
    $love = $_GET['love'];
    if ($workday == 'distract') {
        $michael += 10;
        $andy += 5;
        $jim += 5;
        $creed += 5;
        $kelly += 10;
        $kevin += 10;
        
    }
    else if ($workday == 'blank') {
        header('Location: index.php?blank=true');
    }
    else if ($workday == 'time') {
        $stanley += 10;
        $jan += 3;
        $toby += 2;
        $darryl += 2;
        $david += 5;
        $phyllis += 3;
        $oscar += 5;
        $meredith += 10;
        $creed += 5;

    }
    else if ($workday == 'job') {
        $dwight += 10;
        $stanley += 3;
        $toby += 3;
        $darryl += 10;
        $angela += 10;
        $oscar += 10;
        $david += 8;
        $gabe += 10;
        $holly += 10;
    }

    else {
        $jim += 10;
        $pam += 10;
        $jan += 5;
        $michael += 5;
        $erin += 10;
        $kelly += 5;
        $ryan += 5;
        $gabe += 5;
        $holly += 5;
    }

    if ($dreamjob == 'artist') {
        $pam += 10;
        $jan += 5;
        $toby += 5;
        $andy += 5;
        $creed += 5;
        $gabe += 10;
    }
    else if ($dreamjob == 'blank') {
        header('Location: index.php?blank=true');
    }
    else if ($dreamjob == 'sports') {
        $jim += 10;
        $darryl += 10;
        $kevin += 10;
        $ryan += 5;
        $david += 10;
    }
    else if ($dreamjob == 'millionaire') {
        $stanley += 10;
        $michael += 5;
        $toby += 5;
        $jan += 3;
        $ryan += 10;
        $david += 5;
        $creed += 5;

    }
    else if ($dreamjob == 'manager') {
        $dwight += 10;
        $michael += 10;
        $angela += 10;
        $david += 10;
        $oscar += 10;
    }
    else if ($dreamjob == 'none') {
        $holly += 10;
        $meredith += 10;
        $phyllis += 10;
    }
    else {
        $andy += 10;
        $jan += 7;
        $ryan += 10;
        $kelly += 10;
        $erin += 10;
        $holly += 5;
    }

    if ($live == 'nyc') {
        $pam += 10;
        $michael += 5;
        $jan += 5;
        $darryl += 5;
        $david += 10;
        $kelly += 10;
        $ryan += 10;

    }
    else if ($live == 'blank') {
        header('Location: index.php?blank=true');
    }
    else if ($live == 'florida') {
        $stanley += 10;
        $andy += 5;
        $jim += 3;
        $oscar += 5;
        $erin += 10;
        $gabe += 10;
    }
    else if ($live == 'farm') {
        $dwight += 10;
        $angela += 10;
        $creed += 10;
        
    }
    else if ($dreamjob == 'maine') {
        $jim += 10;
        $toby += 5;
        $holly += 10;
        $gabe += 5;
    }
    else if ($dreamjob == 'la') {
        $andy += 10;
        $jan += 7;
        $stanley += 3;
        $gabe += 5;
        $kelly += 10;
        $ryan += 10;
    }
    else {
        $toby += 10;
        $darryl += 5;
        $pam += 7;
        $jim += 3;
        $creed += 10;
        $phyllis += 10;
        $meredith += 10;
        $oscar += 10;
        $erin += 5;
        $david += 5;
        $kevin += 10;
    }

    if ($death == 'jump') {
        $michael += 10;
        $kevin += 10;
        $kelly += 10;
        $creed += 10;
    }
    else if ($live == 'blank') {
        header('Location: index.php?blank=true');
    }
    else if ($death == 'heart') {
        $stanley += 10;
        $toby += 5;
        $darryl += 7;
        $kevin += 5;
        $phyllis += 10;
        $gabe += 10;
    }
    else if ($death == 'never') {
        $dwight += 10;
        $creed += 8;
        $david += 10;
    }
    else if ($death == 'attacked') {
        $jim += 10;
        $pam += 10;
        $michael += 5;
        $toby += 4;
        $jan += 10;
        $holly += 10;
        $ryan += 10;
        $kelly += 10;
        $angela += 6;
        $oscar += 10;
    }
    else if ($death == 'animal') {
        $toby += 10;
        $dwight += 7;
        $andy += 5;
        $creed += 8;
        $angela += 10;
        $erin += 10;
    }
    else {
        $andy += 7;
        $dwight += 8;
        $meredith += 10;
        $oscar += 10;
        $gabe += 10;
    }

    if ($love == 'marry') {
        $jim += 10;
        $pam += 10;
        $darryl += 5;
        $jan += 5;
        $dwight += 8;
        $angela += 8;
        $michael += 7;
        $holly += 10;
        $phyllis += 10;
        $david += 10;
        $erin += 5;
    }
    else if ($love == 'blank') {
        header('Location: index.php?blank=true');
    }
    else if ($love == 'single') {
        $andy += 5;
        $darryl += 8;
        $oscar += 10;
        $gabe += 10;
        $meredith += 5;
        $toby += 10;
    }
    else if ($love == 'dumb') {
        $andy += 10;
        $stanley += 5;
        $meredith += 3;
        $creed += 5;
        $ryan += 3;
        $kelly += 5;
    }
    else if ($love == 'nope') {
        $creed += 10;
        $kevin += 10;
        $oscar += 5;
        $jan += 10;
    }
    else {
        $stanley += 10;
        $meredith += 10;
        $ryan += 10;
        $kelly += 7;
        $angela += 3;
        $erin += 2;
        $gabe += 2;
        $michael += 5;
    }

    if ($jim >= $pam && $jim >= $stanley && $jim >= $michael && $jim >= $dwight && $jim >= $darryl && $jim >= $toby && $jim >= $andy && $jim >= $jan && $jim >= $erin && $jim >= $oscar &&
    $jim >= $kevin && $jim >= $ryan && $jim >= $kelly && $jim >= $gabe && $jim >= $holly && $jim >= $meredith && $jim >= $phyllis && $jim >= $david && $jim >= $creed && $jim >= $angela) {
        if ($live != 'blank' || $workday != 'blank' || $death != 'blank' || $dreamjob != 'blank') {
            file_put_contents($filename, 'jim'."\n", FILE_APPEND);
            $t = time();
            file_put_contents($reports, $t . ",Jim Halpert," . $name. "\n", FILE_APPEND);
            ?>
            <script>
                let image = document.getElementById('image');
                let text = document.getElementById('text');
                text.innerHTML = " <?php echo $name ?>, you are Jim Halpert!";
                image.src = 'images/jim.gif';
            </script>
            <?php
            }
    }
    else if ($pam >= $jim && $pam >= $stanley && $pam >= $michael && $pam >= $dwight && $pam >= $darryl && $pam >= $andy && $pam >= $jan && $pam >= $toby && $pam >= $erin && $pam >= $oscar &&
    $pam >= $kevin && $pam >= $ryan && $pam >= $kelly && $pam >= $gabe && $pam >= $holly && $pam >= $meredith && $pam >= $phyllis && $pam >= $david && $pam >= $creed && $pam >= $angela) {
        if ($live != 'blank' || $workday != 'blank' || $death != 'blank' || $dreamjob != 'blank') {
            file_put_contents($filename, 'pam'."\n", FILE_APPEND);
            $t = time();
            file_put_contents($reports, $t . ",Pam Beesly," . $name. "\n", FILE_APPEND);
            ?>
            <script>
                let image = document.getElementById('image');
                let text = document.getElementById('text');
                text.innerHTML = " <?php echo $name ?>, you are Pam Halpert!";
                image.src = 'images/pam.gif';
            </script>
            <?php
        }
    }
    else if ($dwight >= $jim && $dwight >= $stanley && $dwight >= $michael && $dwight >= $pam && $dwight >= $darryl && $dwight >= $andy && $dwight >= $jan && $dwight >= $toby &&  $dwight >= $erin && $dwight >= $oscar &&
    $dwight >= $kevin && $dwight >= $ryan && $dwight >= $kelly && $dwight >= $gabe && $dwight >= $holly && $dwight >= $meredith && $dwight >= $phyllis && $dwight >= $david && $dwight >= $creed && $dwight >= $angela) {
        if ($live != 'blank' || $workday != 'blank' || $death != 'blank' || $dreamjob != 'blank') {
            file_put_contents($filename, 'dwight'."\n", FILE_APPEND);
            $t = time();
            file_put_contents($reports, $t . ",Dwight Schrute," . $name. "\n", FILE_APPEND);
            ?>
            <script>
                let image = document.getElementById('image');
                let text = document.getElementById('text');
                text.innerHTML = " <?php echo $name ?>, you are Dwight Schrute!";
                image.src = 'images/dwight.gif';
            </script>
            <?php
        }
    }
    else if ($stanley >= $jim && $stanley >= $pam && $stanley >= $michael && $stanley >= $dwight && $stanley >= $darryl && $stanley >= $andy && $stanley >= $jan && $stanley >= $toby && $stanley >= $erin && $stanley >= $oscar &&
    $stanley >= $kevin && $stanley >= $ryan && $stanley >= $kelly && $stanley >= $gabe && $stanley >= $holly && $stanley >= $meredith && $stanley >= $phyllis && $stanley >= $david && $stanley >= $creed && $stanley >= $angela) {
        if ($live != 'blank' || $workday != 'blank' || $death != 'blank' || $dreamjob != 'blank') {
            file_put_contents($filename, 'stanley'."\n", FILE_APPEND);
            $t = time();
            file_put_contents($reports, $t . ",Stanley Hudson," . $name. "\n", FILE_APPEND);
            ?>
            <script>
                let image = document.getElementById('image');
                let text = document.getElementById('text');
                text.innerHTML = " <?php echo $name ?>, you are Stanley Hudson!";
                image.src = 'images/stanley.gif';
            </script>
            <?php
        }
    }
    else if ($michael >= $jim && $michael >= $pam && $michael >= $stanley && $michael >= $dwight && $michael >= $darryl && $michael >= $andy && $michael >= $jan && $michael >= $toby && $michael >= $erin && $michael >= $oscar && 
    $michael >= $kevin && $michael >= $ryan && $michael >= $kelly && $michael >= $gabe && $michael >= $holly && $michael >= $meredith && $michael >= $phyllis && $michael >= $david && $michael >= $creed && $michael >= $angela) {
        if ($live != 'blank' || $workday != 'blank' || $death != 'blank' || $dreamjob != 'blank') {
            file_put_contents($filename, 'michael'."\n", FILE_APPEND);
            $t = time();
            file_put_contents($reports, $t . ",Michael Scott," . $name. "\n", FILE_APPEND);
            ?>
            <script>
                let image = document.getElementById('image');
                let text = document.getElementById('text');
                text.innerHTML = " <?php echo $name ?>, you are Michael Scott!";
                image.src = 'images/michael.gif';
            </script>
            <?php
        }
    }
    else if ($darryl >= $jim && $darryl >= $stanley && $darryl >= $michael && $darryl >= $dwight && $darryl >= $pam && $darryl >= $andy && $darryl >= $jan && $darryl >= $toby && $darryl >= $erin && $darryl >= $oscar &&
    $darryl >= $kevin && $darryl >= $ryan && $darryl >= $kelly && $darryl >= $gabe && $darryl >= $holly && $darryl >= $meredith && $darryl >= $phyllis && $darryl >= $david && $darryl >= $creed && $darryl >= $angela) {
        if ($live != 'blank' || $workday != 'blank' || $death != 'blank' || $dreamjob != 'blank') {
            file_put_contents($filename, 'darryl'."\n", FILE_APPEND);
            $t = time();
            file_put_contents($reports, $t . ",Darryl Philbin," . $name. "\n", FILE_APPEND);
            ?>
            <script>
                let image = document.getElementById('image');
                let text = document.getElementById('text');
                text.innerHTML = " <?php echo $name ?>, you are Darryl Philbin!";
                image.src = 'images/darryl.gif';
            </script>
            <?php
        }
    }
    else if ($toby >= $jim && $toby >= $stanley && $toby >= $michael && $toby >= $dwight && $toby >= $pam && $toby >= $darryl && $toby >= $andy && $toby >= $jan && $toby >= $erin && $toby >= $oscar &&
    $toby >= $kevin && $toby >= $ryan && $toby >= $kelly && $toby >= $gabe && $toby >= $holly && $toby >= $meredith && $toby >= $phyllis && $toby >= $david && $toby >= $creed && $toby >= $angela) {
        if ($live != 'blank' || $workday != 'blank' || $death != 'blank' || $dreamjob != 'blank') {
            file_put_contents($filename, 'toby'."\n", FILE_APPEND);
            $t = time();
            file_put_contents($reports, $t . ",Toby Flenderson," . $name. "\n", FILE_APPEND);
            ?>
            <script>
                let image = document.getElementById('image');
                let text = document.getElementById('text');
                text.innerHTML = " <?php echo $name ?>, you are Toby Flenderson!";
                image.src = 'images/toby.gif';
            </script>
            <?php
        }
    } 
    else if ($jan >= $jim && $jan >= $stanley && $jan >= $michael && $jan >= $dwight && $jan >= $pam && $jan >= $andy && $jan >= $toby && $jan >= $darryl && $jan >= $erin && $jan >= $oscar &&
    $jan >= $kevin && $jan >= $ryan && $jan >= $kelly && $jan >= $gabe && $jan >= $holly && $jan >= $meredith && $jan >= $phyllis && $jan >= $david && $jan >= $creed && $jan >= $angela) {
        if ($live != 'blank' || $workday != 'blank' || $death != 'blank' || $dreamjob != 'blank') {
            file_put_contents($filename, 'jan'."\n", FILE_APPEND);
            $t = time();
            file_put_contents($reports, $t . ",Jan Levinson," . $name. "\n", FILE_APPEND);
            ?>
            <script>
                let image = document.getElementById('image');
                let text = document.getElementById('text');
                text.innerHTML = " <?php echo $name ?>, you are Jan Levinson!";
                image.src = 'images/jan.gif';
            </script>
            <?php
        }
    }
    else if ($creed >= $jim && $creed >= $stanley && $creed >= $michael && $creed >= $dwight && $creed >= $pam && $creed >= $jan && $creed >= $toby && $creed >= $darryl && $creed >= $erin && $creed >= $oscar &&
    $creed >= $kevin && $creed >= $ryan && $creed >= $kelly && $creed >= $gabe && $creed >= $holly && $creed >= $meredith && $creed >= $phyllis && $creed >= $david && $creed >= $andy && $creed >= $angela) {
        if ($live != 'blank' || $workday != 'blank' || $death != 'blank' || $dreamjob != 'blank') {
            file_put_contents($filename, 'creed'."\n", FILE_APPEND);
            $t = time();
            file_put_contents($reports, $t . ",Creed Bratton," . $name. "\n", FILE_APPEND);
            ?>
            <script>
                let image = document.getElementById('image');
                let text = document.getElementById('text');
                text.innerHTML = " <?php echo $name ?>, you are Creed Bratton!";
                image.src = 'images/creed.gif';
            </script>
            <?php
        }
    }
    else if ($ryan >= $jim && $ryan >= $stanley && $ryan >= $michael && $ryan >= $dwight && $ryan >= $pam && $ryan >= $jan && $ryan >= $toby && $ryan >= $darryl && $ryan >= $erin && $ryan >= $oscar &&
    $ryan >= $kevin && $ryan >= $andy && $ryan >= $kelly && $ryan >= $gabe && $ryan >= $holly && $ryan >= $meredith && $ryan >= $phyllis && $ryan >= $david && $ryan >= $creed && $ryan >= $angela) {
        if ($live != 'blank' || $workday != 'blank' || $death != 'blank' || $dreamjob != 'blank') {
            file_put_contents($filename, 'ryan'."\n", FILE_APPEND);
            $t = time();
            file_put_contents($reports, $t . ",Ryan Howard," . $name. "\n", FILE_APPEND);
            ?>
            <script>
                let image = document.getElementById('image');
                let text = document.getElementById('text');
                text.innerHTML = " <?php echo $name ?>, you are Ryan Howard!";
                image.src = 'images/ryan.gif';
            </script>
            <?php
        }
    }
    else if ($kelly >= $jim && $kelly >= $stanley && $kelly >= $michael && $kelly >= $dwight && $kelly >= $pam && $kelly >= $jan && $kelly >= $toby && $kelly >= $darryl && $kelly >= $erin && $kelly >= $oscar &&
    $kelly >= $kevin && $kelly >= $ryan && $kelly >= $andy && $kelly >= $gabe && $kelly >= $holly && $kelly >= $meredith && $kelly >= $phyllis && $kelly >= $david && $kelly >= $creed && $kelly >= $angela) {
        if ($live != 'blank' || $workday != 'blank' || $death != 'blank' || $dreamjob != 'blank') {
            file_put_contents($filename, 'kelly'."\n", FILE_APPEND);
            $t = time();
            file_put_contents($reports, $t . ",Kelly Kapoor," . $name. "\n", FILE_APPEND);
            ?>
            <script>
                let image = document.getElementById('image');
                let text = document.getElementById('text');
                text.innerHTML = " <?php echo $name ?>, you are Kelly Kapoor!";
                image.src = 'images/kelly.gif';
            </script>
            <?php
        }
    }
    else if ($gabe >= $jim && $gabe >= $stanley && $gabe >= $michael && $gabe >= $dwight && $gabe >= $pam && $gabe >= $jan && $gabe >= $toby && $gabe >= $darryl && $gabe >= $erin &&
    $gabe >= $kevin && $gabe >= $ryan && $gabe >= $kelly && $gabe >= $andy && $gabe >= $holly && $gabe >= $meredith && $gabe >= $phyllis && $gabe >= $david && $gabe >= $creed && $gabe >= $angela && $gabe >= $oscar ) {
        if ($live != 'blank' || $workday != 'blank' || $death != 'blank' || $dreamjob != 'blank') {
            file_put_contents($filename, 'gabe'."\n", FILE_APPEND);
            $t = time();
            file_put_contents($reports, $t . ",Gabe Lewis," . $name. "\n", FILE_APPEND);
            ?>
            <script>
                let image = document.getElementById('image');
                let text = document.getElementById('text');
                text.innerHTML = " <?php echo $name ?>, you are Gabe Lewis!";
                image.src = 'images/gabe.gif';
            </script>
            <?php
        }
    }
    else if ($erin >= $jim && $erin >= $stanley && $erin >= $michael && $erin >= $dwight && $erin >= $pam && $erin >= $jan && $erin >= $toby && $erin >= $darryl && $erin >= $oscar && $erin >= $andy &&
    $erin >= $kevin && $erin >= $ryan && $erin >= $kelly && $erin >= $gabe && $erin >= $holly && $erin >= $meredith && $erin >= $phyllis && $erin >= $david && $erin >= $creed && $erin >= $angela) {
        if ($live != 'blank' || $workday != 'blank' || $death != 'blank' || $dreamjob != 'blank') {
            file_put_contents($filename, 'erin'."\n", FILE_APPEND);
            $t = time();
            file_put_contents($reports, $t . ",Erin Hannon," . $name. "\n", FILE_APPEND);
            ?>
            <script>
                let image = document.getElementById('image');
                let text = document.getElementById('text');
                text.innerHTML = " <?php echo $name ?>, you are Erin Hannon!";
                image.src = 'images/erin.gif';
            </script>
            <?php
        }
    }
    else if ($oscar >= $jim && $oscar >= $stanley && $oscar >= $michael && $oscar >= $dwight && $oscar >= $pam && $oscar >= $jan && $oscar >= $toby && $oscar >= $darryl && $oscar >= $erin && $oscar >= $andy &&
    $oscar >= $kevin && $oscar >= $ryan && $oscar >= $kelly && $oscar >= $gabe && $oscar >= $holly && $oscar >= $meredith && $oscar >= $phyllis && $oscar >= $david && $oscar >= $creed && $oscar >= $angela) {
        if ($live != 'blank' || $workday != 'blank' || $death != 'blank' || $dreamjob != 'blank') {
            file_put_contents($filename, 'oscar'."\n", FILE_APPEND);
            $t = time();
            file_put_contents($reports, $t . ",Oscar Martinez," . $name. "\n", FILE_APPEND);
            ?>
            <script>
                let image = document.getElementById('image');
                let text = document.getElementById('text');
                text.innerHTML = " <?php echo $name ?>, you are Oscar Martinez!";
                image.src = 'images/oscar.gif';
            </script>
            <?php
        }
    }
    else if ($angela >= $jim && $angela >= $angela && $angela >= $michael && $angela >= $dwight && $angela >= $pam && $angela >= $jan && $angela >= $toby && $angela >= $darryl && $angela >= $erin && $angela >= $andy &&
    $angela >= $oscar && $angela >= $ryan && $angela >= $kelly && $angela >= $gabe && $angela >= $holly && $angela >= $meredith && $angela >= $phyllis && $angela >= $david && $angela >= $creed && $angela >= $kevin) {
        if ($live != 'blank' || $workday != 'blank' || $death != 'blank' || $dreamjob != 'blank') {
            file_put_contents($filename, 'angela'."\n", FILE_APPEND);
            $t = time();
            file_put_contents($reports, $t . ",Angela Martin," . $name. "\n", FILE_APPEND);
            ?>
            <script>
                let image = document.getElementById('image');
                let text = document.getElementById('text');
                text.innerHTML = " <?php echo $name ?>, you are Angela Martin!";
                image.src = 'images/angela.gif';
            </script>
            <?php
        }
    }
    else if ($kevin >= $jim && $kevin >= $stanley && $kevin >= $michael && $kevin >= $dwight && $kevin >= $pam && $kevin >= $jan && $kevin >= $toby && $kevin >= $darryl && $kevin >= $erin && $kevin >= $andy &&
    $kevin >= $oscar && $kevin >= $ryan && $kevin >= $kelly && $kevin >= $gabe && $kevin >= $holly && $kevin >= $meredith && $kevin >= $phyllis && $kevin >= $david && $kevin >= $creed && $kevin >= $angela) {
        if ($live != 'blank' || $workday != 'blank' || $death != 'blank' || $dreamjob != 'blank') {
            file_put_contents($filename, 'kevin'."\n", FILE_APPEND);
            $t = time();
            file_put_contents($reports, $t . ",Kevin Malone," . $name. "\n", FILE_APPEND);
            ?>
            <script>
                let image = document.getElementById('image');
                let text = document.getElementById('text');
                text.innerHTML = " <?php echo $name ?>, you are Kevin Malone!";
                image.src = 'images/kevin.gif';
            </script>
            <?php
        }
    }
    else if ($david >= $jim && $david >= $stanley && $david >= $michael && $david >= $dwight && $david >= $pam && $david >= $jan && $david >= $toby && $david >= $darryl && $david >= $erin && $david >= $andy &&
    $david >= $oscar && $david >= $ryan && $david >= $kelly && $david >= $gabe && $david >= $holly && $david >= $meredith && $david >= $phyllis && $david >= $kevin && $david >= $creed && $david >= $angela) {
        if ($live != 'blank' || $workday != 'blank' || $death != 'blank' || $dreamjob != 'blank') {
            file_put_contents($filename, 'david'."\n", FILE_APPEND);
            $t = time();
            file_put_contents($reports, $t . ",David Wallace," . $name. "\n", FILE_APPEND);
            ?>
            <script>
                let image = document.getElementById('image');
                let text = document.getElementById('text');
                text.innerHTML = " <?php echo $name ?>, you are David Wallace!";
                image.src = 'images/david.gif';
            </script>
            <?php
        }
    }
    else if ($phyllis >= $jim && $phyllis >= $stanley && $phyllis >= $michael && $phyllis >= $dwight && $phyllis >= $pam && $phyllis >= $jan && $phyllis >= $toby && $phyllis >= $darryl && $phyllis >= $erin && $phyllis >= $andy &&
    $phyllis >= $oscar && $phyllis >= $ryan && $phyllis >= $kelly && $phyllis >= $gabe && $phyllis >= $holly && $phyllis >= $meredith && $phyllis >= $kevin && $phyllis >= $david && $phyllis >= $creed && $phyllis >= $angela) {
        if ($live != 'blank' || $workday != 'blank' || $death != 'blank' || $dreamjob != 'blank') {
            file_put_contents($filename, 'phyllis'."\n", FILE_APPEND);
            $t = time();
            file_put_contents($reports, $t . ",Phyllis Vance," . $name. "\n", FILE_APPEND);
            ?>
            <script>
                let image = document.getElementById('image');
                let text = document.getElementById('text');
                text.innerHTML = " <?php echo $name ?>, you are Phyllis Vance!";
                image.src = 'images/phyllis.gif';
            </script>
            <?php
        }
    }
    else if ($andy >= $jim && $andy >= $stanley && $andy >= $michael && $andy >= $dwight && $andy >= $pam && $andy >= $jan && $andy >= $toby && $andy >= $darryl && $andy >= $erin && $andy >= $kevin &&
    $andy >= $oscar && $andy >= $ryan && $andy >= $andy && $kevin >= $gabe && $andy >= $holly && $andy >= $meredith && $andy >= $phyllis && $andy >= $david && $andy >= $creed && $andy >= $angela) {
        if ($live != 'blank' || $workday != 'blank' || $death != 'blank' || $dreamjob != 'blank') {
            file_put_contents($filename, 'andy'."\n", FILE_APPEND);
            $t = time();
            file_put_contents($reports, $t . ",Andy Bernard," . $name. "\n", FILE_APPEND);
            ?>
            <script>
                let image = document.getElementById('image');
                let text = document.getElementById('text');
                text.innerHTML = " <?php echo $name ?>, you are Andy Bernard!";
                image.src = 'images/andy.gif';
            </script>
            <?php
        }
    }

    else if ($holly >= $jim && $holly >= $stanley && $holly >= $michael && $holly >= $dwight && $holly >= $pam && $holly >= $jan && $holly >= $toby && $holly >= $darryl && $holly >= $erin && $holly >= $kevin &&
    $holly >= $oscar && $holly >= $ryan && $holly >= $holly && $kevin >= $gabe && $holly >= $holly && $holly >= $meredith && $holly >= $phyllis && $holly >= $david && $holly >= $creed && $holly >= $angela) {
        if ($live != 'blank' || $workday != 'blank' || $death != 'blank' || $dreamjob != 'blank') {
            file_put_contents($filename, 'holly'."\n", FILE_APPEND);
            $t = time();
            file_put_contents($reports, $t . ",Holly Flax," . $name. "\n", FILE_APPEND);
            ?>
            <script>
                let image = document.getElementById('image');
                let text = document.getElementById('text');
                text.innerHTML = " <?php echo $name ?>, you are Holly Flax!";
                image.src = 'images/holly.gif';
            </script>
            <?php
        }

    }
    else if ($meredith >= $jim && $meredith >= $stanley && $meredith >= $michael && $meredith >= $dwight && $meredith >= $pam && $meredith >= $jan && $meredith >= $toby && $meredith >= $darryl && $meredith >= $erin && $meredith >= $kevin &&
    $meredith >= $oscar && $meredith >= $ryan && $meredith >= $meredith && $meredith >= $gabe && $meredith >= $holly && $meredith >= $andy && $meredith >= $phyllis && $meredith >= $david && $meredith >= $creed && $meredith >= $angela) {
        if ($live != 'blank' || $workday != 'blank' || $death != 'blank' || $dreamjob != 'blank') {
            file_put_contents($filename, 'meredith'."\n", FILE_APPEND);
            $t = time();
            file_put_contents($reports, $t . ",Meredith Palmer," . $name. "\n", FILE_APPEND);
            ?>
            <script>
                let image = document.getElementById('image');
                let text = document.getElementById('text');
                text.innerHTML = " <?php echo $name ?>, you are Meredith Palmer!";
                image.src = 'images/meredith.gif';
            </script>
            <?php
        }
    }



 ?>


