<html>
    <head>
        <title> Conditional Test </title>
    </head>
    <body>
        <?php 
            $first = $_GET["firstName"]; $middle = $_GET["middleName"]; $last = $_GET["lastName"];
            print("Hi $first! Your full name is  $first $middle $last . <br>");
            if($first == $last){
                print("$first and $last are equal");
            }
            if($first < $last){
                print("$first is less than $last");
            }
            else print("$first is greater than $last");
            print("<br>");
            $grade1 = $_GET["grade1"]; $grade2 = $_GET["grade2"];
            $final = (2 * $grade1 + 3 * $grade2) / 5;
            if ($final > 89){
                print("Your final grade is $final. You got an A.  Congratulation");
                $rate = "A";
            }
            elseif($final > 79){
                print("Your final grade is $final. You got an B.");
                $rate = "B";
            }
            elseif($final > 69){
                print("Your final grade is $final. You got an C.");
                $rate = "C";
            }
            elseif($final > 59){
                print("Your final grade is $final. You got an D.");
                $rate = "D";
            }
            else{
                print("Illegal grade less than 0. Final grade = $final");
                $rate = "F";
            }

            print("<br>");
            switch($rate){
                case "A": print("Excellent!"); break;
                case "B": print("Good!"); break;
                case "C": print("Not bad!"); break;
                case "D": print("Normal!"); break;
                case "F": print("You have to try again!"); break;
                default : print("Illegal grade!");
            }
        ?>

    </body>

</html>