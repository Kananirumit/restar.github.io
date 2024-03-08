<?php
    include '../include/connect.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Restar Admin</title>
  <script src="https://kit.fontawesome.com/206142e5bd.js" crossorigin="anonymous"></script>
  <!-- plugins:css -->
  <link rel="stylesheet" href="vendors/feather/feather.css">
  <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" type="text/css" href="js/select.dataTables.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/amusement-park.png" />
</head>

<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.php -->
    <?php
            include "header.php";
        ?>  <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="row">
              </div>
            </div>
          </div>
          <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h1 style="text-transform: uppercase; font-size: 35px;">Registration Data</h1>
                <div class="table-responsive pt-3">
                  <table class="table table-bordered">
                    <thead>
                      <tr class="table-danger">
                        <th>
                          GuestID
                        </th>
                        <th>
                          First name
                        </th>
                        <th>
                          Last name
                        </th>
                        <th>
                          Gender
                        </th>
                        <th>
                          Phone
                        </th>
                        <th>
                          Email
                        </th>
                        <th>
                          Password
                        </th>
                        <th>
                          Confirm Password
                        </th>
                      </tr>
                      <?php
                      $select = "SELECT * FROM `register`";
                      $result = $conn->query($select);

                      while ($row = mysqli_fetch_array($result)) {
                      ?>
                        <tr>
                          <td><?php echo $row['guestId'] ?></td>
                          <td><?php echo $row['fname'] ?></td>
                          <td><?php echo $row['lname'] ?></td>
                          <td><?php echo $row['gender'] ?></td>
                          <td><?php echo $row['phone'] ?></td>
                          <td><?php echo $row['email'] ?></td>
                          <td><?php echo $row['pass'] ?></td>
                          <td><?php echo $row['confirmpss'] ?></td>
                        </tr>
                      <?php
                      }
                      ?>
                    </thead>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
      <!-- partial:partials/_footer.php -->
      <!-- partial -->
    </div>
    <!-- main-panel ends -->
  </div>
  <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="vendors/chart.js/Chart.min.js"></script>
  <script src="vendors/datatables.net/jquery.dataTables.js"></script>
  <script src="vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
  <script src="js/dataTables.select.min.js"></script>

  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/template.js"></script>
  <script src="js/settings.js"></script>
  <script src="js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="js/dashboard.js"></script>
  <script src="js/Chart.roundedBarCharts.js"></script>
  <!-- End custom js for this page-->
</body>

</html>