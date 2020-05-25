<html>
    <head>
        <title>
            Login
        </title>
    </head>
    <body>
        <form action="login.php" method="POST">
            <input type="text" name="user_name">
            <input type="password" name="password">
            <input type="submit" value="Login">
        </form>
        <?php
            $username = 'root';
            $pw = '123';
            $host = 'localhost';
            $dbname = 'lab_12';
            $connect = mysqli_connect($host, $username, $pw, $dbname);
            if(!$connect){
                die("Cannot connect to database");
            }else{
                $user_name = $_POST['user_name'];
                $password = $_POST['password'];
                $sql = "SELECT * FROM users WHERE user_name = '$user_name' AND password = '$password'";
                $result = mysqli_query($connect, $sql);
                if(!$result){
                   
                }else{
                    session_start();
                    session_register('user', $user_name);
                }
            }
        ?>
    </body>
</html>
