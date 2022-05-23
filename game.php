<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>20EUIT511 PHP ASSIGNMENTS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../../CSS/game.css">
</head>
<body>
<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="../../index.html">Home</a>
        </div>
        <ul class="nav navbar-nav">
            <li class=""> <a href="../../HTML/student_Reg.html">STUDENT REGISTRATION FORM</a></li>
            <li>  <a href="../../HTML/simpleInterst.html">SI AND CI CALCULATOR</a></li>
            <li><a href="../../PHP/onlineexam/index.php">ONLINE EXAMINATION PORTAL</a></li>
        </ul>
    </div>
</nav>
<div class="d p-5 my-5 bg-dark text-white">
    <h1 > WELCOME TO OUR GAME </h1>
    <br><br><br><br>
    <div class="container p-5 my-5 bg-dark text-white">
    <h1>USER 2</h1>
      <form method="post" action="game.php">
            <label>
             <input type="text" name="us2"  placeholder="IDENTIFY USER1 NUMBER" pattern="[1-6]{4}" required style="color: black">
            </label>
            <br><br>
            <input type="submit" id="btn"  class="btn btn-primary">
          <a href="sucess.php?user=1"  class="btn btn-primary">GIVE UP</a>
        </form><br>
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      session_start();
        $pass = $_SESSION['pass'];
        $guess = $_POST['us2'];
        $k = 0;
        if ($pass == $guess) {
            echo '<meta http-equiv="refresh" content="0; url = http://localhost:63342/own%20website/PHP/game/sucess.php?user=2">';
            exit;
        } else {
            for ($i = 0; $i < 4; $i++) {
                $a[$i] = $pass % 10;
                $pass /= 10;
                $c[$i] = $guess % 10;
                $guess /= 10;
            }
            $v = array_reverse($a);
            $x = array_reverse($c);
            for ($i = 0; $i < 4; $i++) {
                if ($v[$i] == $x[$i]) {
                    echo " (+)";
                    $k++;
                } else {
                    $temp = 0;
                    for ($j = 0; $j < 4; $j++) {
                        if ($v[$j] == $x[$i]) {
                            echo "(-)";
                            $temp = 1;
                        }
                    }
                    if ($temp == 0)
                        echo "(' ')";
                }
            }
        }
    }
?>
    </div>
</div>
<button data-toggle="collapse" data-target="#demo">INSTRUCTION</button>

<div id="demo" class="collapse">
    <h3>
        <br>
        * Second player have to guess the number given by first player in unlimited guesses or give up.<br><br>
        * If (+) is present the Number at exact position and also present in secret number.<br><br>
        * If (-) is present the Number at different position But present in secret number.<br><br>
        * If (' ') is present the Number is Not present in secret number.<br>
        <br> </h3>
</div><script src="../../js/index.js"></script>
</body>
</html>