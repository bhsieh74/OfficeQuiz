<?php

    if ($_COOKIE['stanley']) {
        $stanley = $_COOKIE['stanley'];
    }
    else {
        setcookie('stanley', 0);
    }
    if ($_COOKIE['pam']) {
        $pam = $_COOKIE['pam'];
    }
    else {
        setcookie('pam', 0);
    }
    if ($_COOKIE['jim']) {
        $jim = $_COOKIE['jim'];
    }
    else {
        setcookie('jim', 0);
    }
    if ($_COOKIE['michael']) {
        $michael = $_COOKIE['michael'];
    }
    else {
        setcookie('michael', 0);
    }
    if ($_COOKIE['dwight']) {
        $dwight = $_COOKIE['dwight'];
    }
    else {
        setcookie('dwight', 0);
    }
    if ($_COOKIE['andy']) {
        $andy = $_COOKIE['andy'];
    }
    else {
        setcookie('andy', 0);
    }
    if ($_COOKIE['darryl']) {
        $darryl = $_COOKIE['darryl'];
    }
    else {
        setcookie('darryl', 0);
    }
    if ($_COOKIE['toby']) {
        $toby = $_COOKIE['toby'];
    }
    else {
        setcookie('toby', 0);
    }
    if ($_COOKIE['jan']) {
        $jan = $_COOKIE['jan'];
    }
    else {
        setcookie('jan', 0);
    }
    if ($_COOKIE['meredith']) {
        $meredith = $_COOKIE['meredith'];
    }
    else {
        setcookie('meredith', 0);
    }
    if ($_COOKIE['creed']) {
        $creed = $_COOKIE['creed'];
    }
    else {
        setcookie('creed', 0);
    }
    if ($_COOKIE['gabe']) {
        $gabe = $_COOKIE['gabe'];
    }
    else {
        setcookie('gabe', 0);
    }
    if ($_COOKIE['angela']) {
        $angela = $_COOKIE['angela'];
    }
    else {
        setcookie('angela', 0);
    }
    if ($_COOKIE['ryan']) {
        $ryan = $_COOKIE['ryan'];
    }
    else {
        setcookie('ryan', 0);
    }
    if ($_COOKIE['kelly']) {
        $kelly = $_COOKIE['kelly'];
    }
    else {
        setcookie('kelly', 0);
    }
    if ($_COOKIE['david']) {
        $david = $_COOKIE['david'];
    }
    else {
        setcookie('david', 0);
    }
    if ($_COOKIE['erin']) {
        $erin = $_COOKIE['erin'];
    }
    else {
        setcookie('erin', 0);
    }
    if ($_COOKIE['kevin']) {
        $kevin = $_COOKIE['kevin'];
    }
    else {
        setcookie('kevin', 0);
    }
    if ($_COOKIE['oscar']) {
        $oscar = $_COOKIE['oscar'];
    }
    else {
        setcookie('oscar', 0);
    }
    if ($_COOKIE['phyllis']) {
        $phyllis = $_COOKIE['phyllis'];
    }
    else {
        setcookie('phyllis', 0);
    }
    if ($_COOKIE['holly']) {
        $holly = $_COOKIE['holly'];
    }
    else {
        setcookie('holly', 0);
    }

?>

