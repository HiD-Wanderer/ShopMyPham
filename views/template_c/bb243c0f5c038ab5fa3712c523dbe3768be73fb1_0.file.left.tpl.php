<?php
/* Smarty version 3.1.30, created on 2017-12-24 00:24:07
  from "C:\wamp64\www\ShopMyPham\views\template\layoutAdmin\left.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a3ef3a759afb7_03942841',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bb243c0f5c038ab5fa3712c523dbe3768be73fb1' => 
    array (
      0 => 'C:\\wamp64\\www\\ShopMyPham\\views\\template\\layoutAdmin\\left.tpl',
      1 => 1514047273,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a3ef3a759afb7_03942841 (Smarty_Internal_Template $_smarty_tpl) {
?>

        <!-- LEFT SIDEBAR -->
        <div id="sidebar-nav" class="sidebar">
             <div class="sidebar-scroll">
                <nav>
                    
    <ul class="nav">
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
quan-tri.html" class="active"><i class="lnr lnr-home"></i> <span>Home</span></a></li>

                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
quan-tri/san-pham-ban-chay.html" class=""><i class="fa fa-bug" aria-hidden="true"></i> <span>Sản phẩm bán chạy</span></a></li>

                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
quan-tri/thong-ke-doanh-thu.html" class=""><i class="lnr lnr-chart-bars"></i> <span>Thống kê</span></a></li>           
            <li>
                <a href="#Products" data-toggle="collapse" class="collapsed"><i class="fa fa-diamond" aria-hidden="true"></i></i> <span>Sản phẩm</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
                <div id="Products" class="collapse ">
                    <ul class="nav">
                                                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
quan-tri/san-pham/danh-sach-san-pham.html" class="">Danh sách sản phẩm</a></li>
                                                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
quan-tri/san-pham/them-san-pham.html" class="">Thêm sản phẩm</a></li>
                                            </ul>
                </div>
            </li>
            <li>
                <a href="#News" data-toggle="collapse" class="collapsed"><i class="fa fa-newspaper-o" aria-hidden="true"></i><span>Tin tức</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
                <div id="News" class="collapse ">
                    <ul class="nav">
                                                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
quan-tri/tin-tuc/danh-sach-tin-tuc.html" class="">DS Tin tức</a></li>
                                                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
quan-tri/tin-tuc/them-tin-tuc.html" class="">Thêm tin tức</a></li>
                                            </ul>
                </div>
            </li>
          
            <li>
                <a href="#Orders" data-toggle="collapse" class="collapsed"><i class="lnr lnr-cart"></i> <span>Đơn hàng</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
                <div id="Orders" class="collapse ">
                    <ul class="nav">
                                                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
quan-tri/don-hang/danh-sach-chi-tiet.html" class="">Danh sách hóa đơn</a></li>
                                                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
quan-tri/don-hang/danh-sach-don-hang.html" class="">Danh sách đơn hàng</a></li>
                                                   
                                            </ul>
                </div>
            </li>
            <li>
                <a href="#Custonmer" data-toggle="collapse" class="collapsed"><i class="fa fa-user" aria-hidden="true"></i><span>Nhân viên</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
                <div id="Custonmer" class="collapse ">
                    <ul class="nav">
                                                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
quan-tri/nguoi-dung/danh-sach-nguoi-dung.html" class="">Danh sách nhân viên</a></li>
                                                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
quan-tri/nguoi-dung/them-nguoi-dung.html" class="">Thêm nhân viên</a></li>
                                            </ul>
                </div>
            </li>               

                
    </ul>               </nav>
            </div>
        </div>
        <!-- END LEFT SIDEBAR --><?php }
}
