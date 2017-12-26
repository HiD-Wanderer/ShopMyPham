<?php
/* Smarty version 3.1.30, created on 2017-12-24 03:29:29
  from "C:\wamp64\www\ShopMyPham\views\template\khach_hang\v_dang_ky.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a3f1f1934d1a3_17255746',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '223bc0a566cfa2fe5e9329a6678d4a8ca48e9d44' => 
    array (
      0 => 'C:\\wamp64\\www\\ShopMyPham\\views\\template\\khach_hang\\v_dang_ky.tpl',
      1 => 1514045232,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout/masterSanPham.tpl' => 1,
  ),
),false)) {
function content_5a3f1f1934d1a3_17255746 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_254425a3f1f1933e641_03306159', 'content');
?>

<!--`ten_khach_hang`, `phai`, `email`, `dia_chi`, `dien_thoai`, `ghi_chu`, `ten_dang_nhap`, `mat_khau`--><?php $_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:layout/masterSanPham.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'content'} */
class Block_254425a3f1f1933e641_03306159 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>





<div style="width: 30%; margin: 10px auto; border: 5px solid black; padding: 10px">
	<?php if (isset($_smarty_tpl->tpl_vars['data']->value['mss'])) {?>
	<p><?php echo $_smarty_tpl->tpl_vars['data']->value['mss'];?>
</p>
	<?php }?>
	<div class="row">
		<div class="col-md-12">
			<form method="post">
				<div class="form-group" >
					<label for="email">Tên khách hàng:</label>
					<input style="border-radius: 0px;" type="text" class="form-control" id="ten_khach_hang" name="ten_khach_hang" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['ten_khach_hang'];?>
">
					<span><?php echo $_smarty_tpl->tpl_vars['dataErr']->value['ten_khach_hang'];?>
</span>
				</div>
				<div class="form-group">
					<label for="email" margin-right: 20px">Phái:</label>
					<label margin-right: 20px"><input type="radio" name="phai" value="1" <?php if ($_smarty_tpl->tpl_vars['data']->value['phai'] == 1) {?>checked="checked"<?php }?>> Nam</label>
					<label margin-right: 20px"><input type="radio" name="phai" value="0" <?php if ($_smarty_tpl->tpl_vars['data']->value['phai'] == 0) {?>checked="checked"<?php }?>> Nữ</label>
				</div>
				<div class="form-group">
					<label for="email">Email:</label>
					<input style="border-radius: 0px;" type="email" class="form-control" id="email" name="email" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['email'];?>
">
					<span><?php echo $_smarty_tpl->tpl_vars['dataErr']->value['email'];?>
</span>
				</div>
				<div class="form-group">
					<label for="email">Địa chỉ:</label>
					<input style="border-radius: 0px;" type="text" class="form-control" id="dia_chi" name="dia_chi" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['dia_chi'];?>
">
					<span><?php echo $_smarty_tpl->tpl_vars['dataErr']->value['dia_chi'];?>
</span>
				</div>
				<div class="form-group">
					<label for="email">Điện thoại:</label>
					<input style="border-radius: 0px;" type="text" class="form-control" id="dien_thoai" name="dien_thoai" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['dien_thoai'];?>
">
					<span><?php echo $_smarty_tpl->tpl_vars['dataErr']->value['dien_thoai'];?>
</span>
				</div>

				<div class="form-group">
					<label for="pwd">Ghi chú:</label>
					<input style="border-radius: 0px;" type="text" class="form-control" id="ghi_chu" name="ghi_chu">

				</div>
				<div class="form-group">
					<label for="pwd">Tên đăng nhập:</label>
					<input style="border-radius: 0px;" type="text" class="form-control" id="ten_dang_nhap" name="ten_dang_nhap">
					<span><?php echo $_smarty_tpl->tpl_vars['dataErr']->value['ten_dang_nhap'];?>
</span>
				</div>
				<div class="form-group">
					<label for="pwd">Mật khẩu:</label>
					<input style="border-radius: 0px;" type="password" class="form-control" id="mat_khau" name="mat_khau">
					<span><?php echo $_smarty_tpl->tpl_vars['dataErr']->value['mat_khau'];?>
</span>
				</div>
				<div align="center">			  
					<button style="border-radius: 0px;" type="submit" name="dangky" class="btn btn-success" required="required">Lưu</button>

				</div>
			</form>
		</div>
	</div>		
</div>
<?php
}
}
/* {/block 'content'} */
}
