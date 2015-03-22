<?php /* Smarty version 3.1.22-dev/10, created on 2015-03-22 01:10:57
         compiled from "/www/Frameworks/framework/src/Controller/HelloSmarty/../../Templates/hellosmartytemplate.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:702189013550e08915b0369_17940027%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6a7d1e90f04d7eb973bf0e4b194c544ebb841fc5' => 
    array (
      0 => '/www/Frameworks/framework/src/Controller/HelloSmarty/../../Templates/hellosmartytemplate.tpl',
      1 => 1426983055,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '702189013550e08915b0369_17940027',
  'tpl_function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'data' => 0,
    'name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.22-dev/10',
  'unifunc' => 'content_550e089167b411_68346502',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_550e089167b411_68346502')) {
function content_550e089167b411_68346502 ($_smarty_tpl) {
?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '702189013550e08915b0369_17940027';
?>
<html>
  <head>
    <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
  </head>
  <body>
  	<h3>This method says hello to all the users in the URL using Smarty:</h3>
  	<h3>Hello all!</h3>
  	<?php
$_from = $_smarty_tpl->tpl_vars['data']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['name'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['name']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['name']->value) {
$_smarty_tpl->tpl_vars['name']->_loop = true;
$foreachItemSav = $_smarty_tpl->tpl_vars['name'];
?>
	<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
,
	<?php
$_smarty_tpl->tpl_vars['name'] = $foreachItemSav;
}
?>
  </body>
</html>


<?php }
}
?>