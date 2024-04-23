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



<div id="main-content">
    <h2>Update Record</h2>
    <?php
    $conn = mysqli_connect("localhost", "root", "", "classicmodels") or die("Connection failed: " . mysqli_connect_error());
    $employee_Number = $_GET['id'];
    // echo $employee_Number;
    $sql = "SELECT * from employees where employeeNumber = {$employee_Number}";
    $result = mysqli_query($conn, $sql) or die("Query unsuccessful");

    if (mysqli_num_rows($result) > 0) {

        while ($row = mysqli_fetch_assoc($result)) {

            ?>


            <form class="post-form" action="updatedata.php" method="post">
                <label class="form-label">First Name</label>
                <input type="hidden" name="employeenumber" value="<?php echo $row['employeeNumber']; ?>" />
                <input class="form-control" type="text" name="fname" value="<?php echo $row['firstName']; ?>"/>


                <label class="form-label">Last Name</label>
                <input class="form-control" type="text" name="lname" value="<?php echo $row['lastName']; ?>" />


                <label class="form-label">Employee Number(readonly)</label>
                <input class="form-control" type="number"  name="employeeNumber" value="<?php echo $row['employeeNumber']; ?>" readonly />

                <label class=" form-label">Extension</label>
                <input class="form-control" type="text" name="extension" value="<?php echo $row['extension']; ?> " />

                <label class=" form-label">Email</label>
                <input class="form-control" type="email" name="email" value="<?php echo $row['email']; ?> " />

                <label class=" form-label">Office Code</label>
                <input class="form-control" type="text" name="officeCode" value="<?php echo $row['officeCode']; ?>" />

                <label class=" form-label">ReportsTo</label>
                <input class="form-control" type="number" name="reportsTo" value="<?php echo $row['reportsTo']; ?>" />

                <label class=" form-label">Job Title</label>
                <input class="form-control" type="text" name="jobtitle" value="<?php echo $row['jobTitle']; ?>" />

                <button type=" submit" class="mt-2 btn btn-primary" value="save">Submit</button>
            </form>
            <?php
        }
    }
    ?>
</div>
</div>
</body>

</html>