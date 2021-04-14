<?php
include('./header.php');
$user = '';
$message= '';

if(isset($_POST['login'])) {
     $filename = "./users/{$_POST['email']}.csv" ;
     if(file_exists($filename)):
     $file = fopen( $filename , 'r');
     $content = fgetcsv($file);
     fclose($file);
      if($_POST['password'] == $content[2]) {
         $user = $content;
      }
      else{
          $message = "Invalid Credentials";
        }
    
      else:
          $message= 'User not found';
      endif;

    if($user):
    session_start();
    $_SESSION['username'] = $user[0] ;
    $_SESSION['email'] = $user[1] ;
    if(isset($_SESSION['to'])) header("Location:{$_SESSION['to']}");
    else { header('Location: homepage.php'); }
    
    endif;
}
?>
 <main>
 <?php if( isset($_SESSION['message'])): ?>
     <h1> You must log in first</h1>
     <?php endif; ?>

 <form method='POST' action="<?php echo $_SERVER['PHP_SELF']?>">
 <h1 class='message'> <?php echo $message ?> </h1>
 <input type="email" name='email' required placeholder='email'>
 <input type="password" name='password' required placeholder='password'>
 <button name='login'> Login </button>
 <p> forgot password? <a href='./resetpass.php'> reset it here </a></p>
 </form>
 </main>

 <?php
include('./footer.php');
?>

