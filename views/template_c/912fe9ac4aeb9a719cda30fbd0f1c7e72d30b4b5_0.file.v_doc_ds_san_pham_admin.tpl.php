<?php
/* Smarty version 3.1.30, created on 2017-12-24 00:29:19
  from "C:\wamp64\www\ShopMyPham\views\template\san_pham\v_doc_ds_san_pham_admin.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a3ef4df18ef69_55837743',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '912fe9ac4aeb9a719cda30fbd0f1c7e72d30b4b5' => 
    array (
      0 => 'C:\\wamp64\\www\\ShopMyPham\\views\\template\\san_pham\\v_doc_ds_san_pham_admin.tpl',
      1 => 1514049008,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layoutAdmin/masterAdmin.tpl' => 1,
  ),
),false)) {
function content_5a3ef4df18ef69_55837743 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_171095a3ef4df187563_03911426', 'content');
?>
 <?php $_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:layoutAdmin/masterAdmin.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'content'} */
class Block_171095a3ef4df187563_03911426 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="row">
  <div class="col-lg-12">
    <section class="panel">
      <header class="panel-heading"> Danh sách sản phẩm </header>
      <table class="table table-striped">
        <thead>
          <tr>
            <th>#</th>
            <th>Mã sản phẩm</th>
            <th>Tên sản phẩm</th>
            <th>URL </th>
            <th>Đơn giá </th>
            <th>Giá KM </th>
            <th>Ngày cập nhật </th>
            <th>Trong ngày </th>
            <th>&nbsp; </th>
          </tr>
        </thead>
        <tbody>
        
        <?php $_smarty_tpl->_assignInScope('i', 1);
?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['DSSanPham']->value, 'itemSanPham');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['itemSanPham']->value) {
?>
        <tr>
          <td><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</td>
          <td><?php echo $_smarty_tpl->tpl_vars['itemSanPham']->value['ma_san_pham'];?>
</td>
          <td><?php echo $_smarty_tpl->tpl_vars['itemSanPham']->value['ten_san_pham'];?>
</td>
          <td><?php echo $_smarty_tpl->tpl_vars['itemSanPham']->value['ten_san_pham_url'];?>
</td>
          <td><?php echo number_format($_smarty_tpl->tpl_vars['itemSanPham']->value['don_gia']);?>
</td>
          <td><?php echo number_format($_smarty_tpl->tpl_vars['itemSanPham']->value['don_gia_khuyen_mai']);?>
</td>
          <td><?php echo $_smarty_tpl->tpl_vars['itemSanPham']->value['ngay_cap_nhat'];?>
</td>
      
          <td><a href="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
quan-tri/san-pham/cap-nhat-san-pham/<?php echo $_smarty_tpl->tpl_vars['itemSanPham']->value['ma_san_pham'];?>
" class="btn btn-info">Cập nhật</a> <a href="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
quan-tri/san-pham/xoa-san-pham/<?php echo $_smarty_tpl->tpl_vars['itemSanPham']->value['ma_san_pham'];?>
" class="btn btn-warning">Xóa</a></td>
        </tr>
        <?php $_smarty_tpl->_assignInScope('i', $_smarty_tpl->tpl_vars['i']->value+1);
?>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        <tr>
          <td colspan="9" align="center"><?php echo $_smarty_tpl->tpl_vars['LinkPage']->value;?>
</td>
        </tr>
          </tbody>
        
      </table>
    </section>
  </div>
</div>
<?php
}
}
/* {/block 'content'} */
}
