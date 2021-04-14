<?php
include('./header.php');
$message = '';

if(isset($_POST['register'])) :
    $filename = "./users/{$_POST['email']}.csv";
    if(!file_exists($filename)){
     $string = [ $_POST['name'], $_POST['email'],  $_POST['password']];
    $file = fopen( $filename , 'w');
    fputcsv($file, $string );
    fclose($file);
    $message= "Registration successful, you can log in with your credentials";
}
else{
    $message = "User Already Exists";
}

    endif ;
?>
  
 <main>
 <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method='POST'>
 <h1 class='message'> <?php echo $message ?> </h1>
 <input type="text" name='name' placeholder='please input name'>
 <input type="email" required name='email' placeholder='please input email'>
 <input type="password" required name='password' placeholder='please input password'>
 <button name='register'> Register </button>

 </form>
 </main>

 <?php
include('./footer.php');
?>
