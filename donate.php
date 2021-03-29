<?php
    include('includes/session.php');
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Donate</title>
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
                            <li class="nav-item" role="presentation"><a class="nav-link" href="profile.php"><i class="fas fa-tachometer-alt"></i><span>&nbsp;Dashboard</span></a></li>
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
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Donate</h4>
                        <p class="card-text">If not sure Check out these !!!</p><a class="card-link" href="learn.php">Learn</a><a class="card-link" href="eligible.php">Eligibility</a></div>
                </div>
                <div class="container-fluid">
                <?php
                    // $conn = mysqli_connect('localhost','root','');
                    // mysqli_Select_db($conn,'blood');
                
                    $sql = "select * from users where username = '$user_check' ";
                
                    //execute the query 
                    $records = mysqli_query($conn,$sql);
                    while($row  = mysqli_fetch_array($records)){
                  ?>
                    <div class="row mb-3">
                        <div class="col-lg-4">
                            <div class="card mb-3">
                                <div class="card-body text-center shadow"><img class="rounded-circle mb-3 mt-4" src="images/donate.jpg" width="160" height="160">
                                    <div class="mb-3">
                                    <h4>BLOOD BANK DONATION</h4>
                                        <button class="btn btn-primary btn-sm" type="button" data-toggle="modal" data-target="#form">Make An Appointment&nbsp;</button></div>
                                </div>
                                <div class="modal fade" id="form" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header border-bottom-0">
              <h5 class="modal-title" id="exampleModalLabel1">Appointment</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form method = "post" action="includes/bbreq.php">
              <div class="modal-body">  
                  <div class="form-group">
                  <label for="bbid">BloodBank ID</label>
                  <input type="text" class="form-control" name="bbid" aria-describedby="emailHelp" placeholder="bloodbank_id" >
                  <small id="emailHelp" class="form-text text-muted">for more info go to <a href="bloodbank.php">Blood-Banks</a></small>
                </div>
                <div class="form-group">
                  <label for="username">Name</label>
                  <input type="text" class="form-control" name="name" aria-describedby="emailHelp" placeholder="bloodbank_id"  value=<?php echo $row['username']; ?>>
                  <small id="emailHelp" class="form-text text-muted">Your information is safe with us.</small>
                </div>
                <div class="form-group">
                  <label for="bloodgroup">Bloodgroup</label>
                  <input type="text" class="form-control" name="bloodgroup" placeholder="enter bloodgrp.." value=<?php echo $row['bloodgroup']; ?>>
                </div>
                <div class="form-group">
                  <label for="date">Date</label>
                  <input type="date" class="form-control" name="date" placeholder="date">
                </div>
                <div class="form-group">
                    <label for="Time">Time</label>
                    <input type="time" class="form-control" name="time" placeholder="time">
                  </div>
                  <div class="form-group">
                    <label for="Email">Email</label>
                    <input type="text" class="form-control" name="email" placeholder="email" value=<?php echo $row['email']; ?>>
                  </div>
                  <div class="form-group">
                    <label for="phone">phone</label>
                    <input type="text" class="form-control" name="phone" placeholder="phone" value=<?php echo $row['phone']; ?>>
                  </div>
              </div>
              <div class="modal-footer border-top-0 d-flex justify-content-center">
                <button type="submit" class="btn btn-success">Submit</button>
              </div>
            </form>
          </div>
        </div>
      </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="card mb-3">
                                <div class="card-body text-center shadow"><img class="rounded-circle mb-3 mt-4" src="images/don.jpg" width="160" height="160">
                                    <div class="mb-3">
                                    <H4>DONATION</H4>
                                        <button class="btn btn-primary btn-sm" type="button" data-toggle="modal" data-target="#form2">Donate&nbsp;</button></div>
                                </div>
                                <div class="modal fade" id="form2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header border-bottom-0">
              <h5 class="modal-title" id="exampleModalLabel">Donation</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form method = "post" action="includes/avail.php">
              <div class="modal-body">
                <div class="form-group">
                  <label for="Name">Confirmation</label><br>
                  <input type="checkbox" >I authorise the website to display my name and telephone number, so that the needy could contact me, as and when there is an emergency.<br>
                </div>
                <div class="form-group">
                    <label for="isavail">Availability:  </label>
                    <select name="isavail">
                      <option value="1">Make Me Available!!</option>
                      <option value="0">Unavailable</option>
                    </select>
                </div>
                  <div class="form-group">
                      <label for="username">Name</label>
                      <input type="text" class="form-control" name="username" placeholder="name" value=<?php echo $row['username']; ?>>
                  </div>
                  <div class="form-group">
                    <label for="bloodgroup">BloodGroup</label>
                    <input type="text" class="form-control" name="bloodgroup" placeholder="BloodGroup" value=<?php echo $row['bloodgroup']; ?>>
                </div>
              </div>
              <div class="modal-footer border-top-0 d-flex justify-content-center">
                <button type="submit" class="btn btn-success">Submit</button>
              </div>
            </form>
          </div>
        </div>
      </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="card mb-3">
                                <div class="card-body text-center shadow"><img class="rounded-circle mb-3 mt-4" src="images/blood4.jpg" width="160" height="160">
                                    <div class="mb-3">
                                      <h4>CONDUCT DRIVES</h4>
                                        <button class="btn btn-primary btn-sm" type="button" data-toggle="modal" data-target="#form3">CONDUCT&nbsp;</button></div>
                                </div>
                                <div class="modal fade" id="form3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header border-bottom-0">
              <h5 class="modal-title" id="exampleModalLabel">CONDUCT</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form method="post" action="includes/campcon.php">
              <div class="modal-body">  
                  <div class="form-group">
                  <label for="username">Name</label>
                  <input type="text" class="form-control" name="name" aria-describedby="emailHelp" placeholder="name" value=<?php echo $row['username']; ?>>
                  <small id="emailHelp" class="form-text text-muted">Your information is safe with us.</small>
                </div>
                  <div class="form-group">
                  <label for="org"> Organization Name</label>
                  <input type="text" class="form-control" name="org" aria-describedby="emailHelp" placeholder="Organization name">
                  <small id="emailHelp" class="form-text text-muted">Your information is safe with us.</small>
                </div>
                <div class="form-group">
                  <label for="Venue">Venue</label>
                  <input type="text" class="form-control" name="venue" aria-describedby="emailHelp" placeholder="Venue">
                  <small id="emailHelp" class="form-text text-muted">Your information is safe with us.</small>
                </div>
                <div class="form-group">
                  <label for="Email">Email</label>
                  <input type="text" class="form-control" name="email" placeholder="email" value=<?php echo $row['email']; ?>>
                </div>
                <div class="form-group">
                  <label for="phone">phone</label>
                  <input type="text" class="form-control" name="phone" placeholder="phone" value=<?php echo $row['phone']; ?>> 
                </div>
                  <div class="form-group">
                    <label for="city">city</label>
                    <input type="text" class="form-control" name="city" placeholder="city" value=<?php echo $row['city']; ?>>
                  </div>
                  <div class="form-group">
                    <label for="state">state</label>
                    <input type="text" class="form-control" name="state" placeholder="state" value=<?php echo $row['state']; ?>>
                  </div>
                  <div class="form-group">
                    <label for="nod">Estimated no of Donation</label>
                    <input type="number" class="form-control" name="nod" placeholder="No of Donation">
                  </div>
                  <div class="form-group">
                    <label for="Emp">Employee/Student/people Strength</label>
                    <input type="number" class="form-control" name="strength" placeholder="Strength">
                  </div>
                  <div class="form-group">
                    <label for="date">Date</label>
                    <input type="date" class="form-control" name="date" placeholder="Date">
                  </div>
                  <div class="form-group">
                    <label for="comments">Additional comments</label>
                    <input type="text" class="form-control" name="comments" placeholder="comments">
                  </div>
              </div>
              <div class="modal-footer border-top-0 d-flex justify-content-center">
                <button type="submit" class="btn btn-success">Submit</button>
              </div>
            </form>
          </div>
        </div>
      </div>
                            </div>
                        </div> 
                    </div>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a></div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>