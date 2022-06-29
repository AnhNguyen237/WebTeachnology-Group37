<html>
    <head>
        <title>Receiving Input</title>
    </head>
    <body>
        <font size="5">Thank You: Got Your Input.</font>
        <?php
            $email = filter_input(INPUT_POST, "email");
            $contact = filter_input(INPUT_POST, "contact");
            print ("<br>Your email address is $email");
            print ("<br>Contact preference is $contact");
        ?>
    </body>
</html>
