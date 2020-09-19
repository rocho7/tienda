<?php
/* Smarty version 3.1.33, created on 2020-09-19 18:35:27
  from 'C:\xampp\htdocs\tienda-presta\themes\classic\templates\page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f66334fb63a82_38534910',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e01a4febf59fae263a3ade61e60c3466717044cf' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tienda-presta\\themes\\classic\\templates\\page.tpl',
      1 => 1599926062,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f66334fb63a82_38534910 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11243717965f66334fb596a8_85950431', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_12060613595f66334fb5a121_98511470 extends Smarty_Internal_Block
{
public $callsChild = 'true';
public $hide = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <header class="page-header">
          <h1><?php 
$_smarty_tpl->inheritance->callChild($_smarty_tpl, $this);
?>
</h1>
        </header>
      <?php
}
}
/* {/block 'page_title'} */
/* {block 'page_header_container'} */
class Block_19245612515f66334fb59bd5_64029977 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12060613595f66334fb5a121_98511470', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_7839691075f66334fb62110_14337956 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_14793770715f66334fb62618_46802262 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_34535085f66334fb61d30_53645471 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7839691075f66334fb62110_14337956', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14793770715f66334fb62618_46802262', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_21425188275f66334fb630c2_76828670 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_14443349605f66334fb62d80_90262731 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21425188275f66334fb630c2_76828670', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_11243717965f66334fb596a8_85950431 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_11243717965f66334fb596a8_85950431',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_19245612515f66334fb59bd5_64029977',
  ),
  'page_title' => 
  array (
    0 => 'Block_12060613595f66334fb5a121_98511470',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_34535085f66334fb61d30_53645471',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_7839691075f66334fb62110_14337956',
  ),
  'page_content' => 
  array (
    0 => 'Block_14793770715f66334fb62618_46802262',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_14443349605f66334fb62d80_90262731',
  ),
  'page_footer' => 
  array (
    0 => 'Block_21425188275f66334fb630c2_76828670',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19245612515f66334fb59bd5_64029977', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_34535085f66334fb61d30_53645471', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14443349605f66334fb62d80_90262731', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
