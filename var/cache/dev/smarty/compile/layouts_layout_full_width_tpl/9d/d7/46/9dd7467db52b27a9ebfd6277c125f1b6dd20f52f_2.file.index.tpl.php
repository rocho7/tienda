<?php
/* Smarty version 3.1.33, created on 2020-09-19 18:35:27
  from 'C:\xampp\htdocs\tienda-presta\themes\classic\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f66334fb16d73_54116914',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9dd7467db52b27a9ebfd6277c125f1b6dd20f52f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tienda-presta\\themes\\classic\\templates\\index.tpl',
      1 => 1599926062,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f66334fb16d73_54116914 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1701695995f66334fb15240_68536636', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_15997655715f66334fb15675_56354932 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_9502901395f66334fb15f70_57628179 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

          <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_2690324395f66334fb15c26_07154636 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9502901395f66334fb15f70_57628179', 'hook_home', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_1701695995f66334fb15240_68536636 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_1701695995f66334fb15240_68536636',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_15997655715f66334fb15675_56354932',
  ),
  'page_content' => 
  array (
    0 => 'Block_2690324395f66334fb15c26_07154636',
  ),
  'hook_home' => 
  array (
    0 => 'Block_9502901395f66334fb15f70_57628179',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15997655715f66334fb15675_56354932', 'page_content_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2690324395f66334fb15c26_07154636', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
