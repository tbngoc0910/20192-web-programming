<html>
    <head><title>Results</title></head>
    <body>
        <?php
        $email = $_POST["email"];
        $url = $_POST["url"];
        $phone = $_POST["phone"];
        if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i", $url)) {
            print "Invalid URL = $url<br>";
        }else{
            print "Url = $url<br>";
        }
        if(preg_match('/^0+[0-9]{9}/', $phone)){
            print "Phone number = $phone<br>";
        }else{
            print "Invalid phone number = $phone<br>";
        }
        if(preg_match('/[a-zA-Z0-9._]+\@[a-zA-Z]+.[a-zA-Z]/', $email)){
            print "Email = $email";
        }else{
            print "Invalid email = $email";
        }
        
        ?>
    </body>
</html>
