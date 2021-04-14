<?php session_start() ?>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel='stylesheet' href='./styles.css' >
     <title>Authentication with PHP</title>   
</head>
<body>
  <header>
  <span> <a href="homepage.php">Basic PHP Auth </a></span>
  <?php if( isset($_SESSION['username'])): ?>
    <span>
    <span class='greeting'> Hello <?php echo $_SESSION['username'] ?></span>
    <a href="./logout.php"> Logout </a>
    </span>

    <?php else: ?>
  <span>
  <span class='greeting'> Hello Guest</span>
  <a href="./register.php"> Register </a>
  <a href="./login.php"> Login </a>
  </span>
  <?php endif; ?>
  </header>
     