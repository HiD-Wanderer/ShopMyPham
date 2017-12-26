<?php
/* Smarty version 3.1.30, created on 2017-12-24 00:07:36
  from "C:\wamp64\www\ShopMyPham\views\template\layout\masterSanPham.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a3eefc82eb090_85080554',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0b3bf7e110c1addcdba576cd1efeffc4b6dc9b8a' => 
    array (
      0 => 'C:\\wamp64\\www\\ShopMyPham\\views\\template\\layout\\masterSanPham.tpl',
      1 => 1513879639,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout/head.tpl' => 1,
    'file:layout/header.tpl' => 1,
    'file:layout/footer.tpl' => 1,
    'file:layout/script.tpl' => 1,
  ),
),false)) {
function content_5a3eefc82eb090_85080554 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html lang="en">
  <!--Head-->
  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_308895a3eefc82c51f9_55467599', "head");
?>

  <body>
	<!--Header-->
	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_36305a3eefc82cf2b6_65331586', "header");
?>

 	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_158235a3eefc82d52e8_38398089', "content");
?>

 	
	<!--Footer-->
	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_49565a3eefc82df547_94565912', "footer");
?>

   	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_303095a3eefc82e8ab8_91506386', "script");
?>


	
  </body>
</html><?php }
/* {block "head"} */
class Block_308895a3eefc82c51f9_55467599 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:layout/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block "head"} */
/* {block "header"} */
class Block_36305a3eefc82cf2b6_65331586 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:layout/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block "header"} */
/* {block "content"} */
class Block_158235a3eefc82d52e8_38398089 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "content"} */
/* {block "footer"} */
class Block_49565a3eefc82df547_94565912 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:layout/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block "footer"} */
/* {block "script"} */
class Block_303095a3eefc82e8ab8_91506386 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:layout/script.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block "script"} */
}
