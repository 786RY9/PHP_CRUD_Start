<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>All Record</title>

  <!-- Bootstrap CSS -->
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

  <div class="container" style="margin-left:100px; margin-top: 50px;">
    <h2 class="h2">Employees only All Records</h2>

    <?php
    $conn = mysqli_connect("localhost", "root", "", "classicmodels") or die("Connection failed: " . mysqli_connect_error());

    $sql = "SELECT
    firstname,
    lastname,
    employeeNumber,
    extension,
    email,
    officeCode,
    reportsTo,
    jobTitle
    FROM
    employees;";
    $result = mysqli_query($conn, $sql) or die("Query unsuccessful");

    if (mysqli_num_rows($result) > 0) {
    ?>

    <div class="container table-responsive">
      <table class="table table-bordered" style="width: 100%">
        <thead class="table-dark">
          <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Employee Number</th>
            <th>Extension</th>
            <th>Email</th>
            <th>Office Code</th>
            <th>Reports To</th>
            <th>Job Title</th>
           
          </tr>
        </thead>
        <tbody class="table-group-divider">
          <?php
          while ($row = mysqli_fetch_assoc($result)) {
          ?>
          <tr>
            <td><?php echo $row['firstname']; ?></td>
            <td><?php echo $row['lastname']; ?></td>
            <td><?php echo $row['employeeNumber']; ?></td>
            <td><?php echo $row['extension']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['officeCode']; ?></td>
            <td><?php echo $row['reportsTo']; ?></td>
            <td><?php echo $row['jobTitle']; ?></td>
           
          </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
    <?php } else {
      echo "<h2>No Record Found</h2>";
    }
    mysqli_close($conn);
    ?>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
    crossorigin="anonymous"></script>
</body>

</html>