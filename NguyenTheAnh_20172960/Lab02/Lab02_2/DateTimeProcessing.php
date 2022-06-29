<html>
    <head><title>Date Time Processing</title></head>
    
    <body>
        <font size="5" color="blue">Enter your name and select date and time for the appointment</font>
        <br></br>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="GET">
            <label for="name">Your name:</label>
            <input type="text" id="name" name="name">
            <table>
                <tr>
                    <td>Date: </td>
                    <td>
                        <select name="day">
                            <?php
                                for ($i = 1; $i <= 31; $i++) {
                                    print "<option>$i</option>";
                                }
                            ?>
                        </select>
                    </td>
                    <td>
                        <select name="month">
                            <?php
                                for ($i = 1; $i <= 12; $i++) {
                                    print "<option>$i</option>";
                                }
                            ?>
                        </select>
                    </td>
                    <td>
                        <select name="year">
                            <?php
                                for ($i = 1000; $i <= 3000; $i++) {
                                    print "<option>$i</option>";
                                }
                            ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Time: </td>
                    <td>
                        <select name="hour">
                            <?php
                                for ($i = 0; $i <= 60; $i++) {
                                    print "<option>$i</option>";
                                }
                            ?>
                        </select>
                    </td>
                    <td>
                        <select name="minute">
                            <?php
                                for ($i = 0; $i <= 60; $i++) {
                                    print "<option>$i</option>";
                                }
                            ?>
                        </select>
                    </td>
                    <td>
                        <select name="second">
                            <?php
                                for ($i = 0; $i <= 60; $i++) {
                                    print "<option>$i</option>";
                                }
                            ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td align="right"><input type="submit" value="Submit"></td>
                    <td align="left"><input type="reset" value="Reset"></td>
                </tr>
            </table>
            
            <?php
                if (array_key_exists("day", $_GET)) {
                    $name = isset($_GET['name']) ? $_GET['name'] : '';
                    $day = (int) $_GET['day'];
                    $month = (int) $_GET['month'];
                    $year = (int) $_GET['year'];
                    $hour = (int) $_GET['hour'];
                    $minute = (int)$_GET['minute'];
                    $second = (int) $_GET['second'];
                    print "<br>Hi $name"
                            . "<br>You have choose to have an appointment on $hour:$minute:$second, $day/$month/$year"
                            . "<br></br>More information";
                    if ($hour >= 12) {
                        if($hour > 12) $hour -= 12;
                        print "<br></br>In 12 hours, the time and date is $hour:$minute:$second PM, $day/$month/$year";
                    }else {
                        print "<br></br>In 12 hours, the time and date is $hour:$minute:$second AM, $day/$month/$year";
                    }

                    switch($month){
                        case 2:
                        {
                            if($year%4==0 || $year%400==0) {
                                $countDay = 29;
                            }else {
                                $countDay = 28;
                            }
                            break;
                        }
                        case 4:
                        case 6:
                        case 9:
                        case 11:
                            $countDay = 31;
                            break;
                        default :
                            $countDay = 30;
                    }
                    print "<br></br>This month has $countDay days!";
                } 
                    
                    
            ?>
            
            
        </form>
    </body>
</html>