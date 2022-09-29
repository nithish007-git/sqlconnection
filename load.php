<?
$username=$_POST['name'];
$rollno=$_POST['rollno'];
$Department=$_POST['Department'];
$email=$_POST['email'];
print($username);

if (true) {
    $servername="mysql.selfmade.ninja";
    $username="nithish";
    $password="hackerfeast12";
    $dbname="nithish_photogram";

    $mysqli = new mysqli($servername, $username, $password, $dbname);
print("test case passed");
    
    if(true) {
        $sql = "INSERT INTO `skct_sql` (`username`, `rollno`, `Department`,`email`)
        VALUES ('$username', '$rollno', '$Department','$email')";
        if ($mysqli->query($sql) === TRUE) {
            echo "New record created successfully";
          } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
          }
          
          $conn->close();
    }
}
else{
    echo "connection not established";
    die();
}

?>
