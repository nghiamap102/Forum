<?php
    include './index/header.php';
    include './register/body.php';
    include './index/footer.php';
    
?>
<?php
    echo $_GET['username'];
    echo $_GET['nickname'];
    echo $_GET['password'];
    echo $_GET['confirm'];
    echo $_GET['sex'];
    echo $_GET['email'];
?>