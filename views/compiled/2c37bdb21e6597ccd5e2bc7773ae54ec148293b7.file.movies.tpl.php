<?php /* Smarty version Smarty-3.1.18, created on 2016-11-03 16:59:51
         compiled from "views\movies.tpl" */ ?>
<?php /*%%SmartyHeaderCode:159325819cb90ba7519-75567767%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2c37bdb21e6597ccd5e2bc7773ae54ec148293b7' => 
    array (
      0 => 'views\\movies.tpl',
      1 => 1478188694,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '159325819cb90ba7519-75567767',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5819cb90be63a3_88550289',
  'variables' => 
  array (
    'result' => 0,
    'oneItem' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5819cb90be63a3_88550289')) {function content_5819cb90be63a3_88550289($_smarty_tpl) {?>
<head>
<meta charset="utf-8">
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
        xmlhttp.open("GET","model/getUser.php?q="+str,true);
        xmlhttp.send();
    }
</script>
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>

<div id="search">
    <form>
        <div class="home">
            <div class="container-4">
        <input id="search" type="text" placeholder="Search..." onkeyup="showResult(this.value)">
                <button class="icon"><i class="fa fa-search"></i></button>
        <div id="livesearch"></div>
                </div>
        </div>
    </form>
    <br>
    <div id="txtHint"><section>

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


        </section></div>

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
</div>
</body>



    
    
    
    
    <?php }} ?>
