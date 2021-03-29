<?php
    include('includes/session.php');
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Profile</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
</head>

<body id="page-top">
    <div id="wrapper">
        <nav class="navbar navbar-dark align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0">
            <div class="container-fluid d-flex flex-column p-0">
                <a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="index.php">
                    <div class="sidebar-brand-icon rotate-n-15"></div>
                    <div class="sidebar-brand-text mx-3"><span>HOME</span></div>
                </a>
                <nav class="navbar navbar-dark align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0">
                    <div class="container-fluid d-flex flex-column p-0">
                        <hr class="sidebar-divider my-0">
                        <ul class="nav navbar-nav text-light" id="accordionSidebar">
                            <li class="nav-item" role="presentation"><a class="nav-link active" href="profile.html"><i class="fas fa-tachometer-alt"></i><span>&nbsp;Dashboard</span></a></li>
                            <li class="nav-item" role="presentation"></li>
                            <li class="nav-item" role="presentation"><a class="nav-link" href="donorlist.php">Donors</a></li>
                            <li class="nav-item" role="presentation"><a class="nav-link" href="donate.php">Donate</a></li>
                            <li class="nav-item" role="presentation"><a class="nav-link" href="bloodbank.php">Bloodbanks</a></li>
                            <li class="nav-item" role="presentation"><a class="nav-link" href="appoint.php">My Appointment</a></li>
                            <li class="nav-item" role="presentation"><a class="nav-link" href="camp.php">Camps</a></li>
                            <!-- <li class="nav-item" role="presentation"><a class="nav-link" href="reqests.php">Requests</a></li>  -->
                            <li class="nav-item" role="presentation"><a class="nav-link" href="#">help</a></li>
                            <li class="nav-item" role="presentation"></li>
                            <hr class="sidebar-divider">
                            <div class="sidebar-heading"></div>
                        </ul>
                        <div class="text-center d-none d-md-inline"></div>
                    </div>
                </nav>
                <hr class="sidebar-divider my-0">
                <ul class="nav navbar-nav text-light" id="accordionSidebar"></ul>
                <div class="text-center d-none d-md-inline"></div>
            </div>
        </nav>
        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">
                <nav class="navbar navbar-light navbar-expand bg-white shadow mb-4 topbar static-top">
                    <div class="container-fluid"><button class="btn btn-link d-md-none rounded-circle mr-3" id="sidebarToggleTop" type="button"><i class="fas fa-bars"></i></button>
                        <form class="form-inline d-none d-sm-inline-block mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                            <div class="input-group"></div>
                        </form>
                        <ul class="nav navbar-nav flex-nowrap ml-auto">
                            <li class="nav-item dropdown d-sm-none no-arrow"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#"><i class="fas fa-search"></i></a>
                                <div class="dropdown-menu dropdown-menu-right p-3 animated--grow-in" role="menu" aria-labelledby="searchDropdown">
                                    <form class="form-inline mr-auto navbar-search w-100">
                                        <div class="input-group"><input class="bg-light form-control border-0 small" type="text" placeholder="Search for ...">
                                            <div class="input-group-append"><button class="btn btn-primary py-0" type="button"><i class="fas fa-search"></i></button></div>
                                        </div>
                                    </form>
                                </div>
                            </li>
                            <li class="nav-item dropdown no-arrow mx-1" role="presentation">
                                <li class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#"><i class="fas fa-bell fa-fw"></i></a>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-list dropdown-menu-right animated--grow-in"
                                        role="menu">
                                        <h6 class="dropdown-header">alerts center</h6>
                                        <a class="d-flex align-items-center dropdown-item" href="#">
                                            <div class="mr-3">
                                                <div class="bg-primary icon-circle"><i class="fas fa-file-alt text-white"></i></div>
                                            </div>
                                            <div></div>
                                        </a>
                                        <a class="d-flex align-items-center dropdown-item" href="#">
                                            <div class="mr-3"></div>
                                            <div></div>
                                        </a><a class="text-center dropdown-item small text-gray-500" href="#">Show All Alerts</a></div>
                                </li>
                            </li>
                            <li class="nav-item dropdown no-arrow mx-1" role="presentation">
                                <li class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#"><i class="fas fa-envelope fa-fw"></i></a>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-list dropdown-menu-right animated--grow-in"
                                        role="menu">
                                        <h6 class="dropdown-header">alerts center</h6>
                                        <a class="d-flex align-items-center dropdown-item" href="#">
                                            <div class="dropdown-list-image mr-3"></div>
                                            <div class="font-weight-bold">
                                                <div class="text-truncate"></div>
                                            </div>
                                        </a><a class="text-center dropdown-item small text-gray-500" href="#">Show All Alerts</a></div>
                                </li>
                                <div class="shadow dropdown-list dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown"></div>
                            </li>
                            <div class="d-none d-sm-block topbar-divider"></div>
                            <li class="nav-item dropdown no-arrow" role="presentation">
                                <li class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#"><span class="d-none d-lg-inline mr-2 text-gray-600 small"><?php echo $user_check;?></span></a>
                                <div class="dropdown-menu shadow dropdown-menu-right animated--grow-in"
                                        role="menu"><a class="dropdown-item" role="presentation" href="profile.php"><i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Profile</a><a class="dropdown-item" role="presentation" href="profileset.php"><i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Settings</a>
                                        <a
                                            class="dropdown-item" role="presentation" href="#"><i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Activity log</a>
                                            <a class="dropdown-item" role="presentation" href="includes/delete.php"><i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Delete my Account</a>
                                            <div class="dropdown-divider"></div><a class="dropdown-item" role="presentation" href="includes/logout.php"><i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Logout</a></div>
                                </li>
                            </li>
                        </ul>
                    </div>
                </nav>
                <div class="container-fluid">
                    <h3 class="text-dark mb-4">Profile</h3>
                    <div class="row mb-3">
                        <div class="col-lg-8">
                            <div class="row mb-3 d-none">
                                <div class="col">
                                    <div class="card text-white bg-primary shadow">
                                        <div class="card-body">
                                            <div class="row mb-2">
                                                <div class="col">
                                                    <p class="m-0">Peformance</p>
                                                    <p class="m-0"><strong>65.2%</strong></p>
                                                </div>
                                                <div class="col-auto"><i class="fas fa-rocket fa-2x"></i></div>
                                            </div>
                                            <p class="text-white-50 small m-0"><i class="fas fa-arrow-up"></i>&nbsp;5% since last month</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card text-white bg-success shadow">
                                        <div class="card-body">
                                            <div class="row mb-2">
                                                <div class="col">
                                                    <p class="m-0">Peformance</p>
                                                    <p class="m-0"><strong>65.2%</strong></p>
                                                </div>
                                                <div class="col-auto"><i class="fas fa-rocket fa-2x"></i></div>
                                            </div>
                                            <p class="text-white-50 small m-0"><i class="fas fa-arrow-up"></i>&nbsp;5% since last month</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="card shadow mb-3">
                                        <div class="card-header py-3">
                                            <p class="text-primary m-0 font-weight-bold">User</p>
                                        </div>
                                        <?php
                                        // $conn = mysqli_connect('localhost','root','');
                                        // mysqli_Select_db($conn,'blood');
                                    
                                        $sql = "select * from users where username = '$user_check' ";
                                    
                                        //execute the query 
                                        $records = mysqli_query($conn,$sql);
                                        while($row  = mysqli_fetch_array($records)){
                                        ?>
                                        <div class="card-body">
                                            <form>
                                                <div class="form-row">
                                                    <div class="col">
                                                        <div class="form-group"><label for="username"><strong>Name</strong></label><input class="form-control" type="text" placeholder="user.name" name="username" value=<?php echo $row['username']; ?>></div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="form-group"><label for="email"><strong>sex</strong></label><input class="form-control" type="text" placeholder="user@example.com" name="email" value=<?php echo $row['sex']; ?>></div>
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="col">
                                                        <div class="form-group"><label for="first_name"><strong>Age</strong><br></label><input class="form-control" type="text" value=<?php echo $row['age']; ?>></div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="form-group"><label for="last_name"><strong>Blood group</strong><br></label><input class="form-control" type="text" placeholder="blood group" name="bloodgroup" value=<?php echo $row['bloodgroup']; ?>></div>
                                                    </div>
                                                </div>
                                                <!-- <div class="form-group"><button class="btn btn-primary btn-sm" type="submit">Save Settings</button></div> -->
                                            </form>
                                        </div>
                                    </div>
                                    <div class="card shadow">
                                        <div class="card-header py-3">
                                            <p class="text-primary m-0 font-weight-bold">Contact</p>
                                        </div>
                                        <div class="card-body">
                                            <form>
                                            <div class="form-row">
                                                    <div class="col">
                                                        <div class="form-group"><label for="city"><strong>Email Address</strong></label><input class="form-control" type="text" placeholder="email" name="email" value=<?php echo $row['email']; ?> ></div>
                                                    </div>
                                                    <div class="col">Phone</strong></label><input class="form-control" type="number" placeholder="phone number" name="phone"  value=<?php echo $row['phone']; ?> ></div>
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="col">
                                                        <div class="form-group"><label for="city"><strong>City</strong></label><input class="form-control" type="text" placeholder="Los Angeles" name="city"  value=<?php echo $row['city']; ?>></div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="form-group"><label for="country"><strong>state</strong></label><input class="form-control" type="text" placeholder="Goa" name="state"  value=<?php echo $row['state']; ?>></div>
                                                    </div>
                                                </div>
                                                <!-- <div class="form-group"><button class="btn btn-primary btn-sm" type="submit">Save&nbsp;Settings</button></div> -->
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php
                                        }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a></div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>