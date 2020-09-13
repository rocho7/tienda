<?php
/* Smarty version 3.1.33, created on 2020-09-13 17:12:30
  from 'C:\xampp\htdocs\tienda-presta\themes\classic\templates\checkout\_partials\cart-detailed-totals.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f5e36de1f8554_63784259',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'da33c7e966ef22e6718082a0f81610d8fd7e60c3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tienda-presta\\themes\\classic\\templates\\checkout\\_partials\\cart-detailed-totals.tpl',
      1 => 1599926062,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:checkout/_partials/cart-summary-totals.tpl' => 1,
    'file:checkout/_partials/cart-voucher.tpl' => 1,
  ),
),false)) {
function content_5f5e36de1f8554_63784259 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15831891465f5e36de1e8526_77028479', 'cart_detailed_totals');
?>

<?php }
/* {block 'cart_summary_totals'} */
class Block_2038580555f5e36de1f4fb7_63445624 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender('file:checkout/_partials/cart-summary-totals.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('cart'=>$_smarty_tpl->tpl_vars['cart']->value), 0, false);
?>
  <?php
}
}
/* {/block 'cart_summary_totals'} */
/* {block 'cart_voucher'} */
class Block_7396401175f5e36de1f6976_99999608 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender('file:checkout/_partials/cart-voucher.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <?php
}
}
/* {/block 'cart_voucher'} */
/* {block 'cart_detailed_totals'} */
class Block_15831891465f5e36de1e8526_77028479 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'cart_detailed_totals' => 
  array (
    0 => 'Block_15831891465f5e36de1e8526_77028479',
  ),
  'cart_summary_totals' => 
  array (
    0 => 'Block_2038580555f5e36de1f4fb7_63445624',
  ),
  'cart_voucher' => 
  array (
    0 => 'Block_7396401175f5e36de1f6976_99999608',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="cart-detailed-totals">

  <div class="card-block">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cart']->value['subtotals'], 'subtotal');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['subtotal']->value) {
?>
      <?php if ($_smarty_tpl->tpl_vars['subtotal']->value['value'] && $_smarty_tpl->tpl_vars['subtotal']->value['type'] !== 'tax') {?>
        <div class="cart-summary-line" id="cart-subtotal-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['subtotal']->value['type'], ENT_QUOTES, 'UTF-8');?>
">
          <span class="label<?php if ('products' === $_smarty_tpl->tpl_vars['subtotal']->value['type']) {?> js-subtotal<?php }?>">
            <?php if ('products' == $_smarty_tpl->tpl_vars['subtotal']->value['type']) {?>
              <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['summary_string'], ENT_QUOTES, 'UTF-8');?>

            <?php } else { ?>
              <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['subtotal']->value['label'], ENT_QUOTES, 'UTF-8');?>

            <?php }?>
          </span>
          <span class="value">
            <?php if ('discount' == $_smarty_tpl->tpl_vars['subtotal']->value['type']) {?>-&nbsp;<?php }
echo htmlspecialchars($_smarty_tpl->tpl_vars['subtotal']->value['value'], ENT_QUOTES, 'UTF-8');?>

          </span>
          <?php if ($_smarty_tpl->tpl_vars['subtotal']->value['type'] === 'shipping') {?>
              <div><small class="value"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayCheckoutSubtotalDetails','subtotal'=>$_smarty_tpl->tpl_vars['subtotal']->value),$_smarty_tpl ) );?>
</small></div>
          <?php }?>
        </div>
      <?php }?>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  </div>

  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2038580555f5e36de1f4fb7_63445624', 'cart_summary_totals', $this->tplIndex);
?>


  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7396401175f5e36de1f6976_99999608', 'cart_voucher', $this->tplIndex);
?>

</div>
<?php
}
}
/* {/block 'cart_detailed_totals'} */
}
