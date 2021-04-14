<?php
include('./header.php')
?>
<style>
main{
     font-family: cursive;
}
main p{
     font-size:1.4rem;
     color:blue;
     animation: change-opacity 1.5s infinite reverse;
     width:90%;
}
@keyframes change-opacity{
     from{opacity:0}
}
@keyframes shake{
     from{transform:translate(-3px)}
     to{transform:translate(3px)}
}
a.secret-button{
text-decoration:unset;
background: red;
padding: 10px;
color:white;
animation:shake 0.5s both infinite reverse ease-in;
}
a.secret-button:hover{
     animation:none
}
</style>

 <main>
  <p> Hello, I am Eze, Some days I feel like a really bad programmer, other days, just okay , I keep learning, I keep looking forward to the next big thing.  I really hope that big thing is'nt so far away...</p>
  <a href= "./siblings.php" class='secret-button'> See my little secret </a>
 </main>


 <?php include('./footer.php') ?>
     