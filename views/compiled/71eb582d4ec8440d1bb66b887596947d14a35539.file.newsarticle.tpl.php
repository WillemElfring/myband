<?php /* Smarty version Smarty-3.1.18, created on 2016-11-03 15:55:25
         compiled from "views\newsarticle.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7525810a8d38c1c87-90332615%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '71eb582d4ec8440d1bb66b887596947d14a35539' => 
    array (
      0 => 'views\\newsarticle.tpl',
      1 => 1478184923,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7525810a8d38c1c87-90332615',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5810a8d3900086_82418033',
  'variables' => 
  array (
    'result' => 0,
    'oneItem' => 0,
    'nr_pages' => 0,
    'foo' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5810a8d3900086_82418033')) {function content_5810a8d3900086_82418033($_smarty_tpl) {?><link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">



<hr class="hr">
<h1 id="latest">Latest News</h1>
<hr class="hr">

<section>

    <?php  $_smarty_tpl->tpl_vars['oneItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['oneItem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['result']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['oneItem']->key => $_smarty_tpl->tpl_vars['oneItem']->value) {
$_smarty_tpl->tpl_vars['oneItem']->_loop = true;
?>
        <h1 class="title"><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['title'];?>
</h1>
        <img class="fototjes" src=image/<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['image'];?>
><br>
        <div class="text">
        <content><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['content'];?>
</content>
        <h1><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['date_created'];?>
</h1>
        </div>
    <?php } ?>


</section>


<div class="pages">
<ul>
    <?php $_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['foo']->step = 1;$_smarty_tpl->tpl_vars['foo']->total = (int) ceil(($_smarty_tpl->tpl_vars['foo']->step > 0 ? $_smarty_tpl->tpl_vars['nr_pages']->value+1 - (1) : 1-($_smarty_tpl->tpl_vars['nr_pages']->value)+1)/abs($_smarty_tpl->tpl_vars['foo']->step));
if ($_smarty_tpl->tpl_vars['foo']->total > 0) {
for ($_smarty_tpl->tpl_vars['foo']->value = 1, $_smarty_tpl->tpl_vars['foo']->iteration = 1;$_smarty_tpl->tpl_vars['foo']->iteration <= $_smarty_tpl->tpl_vars['foo']->total;$_smarty_tpl->tpl_vars['foo']->value += $_smarty_tpl->tpl_vars['foo']->step, $_smarty_tpl->tpl_vars['foo']->iteration++) {
$_smarty_tpl->tpl_vars['foo']->first = $_smarty_tpl->tpl_vars['foo']->iteration == 1;$_smarty_tpl->tpl_vars['foo']->last = $_smarty_tpl->tpl_vars['foo']->iteration == $_smarty_tpl->tpl_vars['foo']->total;?>
    <li><a href="?action=home&page_nr=<?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
</a></li>
    <?php }} ?>
    
</ul>
</div><br>
<br>
<br>
<br>
<br>
















    
    
    
    


<?php }} ?>