<html>
    <head>
        <title>Results!</title>
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap');
            body {
                font-family: 'Montserrat', sans-serif;
                font-size: .8rem;
                color: white;
                background-color: black;
                text-align: center;
                overflow: hidden;
            }
            
        
            #back {
                margin-top: 3rem;
            }
            #results {
                margin: auto;
            }
        </style>
        
    </head>


    <body>
        <h1>Quiz Results</h1>
        <h2 id="submissions">In total there have been ___ submissions</h2>
        <button id="back" onclick="window.location.href='index.php'">Back to Quiz</button>
        <button id="back" onclick="window.location.href='reports.php'">See Other Users' Results</button>

        <div id="results"></div>
        
    </body>

    <?php

        $filename = '/home/bch305/public_html/webdev/finalproj/data/data.txt';
        $filenam = '/xampp/htdocs/finalproj/data/data.txt';
        $alldata = file_get_contents($filename);

        $characters = explode("\n", $alldata);

        $p = 0;
        $j = 0;
        $d = 0;
        $m = 0;
        $s = 0;
        $andy = 0;
        $darryl = 0;
        $jan = 0;
        $toby = 0;
        $total = 0;
        $oscar = 0;
        $kevin = 0;
        $ryan = 0;
        $kelly = 0;
        $erin = 0;
        $angela = 0;
        $phyllis = 0;
        $gabe = 0;
        $creed = 0;
        $holly = 0;
        $david = 0;
        $meredith = 0;

        for ($i = 0; $i < sizeof($characters); $i++) {
             
            if ($characters[$i] == 'jim') {
                $j += 1;
            }
            else if ($characters[$i] == 'pam') {
                $p += 1;
            }
            else if ($characters[$i] == 'stanley') {
                $s += 1;
            }
            else if ($characters[$i] == 'michael') {
                $m += 1;
            }
            else if ($characters[$i] == 'dwight') {
                $d += 1;
            }
            else if ($characters[$i] == 'andy') {
                $andy += 1;
            }
            else if ($characters[$i] == 'darryl') {
                $darryl += 1;
            }
            else if ($characters[$i] == 'toby') {
                $toby += 1;
            }
            else if ($characters[$i] == 'jan') {
                $jan += 1;
            }
            else if ($characters[$i] == 'holly') {
                $holly += 1;
            }
            else if ($characters[$i] == 'ryan') {
                $ryan += 1;
            }
            else if ($characters[$i] == 'kelly') {
                $kelly += 1;
            }
            else if ($characters[$i] == 'oscar') {
                $oscar += 1;
            }
            else if ($characters[$i] == 'kevin') {
                $kevin += 1;
            }
            else if ($characters[$i] == 'david') {
                $david += 1;
            }
            else if ($characters[$i] == 'meredith') {
                $meredith += 1;
            }
            else if ($characters[$i] == 'creed') {
                $creed += 1;
            }
            else if ($characters[$i] == 'erin') {
                $erin += 1;
            }
            else if ($characters[$i] == 'phyllis') {
                $phyllis += 1;
            }
            else if ($characters[$i] == 'gabe') {
                $gabe += 1;
            }
            else if ($characters[$i] == 'angela') {
                $angela += 1;
            }
        }
        setcookie('jim', $j);
        setcookie('pam', $p);
        setcookie('michael', $m);
        setcookie('dwight', $d);
        setcookie('stanley', $s);
        setcookie('andy', $andy);
        setcookie('darryl', $darryl);
        setcookie('toby', $toby);
        setcookie('jan', $jan);
        setcookie('ryan', $ryan);
        setcookie('erin', $erin);
        setcookie('kelly', $kelly);
        setcookie('kevin', $kevin);
        setcookie('david', $david);
        setcookie('oscar', $oscar);
        setcookie('phyllis', $phyllis);
        setcookie('meredith', $meredith);
        setcookie('creed', $creed);
        setcookie('gabe', $gabe);
        setcookie('angela', $angela);
        setcookie('holly', $holly);


        $total = $p + $j + $m + $d + $s + $darryl + $toby + $jan + $andy + $ryan + $erin + $kelly + $kevin + $david + $oscar + $meredith + $phyllis + $creed + $gabe + $angela + $holly;
        

        ?>
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

        <script type="text/javascript">
            google.charts.load('current', {'packages':['corechart']});
            google.charts.setOnLoadCallback(drawChart);

            function drawChart() {

                var data = google.visualization.arrayToDataTable([
                ['', 'Hours per Day'],
                ['Jim',     <?php echo $j ?>],
                ['Michael',      <?php echo $m ?>],
                ['Dwight',  <?php echo $d ?>],
                ['Pam', <?php echo $p ?>],
                ['Andy', <?php echo $andy ?>],
                ['Jan', <?php echo $jan ?>],
                ['Stanley', <?php echo $s ?>],
                ['Toby', <?php echo $toby ?>],
                ['Darryl', <?php echo $darryl ?>],
                ['Oscar', <?php echo $oscar ?>],
                ['Meredith', <?php echo $meredith ?>],
                ['Angela', <?php echo $angela ?>],
                ['Kevin', <?php echo $kevin ?>],
                ['David', <?php echo $david ?>],
                ['Kelly', <?php echo $kelly ?>],
                ['Ryan', <?php echo $ryan ?>],
                ['Creed', <?php echo $creed ?>],
                ['Erin', <?php echo $erin ?>],
                ['Holly', <?php echo $holly ?>],
                ['Gabe', <?php echo $gabe ?>],
                ['Phyllis', <?php echo $phyllis ?>],



                ]);

                var options = {'title':'Distribution of "The Office" Characters', 'width':'100%', 'height':800, 'titleTextStyle': {color: 'white'}, 'is3D':true, 'backgroundColor': 'black', 'legend':{position: 'top', textStyle: {color: 'white', fontSize: 16}}};


                var chart = new google.visualization.PieChart(document.getElementById('results'));

                chart.draw(data, options);
            }
            let submissions = document.getElementById('submissions');
            submissions.innerHTML = "In total there have been " + <?php echo $total; ?> + " submissions.";

        </script>

        <?php


    ?>