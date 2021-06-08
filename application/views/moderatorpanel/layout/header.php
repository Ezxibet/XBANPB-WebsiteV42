<?php
date_default_timezone_set('Asia/Jakarta');
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url() ?>base/dark-admin/assets/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>base/dark-admin/assets/vendor/fonts/circular-std/style.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>base/dark-admin/assets/libs/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>base/dark-admin/assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>base/dark-admin/assets/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>base/dark-admin/assets/vendor/fonts/flag-icon-css/flag-icon.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/datatables/datatables.css">
    <title><?php echo $title ?></title>
</head>

<body>
    <div class="dashboard-main-wrapper">
        <div class="dashboard-header">
            <nav class="navbar navbar-expand-lg bg-primary fixed-top">
                <a class="navbar-brand" href="<?php echo base_url('404/home') ?>" ><img src="<?php echo base_url() ?>assets/goodgames/assets/images/weblogo.png" style="max-width: 199px;" alt="<?php echo $title ?>"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto navbar-right-top">
                        <li class="nav-item dropdown nav-user">
                            <a class="nav-link nav-user-img" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <?php
                                if ($_SESSION['admin_access'] >= 3 && $_SESSION['admin_access'] < 6) 
                                {
                                ?>
                                    <img src="<?php echo base_url() ?>base/gamon/images/img_rank/53.gif" alt="" class="user-avatar-md rounded-circle" >
                                <?php
                                }
                                if ($_SESSION['admin_access'] == 6) 
                                {
                                ?>
                                    <img src="<?php echo base_url() ?>base/gamon/images/img_rank/54.gif" alt="" class="user-avatar-sm rounded-circle">
                                <?php
                                }
                                ?>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right nav-user-dropdown">
                                <div class="nav-user-info">
                                    <h5 class="mb-0 text-white nav-user-name"><?php echo $_SESSION['admin_name'] ?></h5>
                                    <span class="status"><span class="badge-dot badge-success"></span></span><span class="ml-2"><?php echo "Online"; ?></span>
                                </div>
                                <a class="dropdown-item" href="<?php echo base_url('404/account_config/') ?>"><i class="fas fa-cog mr-2"></i>Setting</a>
                                <a class="dropdown-item" href="<?php echo base_url('404/home/logout') ?>"><i class="fas fa-power-off mr-2"></i>Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <div class="nav-left-sidebar sidebar-dark">
            <div class="menu-list">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav flex-column">
                            <li class="nav-divider">
                                Moderation Menu
                            </li>
                            <li class="nav-item ">
                                <a href="<?php echo base_url('404/home') ?>" class="nav-link <?php if($title == "XBAN Origin || Dashboard"){echo 'active';}?>">
                                    <i class="fas fa-fw fa-tachometer-alt"></i>Dashboard
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link <?php if($this->uri->segment(2)== "player"){echo 'active';}?>" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-2" aria-controls="submenu-2">
                                    <i class="fas fa-fw fa-users"></i>Players
                                </a>
                                <div id="submenu-2" class="collapse submenu">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link <?php if($this->uri->segment(2) == "player" && $title == "XBAN Origin || Create Player"){echo 'active';}?>" href="<?php echo base_url('404/player/create_player') ?>"><i class="fas fa-fw fa-plus"></i>Create Account</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link <?php if($this->uri->segment(2) == "player" && $title == "XBAN Origin || Data Players"){echo 'active';}?>" href="<?php echo base_url('404/player') ?>"><i class="fas fa-fw fa-table"></i>Data Account</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link <?php if ($this->uri->segment(2) == "news"){echo 'active';} ?>" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-3" aria-controls="submenu-3">
                                    <i class="fas fa-fw fa-newspaper"></i>News
                                </a>
                                <div id="submenu-3" class="collapse submenu">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link <?php if ($this->uri->segment(2) == "news" && $title == "XBAN Origin || Create News") {echo 'active';} ?>" href="<?php echo base_url('404/news/news_create') ?>"><i class="fas fa-fw fa-plus"></i>Create News</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link <?php if ($this->uri->segment(2) == "news" && $title == "XBAN Origin || News") {echo 'active';} ?>" href="<?php echo base_url('404/news') ?>"><i class="fas fa-fw fa-table"></i>Data News</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link <?php if ($this->uri->segment(2) == "recharge"){echo 'active';} ?>" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-4" aria-controls="submenu-4">
                                    <i class="far fa-fw fa-money-bill-alt"></i>Recharge / Top Up
                                </a>
                                <div id="submenu-4" class="collapse submenu">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link <?php if ($this->uri->segment(2) == "recharge" && $title == "XBAN Origin || Recharge Voucher") {echo 'active';} ?>" href="<?php echo base_url('404/recharge/voucher') ?>"><i class="fas fa-fw fa-plus"></i>Create Voucher</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link <?php if ($this->uri->segment(2) == "recharge" && $title == "XBAN Origin || Data Voucher"){echo 'active';} ?>" href="<?php echo base_url('404/recharge') ?>"><i class="fas fa-fw fa-barcode"></i>Data Voucher</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link <?php if ($this->uri->segment(2) == "recharge" && $title == "XBAN Origin || Recharge / Donation"){echo 'active';} ?>" href="<?php echo base_url('404/recharge/manual_recharge') ?>"><i class="fas fa-fw fa-plus"></i>Manual Recharge</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link <?php if ($this->uri->segment(2) == "recharge" && $title == "XBAN Origin || Recharge History"){echo 'active';} ?>" href="<?php echo base_url('404/recharge/recharge_history') ?>" ><i class="fas fa-fw fa-history"></i>Recharge History</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link <?php if ($this->uri->segment(2) == "redeemcode"){echo 'active';} ?>" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-5" aria-controls="submenu-5">
                                    <i class="fas fa-fw fa-barcode"></i>Redeem Code
                                </a>
                                <div id="submenu-5" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link <?php if($this->uri->segment(2) == "redeemcode" && $title == "XBAN Origin || Create Redeem Code Item"){echo 'active';} ?>" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-51" aria-controls="submenu-51">
                                                <i class="fa fa-fw fa-plus"></i>Create Redeem Code
                                            </a>
                                            <div id="submenu-51" class="collapse submenu" style="">
                                                <ul class="nav flex-column">
                                                    <li class="nav-item">
                                                        <a class="nav-link <?php if($this->uri->segment(2) == "redeemcode" && $title == "XBAN Origin || Create Redeem Code Item"){echo 'active';} ?>" href="<?php echo base_url('404/redeemcode/redeemcode_item') ?>"><i class="fas fa-file-code mr-2"></i>Redeem Code Item</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link <?php if($this->uri->segment(2) == "redeemcode" && $title == "XBAN Origin || Create Redeem Code Cash"){echo 'active';} ?>" href="<?php echo base_url('404/redeemcode/redeemcode_cash') ?>"><i class="fas fa-qrcode mr-2"></i>Redeem Code Cash</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link <?php if ($this->uri->segment(2) == "redeemcode" && $title == "XBAN Origin || Data Redeem Code"){echo 'active';} ?>" href="<?php echo base_url('404/redeemcode') ?>"><i class="fas fa-fw fa-table"></i>Data Redeem Code</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link <?php if ($this->uri->segment(2) == "redeemcode" && $title == "XBAN Origin || History Redeem Code"){echo 'active';} ?>" href="<?php echo base_url('404/redeemcode/history') ?>"><i class="fas fa-fw fa-history"></i>Redeem Code History</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link <?php if ($this->uri->segment(2) == "report" && $title == "XBAN Origin || Report"){echo 'active';} ?>" href="<?php echo base_url('404/report') ?>">
                                    <i class="fas fa-fw fa-bug"></i>Data Report
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link <?php if ($this->uri->segment(2) == "log" && $title == "XBAN Origin || All Log History"){echo 'active';} ?>" href="<?php echo base_url('404/log') ?>">
                                    <i class="fas fa-fw fa-history"></i>Log History
                                </a>
                            </li>
                            <li class="nav-divider" style="font-size:10px;">
                                Crazy Features (Coming Soon)
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="https://discord.gg/pveCUaZ" target="_blank">
                                    <i class="fab fa-fw fa-discord"></i>Discord
                                </a>
                                <a class="nav-link" href="https://www.instagram.com/dev_eyetracker" target="_blank">
                                    <i class="fab fa-fw fa-instagram"></i>Instagram
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <div class="dashboard-wrapper">
            <div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="page-header">
                            <h2 class="pageheader-title"><?php echo $header ?></h2>
                        </div>
                    </div>
                </div>