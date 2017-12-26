<?php
/* Smarty version 3.1.30, created on 2017-12-24 00:37:32
  from "C:\wamp64\www\ShopMyPham\views\template\san_pham\v_cap_nhat_san_pham.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a3ef6cc751dc5_10410873',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e8561acdbd1647e8977116fdec5f45be5fce0fcd' => 
    array (
      0 => 'C:\\wamp64\\www\\ShopMyPham\\views\\template\\san_pham\\v_cap_nhat_san_pham.tpl',
      1 => 1514050466,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layoutAdmin/masterAdmin.tpl' => 1,
  ),
),false)) {
function content_5a3ef6cc751dc5_10410873 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_312165a3ef6cc7440c5_45773295', 'content');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:layoutAdmin/masterAdmin.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'content'} */
class Block_312165a3ef6cc7440c5_45773295 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
public/ckeditor/ckeditor.js"><?php echo '</script'; ?>
>
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
               Cập nhật sản phẩm
            </header>
            <div class="panel-body">
              <?php if (isset($_smarty_tpl->tpl_vars['err']->value)) {?>
                  <h3 align="center" style="color: #ff0000"><?php echo $_smarty_tpl->tpl_vars['err']->value;?>
</h3>
              <?php }?>
               <div class="form">
              
                    <form class="form-validate form-horizontal " id="register_form" action="" method="post" enctype="multipart/form-data">
                        <div class="form-group ">
                            <label for="fullname" class="control-label col-lg-2">Tên sản phẩm <span class="required">*</span></label>
                            <div class="col-lg-10">
                                <input class=" form-control" id="ten_san_pham" name="ten_san_pham" type="text" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['ten_san_pham'];?>
" />
                            </div>
                        </div>
                        <div class="form-group ">
                            <label for="address" class="control-label col-lg-2">Tên URL <span class="required">*</span></label>
                            <div class="col-lg-10">
                                <input class=" form-control" id="ten_san_pham_url" name="ten_san_pham_url" type="text" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['ten_san_pham_url'];?>
"/>
                            </div>
                        </div>
                         <div class="form-group ">
                            <label for="address" class="control-label col-lg-2">Đơn giá <span class="required">*</span></label>
                            <div class="col-lg-4">
                                <input class=" form-control" id="don_gia" name="don_gia" type="number" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['don_gia'];?>
"/>
                            </div>
                      
                            <label for="address" class="control-label col-lg-2">Đơn giá KM<span class="required">*</span></label>
                            <div class="col-lg-4">
                                <input class=" form-control" id="don_gia_khuyen_mai" name="don_gia_khuyen_mai" type="number" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['don_gia_khuyen_mai'];?>
"/>
                            </div>
                            <label for="address" class="control-label col-lg-2">khuyen_mai<span class="required">*</span></label>
                            <div class="col-lg-4">
                                <input class=" form-control" id="khuyen_mai" name="khuyen_mai" type="number" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['khuyen_mai'];?>
"/>
                            </div>
                        </div>
                        <div class="form-group ">
                            <label for="address" class="control-label col-lg-2">Ngày cập nhật<span class="required">*</span></label>
                            <div class="col-lg-4">
                                <input class=" form-control" id="ngay_cap_nhat" name="ngay_cap_nhat" type="date" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['ngay_cap_nhat'];?>
"/>
                            </div>
                        </div>
                          <div class="form-group ">
                            <label for="username" class="control-label col-lg-2">Nội dung tóm tắt <span class="required">*</span></label>
                            <div class="col-lg-10">
                                <textarea rows="5" class="form-control " id="noi_dung_tom_tat" name="noi_dung_tom_tat"><?php echo $_smarty_tpl->tpl_vars['data']->value['noi_dung_tom_tat'];?>
</textarea>
                            </div>
                        </div>
                        <div class="form-group ">
                            <label for="username" class="control-label col-lg-2">Nội dung chi tiết <span class="required">*</span></label>
                            <div class="col-lg-10">
                                <textarea rows="5" class="ckeditor " id="noi_dung_chi_tiet" name="noi_dung_chi_tiet"><?php echo $_smarty_tpl->tpl_vars['data']->value['noi_dung_chi_tiet'];?>
</textarea>
                            </div>
                        </div>
                       
                     
                        
                        <div class="form-group">
                            <div class="col-lg-offset-2 col-lg-10">
                                <input class="btn btn-primary" type="submit" value="Cập Nhật" name="btnCapNhat" />
                                
                            </div>
                        </div>
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
