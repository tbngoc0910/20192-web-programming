<html>
    <head>
        <title>Create table</title>
    </head>
    <body>
        <?php
            $server = 'localhost';
            $user = 'user';
            $pass = 'user';
            $mydb = 'mydatabase';
            $table_name = 'Products';
            $connect = mysqli_connect($server, $user, $pass, $mydb);
            if(!$connect){
                die("cannot connect");
            }else{
                $SQLcmd = "create table $table_name(ProductID int unsigned not null auto_increment primary key,"
                        . "                         Product_desc varchar(50),"
                        . "                         Cost int,"
                        . "                         Weight int, numb int)";
//                mysql_select_db($mydb);
                if(mysqli_query($connect, $SQLcmd)){
                    print '<font size="4" color="blue"> Created table ';
                    print "<i>$table_name</i> in database <i>$mydb</i><br></font>";
                    print "<br>SQLcmd = $SQLcmd";
                }else{
                    die("Table create creation failed SQLcmd = $SQLcmd");
                }
            }
            mysqli_close();
        ?>
    </body>
</html>
