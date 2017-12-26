<?php
/* Smarty version 3.1.30, created on 2017-12-24 00:07:32
  from "C:\wamp64\www\ShopMyPham\views\template\layout\header.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a3eefc49f1780_64402427',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e45828ddbece579343d6c6a92a0f297083e8d5d0' => 
    array (
      0 => 'C:\\wamp64\\www\\ShopMyPham\\views\\template\\layout\\header.tpl',
      1 => 1514074041,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a3eefc49f1780_64402427 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- header -->
<div class="header" id="home">
  <div class="container">
    <ul>
        <li> <a href="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
khach-hang/dang-ky.html" data-toggle="modal" ><i class="fa fa-unlock-alt" aria-hidden="true"></i> Đăng nhập </a></li>
      <li> <a href="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
khach-hang/dang-ky.html" data-toggle="modal"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Đăng ký </a></li>
      <li><i class="fa fa-phone" aria-hidden="true"></i> Call : 01234567898</li>
      <li><i class="fa fa-envelope-o" aria-hidden="true"></i> <a href="mailto:info@example.com">info@example.com</a></li>
    </ul>
  </div>
</div>
<!-- //header -->
<!-- header-bot -->
<div class="header-bot">
  <div class="header-bot_inner_wthreeinfo_header_mid">
    <div class="col-md-4 header-middle">
      <form id="mainSanPham">
          <input type="search" name="search" placeholder="Search here..." required="">
          <input id="" type="submit" value=" ">
        <div class="clearfix"></div>
      </form>
    </div>
    <!-- header-bot -->
      <div class="col-md-4 logo_agile">
        <h1><a href="index.html"><span>R</span>OC Shopping <i class="fa fa-shopping-bag top_logo_agile_bag" aria-hidden="true"></i></a></h1>
      </div>
        <!-- header-bot -->
    <div class="col-md-4 agileits-social top_content">
            <ul class="social-nav model-3d-0 footer-social w3_agile_social">
                                               <li class="share">Share On : </li>
                              <li><a href="#" class="facebook">
                                  <div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
                                  <div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div></a></li>
                              <li><a href="#" class="twitter"> 
                                  <div class="front"><i class="fa fa-twitter" aria-hidden="true"></i></div>
                                  <div class="back"><i class="fa fa-twitter" aria-hidden="true"></i></div></a></li>
                              <li><a href="#" class="instagram">
                                  <div class="front"><i class="fa fa-instagram" aria-hidden="true"></i></div>
                                  <div class="back"><i class="fa fa-instagram" aria-hidden="true"></i></div></a></li>
                              <li><a href="#" class="pinterest">
                                  <div class="front"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
                                  <div class="back"><i class="fa fa-linkedin" aria-hidden="true"></i></div></a></li>
                            </ul>



    </div>
    <div class="clearfix"></div>
  </div>
</div>
<!-- //header-bot -->
<!-- banner -->
<div class="ban-top">
  <div class="container">
    <div class="top_nav_left">
      <nav class="navbar navbar-default">
        <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          </button>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse menu--shylock" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav menu__list">
          <li class="active menu__item menu__item--current"><a class="menu__link" href="index.html">Home <span class="sr-only">(current)</span></a></li>
          <li class=" menu__item"><a class="menu__link" href="about.html">Giới thiệu</a></li>
          <li class="dropdown menu__item">
            <a href="#" class="dropdown-toggle menu__link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Sản phẩm <span class="caret"></span></a>
              <ul class="dropdown-menu multi-column columns-3">
                <div class="agile_inner_drop_nav_info">
                  <div class="col-sm-6 multi-gd-img1 multi-gd-text ">
                    <a href="mens.html"><img src="<?php echo $_smarty_tpl->tpl_vars['iPath']->value;?>
tf1.jpg" alt=" "/></a>
                  </div>
                  <div class="col-sm-6 multi-gd-img">
                     <li><a href="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
san-pham/danh-sach-san-pham">Tất cả</a></li>
                     <ul class="multi-column-dropdown">
                                <?php if (isset($_smarty_tpl->tpl_vars['dsLoaiSanPhamMenu']->value)) {?>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['dsLoaiSanPhamMenu']->value, 'itemLMenu');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['itemLMenu']->value) {
?>
                                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
san-pham/<?php echo $_smarty_tpl->tpl_vars['itemLMenu']->value['ten_loai_url'];?>
.html"><?php echo $_smarty_tpl->tpl_vars['itemLMenu']->value['ten_loai'];?>
</a></li>
                                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                                <?php }?>
                      </ul>
                  </div>
              
                  <div class="clearfix"></div>
                </div>
              </ul>
          </li>
           <li class=" menu__item"><a class="menu__link" href="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
tin-tuc/danh-sach-tin-tuc.html">Tin tức</a></li>
          <li class=" menu__item"><a class="menu__link" href="contact.html">Liên hệ</a></li>
          </ul>
        </div>
        </div>
      </nav>  
    </div>
    <div class="top_nav_right">
      <div class="wthreecartaits wthreecartaits2 cart cart box_1"> 
            <form action="#" method="post" class="last"> 
            <input type="hidden" name="cmd" value="_cart">
            <input type="hidden" name="display" value="1">
            <button class="w3view-cart" type="submit" name="submit" value=""><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></button>
          </form>  
  
            </div>
    </div>
    <div class="clearfix"></div>
  </div>
</div>
<!-- //banner-top --><?php }
}
