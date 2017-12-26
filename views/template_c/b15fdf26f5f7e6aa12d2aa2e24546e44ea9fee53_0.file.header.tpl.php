<?php
/* Smarty version 3.1.30, created on 2017-12-24 00:24:07
  from "C:\wamp64\www\ShopMyPham\views\template\layoutAdmin\header.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a3ef3a7485944_44000032',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b15fdf26f5f7e6aa12d2aa2e24546e44ea9fee53' => 
    array (
      0 => 'C:\\wamp64\\www\\ShopMyPham\\views\\template\\layoutAdmin\\header.tpl',
      1 => 1490228697,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a3ef3a7485944_44000032 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- WRAPPER -->
    <div id="wrapper">

        <!-- NAVBAR -->
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="brand">
                <a href="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
quan-tri.html"><img src="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/public/assets/img/logo-dark.png" alt="Klorofil Logo" class="img-responsive logo"></a>
            </div>
            <div class="container-fluid">
                <div class="navbar-btn">
                    <button type="button" class="btn-toggle-fullwidth"><i class="lnr lnr-arrow-left-circle"></i></button>
                </div>
                <form class="navbar-form navbar-left">
                    <div class="input-group">
                        <input type="text" value="" class="form-control" placeholder="Search dashboard..." id="autocomplete">
                        <span class="input-group-btn"><button type="button" class="btn btn-primary">Love U</button></span>
                    </div>
                </form>
               

                <div id="navbar-menu">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle icon-menu" data-toggle="dropdown">
                                <i class="lnr lnr-alarm"></i>
                                <span class="badge bg-danger" id="sodhMoi"><?php echo $_smarty_tpl->tpl_vars['SoDonDatHangMoi']->value;?>
</span>
                            </a>
                            <ul class="dropdown-menu notifications">
                                <li><a href="#" class="notification-item"><span class="dot bg-warning"></span>System space is almost full</a></li>
                                <li><a href="#" class="notification-item"><span class="dot bg-danger"></span>You have 9 unfinished tasks</a></li>
                                <li><a href="#" class="notification-item"><span class="dot bg-success"></span>Monthly report is available</a></li>
                                <li><a href="#" class="notification-item"><span class="dot bg-warning"></span>Weekly meeting in 1 hour</a></li>
                                <li><a href="#" class="notification-item"><span class="dot bg-success"></span>Your request has been approved</a></li>
                                <li><a href="#" class="more">See all notifications</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="lnr lnr-question-circle"></i> <span>Help</span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Basic Use</a></li>
                                <li><a href="#">Working With Data</a></li>
                                <li><a href="#">Security</a></li>
                                <li><a href="#">Troubleshooting</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/public/assets/img/user.png" class="img-circle" alt="Avatar"> 
                            <span> 
                                <?php if (isset($_SESSION['fullname'])) {?>
                                        <?php echo $_SESSION['fullname'];?>

                                    <?php } else { ?>
                                        Bạn chưa đăng nhập

                                <?php }?>
                            </span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
quan-tri/nguoi-dung/profile.html"><i class="lnr lnr-user"></i> <span>My Profile</span></a></li>
                                <li><a href="#"><i class="lnr lnr-envelope"></i> <span>Message</span></a></li>
                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
quan-tri/nguoi-dung/lock-screen.html"><i class="lnr lnr-cog"></i> <span>Lock Screen</span></a></li>
                                <li> <?php if (isset($_SESSION['fullname'])) {?>
                                            <li>
                                                <a href="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
quan-tri/nguoi-dung/dang-xuat.html"><i class="lnr lnr-exit"></i><span> Đăng xuất</span></a>
                                            </li>
                                        <?php } else { ?>
                                            <li>
                                                <a href="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
quan-tri/nguoi-dung/dang-nhap.html"><i class="lnr lnr-exit"></i><span> Đăng xuất</span></a>
                                            </li>
                                        <?php }?>         
                                       
                              </a></li>
                            </ul>
                        </li>
                        <!-- <li>i class="lnr lnr-exit">
                            <a class="update-pro" href="https://www.themeineed.com/downloads/klorofil-pro-bootstrap-admin-dashboard-template/?utm_source=klorofil&utm_medium=template&utm_campaign=KlorofilPro" title="Upgrade to Pro" target="_blank"><i class="fa fa-rocket"></i> <span>UPGRADE TO PRO</span></a>
                        </li> -->
                    </ul>
                </div>
            </div>
        </nav>
        <!-- END NAVBAR -->
<?php }
}
