<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

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
    {foreach from=$result item=oneItem}
       <div class="charImage">
        <h1 class="titleChar">{$oneItem.title}</h1>
        
        <img class="characters" src=image/{$oneItem.image}><br>
       
        <div class="textChar">        
        <content>{$oneItem.content}</content>
        <h1 class="dateChar">{$oneItem.date_created}</h1>
        </div>
        </div>
    {/foreach}
</div>

     </section></div>
<div class="pages2">
<ul>
    {for $goo=1 to $nr_pages}
    <li><a href="?action=about&page_nr2={$goo}">{$goo}</a></li>
    {/for}
    
</ul>
</div>
