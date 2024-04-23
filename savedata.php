<?php
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$employeeNumber = $_POST['employeeNumber'];
$extension = $_POST['extension'];
$email = $_POST['email'];
$officeCode = $_POST['officeCode'];
$reportsTo = $_POST['reportsTo'];
$jobtitle = $_POST['jobtitle'];

$conn = mysqli_connect("localhost", "root", "", "classicmodels") or die("Connection failed: " . mysqli_connect_error());

// Check if the reportsTo value exists in the employees table
$check_sql = "SELECT employeeNumber FROM employees WHERE employeeNumber = $reportsTo";
$check_result = mysqli_query($conn, $check_sql);

if (mysqli_num_rows($check_result) > 0) {
    $sql = "INSERT INTO employees (employeeNumber, lastName, firstName, extension, email, officeCode, reportsTo, jobTitle) VALUES ('$employeeNumber', '$lname', '$fname', '$extension', '$email', '$officeCode', '$reportsTo', '$jobtitle')";
    $result = mysqli_query($conn, $sql) or die("Query unsuccessful");
    header("Location: http://localhost/lab%208/employees.php");
} else {
    echo "Error";
}

mysqli_close($conn);
?>