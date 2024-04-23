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

<div id="main-content mb-3" class="container" style="margin-top:3px; margin-left:0%;">
    <h2>Add New Record</h2>
    <form class="" action="savedata.php" method="post">

        <label class="form-label">First Name</label>
        <input class="form-control" type="text" name="fname" />


        <label class="form-label">Last Name</label>
        <input class="form-control" type="text" name="lname" />


        <label class="form-label">Employee Number</label>
        <input class="form-control" type="number" name="employeeNumber">

        <label class="form-label">Extension</label>
        <input class="form-control" type="text" name="extension" />

        <label class="form-label">Email</label>
        <input class="form-control" type="email" name="email" />

        <label class="form-label">Office Code</label>
        <input class="form-control" type="text" name="officeCode" />

        <label class="form-label">ReportsTo</label>
        <input class="form-control" type="number" name="reportsTo" />

        <label class="form-label">Job Title</label>
        <input class="form-control" type="text" name="jobtitle" />

        <button type="submit" class="mt-2 btn btn-primary" value="save">Submit</button>
    </form>
</div>
</div>
</body>

</html>