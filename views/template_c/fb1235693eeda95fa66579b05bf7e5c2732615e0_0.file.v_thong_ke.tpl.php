<?php
/* Smarty version 3.1.30, created on 2017-12-24 00:32:26
  from "C:\wamp64\www\ShopMyPham\views\template\don_dat_hang\v_thong_ke.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a3ef59a60d847_93355521',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fb1235693eeda95fa66579b05bf7e5c2732615e0' => 
    array (
      0 => 'C:\\wamp64\\www\\ShopMyPham\\views\\template\\don_dat_hang\\v_thong_ke.tpl',
      1 => 1481919992,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layoutAdmin/masterAdmin.tpl' => 1,
  ),
),false)) {
function content_5a3ef59a60d847_93355521 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_226255a3ef59a604573_72062846', 'content');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:layoutAdmin/masterAdmin.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'content'} */
class Block_226255a3ef59a604573_72062846 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
               Thống kê doanh thu
            </header>
            <div class="panel-body">
               <div class="form">
              
                    <form class="form-validate form-horizontal " id="register_form" action="" method="post" enctype="multipart/form-data">
                        <div class="form-group ">
                            <label for="address" class="control-label col-lg-2">Từ ngày<span class="required">*</span></label>
                            <div class="col-lg-4">
                                <input class=" form-control" id="ngaydi" name="ngaydi" type="date" value="<?php echo $_smarty_tpl->tpl_vars['ngaydi']->value;?>
"/>
                            </div>
                        </div>
                        <div class="form-group ">
                            <label for="address" class="control-label col-lg-2">Đến ngày<span class="required">*</span></label>
                            <div class="col-lg-4">
                                <input class=" form-control" id="ngayden" name="ngayden" type="date" value="<?php echo $_smarty_tpl->tpl_vars['ngayden']->value;?>
"/>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <div class="col-lg-offset-2 col-lg-10">
                                <input class="btn btn-primary" type="submit" value="Xác nhận" name="btnxacnhan" />
                                
                            </div>
                        </div>
                        <?php if (isset($_smarty_tpl->tpl_vars['DSDonDatHang']->value)) {?>
        <div class="row">
          <div class="col-lg-12">
                <section class="panel">
                  <header class="panel-heading">
                      Thông kê đơn hàng trong ngày
                  </header>
                  <table class="table table-striped">
                      <thead>
                      <tr>
                          <th>#</th>
                          <th>Mã hóa đơn</th>
                          <th>Mã KH</th>
                          <th>Ngày đặt</th>

                          <th>Tổng tiền</th>
                          <th>Còn lại</th>
                          <th>HTTT </th>
                          <th>Ghi chú</th>
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
                            <td><?php echo $_smarty_tpl->tpl_vars['itemDDH']->value['ma_khach_hang'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['itemDDH']->value['ngay_dat'];?>
</td>
                            <td><?php echo number_format($_smarty_tpl->tpl_vars['itemDDH']->value['tong_tien']);?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['itemDDH']->value['con_lai'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['itemDDH']->value['hinh_thuc_thanh_toan'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['itemDDH']->value['ghi_chu'];?>
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
    <?php }?>
                    </form>
                </div>
            </div>
        </section>
    </div>
</div>


<?php
}
}
/* {/block 'content'} */
}
