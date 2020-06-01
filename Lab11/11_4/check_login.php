<html>
    <head><title>Preferences Set</title></head>
    <body>
        <?php 
        if(isset($_SESSION['username'])){
            $user = $_SESSION['username'];
            print "Hello, $user !You are successfully logged in!";
        }
        ?>
        Click <a href="login.php">here</a> to login.
    </body>
</html>

