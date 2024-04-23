<?php include 'navbar.php'; ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab 8</title>

    <!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script> -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <style>
        .container {
            margin-top: 5.5rem;
        }
    </style>
</head>


<?php


if(isset($_POST['deletebtn'])){
    include 'config.php';
    $employee_Number = $_POST['employeenumber'];

    if($employee_Number == ""){
        echo "Please fill all the fields";
        exit();
    }
    else if(!is_numeric($employee_Number)){
        echo "Please enter a valid number";
        exit();
    }
    $sql1 = "Select * from employees where employeeNumber = $employee_Number";
    $result1 = mysqli_query($conn, $sql1) or die("Query unsuccessful");
    if($row = mysqli_num_rows($result1) == 0){
        echo "No Employee Found in Database";
        exit();
    }
// echo $employee_Number;
$sql = "DELETE FROM employees WHERE employeeNumber = $employee_Number";
$result = mysqli_query($conn, $sql) or die("Employee is Not in Database");

header("Location: http://localhost/lab%208/lab8_task2.php");

mysqli_close($conn);
}

?>


<div id="main-content">
    <h2>Delete Record</h2>
    <form class="form" action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
        <div class="form">
            <label class="form-label">Employee Number</label>
            <input type="text" class="form-control" name="employeenumber" />
        </div>
        <button class="btn btn-primary mt-2" type="submit" name="deletebtn" value="Delete" >Delete
        </button>
    </form>
</div>
</div>
</body>
</html>
