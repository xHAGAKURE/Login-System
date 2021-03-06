<?php
session_start();
if (isset($_SESSION["username"])) {
?>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
<link rel="stylesheet" href="/css/custom_user.css">
<!-- <link rel="stylesheet" href="http://getbootstrap.com/examples/navbar-fixed-top/navbar-fixed-top.css"> -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

    <title>Backend</title>
</head>
<body>

  <!-- Fixed navbar -->
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Projektname</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#about">Über uns</a></li>
            <li><a href="#contact">Kontakt</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Weiteres <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">???</a></li>
                <li><a href="#">???</a></li>
                <li><a href="#">???</a></li>
                <li role="separator" class="divider"></li>
                <li class="dropdown-header">Neuer Bereich</li>
                <li><a href="#">???</a></li>
                <li><a href="#">???</a></li>
              </ul>
            </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container">


      <div class="jumbotron">
        <h1>Hallo <?php echo $_SESSION["username"]; ?></h1>
		Du bist nun auf der neuen Startseite des "Projektname".
		<br /><br /><br />
        <p>
          <a class="btn btn-lg btn-primary" href="logout.php" role="button">Abmelden &raquo;</a>
        </p>
      </div>
	  </div>
	  
<div id="footer">
      <div class="container">
        <p class="text-muted credit">Design by <a href="/user/hagakure">HAGAKURE</a>, Coding by <a href="/user/skillkiller">Skillkiller</a>. &copy; All rights reserverd 2016</p>
      </div>
    </div>

</body>
</html>
<?php    
} else {
?> 
<p>Um diesen Bereich betreten zu d&uuml;rfen musst du dich erst anmelden. <a href="index.php">Zur&uuml;ck</a></p>  
<?php    
}
?>