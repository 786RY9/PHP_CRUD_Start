<!DOCTYPE html>
<html lang="en">

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

<body>

  <?php
  include 'navbar.php';
  ?>

  <div class="container " style=" margin-left:100px; margin-top: 50px;">
    <h2 class="h2">All Records</h2>

  </div>




  <?php

  $conn = mysqli_connect("localhost", "root", "", "classicmodels") or die("Connection failed: " . mysqli_connect_error());

  $sql = "SELECT
CONCAT(e.firstname, ' ', e.lastname) AS employee_fullname,
e.email,e.employeeNumber,
e.jobTitle,
CONCAT(o.addressline1, CHAR(10), o.addressline2, CHAR(10), o.city, ', ', o.state, ', ', o.country) AS office_address,
CONCAT(m.firstname, ' ', m.lastname, ', ', m.jobTitle) AS reportsto
FROM
employees e
JOIN
offices o
ON
e.officeCode = o.officeCode
LEFT JOIN
employees m
ON
e.reportsTo = m.employeeNumber;";
  $result = mysqli_query($conn, $sql) or die("Query unsuccessful");

  if (mysqli_num_rows($result) > 0) {

    ?>

    <div class="container table-responsive ">




      <table class="table table-bordered" style="width: 100%">
        <thead class="table-dark">
          <tr>
            <th>Employee Number</th>
            <th>Name</th>
            <th>Email</th>
            <th>Job Title</th>
            <th>Emp Office Address</th>
            <th>Reports To</th>
            <th>Update</th>
          </tr>
        </thead>
        <tbody class="table-group-divider">

          <?php
          while ($row = mysqli_fetch_assoc($result)) {

            ?>



            <tr>
              <td>
                <?php echo $row['employeeNumber']; ?>
              </td>
              <td>
                <?php echo $row['employee_fullname']; ?>
              </td>
              <td> <?php echo $row['email']; ?></td>
              <td> <?php echo $row['jobTitle']; ?></td>
              <td> <?php echo $row['office_address']; ?></td>
              <td> <?php echo $row['reportsto']; ?></td>
              <td>
               
                <a href='/lab%208/edit.php?id=<?php echo $row['employeeNumber']; ?>'> <button style="
                display:inline-block" type="button" class="btn btn-sm btn-outline-info">Edit</button></a>
                <!-- <p style="
                display:inline-block">|</p> -->
                <a href='/lab%208/delete-inline.php?id=<?php echo $row['employeeNumber']; ?>'> <button type="button" style="
                display:inline-block" class="btn btn-sm btn-outline-danger">Delete</button>
                </a>
              </td>

            </tr>
          <?php } ?>
        </tbody>
      </table>
    <?php } else {
    "<h2> No Record Found </h2>";
  }
  mysqli_close($conn);
  ?>

  </div>




</body>

</html>