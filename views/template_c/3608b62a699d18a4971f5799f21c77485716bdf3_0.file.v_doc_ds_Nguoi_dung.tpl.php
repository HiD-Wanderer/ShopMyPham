<?php
/* Smarty version 3.1.30, created on 2017-12-24 00:41:42
  from "C:\wamp64\www\ShopMyPham\views\template\nguoi_dung\v_doc_ds_Nguoi_dung.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a3ef7c6c0fac6_15660889',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3608b62a699d18a4971f5799f21c77485716bdf3' => 
    array (
      0 => 'C:\\wamp64\\www\\ShopMyPham\\views\\template\\nguoi_dung\\v_doc_ds_Nguoi_dung.tpl',
      1 => 1514047336,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../layoutAdmin/masterAdmin.tpl' => 1,
  ),
),false)) {
function content_5a3ef7c6c0fac6_15660889 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_312145a3ef7c6c06c85_64913245', "content");
?>

<?php $_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:../layoutAdmin/masterAdmin.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block "content"} */
class Block_312145a3ef7c6c06c85_64913245 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                              Advanced Table
                          </header>
                          
                          <table class="table table-striped table-advance table-hover">
                           <tbody>
                              <tr>
                                 <th><i class="icon_profile"></i> Mã ND</th>
                                 <th><i class="icon_calendar"></i> Họ tên</th>
                                 <th><i class="icon_mail_alt"></i> Ngày sinh</th>
                                 <th><i class="icon_pin_alt"></i> Email</th>
                                 <th><i class="icon_mobile"></i> Địa chỉ</th>
                                 <th><i class="icon_cogs"></i> Điện thoại</th>
                                 <th><i class="icon_pin_alt"></i> Chức vụ</th>
                                 <th><i class="icon_cogs"></i> Action</th>
                              </tr>
                              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['DSNguoiDung']->value, 'nd');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['nd']->value) {
?>
                              <tr>
                                 <td><?php echo $_smarty_tpl->tpl_vars['nd']->value['id'];?>
</td>
                                 <td><?php echo $_smarty_tpl->tpl_vars['nd']->value['fullname'];?>
</td>
                                 <td><?php echo $_smarty_tpl->tpl_vars['nd']->value['birthdate'];?>
</td>
                                 <td><?php echo $_smarty_tpl->tpl_vars['nd']->value['email'];?>
</td>
                                 <td><?php echo $_smarty_tpl->tpl_vars['nd']->value['address'];?>
</td>
                                 <td><?php echo $_smarty_tpl->tpl_vars['nd']->value['mobiphone'];?>
</td>
                                 <td><?php echo $_smarty_tpl->tpl_vars['nd']->value['role'];?>
</td>                                 
                                 <td>
                                  <div class="btn-group">
                                     
                                      <a class="btn btn-success" href="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
quan-tri/nguoi-dung/cap-nhat-nguoi-dung/<?php echo $_smarty_tpl->tpl_vars['nd']->value['id'];?>
"><i class="icon_check_alt2"></i>Sửa</a>
                                      <a class="btn btn-danger" href="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
quan-tri/nguoi-dung/xoa-nguoi-dung/<?php echo $_smarty_tpl->tpl_vars['nd']->value['id'];?>
"><i class="icon_close_alt2"></i>Xóa</a>
                                  </div>
                                  </td>
                              </tr>
                              <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                           </tbody>
                        </table>
                      </section>
                  </div>
              </div>
              <!-- page end-->
<?php
}
}
/* {/block "content"} */
}
