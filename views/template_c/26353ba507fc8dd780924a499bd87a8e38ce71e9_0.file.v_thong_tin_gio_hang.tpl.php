<?php
/* Smarty version 3.1.30, created on 2017-12-24 00:10:14
  from "C:\wamp64\www\ShopMyPham\views\template\khach_hang\v_thong_tin_gio_hang.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a3ef06625f099_35884499',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '26353ba507fc8dd780924a499bd87a8e38ce71e9' => 
    array (
      0 => 'C:\\wamp64\\www\\ShopMyPham\\views\\template\\khach_hang\\v_thong_tin_gio_hang.tpl',
      1 => 1514024066,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout/masterSanPham.tpl' => 1,
  ),
),false)) {
function content_5a3ef06625f099_35884499 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
include_once();

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_136775a3ef066255460_32739980', 'content');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:layout/masterSanPham.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'content'} */
class Block_136775a3ef066255460_32739980 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<title>Thông Tin Giỏ Hàng</title>
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
   <div class="w3-container w3-light-grey w3-justify">
<div class="row" style="margin: 10px auto">
   <h3 align="center">Thông Tin Giỏ Hàng</h3>
	<form method="post">
	<?php if (isset($_smarty_tpl->tpl_vars['mangSanPham']->value)) {?>
		<h3>Danh sách Sản Phẩm</h3>
		<?php $_smarty_tpl->_assignInScope('i', 1);
?>
    <?php $_smarty_tpl->_assignInScope('tongtien', 0);
?>
		<table class="table table-striped" style="color: #000000">
  			<th>STT</th><th>Mã Sản Phẩm</th><th>Tên sản phẩm</th><th>Số lượng</th><th>Đơn giá</th><th>Thành tiền</th>
  			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['mangSanPham']->value, 'TT', false, 'masanpham');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['masanpham']->value => $_smarty_tpl->tpl_vars['TT']->value) {
?>
  				<tr>
  					<td><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</td>
  					<td><?php echo $_smarty_tpl->tpl_vars['masanpham']->value;?>
</td>
  					<td><?php echo $_smarty_tpl->tpl_vars['TT']->value['2'];?>
</td>
  					<td>
  						<input type="number" name="sl_<?php echo $_smarty_tpl->tpl_vars['masanpham']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['TT']->value['1'];?>
" style="width: 15%; text-align:center">
 						  				
  					</td>
  					<td><?php echo number_format($_smarty_tpl->tpl_vars['TT']->value['0']);?>
</td>
  					<td><?php echo number_format($_smarty_tpl->tpl_vars['TT']->value['0']*$_smarty_tpl->tpl_vars['TT']->value['1']);?>
</td>
  				</tr>
  				<?php $_smarty_tpl->_assignInScope('i', $_smarty_tpl->tpl_vars['i']->value+1);
?>
          <?php $_smarty_tpl->_assignInScope('tongtien', $_smarty_tpl->tpl_vars['tongtien']->value+$_smarty_tpl->tpl_vars['TT']->value['0']*$_smarty_tpl->tpl_vars['TT']->value['1']);
?>
  			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
  
        <tr>
          <td colspan="5" align="right">
            <strong>Tổng tiền sản phẩm</strong>
          </td>
          <td>
            <?php echo number_format($_smarty_tpl->tpl_vars['tongtien']->value);?>
 VNĐ
          </td>
        </tr>
		</table>
		
	<?php }?>

	
	<?php if (isset($_smarty_tpl->tpl_vars['mangSanPham']->value) || isset($_smarty_tpl->tpl_vars['mangBoSuuTap']->value)) {?>
		<p align="center">
			<input style="border-radius: 10px;" type="submit" name="CapNhat" value="Cập nhật" class="w3-btn w3-red">
			<a style="border-radius: 10px;" href="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
khach-hang/dat-hang.html" class="w3-btn w3-green">Đăt hàng</a>
			<a style="border-radius: 10px;" href="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
khach-hang/huy-gio-hang.html" class="w3-btn w3-aqua">Hủy giỏ hàng</a>
		</p>
	<?php }?>
	</form>
  </div>
	<?php if (!isset($_smarty_tpl->tpl_vars['mangSanPham']->value) && !isset($_smarty_tpl->tpl_vars['mangBoSuuTap']->value)) {?>
		<h2 align="center">Giỏ hàng rỗng</h2>
	<?php }?>

  <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
  <div id="id01" class="w3-modal">
    <div class="w3-modal-content w3-card-8 w3-animate-zoom" style="max-width:600px">
      <div class="w3-center"><br>
        <span onclick="document.getElementById('id01').style.display='none'" class="w3-closebtn w3-hover-red w3-container w3-padding-8 w3-display-topright" title="Close Modal">&times;</span>
        <img src="img_avatar4.png" alt="Avatar" style="width:30%" class="w3-circle w3-margin-top">
        $smarty->assign()
      </div>

      <form class="w3-container" action="form.asp">
        <div class="w3-section">
          <label><b>Username</b></label>
          <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Enter Username" id="ten_dang_nhap" name="ten_dang_nhap"  required>
          <label><b>Password</b></label>
          <input class="w3-input w3-border" type="password" placeholder="Enter Password" id="mat_khau" name="mat_khau" required>
           <button type="submit" name="submit" class="btn btn-primary btn-lg" required="required">Đăng nhập</button>
          <input class="w3-check w3-margin-top" type="checkbox" checked="checked"> Remember me
        </div>
      </form>

      <div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
        <button onclick="document.getElementById('id01').style.display='none'" type="button" class="w3-btn w3-red">Cancel</button>
        <span class="w3-right w3-padding w3-hide-small">Forgot <a href="#">password?</a></span>
      </div>

    </div>
  </div>
</div>
<?php
}
}
/* {/block 'content'} */
}
