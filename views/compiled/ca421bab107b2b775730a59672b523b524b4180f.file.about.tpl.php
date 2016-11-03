<?php /* Smarty version Smarty-3.1.18, created on 2016-11-03 16:58:29
         compiled from "views\about.tpl" */ ?>
<?php /*%%SmartyHeaderCode:109905810acdb53c571-16896359%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ca421bab107b2b775730a59672b523b524b4180f' => 
    array (
      0 => 'views\\about.tpl',
      1 => 1478188708,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '109905810acdb53c571-16896359',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5810acdb58a4a4_45929010',
  'variables' => 
  array (
    'result' => 0,
    'oneItem' => 0,
    'nr_pages' => 0,
    'goo' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5810acdb58a4a4_45929010')) {function content_5810acdb58a4a4_45929010($_smarty_tpl) {?><link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

<script>
    function showResult(str) {
        if (str=="") {
            document.getElementById("txtHint").innerHTML="";
            return;
        }
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp=new XMLHttpRequest();
        } else { // code for IE6, IE5
            xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange=function() {
            if (this.readyState==4 && this.status==200) {
                document.getElementById("txtHint").innerHTML=this.responseText;
            }
        }
        xmlhttp.open("GET","model/getChar.php?q="+str,true);
        xmlhttp.send();
    }
</script>

<form>
        <div class="home">
            <div class="container-4">
        <input id="search" type="text"  placeholder="Search..." onkeyup="showResult(this.value)">
                <button class="icon"><i class="fa fa-search"></i></button>
        <div id="livesearch"></div>
                </div>
        </div>
    </form>


 <div id="txtHint"><section>
<div class="charDiv">
    <?php  $_smarty_tpl->tpl_vars['oneItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['oneItem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['result']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['oneItem']->key => $_smarty_tpl->tpl_vars['oneItem']->value) {
$_smarty_tpl->tpl_vars['oneItem']->_loop = true;
?>
       <div class="charImage">
        <h1 class="titleChar"><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['title'];?>
</h1>
        
        <img class="characters" src=image/<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['image'];?>
><br>
       
        <div class="textChar">        
        <content><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['content'];?>
</content>
        <h1 class="dateChar"><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['date_created'];?>
</h1>
        </div>
        </div>
    <?php } ?>
</div>

     </section></div>
<div class="pages2">
<ul>
    <?php $_smarty_tpl->tpl_vars['goo'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['goo']->step = 1;$_smarty_tpl->tpl_vars['goo']->total = (int) ceil(($_smarty_tpl->tpl_vars['goo']->step > 0 ? $_smarty_tpl->tpl_vars['nr_pages']->value+1 - (1) : 1-($_smarty_tpl->tpl_vars['nr_pages']->value)+1)/abs($_smarty_tpl->tpl_vars['goo']->step));
if ($_smarty_tpl->tpl_vars['goo']->total > 0) {
for ($_smarty_tpl->tpl_vars['goo']->value = 1, $_smarty_tpl->tpl_vars['goo']->iteration = 1;$_smarty_tpl->tpl_vars['goo']->iteration <= $_smarty_tpl->tpl_vars['goo']->total;$_smarty_tpl->tpl_vars['goo']->value += $_smarty_tpl->tpl_vars['goo']->step, $_smarty_tpl->tpl_vars['goo']->iteration++) {
$_smarty_tpl->tpl_vars['goo']->first = $_smarty_tpl->tpl_vars['goo']->iteration == 1;$_smarty_tpl->tpl_vars['goo']->last = $_smarty_tpl->tpl_vars['goo']->iteration == $_smarty_tpl->tpl_vars['goo']->total;?>
    <li><a href="?action=about&page_nr2=<?php echo $_smarty_tpl->tpl_vars['goo']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['goo']->value;?>
</a></li>
    <?php }} ?>
    
</ul>
</div>
<?php }} ?>
