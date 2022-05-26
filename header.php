<?php 
if($_SESSION['logedin']!=TRUE)
{
header('location:page-login.php');
}
 ?> 
<div class="header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                <!-- <div class="float-left">
                   <div class="hamburger sidebar-toggle">
                       <span class="line"></span>
                       <span class="line"></span>
                       <span class="line"></span>
                   </div>
                </div> -->
                    <div class="float-right">
                        <div class="dropdown dib">
                        <div class="header-icon" data-toggle="dropdown">
                        <i class="ti-bell"></i>
                                <!-- <div class="drop-down dropdown-menu dropdown-menu-right">   
                                </div> -->
                        </div>
                        </div>
                <div class="header-icon" data-toggle="dropdown">
                   <span class="user">
                   <i class="fa fa-user fa-lg"></i>
                   </span>
                <div class="drop-down dropdown-profile dropdown-menu dropdown-menu-right">
                    <div class="dropdown-content-body">
                      <ul>
                      <li><a href="logout.php"><i class="fa fa-sign-out"></i> Logout</a></li>                                <!-- <li> -->
                          <!-- <a href="index.php">
                         <i class="ti-power-off"></i>
                             <span>Logout</span>
                                   </a> -->
                              <!-- </li> -->
                      </ul>
                   </div>
                </div>
                </div>
             </div>
             </div>
         </div>
        </div>
    </div>
    </div>