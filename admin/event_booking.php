<?php
session_start();
include "../include/connect.php";

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

        <body>
            <div class="container-scroller">
                <!-- partial:partials/_navbar.php -->
                <nav class="navbar col-12 p-0 fixed-top d-flex flex-row">
                    <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
                        <a class="navbar-brand brand-logo mr-5" href="index.php"><img src="images/logo.png" class="mr-2" alt="logo" style="width: 100px; height:50px;" /></a>
                        <a class="navbar-brand brand-logo-mini" href="index.php"><img src="images/fair.png" alt="logo" style="width: 50px; height:50px;" /></a>
                    </div>

                    <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
                        <button class="navbar-toggler navbar-toggler align-self-center btn1" type="button" data-toggle="minimize">
                            <span class="icon-menu"></span>
                        </button>
                        <ul class="navbar-nav navbar-nav-right">
                            <li class="nav-item">
                                <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="fullscreen">
                                    <i class="fa-solid fa-expand" style=""></i>
                                </button>
                            </li>
                            <li class="nav-item dropdown">
                            <li class="nav-item nav-profile dropdown">
                                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
                                    <img src="images/faces/face28.jpg" alt="profile" />
                                </a>
                                <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
                                    <a class="dropdown-item" href="<?php echo isset($_SESSION['email']) ? 'add.php' : 'login.php'; ?>">
                                        <i class="ti-settings text-primary"></i>
                                        Settings
                                    </a>
                                    <a class="dropdown-item" href="../admin/logout.php">
                                        <i class="ti-power-off text-primary"></i>
                                        Logout
                                    </a>
                                </div>
                            </li>
                            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
                                <span class="icon-menu"></span>
                            </button>
                        </ul>
                    </div>
                </nav>
                <!-- partial -->
                <div class="container-fluid page-body-wrapper">
                    <!-- partial:partials/_settings-panel.php -->

                    <!-- partial -->
                    <!-- partial:partials/_sidebar.php -->
                    <nav class="sidebar sidebar-offcanvas" id="sidebar">
                        <ul class="nav">
                            <li class="nav-item">
                                <a class="nav-link" href="index.php">
                                    <i class="fa-solid fa-grip" style="font-size: 18px; margin: 5px;"></i>
                                    <span class="menu-title">Dashboard</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="register.php">
                                    <i class="fa-solid fa-table-columns" style="font-size: 18px; margin: 5px;"></i>
                                    <span class="menu-title">Registration Data</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="Room_booking.php">
                                    <i class="fa-solid fa-table-cells-large" style="font-size: 18px; margin: 5px;"></i>
                                    <span class="menu-title">Room Booking Data</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="Ticket_booking.php">
                                    <i class="fa-solid fa-table-list" style="font-size: 18px; margin: 5px;"></i>
                                    <span class="menu-title">Ticket Booking Data</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="contact_us.php">
                                    <i class="fa-solid fa-address-book" style="font-size: 18px; margin: 5px;"></i>
                                    <span class="menu-title">Contact us Data</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="add_event.php">
                                    <i class="fa-regular fa-square-plus" style="font-size: 18px; margin: 5px;"></i>
                                    <span class="menu-title">Add event</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="event_booking.php">
                                    <i class="fa-solid fa-calendar-check" style="font-size: 18px; margin: 5px;"></i>
                                    <span class="menu-title">event Booking</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="rbpayment.php">
                                    <i class="fa-regular fa-credit-card" style="font-size: 18px; margin: 5px;"></i>
                                    <span class="menu-title">ROOM Booking Payment Data</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="tbpayment.php">
                                    <i class="fa-regular fa-credit-card" style="font-size: 18px; margin: 5px;"></i>
                                    <span class="menu-title">Ticket Booking Payment Data</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
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
                                        <h1 style="text-transform: uppercase; font-size: 35px;">Ticket booking
                                            INFORMATION</h1>
                                        <div class="table-responsive">
                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr class="table-info">
                                                        <th>
                                                            Event ID
                                                        </th>
                                                        <th>
                                                            Fname
                                                        </th>
                                                        <th>
                                                            Lname
                                                        </th>
                                                        <th>
                                                            Email
                                                        </th>
                                                        <th>
                                                            Phone
                                                        </th>
                                                        <th>
                                                            Event
                                                        </th>
                                                        <th>
                                                            numner of pass
                                                        </th>
                                                        <th>
                                                            Total(₹)
                                                        </th>
                                                    </tr>
                                                    <?php
                                                    $select = "SELECT * FROM `event_data`";
                                                    $result = $conn->query($select);

                                                    while ($row = mysqli_fetch_array($result)) {
                                                    ?>
                                                        <tr>
                                                            <td>
                                                                <?php echo $row['event_id'] ?>
                                                            </td>
                                                            <td>
                                                                <?php echo $row['fname'] ?>
                                                            </td>
                                                            <td>
                                                                <?php echo $row['lname'] ?>
                                                            </td>
                                                            <td>
                                                                <?php echo $row['email'] ?>
                                                            </td>
                                                            <td>
                                                                <?php echo $row['phone'] ?>
                                                            </td>
                                                            <td>
                                                                <?php echo $row['event'] ?>
                                                            </td>
                                                            <td>
                                                                <?php echo $row['npass'] ?>
                                                            </td>
                                                            <td>
                                                                <?php echo $row['totalprice'] ?>
                                                            </td>
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