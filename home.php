
<?php 
 
  $phone = $_COOKIE['phone']; 
  ?> 
 
  <form action="" method="GET"> 
       <input type="text" name="name"> 
  <input type="text" name="surname"> 
 

 <input type="text" name="phone" value="<?php echo $phone ?> "> 
 
 <input type="submit"> 
 </form>
 <?php

 print_r($_COOKIE);
 ?>