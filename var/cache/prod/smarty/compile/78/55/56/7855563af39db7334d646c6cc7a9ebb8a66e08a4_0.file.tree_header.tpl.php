<?php
/* Smarty version 3.1.48, created on 2024-07-15 10:00:41
  from 'C:\wamp64\www\prestashop\admin4332vgrf2\themes\default\template\helpers\tree\tree_header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6694f3497e0b37_47590504',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7855563af39db7334d646c6cc7a9ebb8a66e08a4' => 
    array (
      0 => 'C:\\wamp64\\www\\prestashop\\admin4332vgrf2\\themes\\default\\template\\helpers\\tree\\tree_header.tpl',
      1 => 1720449693,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6694f3497e0b37_47590504 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="tree-panel-heading-controls clearfix">
	<?php if ((isset($_smarty_tpl->tpl_vars['title']->value))) {?><i class="icon-tag"></i>&nbsp;<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>$_smarty_tpl->tpl_vars['title']->value),$_smarty_tpl ) );
}?>
	<?php if ((isset($_smarty_tpl->tpl_vars['toolbar']->value))) {
echo $_smarty_tpl->tpl_vars['toolbar']->value;
}?>
</div>
<?php }
}
