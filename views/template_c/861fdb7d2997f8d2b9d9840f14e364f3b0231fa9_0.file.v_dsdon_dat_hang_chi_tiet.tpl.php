<?php
/* Smarty version 3.1.30, created on 2017-12-24 00:29:38
  from "C:\wamp64\www\ShopMyPham\views\template\don_dat_hang\v_dsdon_dat_hang_chi_tiet.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a3ef4f28a5891_51685002',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '861fdb7d2997f8d2b9d9840f14e364f3b0231fa9' => 
    array (
      0 => 'C:\\wamp64\\www\\ShopMyPham\\views\\template\\don_dat_hang\\v_dsdon_dat_hang_chi_tiet.tpl',
      1 => 1481902635,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layoutAdmin/masterAdmin.tpl' => 1,
  ),
),false)) {
function content_5a3ef4f28a5891_51685002 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_308275a3ef4f289e2c1_88266899', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:layoutAdmin/masterAdmin.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'content'} */
class Block_308275a3ef4f289e2c1_88266899 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php if (isset($_smarty_tpl->tpl_vars['DSDonDHChiTiet']->value)) {?>
		<div class="row">
	      <div class="col-lg-12">
	      		<section class="panel">
	              <header class="panel-heading">
	                  Danh sách chi tiết đơn hàng
	              </header>
	              <table class="table table-striped">
	                  <thead>
	                  <tr>
	                      <th>#</th>
	                      <th>Số HD</th>
	                      <th>Mã SP</th>
	                      <th>Tên Sản Phẩm</th>
	                      <th>Số lượng</th>
	                      <th>Đơn giá</th>
	                  </tr>
	                  </thead>
	                  <body>
	                  <?php $_smarty_tpl->_assignInScope('i', 1);
?>
	                  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['DSDonDHChiTiet']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
	              		<tr>
	              		    <td><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</td>
	              		    <td><?php echo $_smarty_tpl->tpl_vars['item']->value['ma_hoa_don'];?>
</td>
	              		    <td><?php echo $_smarty_tpl->tpl_vars['item']->value['ma_san_pham'];?>
</td>
	              		    <td><?php echo $_smarty_tpl->tpl_vars['item']->value['ten_san_pham'];?>
</td>
	              		    <td><?php echo number_format($_smarty_tpl->tpl_vars['item']->value['so_luong']);?>
</td>
	              		    <td><?php echo number_format($_smarty_tpl->tpl_vars['item']->value['don_gia']);?>
</td>
	              		</tr>
	              		<?php $_smarty_tpl->_assignInScope('i', $_smarty_tpl->tpl_vars['i']->value+1);
?>
	                  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

	                  
	                  </body>
	              </table>
	          </section>
	      </div>
	    </div>
	<?php }
}
}
/* {/block 'content'} */
}
