
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

            {foreach from=$result item=oneItem}
                <h1 class="title">{$oneItem.title}</h1>
                <img class="fototjes" src=image/{$oneItem.image}><br>
                <div class="text">
                    <content>{$oneItem.content}</content>
                    <h1>{$oneItem.date_created}</h1>
                </div>
            {/foreach}


        </section></div>

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
</div>
</body>



    {*<div class="home">*}
    {*<div class="container-4">*}
    {*<input type="search" id="search" placeholder="Search..." />*}
    {*<button class="icon"><i class="fa fa-search"></i></button>*}
    {*</div>*}