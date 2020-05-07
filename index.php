 <form action="home.php" method="GET">
     <input type="text" name="phone">
     <input type="submit">
    </form>
    <?php
    if (!empty($_REQUEST['phone'])) {
        setcookie('phone', $_REQUEST['phone'], time()+3600, '/');
    }
     ?>

