
<!DOCTYPE html>
<html lang="en-us">
  <head>
    <title>Quiz Results</title>
    <link type="text/css" href="styles.css" rel="stylesheet" />
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap');
        table {
            table-layout: fixed;
            width: 100%;
        }
        table, th, td {
            border: 1px solid white;
        }
        th, td {
            font-size: 1.5rem;
            padding: 10px;
        }
        td {
            width: 33.3%;
        }
        body {
            background-color: black;
            color: white;
            font-family: 'Montserrat', sans-serif;
        }
        #container {
            padding-top: 2rem;
            margin: auto;
            width: 1000px;
            text-align: center;
        }
        h1 {
            font-size: 2.5rem;
        }
        #back {
            margin-bottom: 2rem;
            
        }
    </style>
  </head>
  <body>
    <div id="container">
        <h1>10 Most Recent Quiz Results</h1>
        <button id="back" onclick="window.location.href='index.php'">Back to Quiz</button>
        <button id="back" onclick="window.location.href='results.php'">See Aggregate Results</button>


        <div id="content">
            <table>
                <tr>
                    <th>Date</th>
                    <th>Name</th>
                    <th>Character</th>
                </tr>
                <?php 

                    $report = file_get_contents('/home/bch305/public_html/webdev/finalproj/data/reports.txt');
                    $reports = explode("\n", $report);
                    $var = count($reports);
                    if ($var < 10) {
                        $var = 0;
                    }
                    else {
                        $var = count($reports) - 11;
                    }
                    for ($var; $var < count($reports)-1; $var++) {
                        $temp = explode(",", $reports[$var]);
                        $time = $temp[0];
                        $time = date('Y-m-d H:i:s', $time);
                        $user = $temp[2];
                        $action = $temp[1];
                        ?>
                        <tr>
                            <td><?php echo $time ?></td>
                            <td><?php echo $user ?></td>
                            <td><?php echo $action ?></td>
                        </tr>
                <?php
                    }
                    ?>


            </table>
        </div>
    </div>
    </body>


</html>