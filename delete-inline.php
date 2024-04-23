<?php

try{

include 'config.php';

$employee_Number = $_GET['id'];
// echo $employee_Number;
$sql = "DELETE FROM employees WHERE employeeNumber = $employee_Number";
$result = mysqli_query($conn, $sql) or die("Query unsuccessful");

header("Location: http://localhost/lab%208/lab8_task2.php");
}
catch (Exception $e) {
    echo "Error";
}

mysqli_close($conn);



?>