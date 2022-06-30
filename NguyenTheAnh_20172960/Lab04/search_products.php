<html><head>
        <title>Create Table</title>
        <style>
            table, th, td {
              border: 1px solid black;
              border-collapse: collapse;
            }
        </style>
    </head><body>
 <?php
    $product_desc = $_POST["search-product"];
    $server = "localhost";
    $user = "root";
    $pass = "";
    $mydb = "Lab04";
    $table_name = "Products";
    $connect = new mysqli($server, $user, $pass, $mydb);
    if ($connect->connect_error) {
        die("Connection failed: " . $connect->connect_error);
    }
    $sql = "SELECT ProductID, Product_desc, Cost, Weight, Numb FROM $table_name WHERE Product_desc = '$product_desc'";
    $result = $connect->query($sql);
    
    if($result->num_rows > 0) {
        print "<table>
                    <tr>
                      <th>Num</th>
                      <th>Product</th>
                      <th>Cost</th>
                      <th>Weight</th>
                      <th>Count</th>
                    </tr>";
        while($row = $result->fetch_assoc()) {
            print "<tr>
                      <th>".$row["ProductID"]."</th>
                      <th>".$row["Product_desc"]."</th>
                      <th>".$row["Cost"]."</th>
                      <th>".$row["Weight"]."</th>
                      <th>".$row["Numb"]."</th>
                    </tr>";
        }
         print "</table>";
} else {
  echo "Error: " . $sql . "<br>" . $connect->error;
}

$connect -> close();
    
?></body></html> 