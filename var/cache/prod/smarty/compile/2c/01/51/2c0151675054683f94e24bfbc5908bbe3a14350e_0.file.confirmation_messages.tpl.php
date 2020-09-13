<?php
/* Smarty version 3.1.33, created on 2020-09-13 15:57:17
  from 'C:\xampp\htdocs\tienda-presta\admin6497fliwd\themes\new-theme\template\components\layout\confirmation_messages.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f5e253db83d76_64613401',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2c0151675054683f94e24bfbc5908bbe3a14350e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tienda-presta\\admin6497fliwd\\themes\\new-theme\\template\\components\\layout\\confirmation_messages.tpl',
      1 => 1599926050,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f5e253db83d76_64613401 (Smarty_Internal_Template $_smarty_tpl) {
if (isset($_smarty_tpl->tpl_vars['confirmations']->value) && count($_smarty_tpl->tpl_vars['confirmations']->value) && $_smarty_tpl->tpl_vars['confirmations']->value) {?>
  <div class="bootstrap">
    <div class="alert alert-success" style="display:block;">
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['confirmations']->value, 'conf');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['conf']->value) {
?>
        <?php echo $_smarty_tpl->tpl_vars['conf']->value;?>

      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
  </div>
<?php }
}
}
