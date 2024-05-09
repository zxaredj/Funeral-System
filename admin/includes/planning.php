<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>PFS | Planning</title>

    <!-- Custom fonts for this template -->
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="../vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link href="../css/table-style.css" rel="stylesheet">
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar" style="background-color: #144067;">
            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="../admin/index.php">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">PFS Dashboard</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index.html">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading pb-3">
                Interface
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <!-- <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Components</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom Components:</h6>
                        <a class="collapse-item" href="buttons.html">Buttons</a>
                        <a class="collapse-item" href="cards.html">Cards</a>
                    </div>
                </div>
            </li> -->

            <!-- HERE IS THE TABLE FROM DATABASE -->

            <div class="row">
                <div class="col">
                    <li class="nav-item">
                        <a class="collapse-item text-white p-2 ml-2" href="user_tables.php">
                            <i class="fa-regular fa-user" style="margin-right: 7px;"></i>
                            <span>Users</span>
                        </a>
                    </li>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <li class="nav-item">
                        <a class="collapse-item text-white p-2 ml-2" href="inquiries.php">
                            <i class="fa-brands fa-searchengin" style="margin-right: 7px;"></i>
                            <span>Inquiries</span>
                        </a>
                    </li>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <li class="nav-item">
                        <a class="collapse-item text-white p-2 ml-2" href="pick_up_form.php">
                            <i class="fa-brands fa-wpforms" style="margin-right: 7px;"></i>
                            <span>Pick Up Form</span>
                        </a>
                    </li>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <li class="nav-item">
                        <a class="collapse-item text-white p-2 ml-2" href="on_going_transaction.php">
                            <i class="fas fa-fw fa-chart-area" style="margin-right: 7px;"></i>
                            <span>On-Going Transaction</span>
                        </a>
                    </li>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <li class="nav-item">
                        <a class="collapse-item text-white p-2 ml-2" href="history.php">
                            <i class="fa-solid fa-clock-rotate-left" style="margin-right: 7px;"></i>
                            <span>History</span>
                        </a>
                    </li>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <li class="nav-item">
                        <a class="nav-link collapse-item text-white p-2 ml-2" href="#" data-toggle="collapse"
                            data-target="#collapsePlanning" aria-expanded="true" aria-controls="collapsePlanning">
                            <i class="fa-solid fa-list-check"></i>
                            <span>Planning</span>
                        </a>
                        <div id="collapsePlanning" class="collapse" aria-labelledby="headingPlanning"
                            data-parent="#accordionSidebar">
                            <div class="py-2 collapse-inner rounded">
                                <a class="collapse-item text-white p-2 ml-2" href="burial_service.php">
                                    <i class="fa-solid fa-1" style="margin-right: 7px;"></i>
                                    <span>Burial</span>
                                </a>
                                <a class="collapse-item text-white p-2 ml-2" href="direct_service.php">
                                    <i class="ffa-solid fa-2" style="margin-right: 7px;"></i>
                                    <span>Direct Cremation</span>
                                </a>
                                <a class="collapse-item text-white p-2 ml-2" href="memorial_service.php">
                                    <i class="ffa-solid fa-3" style="margin-right: 7px;"></i>
                                    <span>Memorial Gathering</span>
                                </a>
                                <a class="collapse-item text-white p-2 ml-2" href="traditional_service.php">
                                    <i class="ffa-solid fa-4" style="margin-right: 7px;"></i>
                                    <span>Traditional Gathering</span>
                                </a>
                            </div>
                        </div>
                    </li>

                </div>
            </div>

            <!-- Nav Item - Utilities Collapse Menu -->
            <!-- <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Utilities</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom Utilities:</h6>
                        <a class="collapse-item" href="utilities-color.html">Colors</a>
                        <a class="collapse-item" href="utilities-border.html">Borders</a>
                        <a class="collapse-item" href="utilities-animation.html">Animations</a>
                        <a class="collapse-item" href="utilities-other.html">Other</a>
                    </div>
                </div>
            </li> -->

            <!-- Divider -->
            <!-- <hr class="sidebar-divider"> -->

            <!-- Heading -->
            <!-- <div class="sidebar-heading">
            Addons
                </div> -->

            <!-- Nav Item - Pages Collapse Menu -->
            <!-- <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                        aria-expanded="true" aria-controls="collapsePages">
                        <i class="fas fa-fw fa-folder"></i>
                        <span>Pages</span>
                    </a>
                    <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">Login Screens:</h6>
                            <a class="collapse-item" href="login.html">Login</a>
                            <a class="collapse-item" href="register.html">Register</a>
                            <a class="collapse-item" href="forgot-password.html">Forgot Password</a>
                            <div class="collapse-divider"></div>
                            <h6 class="collapse-header">Other Pages:</h6>
                            <a class="collapse-item" href="404.html">404 Page</a>
                            <a class="collapse-item" href="blank.html">Blank Page</a>
                        </div>
                    </div>
                </li> -->

            <!-- Nav Item - Charts -->
            <!-- <li class="nav-item">
                    <a class="nav-link" href="charts.html">
                        <i class="fas fa-fw fa-chart-area"></i>
                        <span>Charts</span></a>
                </li> -->

            <!-- Nav Item - Tables -->
            <!-- <li class="nav-item">
                    <a class="nav-link" href="tables.html">
                        <i class="fas fa-fw fa-table"></i>
                        <span>Tables</span></a>
                </li> -->
            <!-- Nav Item - Pages Collapse Menu -->
            <!-- <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTables"
                        aria-expanded="true" aria-controls="collapsePages">
                        <i class="fas fa-fw fa-folder"></i>
                        <span>Table</span>
                    </a>
                    <div id="collapseTables" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">Table Section</h6>
                            <a class="collapse-item" href="includes/user_tables.php">Users</a>
                            <a class="collapse-item" href="includes/inquiries.php">Inquiries</a>
                            <a class="collapse-item" href="includes/pick_up_form.php">Pick Up Form</a>
                            <a class="collapse-item" href="includes/on_going_transaction.php">On-Going Transanction</a>
                            <a class="collapse-item" href="includes/history.php">History</a>
                            <a class="collapse-item" href="includes/planning">Planning</a>
                        </div>
                    </div>
                </li> -->

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>


        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <form class="form-inline">
                        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                            <i class="fa fa-bars"></i>
                        </button>
                    </form>

                    <!-- Topbar Search -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <!-- Nav Item - Alerts -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-bell fa-fw"></i>
                                <!-- Counter - Alerts -->
                                <span class="badge badge-danger badge-counter">3+</span>
                            </a>
                            <!-- Dropdown - Alerts -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="alertsDropdown">
                                <h6 class="dropdown-header">
                                    Alerts Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-primary">
                                            <i class="fas fa-file-alt text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 12, 2019</div>
                                        <span class="font-weight-bold">A new monthly report is ready to download!</span>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-success">
                                            <i class="fas fa-donate text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 7, 2019</div>
                                        $290.29 has been deposited into your account!
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-warning">
                                            <i class="fas fa-exclamation-triangle text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 2, 2019</div>
                                        Spending Alert: We've noticed unusually high spending for your account.
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                            </div>
                        </li>

                        <!-- Nav Item - Messages -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-envelope fa-fw"></i>
                                <!-- Counter - Messages -->
                                <span class="badge badge-danger badge-counter">7</span>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="messagesDropdown">
                                <h6 class="dropdown-header">
                                    Message Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="../img/undraw_profile_1.svg" alt="...">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div class="font-weight-bold">
                                        <div class="text-truncate">Hi there! I am wondering if you can help me with a
                                            problem I've been having.</div>
                                        <div class="small text-gray-500">Emily Fowler · 58m</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="../img/undraw_profile_2.svg" alt="...">
                                        <div class="status-indicator"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">I have the photos that you ordered last month, how
                                            would you like them sent to you?</div>
                                        <div class="small text-gray-500">Jae Chun · 1d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="../img/undraw_profile_3.svg" alt="...">
                                        <div class="status-indicator bg-warning"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Last month's report looks great, I am very happy with
                                            the progress so far, keep up the good work!</div>
                                        <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60"
                                            alt="...">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Am I a good boy? The reason I ask is because someone
                                            told me that people say this to all dogs, even if they aren't good...</div>
                                        <div class="small text-gray-500">Chicken the Dog · 2w</div>
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
                            </div>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Douglas McGee</span>
                                <img class="img-profile rounded-circle" src="../img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <div id="burial" class="container-fluid tab-content">
                    <br>
                    <h1 class="table-title">Burial Service</h1>
                    <br>
                    <div class="card shadow mb-4">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width=" 100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Benefactor's Name</th>
                                            <th>Beneficiary's Name</th>
                                            <th>Relationship to Beneficiary</th>
                                            <th>Type of Service</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php 
                                            include('./config.php');
                                            
                                            $sql = "SELECT * FROM pl_burial";
                                            
                                            $result = mysqli_query($conn, $sql);
                                            if (mysqli_num_rows($result) > 0) {
                                            while ($row = mysqli_fetch_assoc($result)) {
                                        ?>
                                        <tr>
                                            <td><?php echo $row['benefactorFirstName'] . " " . $row['benefactorLastName'];?>
                                            </td>
                                            <td><?php echo $row['beneficiaryFirstName'] . " " . $row['beneficiaryLastName'];?>
                                            </td>
                                            <td><?php echo $row['planFor']; ?></td>
                                            <td><?php echo $row['service']; ?></td>
                                            <td style="display: flex; justify-content: center; align-items: center;">
                                                <button class="delete-btn" style="margin-right: 20px; width: 150px;"
                                                    onclick="openBurialModal(<?php echo $row['id'];?>)"
                                                    data-bs-toggle='modal' data-bs-target='#burial_modal'>FULL
                                                    DETAILS</button> <button class="delete-btn"
                                                    id="activate">ACTIVATE</button>
                                            </td>
                                        </tr>
                                        <?php
                                                };
                                            };
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="cremation" class="container-fluid tab-content">
                    <br>
                    <h1 class=" table-title">Direct Cremation Service</h1>
                    <br>
                    <div class="card shadow mb-4">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Benefactor's Name</th>
                                            <th>Beneficiary's Name</th>
                                            <th>Relationship to Beneficiary</th>
                                            <th>Type of Service</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php 
                                            include('./config.php');
                                            
                                            $sql = "SELECT * FROM pl_directcremation";
                                            
                                            $result = mysqli_query($conn, $sql);
                                            if (mysqli_num_rows($result) > 0) {
                                            while ($row = mysqli_fetch_assoc($result)) {
                                        ?>
                                        <tr>
                                            <td><?php echo $row['benefactorFirstName'] . " " . $row['benefactorLastName'];?>
                                            </td>
                                            <td><?php echo $row['beneficiaryFirstName'] . " " . $row['beneficiaryLastName'];?>
                                            </td>
                                            <td><?php echo $row['planFor']; ?></td>
                                            <td><?php echo $row['service']; ?></td>
                                            <td style="display: flex; justify-content: center; align-items: center;">
                                                <button class="delete-btn" id="full-details"
                                                    style="margin-right: 20px; width: 150px;">FULL DETAILS</button>
                                                <button class="delete-btn" id="activate">ACTIVATE</button>
                                            </td>
                                        </tr>
                                        <?php
                                                };
                                            };
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="memorial" class="container-fluid tab-content">
                    <br>
                    <h1 class="table-title">Memorial Gathering After Cremation</h1>
                    <br>
                    <div class="card shadow mb-4">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Benefactor's Name</th>
                                            <th>Beneficiary's Name</th>
                                            <th>Relationship to Beneficiary</th>
                                            <th>Type of Service</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                            include('./config.php');
                                            $sql = "SELECT * FROM pl_gatheringcremation";
                                        
                                            
                                            $result = mysqli_query($conn, $sql);
                                            if (mysqli_num_rows($result) > 0) {
                                            while ($row = mysqli_fetch_assoc($result)) {
                                        ?>
                                        <tr>
                                            <td><?php echo $row['benefactorFirstName'] . " " . $row['benefactorLastName'];?>
                                            </td>
                                            <td><?php echo $row['beneficiaryFirstName'] . " " . $row['beneficiaryLastName'];?>
                                            </td>
                                            <td><?php echo $row['planFor']; ?></td>
                                            <td><?php echo $row['service']; ?></td>
                                            <td style="display: flex; justify-content: center; align-items: center;">
                                                <button class="delete-btn" id="full-details"
                                                    style="margin-right: 20px; width: 150px;">FULL DETAILS</button>
                                                <button class="delete-btn" id="activate">ACTIVATE</button>
                                            </td>
                                        </tr>
                                        <?php
                                                };
                                            };
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="traditional" class="container-fluid tab-content">
                    <br>
                    <h1 class="table-title">Traditional Cremation Services</h1>
                    <br>
                    <div class="card shadow mb-4">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Benefactor's Name</th>
                                            <th>Beneficiary's Name</th>
                                            <th>Relationship to Beneficiary</th>
                                            <th>Type of Service</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <!-- <tfoot>
                                        <tr>
                                            <th>Username</th>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Email</th>
                                        </tr>
                                    </tfoot> -->
                                    <tbody>

                                        <?php 
                                    include('./config.php');
                                    $sql = "SELECT * FROM pl_traditionalcremation";
                                   
                                    
                                    $result = mysqli_query($conn, $sql);
                                    if (mysqli_num_rows($result) > 0) {
                                    while ($row = mysqli_fetch_assoc($result)) {
                                    ?>
                                        <tr>
                                            <td><?php echo $row['benefactorFirstName'] . " " . $row['benefactorLastName'];?>
                                            </td>
                                            <td><?php echo $row['beneficiaryFirstName'] . " " . $row['beneficiaryLastName'];?>
                                            </td>
                                            <td><?php echo $row['planFor']; ?></td>
                                            <td><?php echo $row['service']; ?></td>
                                            <td style="display: flex; justify-content: center; align-items: center;">
                                                <button class="delete-btn" id="full-details"
                                                    style="margin-right: 20px; width: 150px;">FULL DETAILS</button>
                                                <button class="delete-btn" id="activate">ACTIVATE</button>
                                            </td>
                                        </tr>
                                        <?php
                                    };
                                };
                                ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>

        <!-- Logout Modal-->
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <a class="btn btn-primary" href="login.html">Logout</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="burial_modal" data-bs-backdrop="static" tabindex="-1"
            aria-labelledby="examplaModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Full Details</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div id="id"></div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary btn-close" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bootstrap core JavaScript-->
        <script src="../vendor/jquery/jquery.min.js"></script>
        <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Core plugin JavaScript-->
        <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

        <!-- Custom scripts for all pages-->
        <script src="../js/sb-admin-2.min.js"></script>

        <!-- Page level plugins -->
        <script src="../vendor/datatables/jquery.dataTables.min.js"></script>
        <script src="../vendor/datatables/dataTables.bootstrap4.min.js"></script>

        <!-- Page level custom scripts -->
        <script src="../js/demo/datatables-demo.js"></script>
        <script src="https://kit.fontawesome.com/53e9ba7f8c.js" crossorigin="anonymous"></script>


        <script>
        function openBurialModal(id) {
            console.log(id);

            $.ajax({
                url: 'GET/view_burial.php',
                method: 'GET',
                data: {
                    id: id
                },
                success: function(response) {
                    console.log(response);
                    var burialData = JSON.parse(response);
                    // Populate modal fields with fetched data
                    $('#id').text(burialData.id);

                },
                error: function(xhr, status, error) {
                    console.error(xhr.responseText);
                }
            });
        }

        //Close Modal Burial Services
        // $(document).ready(function() {
        //     $('.btn-close').on('click', function() {
        //         $('#burialModal').modal('hide');
        //     })
        // });
        </script>


        <script>
        openTab(event, burial);
        // Hide all tab content initially
        document.querySelectorAll('.tab-content').forEach(function(tabContent) {
            tabContent.style.display = 'none';
        });

        // Function to open tab
        function openTab(event, tabName) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tab-content");
            for (i = 0; i < tabcontent.length; i++) {
                if (tabcontent[i].id === tabName) {
                    // Do nothing if the current tab is active
                    continue;
                } else {
                    // Remove "dataTable" id from tables in inactive tabs
                    var inactiveTable = tabcontent[i].querySelector(".table-responsive table");
                    if (inactiveTable) {
                        inactiveTable.removeAttribute("id");
                    }
                }
                tabcontent[i].style.display = "none";

            }
            document.getElementById(tabName).style.display = "block";

        }
        </script>

</body>

</html>