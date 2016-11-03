<?php /* Smarty version Smarty-3.1.18, created on 2016-11-03 15:55:42
         compiled from "views\menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:79875810a8d384bb32-33038136%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8adcacc6ce5ea5834a9a9d9977a3a15f656be2b2' => 
    array (
      0 => 'views\\menu.tpl',
      1 => 1478184941,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '79875810a8d384bb32-33038136',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5810a8d38509f1_29175139',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5810a8d38509f1_29175139')) {function content_5810a8d38509f1_29175139($_smarty_tpl) {?>
<header>
  
   <div class="menuFoto">
 
       <a href="?action=home"><img class="menu" src="image/menu.png"></a>
   
   <div class="social">
       <a target="_blank"  href="https://twitter.com/starwars"><img src="image/twitter.png"></a>
       
       <a target="_blank" href="https://www.facebook.com/StarWars/"><img src="image/fb.png"></a>
   
       <a target="_blank" href="https:https://www.instagram.com/starwars/"><img src="image/insta.png"></a>
   </div>
   
   
   
   

   
   <div class="omring">
<ul>
    <li><a  href="?action=home"><img id="home" src="image/home.png"><h2>Home</h2></a></li>
    <li><a href="?action=about"><img id="char" src="image/char.png"><h2>Characters</h2></a></li>
    <li><a href="?action=movies"><img id="movie" src="image/movie.png"><h2>Movie/Schedule</h2></a></li>
</ul>
    </div>
   </div>

  
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
   
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    <script src="http://code.jquery.com/jquery-1.12.0.min.js"></script>
    <script>
    $(function(){
  $('.menuFoto').data('size','big');
});

$(window).scroll(function(){
  if($(document).scrollTop() > 0)
{
    if($('.menuFoto').data('size') == 'big')
    {
        $(".menu").hide();
        $(".login h1").hide();
        $(".social img").hide();
        
        $('.menuFoto').data('size','small');
        $('.menuFoto').stop().animate({
            height:'0px'
        },600);
    }
}
else
  {
    if($('.menuFoto').data('size') == 'small')
      {
          $(".menu").show();
        $(".login h1").show();
        $(".social img").show();
        $('.menuFoto').data('size','big');
        $('.menuFoto').stop().animate({
             height:'300px' },600);
        
      }  
  }
    
});
   
        
    </script>
    
</header><?php }} ?>
