<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">



<hr class="hr">
<h1 id="latest">Latest News</h1>
<hr class="hr">

<section>

    {foreach from=$result item=oneItem}
        <h1 class="title">{$oneItem.title}</h1>
        <img class="fototjes" src=image/{$oneItem.image}><br>
        <div class="text">
        <content>{$oneItem.content}</content>
        <h1>{$oneItem.date_created}</h1>
        </div>
    {/foreach}


</section>


<div class="pages">
<ul>
    {for $foo=1 to $nr_pages}
    <li><a href="?action=home&page_nr={$foo}">{$foo}</a></li>
    {/for}
    
</ul>
</div><br>
<br>
<br>
<br>
<br>







{*<?php*}

{*echo '<section>';*}

{*//fetch_assoc should not be in the view!*}
{*foreach($result as $row=>$oneItem) {*}


{*echo '<article>';*}
    {*echo '<h1>' . $oneItem['title'] . '</h1>';*}
    {*echo '<content>' . $oneItem['content'] . '</content>';*}
    {*echo '<img src="image/'. $oneItem['image'] . '">';*}
    {*echo '</article>';*}

{*}*}
{*echo '</section>';*}