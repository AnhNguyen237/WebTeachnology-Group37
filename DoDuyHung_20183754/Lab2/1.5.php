<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Date Time Processing Exercise</title>
</head>
<body>
    <form action="1.5.php" method="GET">
        <p>Enter your name and select date and time for the appointment</p>
        <table>
            <tr>
                <td>Your name: </td>
                <td colspan="3"><input type="text" name="name" size="20" maxlength="15" value="<?php echo $_GET['name'] ?? ''; ?>"></td>
            </tr>
            <tr>
                <td>Date: </td>
                <td>
                    <select name="day">
                        <?php 
                            for ($i = 1; $i < 32; $i++) {
                                if ($_GET['day'] == $i) {
                                    echo ("<option selected>$i</option>");
                                } else {
                                    echo ("<option>$i</option>");
                                }      
                            }
                        ?>
                    </select>
                </td>
                <td>
                    <Select name="month">
                        <?php 
                            for ($i = 1; $i < 13; $i++) {
                                if ($_GET['month'] == $i) {
                                    echo ("<option selected>$i</option>");
                                } else {
                                    echo ("<option>$i</option>");
                                }  
                            }
                        ?>
                    </Select>
                </td>
                <td>
                    <Select name="year">
                            <?php 
                                for ($i = 1900; $i < 2022; $i++) {
                                    if ($_GET['year'] == $i) {
                                        echo ("<option selected>$i</option>");
                                    } else {
                                        echo ("<option>$i</option>");
                                    } 
                                }
                            ?>  
                    </Select>
                </td>
            </tr>
            <tr>
                <td>Time: </td>
                <td>
                    <select name="hour">
                        <?php 
                            for ($i = 0; $i < 24; $i++) {
                                if ($_GET['hour'] == $i) {
                                    echo ("<option selected>$i</option>");
                                } else {
                                    echo ("<option>$i</option>");
                                } 
                            }
                        ?>
                    </select>
                </td>
                <td>
                    <select name="minute">
                        <?php 
                            for ($i = 0; $i < 60; $i++) {
                                if ($_GET['minute'] == $i) {
                                    echo ("<option selected>$i</option>");
                                } else {
                                    echo ("<option>$i</option>");
                                } 
                            }
                        ?>
                    </select>
                </td>
                <td>
                    <select name="second">
                        <?php 
                            for ($i = 0; $i < 60; $i++) {
                                if ($_GET['second'] == $i) {
                                    echo ("<option selected>$i</option>");
                                } else {
                                    echo ("<option>$i</option>");
                                } 
                            }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td style="text-align: right"><input type="submit" value="submit"></td>
                <td><input type="reset" value="reset"></td>
            </tr>
        </table>
    </form>
    <?php
        if (array_key_exists("name", $_GET)) {
            echo "Hi ".$_GET['name'];
            echo "<br />";
            echo "you have choose to have an appointment on ".
            $_GET['hour'].":".$_GET['minute'].":".$_GET['second']
            .",".$_GET['day']."/".$_GET['month']."/".$_GET['year'];
            echo "<br />";
            echo "<br />";
            echo "More information";
            echo "<br />";
            echo "<br />";
            echo "In 12 hours, the time and date is ";
            $tail = "AM";
            $hour = $_GET["hour"];
            if ($hour > 12) {
                $tail = "PM";
                echo $hour-12;
            } else {
                $tail = "AM";
                echo $hour;
            }
            echo ":".$_GET['minute'].":".$_GET['second']." ".$tail
            .",".$_GET['day']."/".$_GET['month']."/".$_GET['year'];
            echo "<br />";
            echo "<br />";
            $year = $_GET['year'];
            $day;
            switch ($_GET['month']) {
                case 1: 
                case 3: 
                case 5: 
                case 7: 
                case 8: 
                case 10: 
                case 12:
                    $day = 31;
                    break;
                case 4: 
                case 6: 
                case 9: 
                case 11:
                    $day = 30;
                    break;
                case 2:
                    if ($year % 4 == 0) {
                        $day = 29;
                    } else {
                        $day = 28;
                    }
                    break;
            }
            echo "This month has ".$day." days!";
        }
            
    ?>
</body>
</html>
