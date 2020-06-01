
<html>
    <head>
        <title>
            Login
        </title>
    </head>
    <body>
        <?php
            if(!isset($_SESSION['username'])){
        ?>
            <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
                Username: <input type="text" name="username"><br/>
                Password: <input type="password" name="password"><br/>
                <input type="submit" value="Log in">
            </form>
        <?php
            }
        ?>
    </body>
</html>
<?php
$username = 'root';
$pw = '123';
$host = 'localhost';
$dbname = 'lab_12';
$connect = mysqli_connect($host, $username, $pw, $dbname);
if (!$connect) {
    die("Cannot connect to database");
} else {
    if (isset($_POST['username']) && isset($_POST['password'])) {
        $user_name = $_POST['username'];
        $password = $_POST['password'];
        print ("<br/>username : $user_name");
        print ("<br/>password : $password");
        $sql = "SELECT * FROM users WHERE (`user_name` = '$user_name' AND `password` = '$password')" ;
        print ("<br/>sql : $sql");
        $result = mysqli_query($connect, $sql);
        if (!$result) {
            echo "<font color ='red'>Invalid username or password!<font/>";
        } else {
            session_start();
            $row = mysqli_fetch_row($result);
            $_SESSION['username'] = $row[0];
        }
    }
}
?>