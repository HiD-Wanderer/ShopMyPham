<?php
/* Smarty version 3.1.30, created on 2017-12-24 00:29:02
  from "C:\wamp64\www\ShopMyPham\views\template\san_pham\v_san_pham_ban_chay.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a3ef4ce273914_29092237',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '62555f695156b4a9827ac717d9e3a300df08e3d9' => 
    array (
      0 => 'C:\\wamp64\\www\\ShopMyPham\\views\\template\\san_pham\\v_san_pham_ban_chay.tpl',
      1 => 1514053996,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layoutAdmin/masterAdmin.tpl' => 1,
  ),
),false)) {
function content_5a3ef4ce273914_29092237 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_145275a3ef4ce26d117_54548210', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:layoutAdmin/masterAdmin.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'content'} */
class Block_145275a3ef4ce26d117_54548210 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php if (isset($_smarty_tpl->tpl_vars['DSSanPhamBanChay']->value)) {?>
		<div class="row">
	      <div class="col-lg-12">
	      		<section class="panel">
	              <header class="panel-heading">
	                  Danh sách sản phẩm
	              </header>
	              <table class="table table-striped">
	                  <thead>
	                  <tr>
	                      <th>#</th>
	                      <th>Mã </th>
	                      <th>Tên</th>
	                      <th>TSL</th>

	                      <th>ND tóm tắt</th>
	                      <th>ĐG </th>
	                      <th>ĐGKM </th>
	                  </tr>
	                  </thead>
	                  <body>
	                  <?php $_smarty_tpl->_assignInScope('i', 1);
?>
	                  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['DSSanPhamBanChay']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
	              		<tr>
	              		    <td><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</td>
	              		    <td><?php echo $_smarty_tpl->tpl_vars['item']->value['ma_san_pham'];?>
</td>
	              		    <td><?php echo $_smarty_tpl->tpl_vars['item']->value['ten_san_pham'];?>
</td>
	              		    <td><?php echo number_format($_smarty_tpl->tpl_vars['item']->value['TSL']);?>
</td>
	              		    <td><?php echo $_smarty_tpl->tpl_vars['item']->value['noi_dung_tom_tat'];?>
</td>
	              		    <td><?php echo $_smarty_tpl->tpl_vars['item']->value['don_gia'];?>
</td>
	              		    <td><?php echo $_smarty_tpl->tpl_vars['item']->value['don_gia_khuyen_mai'];?>
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
