<html>
    <head>
        <title>Receiving Input</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <font size="5">Your Information</font>
        <?php
            $name = filter_input(INPUT_POST, "name");
            $dateOfBirth = filter_input(INPUT_POST, "dateOfBirth");
            $sex = filter_input(INPUT_POST, "sex");
            $class = filter_input(INPUT_POST, "class");
            $school = filter_input(INPUT_POST, "school");
            print ("<br>My full name: $name"
                    . "<br>Date of birth: $dateOfBirth"
                    . "<br>Sex: $sex"
                    . "<br>Class: $class"
                    . "<br>School: $school");
            print "<br>Hobby: ";
            $numItems = count($_POST['hobby']);
            $i = 0;
            foreach ($_POST['hobby'] as $value) {
                print"$value";
                if(++$i == $numItems) {
                    continue;
                }
                print", ";
            }
        ?>
    </body>
</html>
