<html>
    <head>
        <title>Front door</title>
    </head>
    <?php
        $bg = $_COOKIE['bg'];
        $fg = $_COOKIE['fg'];
    ?>
    <body bgcolor ="<?= $bg?>" text="<?= $fg ?>">
        <h1>Welcome to the store</h1>
        <p>
        We have many fine products for you to view, Please feel free to browse 
        the aisles and stop an assistant at any time. but remember, you break it 
        you bought it!</p>
        Would you like to <a href="PrefSelection.php">Change your preferences?</a>
        
    </body>
</html>
