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
    <div id="us1" class="container p-5 my-5 bg-dark text-white">
        <h1>USER 1</h1>
        <form method="post">
            <label>
                <input type="password" name="input" placeholder="enter unique number" pattern="[1-6]{4}" style="color: black">
            </label>
            <br><br>
            <input type="submit"  class="btn btn-primary">
        </form>
    </div>
</div>
<br>
<br>
<br>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    $user1= $_POST['input'];
    session_start();
    $_SESSION['pass'] = $user1;
    echo '<meta http-equiv="refresh" content="0; url = http://localhost:63342/own%20website/PHP/game/game.php">';
}
?>

<button data-toggle="collapse" data-target="#demo">INSTRUCTIONS</button>

<div id="demo" class="collapse">
    <h3><br>
        * Firstly a player enters a 4 digit secret number in range of 1-6.<br><br>
        * Second player have to guess the number given by first player.<br>
        <br></h3>
</div>
<script src="../../js/index.js"></script>
</body>
</html>