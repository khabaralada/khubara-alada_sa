

<style type="text/css">

#popitmenu{
position: absolute;
background-color:#7D94D8;
border:4px solid #E8EBF2;
font: bold 14px Verdana;
line-height: 18px;
z-index: 100;
visibility: hidden;
}

#popitmenu a{
text-decoration: none;
padding-left: 6px;
color: #D79729;
display: block;
}

#popitmenu a:hover{ /*hover background color*/
background-color:#48251E;
}



<style type="text/css">

#popitmenu{
position: absolute;
background-color:#D3C6B3;
border:1px solid #1281AA;
font: bold 12px Arial;
line-height: 18px;
z-index: 100;
visibility: hidden;
}

#popitmenu a{
text-decoration: none;
padding-left: 6px;
color: #ffffff;
display: block;
}

#popitmenu a:hover{ /*hover background color*/
background-color:#4761B9;
}

</style>

<script type="text/javascript">

/***********************************************
* Pop-it menu- © Dynamic Drive (www.dynamicdrive.com)
* This notice MUST stay intact for legal use
* Visit http://www.dynamicdrive.com/ for full source code
***********************************************/

var defaultMenuWidth="140px" //set default menu width.

var linkset=new Array()


linkset[0]='ÇáÑÆíÓíÉ</a>'
linkset[0]+='<hr>' //Optional Separator
linkset[0]+='<a href="index.php">ÑÆíÓíÉ áæÍÉ ÇáÊÍßã</a>'
linkset[0]+='<hr>' //Optional Separator
linkset[0]+='<a href="../index.php">ÑÆíÓíÉ ÇáãæŞÚ</a>'
linkset[0]+='<hr>' //Optional Separator


linkset[1]='ÇáãŞÇáÇÊ</a>'
linkset[1]+='<hr>' //Optional Separator
linkset[1]+='<a href="articles.php">ÇÖÇİÉ ãŞÇá ÌÏíÏ</a>'
linkset[1]+='<hr>' //Optional Separator
linkset[1]+='<a href="delete/articles_del.php">ãÓÍ ãŞÇá ãæÌæÏ</a>'
linkset[1]+='<hr>' //Optional Separator
linkset[1]+='<a href="command_active.php">ÊİÚíá ÊÚáíŞ ãæÌæÏ</a>'
linkset[1]+='<hr>' //Optional Separator
linkset[1]+='<a href="../articles.php">ÇáĞåÇÈ Çáì ÕİÍÉ ÇáãŞÇáÇÊ</a>'
linkset[1]+='<hr>' //Optional Separator



linkset[2]='ÇááÇÚÈíä</a>'
linkset[2]+='<hr>' //Optional Separator
linkset[2]+='<a href="agenda.php">ÇÖÇİÉ ãæÖæÚ ÌÏíÏ</a>'
linkset[2]+='<hr>' //Optional Separator
linkset[2]+='<a href="delete/agenda_del.php">ãÓÍ ãæÖæÚ ãæÌæÏ</a>'
linkset[2]+='<hr>' //Optional Separator
linkset[2]+='<a href="../agenda.php">ÇáĞåÇÈ Çáì ÕİÍÉ ÇááÇÚÈíä</a>'
linkset[2]+='<hr>' //Optional Separator


linkset[3]='ãÏæäÊì ÇáÑíÇÖíÉ</a>'
linkset[3]+='<hr>' //Optional Separator
linkset[3]+='<a href="blog.php">ÇÖÇİÉ ãæÖæÚ İì ÇáãÏæäÉ</a>'
linkset[3]+='<hr>' //Optional Separator
linkset[3]+='<a href="delete/blog_del.php">ãÓÍ ãæÖæÚ ãä ÇáãÏæäÉ</a>'
linkset[3]+='<hr>' //Optional Separator
linkset[3]+='<a href="command2_active.php">ÊİÚíá ÊÚáíŞ ãæÌæÏ</a>'
linkset[3]+='<hr>' //Optional Separator
linkset[3]+='<a href="../blog.php">ÇáĞåÇÈ Çáì ÇáãÏæäÉ ÇáÑíÇÖíÉ</a>'
linkset[3]+='<hr>' //Optional Separator



linkset[4]='ÃÎÑ ÇáÇÎÈÇÑ</a>'
linkset[4]+='<hr>' //Optional Separator
linkset[4]+='<a href="news.php">ÇÖÇİÉ ÎÈÑ ÌÏíÏ</a>'
linkset[4]+='<hr>' //Optional Separator
linkset[4]+='<a href="delete/news_del.php">ãÓÍ ÎÈÑ ãæÌæÏ</a>'
linkset[4]+='<hr>' //Optional Separator
linkset[4]+='<a href="command2_active.php">ÊİÚíá ÊÚáíŞ ãæÌæÏ</a>'
linkset[4]+='<hr>' //Optional Separator
linkset[4]+='<a href="../news.php">ÇáĞåÇÈ Çáì ÕİÍÉ ÇáÑÆíÓíÉ</a>'
linkset[4]+='<hr>' //Optional Separator





