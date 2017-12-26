<?php
/* Smarty version 3.1.30, created on 2017-12-24 00:24:07
  from "C:\wamp64\www\ShopMyPham\views\template\layoutAdmin\masterAdmin.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a3ef3a7223c85_07130907',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '32c6caf9534b0ddf38ef6220f770285882ef2d59' => 
    array (
      0 => 'C:\\wamp64\\www\\ShopMyPham\\views\\template\\layoutAdmin\\masterAdmin.tpl',
      1 => 1490127621,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layoutAdmin/head.tpl' => 1,
    'file:layoutAdmin/header.tpl' => 1,
    'file:layoutAdmin/left.tpl' => 1,
    'file:layoutAdmin/script.tpl' => 1,
  ),
),false)) {
function content_5a3ef3a7223c85_07130907 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html lang="en">
  <!-- head -->
  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_50895a3ef3a71e3cc6_17251240', "head");
?>

  <body onLoad="timeRefresh(6000);">
  <!-- container section start -->
  <section id="container" class="">
      <!-- header -->
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_135745a3ef3a71f5c15_80450525', "header");
?>

      <!-- left -->
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_60875a3ef3a72060c4_75400315', "left");
?>

      <!--main content start-->
      <section id="main-content">
          <section class="main" id="mainKhachHang">
			<!-- content -->
          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_291725a3ef3a720c786_75565127', "content");
?>

          </section>
      </section>
      <!--main content end-->
  </section>
  <!-- container section end -->
    <!-- script -->
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_33575a3ef3a721e7e6_19801774', "script");
?>

  </body>
</html>
<?php }
/* {block "head"} */
class Block_50895a3ef3a71e3cc6_17251240 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:layoutAdmin/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block "head"} */
/* {block "header"} */
class Block_135745a3ef3a71f5c15_80450525 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:layoutAdmin/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block "header"} */
/* {block "left"} */
class Block_60875a3ef3a72060c4_75400315 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:layoutAdmin/left.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block "left"} */
/* {block "content"} */
class Block_291725a3ef3a720c786_75565127 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "content"} */
/* {block "script"} */
class Block_33575a3ef3a721e7e6_19801774 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:layoutAdmin/script.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block "script"} */
}
