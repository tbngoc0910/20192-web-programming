<html>
    <head>
        <title>Exercise 2.9</title>
    </head>
    <body>
        <font size=5 color="Red"> Your Information </font>
        <?php
            $name = $_POST["name"];
            $gender = $_POST["gender"];
            $dob = $_POST["dob"];
            $uni = $_POST["uni"];
            $class = $_POST["class"];
            $level = $_POST["level"];
            $hobby = $_POST["hobby"];
            $id = $_POST["id"];
            $website = $_POST["web"];
            print "<br><br>Name : $name";
            print "&nbsp &nbsp Gender : $gender<br><br>";
            print "Date of birth : $dob<br><br>";
            print "Student's ID : $id<br><br>";
            print "Class : $class, $uni <br><br>";
            print "Hobby :";
            if(!empty($hobby)){
                print "<ul>";
                foreach ($hobby as $hb){
                    print "<li>$hb</li>";
                }
                print "</ul>";
            }
            if(strlen($website)!=0){
                print "<br>Website : $website";
            }
        ?>
    </body>
</html>