linkset[5]='ãÚÑÖ ÇáÕæÑ</a>'
linkset[5]+='<hr>' //Optional Separator
linkset[5]+='<a href="gallery.php">ÇÖÇİÉ ÕæÑÉ ÌÏíÏÉ</a>'
linkset[5]+='<hr>' //Optional Separator
linkset[5]+='<a href="delete/gallery_del.php">ãÓÍ ÕæÑÉ ãæÌæÏÉ</a>'
linkset[5]+='<hr>' //Optional Separator
linkset[5]+='<a href="../gallery.php">ÇáĞåÇÈ Çáì ãÚÑÖ ÇáÕæÑ</a>'
linkset[5]+='<hr>' //Optional Separator



linkset[6]='ÇÊÕá ÈäÇ</a>'
linkset[6]+='<hr>' //Optional Separator
linkset[6]+='<a href="contactus.php">ÇÖÇİÉ ÈíÇäÇÊ ÇáÇÊÕÇá</a>'
linkset[6]+='<hr>' //Optional Separator
linkset[6]+='<a href="delete/contactus_del.php">ãÓÍ ÈíÇäÇÊ ÇáÇÊÕÇá ÇáãæÌæÏÉ</a>'
linkset[6]+='<hr>' //Optional Separator
linkset[6]+='<a href="../contactus.php">ÇáĞåÇÈ Çáì ÕİÍÉ ÇÊÕá ÈäÇ</a>'
linkset[6]+='<hr>' //Optional Separator


linkset[7]='ÇáÇÚáÇäÇÊ</a>'
linkset[7]+='<hr>' //Optional Separator
linkset[7]+='<a href="advertisement.php">ÇÖÇİÉ ÇÚáÇä ÌÏíÏ</a>'
linkset[7]+='<hr>' //Optional Separator
linkset[7]+='<a href="delete/advertisement_del.php">ãÓÍ ÇÚáÇä ãæÌæÏ</a>'
linkset[7]+='<hr>' //Optional Separator




linkset[8]='ãßÊÈÉ ÇáİÏíæ</a>'
linkset[8]+='<hr>' //Optional Separator
linkset[8]+='<a href="video.php">ÇÖÇİÉ ãáİ İÏíæ ÌÏíÏ</a>'
linkset[8]+='<hr>' //Optional Separator
linkset[8]+='<a href="delete/video_del.php">ãÓÍ ãáİ İÏíæ ãæÌæÏ</a>'
linkset[8]+='<hr>' //Optional Separator
linkset[8]+='<a href="../video.php">ÇáĞåÇÈ Çáì ãßÊÈÉ ÇáİÏíæ</a>'
linkset[8]+='<hr>' //Optional Separator

////No need to edit beyond here

var ie5=document.all && !window.opera
var ns6=document.getElementById

if (ie5||ns6)
document.write('<div id="popitmenu" onMouseover="clearhidemenu();" onMouseout="dynamichide(event)"></div>')

function iecompattest(){
return (document.compatMode && document.compatMode.indexOf("CSS")!=-1)? document.documentElement : document.body
}

function showmenu(e, which, optWidth){
if (!document.all&&!document.getElementById)
return
clearhidemenu()
menuobj=ie5? document.all.popitmenu : document.getElementById("popitmenu")
menuobj.innerHTML=which
menuobj.style.width=(typeof optWidth!="undefined")? optWidth : defaultMenuWidth
menuobj.contentwidth=menuobj.offsetWidth
menuobj.contentheight=menuobj.offsetHeight
eventX=ie5? event.clientX : e.clientX
eventY=ie5? event.clientY : e.clientY
//Find out how close the mouse is to the corner of the window
var rightedge=ie5? iecompattest().clientWidth-eventX : window.innerWidth-eventX
var bottomedge=ie5? iecompattest().clientHeight-eventY : window.innerHeight-eventY
//if the horizontal distance isn't enough to accomodate the width of the context menu
if (rightedge<menuobj.contentwidth)
//move the horizontal position of the menu to the left by it's width
menuobj.style.left=ie5? iecompattest().scrollLeft+eventX-menuobj.contentwidth+"px" : window.pageXOffset+eventX-menuobj.contentwidth+"px"
else
//position the horizontal position of the menu where the mouse was clicked
menuobj.style.left=ie5? iecompattest().scrollLeft+eventX+"px" : window.pageXOffset+eventX+"px"
//same concept with the vertical position
if (bottomedge<menuobj.contentheight)
menuobj.style.top=ie5? iecompattest().scrollTop+eventY-menuobj.contentheight+"px" : window.pageYOffset+eventY-menuobj.contentheight+"px"
else
menuobj.style.top=ie5? iecompattest().scrollTop+event.clientY+"px" : window.pageYOffset+eventY+"px"
menuobj.style.visibility="visible"
return false
}

function contains_ns6(a, b) {
//Determines if 1 element in contained in another- by Brainjar.com
while (b.parentNode)
if ((b = b.parentNode) == a)
return true;
return false;
}

function hidemenu(){
if (window.menuobj)
menuobj.style.visibility="hidden"
}

function dynamichide(e){
if (ie5&&!menuobj.contains(e.toElement))
hidemenu()
else if (ns6&&e.currentTarget!= e.relatedTarget&& !contains_ns6(e.currentTarget, e.relatedTarget))
hidemenu()
}

function delayhidemenu(){
delayhide=setTimeout("hidemenu()",500)
}

function clearhidemenu(){
if (window.delayhide)
clearTimeout(delayhide)
}

if (ie5||ns6)
document.onclick=hidemenu

</script>