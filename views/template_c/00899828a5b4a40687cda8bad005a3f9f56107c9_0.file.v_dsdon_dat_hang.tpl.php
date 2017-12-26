<?php
/* Smarty version 3.1.30, created on 2017-12-24 00:29:31
  from "C:\wamp64\www\ShopMyPham\views\template\don_dat_hang\v_dsdon_dat_hang.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a3ef4ebb909d5_49126754',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '00899828a5b4a40687cda8bad005a3f9f56107c9' => 
    array (
      0 => 'C:\\wamp64\\www\\ShopMyPham\\views\\template\\don_dat_hang\\v_dsdon_dat_hang.tpl',
      1 => 1481902632,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layoutAdmin/masterAdmin.tpl' => 1,
  ),
),false)) {
function content_5a3ef4ebb909d5_49126754 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_294135a3ef4ebb845b7_01058857', 'content');
?>

<!--SELECT `ma_hoa_don`, `hoa_don`.`ma_khach_hang`, `ngay_dat`, `tong_tien`, `tien_dat_coc`, `con_lai`, `hinh_thuc_thanh_toan`, `trang_thai`,  `ten_khach_hang`, `phai`, `email`, `dia_chi`, `dien_thoai`--><?php $_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:layoutAdmin/masterAdmin.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'content'} */
class Block_294135a3ef4ebb845b7_01058857 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php if (isset($_smarty_tpl->tpl_vars['DSDonDatHang']->value)) {?>
		<div class="row">
	      <div class="col-lg-12">
	      		<section class="panel">
	              <header class="panel-heading">
	                  Danh sách đơn hàng
	              </header>
	              <table class="table table-striped">
	                  <thead>
	                  <tr>
	                      <th>#</th>
	                      <th>Số HD</th>
	                      <th>Ngày HD</th>
	                      <th>Tổng tiền</th>

	                      <th>Mã KH</th>
	                      <th>Tên KH</th>
	                      <th>Địa chỉ </th>
	                      <th>Email </th>
	                      <th>Điện thoại </th>
	                      <th>HTTT </th>
	                      <th>&nbsp; </th>
	                  </tr>
	                  </thead>
	                  <tbody>
	                  <?php $_smarty_tpl->_assignInScope('i', 1);
?>
	                  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['DSDonDatHang']->value, 'itemDDH');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['itemDDH']->value) {
?>
	              		<tr>
	              		    <td><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</td>
	              		    <td><?php echo $_smarty_tpl->tpl_vars['itemDDH']->value['ma_hoa_don'];?>
</td>
	              		    <td><?php echo $_smarty_tpl->tpl_vars['itemDDH']->value['ngay_dat'];?>
</td>
	              		    <td><?php echo number_format($_smarty_tpl->tpl_vars['itemDDH']->value['tong_tien']);?>
</td>
	              		    <td><?php echo $_smarty_tpl->tpl_vars['itemDDH']->value['ma_khach_hang'];?>
</td>
	              		    <td><?php echo $_smarty_tpl->tpl_vars['itemDDH']->value['ten_khach_hang'];?>
</td>
	              		    <td><?php echo $_smarty_tpl->tpl_vars['itemDDH']->value['dia_chi'];?>
</td>
	              		    <td><?php echo $_smarty_tpl->tpl_vars['itemDDH']->value['email'];?>
</td>
	              		    <td><?php echo $_smarty_tpl->tpl_vars['itemDDH']->value['dien_thoai'];?>
</td>
	              		    <td><?php echo $_smarty_tpl->tpl_vars['itemDDH']->value['hinh_thuc_thanh_toan'];?>
</td>
	              		    <td>
		              		    <a href="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
quan-tri/don-hang/cap-nhat-don-hang/<?php echo $_smarty_tpl->tpl_vars['itemDDH']->value['ma_hoa_don'];?>
" class="btn-cap-nhat">Cập nhật</a>
		              		    <a href="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
quan-tri/don-hang/xoa-don-hang/<?php echo $_smarty_tpl->tpl_vars['itemDDH']->value['ma_hoa_don'];?>
" class="btn btn-warning">Xóa</a>
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
