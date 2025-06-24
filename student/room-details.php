<?php
    session_start();
    include('../includes/dbconn.php');
    include('../includes/check-login.php');
    check_login();
?>

<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/big/icon.png">
    <title>Hostel Management System</title>
    <!-- Custom CSS -->
    <link href="../assets/extra-libs/c3/c3.min.css" rel="stylesheet">
    <link href="../assets/libs/chartist/dist/chartist.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="../dist/css/style.min.css" rel="stylesheet">

</head>

<style>
@media print {
    button {
        display: none;
    }
}
</style>


<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-theme="light" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed" data-boxed-layout="full">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin6">
            <?php include '../includes/student-navigation.php'?>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin6">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar" data-sidebarbg="skin6">
                <?php include '../includes/student-sidebar.php'?>
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">

            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">

                <div class="col-7 align-self-center">
                    <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Details About My Booked Room
                    </h4>
                </div>



                <!--Table Column -->

                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between mb-3">
                            <h4>Student Registration Details</h4>
                            <button class="btn btn-primary" onclick="printDiv('printableArea')">Print</button>
                        </div>

                        <div class="table-responsive" id="printableArea">
                            <table id="zctb" class="table table-bordered">
                                <tbody>
                                    <?php
                    $aid = $_SESSION['login'];
                    $ret = "SELECT * FROM registration WHERE emailid=?";
                    $stmt = $mysqli->prepare($ret);
                    $stmt->bind_param('s', $aid);
                    $stmt->execute();
                    $res = $stmt->get_result();
                    while ($row = $res->fetch_object()) {
                    ?>

                                    <tr class="table-active">
                                        <td colspan="6"><b>Date & Time of Registration:</b>
                                            <?php echo $row->postingDate; ?></td>
                                    </tr>

                                    <tr>
                                        <td><b>Hostel:</b></td>
                                        <td><?php echo $row->hostel; ?></td>
                                        <td><b>Room No:</b></td>
                                        <td><?php echo $row->roomno; ?></td>
                                        <td><b>Starting Date:</b></td>
                                        <td><?php echo $row->stayfrom; ?></td>
                                    </tr>

                                    <tr>
                                        <td><b>Seater:</b></td>
                                        <td><?php echo $row->seater; ?></td>
                                        <td><b>Duration:</b></td>
                                        <td><?php echo $row->duration; ?> Months</td>
                                        <td><b>Food Status:</b></td>
                                        <td><?php echo $row->foodstatus ? 'Required' : 'Not Required'; ?></td>
                                    </tr>

                                    <tr>
                                        <td><b>Fees Per Month:</b></td>
                                        <td>GHS<?php echo $fpm = $row->feespm; ?></td>
                                        <td colspan="4"><b>Total Fees (<?php echo $row->duration; ?> months):</b>
                                            GHS<?php echo ($row->foodstatus ? ($fpm + 211) : $fpm) * $row->duration; ?>
                                        </td>
                                    </tr>

                                    <tr class="table-primary">
                                        <td><b>Registration Number:</b></td>
                                        <td><?php echo $row->regno; ?></td>
                                        <td><b>Full Name:</b></td>
                                        <td colspan="3">
                                            <?php echo $row->firstName . ' ' . $row->middleName . ' ' . $row->lastName; ?>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td><b>Email:</b></td>
                                        <td><?php echo $row->emailid; ?></td>
                                        <td><b>Phone:</b></td>
                                        <td><?php echo $row->contactno; ?></td>
                                        <td><b>Gender:</b></td>
                                        <td><?php echo $row->gender; ?></td>
                                    </tr>

                                    <tr>
                                        <td><b>Course:</b></td>
                                        <td><?php echo $row->course; ?></td>
                                        <td><b>Emergency Contact:</b></td>
                                        <td><?php echo $row->egycontactno; ?></td>
                                        <td><b>Guardian:</b></td>
                                        <td><?php echo $row->guardianName . " (" . $row->guardianRelation . ")"; ?></td>
                                    </tr>

                                    <tr>
                                        <td><b>Guardian Contact:</b></td>
                                        <td colspan="5"><?php echo $row->guardianContactno; ?></td>
                                    </tr>

                                    <tr>
                                        <td><b>Current Address:</b></td>
                                        <td colspan="2">
                                            <?php echo $row->corresAddress . "<br>" . $row->corresCIty . ", " . $row->corresPincode . "<br>" . $row->corresState; ?>
                                        </td>
                                        <td><b>Permanent Address:</b></td>
                                        <td colspan="2">
                                            <?php echo $row->pmntAddress . "<br>" . $row->pmntCity . ", " . $row->pmntPincode; ?>
                                        </td>
                                    </tr>

                                    <?php } ?>
                                </tbody>
                            </table>
                            </>
                        </div>
                    </div>


                    <!-- Table column end -->

                </div>
                <!-- ============================================================== -->
                <!-- End Container fluid  -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- footer -->
                <!-- ============================================================== -->
                <?php include '../includes/footer.php' ?>
                <!-- ============================================================== -->
                <!-- End footer -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Page wrapper  -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Wrapper -->
        <!-- ============================================================== -->
        <!-- End Wrapper -->
        <!-- ============================================================== -->
        <!-- All Jquery -->
        <!-- ============================================================== -->
        <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
        <script src="../assets/libs/popper.js/dist/umd/popper.min.js"></script>
        <script src="../assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
        <!-- apps -->
        <!-- apps -->
        <script src="../dist/js/app-style-switcher.js"></script>
        <script src="../dist/js/feather.min.js"></script>
        <script src="../assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
        <script src="../dist/js/sidebarmenu.js"></script>
        <!--Custom JavaScript -->
        <script src="../dist/js/custom.min.js"></script>
        <!--This page JavaScript -->
        <script src="../assets/extra-libs/c3/d3.min.js"></script>
        <script src="../assets/extra-libs/c3/c3.min.js"></script>
        <script src="../assets/libs/chartist/dist/chartist.min.js"></script>
        <script src="../assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>
        <script src="../dist/js/pages/dashboards/dashboard1.min.js"></script>

        <script>
        function printDiv(divId) {
            var printContents = document.getElementById(divId).innerHTML;
            var originalContents = document.body.innerHTML;

            document.body.innerHTML = printContents;
            window.print();
            document.body.innerHTML = originalContents;
            location.reload(); // Reload the page to restore event listeners and scripts
        }
        </script>
</body>

</html>