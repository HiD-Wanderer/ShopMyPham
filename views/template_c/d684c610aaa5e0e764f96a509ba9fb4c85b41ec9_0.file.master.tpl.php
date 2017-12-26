<?php
/* Smarty version 3.1.30, created on 2017-12-24 00:00:19
  from "C:\wamp64\www\ShopMyPham\views\template\layout\master.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a3eee132f4496_05610293',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd684c610aaa5e0e764f96a509ba9fb4c85b41ec9' => 
    array (
      0 => 'C:\\wamp64\\www\\ShopMyPham\\views\\template\\layout\\master.tpl',
      1 => 1513879192,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout/head.tpl' => 1,
    'file:layout/header.tpl' => 1,
    'file:layout/banner.tpl' => 1,
    'file:layout/footer.tpl' => 1,
    'file:layout/script.tpl' => 1,
  ),
),false)) {
function content_5a3eee132f4496_05610293 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html>
<!---->

<!--head-->
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_271405a3eee132ce183_72269855', "head");
?>

<body>
<div class="page"> 
<!--header-->
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_30535a3eee132d5a82_03525073', "header");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_312665a3eee132dd359_61049154', "banner");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_32515a3eee132e2936_87288462', "body");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_88165a3eee132e9dd7_13321352', "footer");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_312095a3eee132f20b3_10950826', "script");
?>

</div>
</body>
</html>
<?php }
/* {block "head"} */
class Block_271405a3eee132ce183_72269855 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:layout/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block "head"} */
/* {block "header"} */
class Block_30535a3eee132d5a82_03525073 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:layout/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block "header"} */
/* {block "banner"} */
class Block_312665a3eee132dd359_61049154 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:layout/banner.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block "banner"} */
/* {block "body"} */
class Block_32515a3eee132e2936_87288462 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "body"} */
/* {block "footer"} */
class Block_88165a3eee132e9dd7_13321352 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:layout/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block "footer"} */
/* {block "script"} */
class Block_312095a3eee132f20b3_10950826 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:layout/script.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block "script"} */
}
