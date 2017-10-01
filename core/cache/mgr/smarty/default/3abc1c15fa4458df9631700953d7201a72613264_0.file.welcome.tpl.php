<?php /* Smarty version 3.1.27, created on 2017-01-16 17:01:56
         compiled from "D:\domains\shopkeeper\manager\templates\default\welcome.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:30822587cc444cba122_04846919%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3abc1c15fa4458df9631700953d7201a72613264' => 
    array (
      0 => 'D:\\domains\\shopkeeper\\manager\\templates\\default\\welcome.tpl',
      1 => 1469081622,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '30822587cc444cba122_04846919',
  'variables' => 
  array (
    'dashboard' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_587cc444cc5ca9_75962052',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_587cc444cc5ca9_75962052')) {
function content_587cc444cc5ca9_75962052 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '30822587cc444cba122_04846919';
?>
<div id="modx-panel-welcome-div"></div>

<div id="modx-dashboard" class="dashboard">
<?php echo $_smarty_tpl->tpl_vars['dashboard']->value;?>

</div><?php }
}
?>