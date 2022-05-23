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
    <br><br><br><br>
    <div class="container p-5 my-5 bg-dark text-white">
        <h1>USER <?php echo $_GET['user'];?> YOU WON THE GAME</h1>
        <iframe src="https://giphy.com/embed/9xt1MUZqkneFiWrAAD" width="280" height="280" frameBorder="0" class="giphy-embed" allowFullScreen></iframe>
         <br>
        <a href="user1.php" class="btn btn-primary">PLAY AGAIN</a>
    </div>
 </div>
<script src="../../js/index.js"></script>
</body>
</html>