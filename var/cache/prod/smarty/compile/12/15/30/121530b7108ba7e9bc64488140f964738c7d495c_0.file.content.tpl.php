<?php
/* Smarty version 3.1.33, created on 2020-09-13 15:56:18
  from 'C:\xampp\htdocs\tienda-presta\admin6497fliwd\themes\default\template\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f5e25026dadd9_19493943',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '121530b7108ba7e9bc64488140f964738c7d495c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tienda-presta\\admin6497fliwd\\themes\\default\\template\\content.tpl',
      1 => 1599926051,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f5e25026dadd9_19493943 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }
}
