<?php
/* Smarty version 3.1.33, created on 2020-09-19 18:35:28
  from 'C:\xampp\htdocs\tienda-presta\themes\classic\templates\_partials\footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f663350160211_26488606',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '55e996d257932c0ec298dc589b17fc82d41bbd7f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tienda-presta\\themes\\classic\\templates\\_partials\\footer.tpl',
      1 => 1599926062,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f663350160211_26488606 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<div class="container">
  <div class="row">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3469863845f663350158831_00505419', 'hook_footer_before');
?>

  </div>
</div>
<div class="footer-container">
  <div class="container">
    <div class="row">
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12731435405f6633501598d7_30280704', 'hook_footer');
?>

    </div>
    <div class="row">
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11394089585f66335015a6c4_55756113', 'hook_footer_after');
?>

    </div>
    <div class="row">
      <div class="col-md-12">
        <p class="text-sm-center">
          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16686608645f66335015b495_56567611', 'copyright_link');
?>

        </p>
      </div>
    </div>
  </div>
</div>
<?php }
/* {block 'hook_footer_before'} */
class Block_3469863845f663350158831_00505419 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer_before' => 
  array (
    0 => 'Block_3469863845f663350158831_00505419',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooterBefore'),$_smarty_tpl ) );?>

    <?php
}
}
/* {/block 'hook_footer_before'} */
/* {block 'hook_footer'} */
class Block_12731435405f6633501598d7_30280704 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer' => 
  array (
    0 => 'Block_12731435405f6633501598d7_30280704',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooter'),$_smarty_tpl ) );?>

      <?php
}
}
/* {/block 'hook_footer'} */
/* {block 'hook_footer_after'} */
class Block_11394089585f66335015a6c4_55756113 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer_after' => 
  array (
    0 => 'Block_11394089585f66335015a6c4_55756113',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooterAfter'),$_smarty_tpl ) );?>

      <?php
}
}
/* {/block 'hook_footer_after'} */
/* {block 'copyright_link'} */
class Block_16686608645f66335015b495_56567611 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'copyright_link' => 
  array (
    0 => 'Block_16686608645f66335015b495_56567611',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <a class="_blank" href="https://www.prestashop.com" target="_blank" rel="nofollow">
              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'%copyright% %year% - Ecommerce software by %prestashop%','sprintf'=>array('%prestashop%'=>'PrestaShop™','%year%'=>date('Y'),'%copyright%'=>'©'),'d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>

            </a>
          <?php
}
}
/* {/block 'copyright_link'} */
}
