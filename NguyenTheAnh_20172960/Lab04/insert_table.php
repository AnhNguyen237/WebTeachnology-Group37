<html><head><title>Insert data</title></head><body>
 <?php
    $desc = $_POST['item-des'];
    $cost = $_POST['item-cost'];
    $weight = $_POST['item-weight'];
    $numb = $_POST['item-total'];
    $server = "localhost";
    $user = "root";
    $pass = "";
    $mydb = "Lab04";
    $table_name = "Products";
    $connect = new mysqli($server, $user, $pass, $mydb);
    if ($connect->connect_error) {
        die("Connection failed: " . $connect->connect_error);
    }
    $sql = "INSERT INTO Products (Product_desc, Cost, Weight, Numb) Values ('$desc', $cost, $weight, $numb)";
    
    if($connect -> query($sql) === true) {
        echo "New data inserted successfully!!!";
} else {
  echo "Error: " . $sql . "<br>" . $connect->error;
}

$connect -> close();
    
?></body></html> 