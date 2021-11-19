
<?php
    if (isset($_GET['submit'])){
        if (empty($_GET['username'])){
            echo "Username is invalid";
        }elseif (empty($_GET['password'])) {
            echo "Password is invalid";
        }
        // echo $_GET['password'];
        // echo $_GET['username'];
    }
?>   
<!DOCTYPE html>
<html>
    <?php include ('templates/body.php'); ?>
    
    
</html> 