<?php /* Smarty version 3.1.27, created on 2017-01-16 17:01:22
         compiled from "D:\domains\shopkeeper\setup\templates\footer.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:24349587cc422812d06_36871248%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f77666e6a15ce02563c79a63bb25c4dd6b6a410c' => 
    array (
      0 => 'D:\\domains\\shopkeeper\\setup\\templates\\footer.tpl',
      1 => 1469081622,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '24349587cc422812d06_36871248',
  'variables' => 
  array (
    '_lang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_587cc422841b14_99724151',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_587cc422841b14_99724151')) {
function content_587cc422841b14_99724151 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_replace')) require_once 'D:/domains/shopkeeper/core/model/smarty/plugins\\modifier.replace.php';

$_smarty_tpl->properties['nocache_hash'] = '24349587cc422812d06_36871248';
?>
        </div>
        <!-- end content -->
        <div class="clear">&nbsp;</div>
    </div>
</div>

<!-- start footer -->
<div id="footer">
    <div id="footer-inner">
    <div class="container_12">
        <p><?php ob_start();
echo date('Y');
$_tmp1=ob_get_clean();
echo smarty_modifier_replace($_smarty_tpl->tpl_vars['_lang']->value['modx_footer1'],'[[+current_year]]',$_tmp1);?>
</p>
        <p><?php echo $_smarty_tpl->tpl_vars['_lang']->value['modx_footer2'];?>
</p>
    </div>
    </div>
</div>

<div class="post_body">

</div>
<!-- end footer -->
</body>
</html><?php }
}
?>