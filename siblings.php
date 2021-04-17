<?php
include('./header.php');
$mySiblings = [
     'first'=>"Obi",
     'second'=>"Nedu",
     'third'=>"Deni",
     'fourth'=>"Ashim",
     'sixth'=>"Nneka",
     'last'=>"Nazor",
];
if(!$_SESSION['username']){
     $_SESSION['message'] = "You have to login first";
     $_SESSION['to'] = 'siblings.php';
     header('Location: login.php');
}
?>
 <main>
 <h2 class='green-message'>  Here we go, a little about myself: I have 6 siblings, I am the 5th child and these are my siblings and their names...😞😞😞<h2>
 <?php 
 foreach($mySiblings as $key=>$value) :
     echo "{$key} child : {$value} <br>";
 endforeach;
 ?>
   


  <p>uh... now you know my little secret ☹️☹️☹️ </p>

 </main>


 <?php include('./footer.php') ?>
     