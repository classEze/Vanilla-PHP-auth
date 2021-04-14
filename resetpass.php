<?php
include('./header.php');
$user = '';
$message= '';

if(isset($_POST['reset'])) {
     $filename = "./users/{$_POST['email']}.csv" ;
     if(file_exists($filename)):
     $file = fopen( $filename , 'r');
     $content = fgetcsv($file);
     $newPassword = $_POST['password'];
     $newContent = [$content[0], $content[1], $newPassword];
     $file = fopen( $filename , 'w');
     fputcsv($file, $newContent);
     fclose($file);
     $message = " Password successfully changed, you can login with your new password";


    
      else:
          $message= ' User Not Found';
      endif;

}
?>
 <main>
 <h1 class='green-message'> <?php echo $message ?> </h1>
 <form method='POST' action="<?php echo $_SERVER['PHP_SELF']?>">
 <input type="email" name='email' required placeholder='email'>
 <input type="password" name='password' required placeholder='new password'>
 <button name='reset'> Reset </button>
 </form>
 </main>

 <?php
include('./footer.php');
?>

