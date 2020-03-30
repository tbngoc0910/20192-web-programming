<html>
    <head><title>Date Time Processing</title></head>
    <body>
        Enter your name and select date and time for the appointment:
        <br>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="GET">
            <?php
            if (array_key_exists("day", $_GET)) {
                $day = $_GET["day"];
                $month = $_GET["month"];
                $year = $_GET["year"];
                $second = $_GET["second"];
                $minute = $_GET["minute"];
                $hour = $_GET["hour"];
            } else {
                $day = 0;
                $month = 0;
                $year = 0;
                $second = 0;
                $minute = 0;
                $hour = 0;
            }
            ?>
            <table>
                <tr>
                    <td>
                        Your name :
                    </td>
                    <td colspan="3">
                        <input type="text" size="20" name="name">
                    </td>
                </tr>
                <tr>
                    <td>Date :</td>
                    <td >
                        <select name="day">
                            <?php
                            for ($i = 1; $i <= 31; $i++) {
                                if ($day == $i) {
                                    print "<option selected>$i</option>";
                                } else {
                                    print "<option>$i</option>";
                                }
                            }
                            ?>
                        </select>
                    </td>
                    <td >
                        <select name="month">
                            <?php
                            for ($i = 1; $i <= 12; $i++) {
                                if ($month == $i) {
                                    print "<option selected>$i</option>";
                                } else {
                                    print "<option>$i</option>";
                                }
                            }
                            ?>
                        </select>
                    </td>
                    <td >
                        <select name="year">
                            <?php
                            for ($i = 2020; $i <= 3000; $i++) {
                                if ($year == $i) {
                                    print "<option selected>$i</option>";
                                } else {
                                    print "<option>$i</option>";
                                }
                            }
                            ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Time :</td>
                    <td>
                        <select name="second">
                            <?php
                            for ($i = 0; $i <= 60; $i++) {
                                if ($second == $i) {
                                    print "<option selected>$i</option>";
                                } else {
                                    print "<option>$i</option>";
                                }
                            }
                            ?>
                        </select>
                    </td>
                    <td>
                        <select name="minute">
                            <?php
                            for ($i = 0; $i <= 60; $i++) {
                                if ($minute == $i) {
                                    print "<option selected>$i</option>";
                                } else {
                                    print "<option>$i</option>";
                                }
                            }
                            ?>  
                        </select>
                    </td>
                    <td>
                        <select name="hour">
                            <?php
                            for ($i = 0; $i <= 23; $i++) {
                                if ($hour == $i) {
                                    print "<option selected>$i</option>";
                                } else {
                                    print "<option>$i</option>";
                                }
                            }
                            ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td align="right"> <input type="submit" value="Submit"></td>
                    <td align="left"> <input type="reset" value="Reset"></td>
                </tr>
            </table>
            <?php
                if(array_key_exists("name",$_GET)){
                    $name = $_GET["name"];
                    print "Hi $name<br>";
                    $numberOfDay = 0;
                    function validateDate($day, $month, $year, &$numberOfday){
                        $valid = true;
                        switch($month){
                            case 4: case 6 : case 9: case 11:
                                if($day == 31){ $valid = false;
                                $numberOfday = 30;
                                }
                                break;
                            case 2:
                                if($year%4 != 0 || $year%100==0 && $year%400!=0){
                                    if($day > 29){
                                        $valid = false;
                                        $numberOfday=28;
                                    }
                                }
                                else{
                                    if($day > 29){
                                        $valid = false;
                                        $numberOfday=29;
                                    }
                                }
                                break;
                            default : $numberOfday = 31;
                        }
                    return $valid;
                    }
                    $valid = validateDate($day, $month, $year, $numberOfDay);
                    if($valid){
                        print "You have choose to have an appointment on $hour:$minute:$second, $day/$month/$year<br>";
                        if($hour>=12){
                            $hour = $hour - 12;
                        }
                        print "In 12 hours, the time and date is $hour:$minute:$second, $day/$month/$year<br>";
                        print "This month has $numberOfDay days!";
                    }
                    else{
                        print "Wrong number of day in month!";
                    }
                }
            ?>
        </form>
    </body>
</html>

