<?php
/* Smarty version 3.1.33, created on 2020-09-13 16:30:08
  from 'C:\xampp\htdocs\tienda-presta\modules\ps_checkout\views\templates\admin\configuration.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f5e2cf0c31a10_29590174',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ad6853c08a348c299f40c56a608b3ebb1136b71e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tienda-presta\\modules\\ps_checkout\\views\\templates\\admin\\configuration.tpl',
      1 => 1599929196,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f5e2cf0c31a10_29590174 (Smarty_Internal_Template $_smarty_tpl) {
?>
<link href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['pathApp']->value,'htmlall','UTF-8' ));?>
" rel=preload as=script>

<div id="app"></div>

<?php echo '<script'; ?>
 src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['pathApp']->value,'htmlall','UTF-8' ));?>
"><?php echo '</script'; ?>
>

<style>
  /** Hide native multistore module activation panel, because of visual regressions on non-bootstrap content */
  #content.nobootstrap div.bootstrap.panel {
    display: none;
  }
</style>
<?php }
}
