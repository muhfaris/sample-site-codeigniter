<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Linuxer</title>
	<link rel="stylesheet" href=""/>
	<style type="text/css">
	body {
	    background: #DDD none repeat scroll 0% 0%;
	    color: #444;
	    height: 100%;
	    font-family: Arial,Helvetica,Tahoma,sans-serif;
	    font-size: 14px;
	    font-weight: 400;
	    line-height: 18px;
	    text-decoration: none;
	    margin: 0px;
	    padding: 0px;
	}
	.outline {
	    background: #FFF none repeat scroll 0% 0%;
	    width: 100%;
	    box-shadow: 0px 10px 10px #666;
	    overflow: hidden;
	    padding: 10px;
	    margin: 15px auto;
	}
	.wrap-main {
    	position: relative;
   		max-width: 960px;
    	margin: 0px auto;
	}	
	.header-main {
	    width: 960px;
	    color: #333;
	    min-height: 90px;
	    overflow: hidden;
	    position: relative;
	    z-index: 999;
	    margin: 0px auto;
	}
	.menuatas {
	    background: #F9F9F9 none repeat scroll 0% 0%;
	    width: 100%;
	    margin: 0px auto;
	    padding: 0px;
	    border-bottom: 1px solid #DDD;
	}
	.menuatas ul {
	    list-style: outside none none;
	    color: #555;
	    width: 960px;
	    margin: 0px auto;
	    padding: 0px;
	}
	.menuatas ul li {
	    list-style: outside none none;
	    line-height: 34px;
	    display: inline-block;
	}
	.menuatas li a {
	    color: #555;
	    font-size: 13px;
	    font-family: Arial,Helvetica,Tahoma,sans-serif;
	    text-decoration: none;
	    text-transform: capitalize;
	    padding: 0px 10px;
	    border-right: 1px solid #DDD;
	}
	.menusearch {
	    width: 300px;
	    float: right;
	    margin: 0px auto;
	    padding: 4px 10px 0px 0px;
	}
	.searchform {
	    margin-top: 0px;
	    display: inline-block;
	    padding: 0px;
	    background: #FFF none repeat scroll 0% 0%;
	    width: 300px;
	    height: 23px;
	    overflow: hidden;
	    border-radius: 3px;
	    border: 1px solid #DDD;
	}
	.searchform .searchfield {
	    background: transparent none repeat scroll 0% 0%;
	    padding: 0px 0px 0px 6px;
	    margin: 0px;
	    width: 260px;
	    height: 23px;
	    border: 0px none;
	    outline: medium none;
	    line-height: 23px;
	}
	.searchform input {
	    font: italic 12px/23px Arial;
	    color: #222;
	    height: 23px;
	    padding: 0px;
	    margin: 0px;
	}
	#menu {
		background-color: #000;
	    color: #EEE;
	    height: 35px;
	    border-bottom: 4px solid #666;
	}
	#menu ul {
    	height: 35px;
	}
	#menu ul, #menu li {
	    margin: 0px;
	    padding: 0px;
	    list-style: outside none none;
	}
	#menu li:first-child {
    	border-left: medium none;
	}
	#menu li {
	    float: left;
	    display: inline;
	    position: relative;
	    font: bold 12px Oxygen;
	    text-shadow: 0px -1px 0px #000;
	    border-right: 1px solid #444;
	    border-left: 1px solid #111;
	    text-transform: uppercase;
	}
	#menu a {
	    display: block;
	    line-height: 35px;
	    padding: 0px 14px;
	    text-decoration: none;
	    color: #EEE;
	}
	.body-wrap {
	    text-align: justify;
	    width: 100%;
	    margin: 0px;
	    float: left;
	    word-wrap: break-word;
	    overflow: hidden;
	}
	.entry {
	    float: left;
	    margin: 10px 5px 0px;
	    overflow: hidden;
	    padding: 7px 7px 5px;
	    width: 45.8%;
	}
	.entry h1, .entry h2 {
	    margin: 0px 0px 4px;
	    padding: 0px;
	    font: bold 17px Tahoma;
	}
	.entry h1 a, .entry h2 a{
		text-decoration: none;
	}
	.title-entry {
	    border-bottom: 1px dotted !important;
	    padding-bottom: 10px;
	}
	.postentry {
	    font: 12px arial;
	    border-top: medium none;
	    padding-top: 0px;
	    background: transparent none repeat scroll 0% 0%;
	    margin: 0px;
	    text-align: left;
	}
	.postentrydalam {
	    font: 12px arial;
	    text-align: justify;
	}
	#footer {
	    background: #222 none repeat scroll 0% 0%;
	    border-bottom: 1px solid #000;
	    border-top: 4px solid #111;
	    width: 100%;
	    padding: 0px;
	}
	#credit {
	    background: #333 none repeat scroll 0% 0%;
	    border-top: 1px solid #000;
	    font: 11px/18px Tahoma;
	    color: #999;
	    width: 100%;
	    overflow: hidden;
	    clear: both;
	    padding: 10px 0px;
	}
	#credit .left {
	    float: left;
	    text-align: left;
	    margin-left: 10px;
	}
	.sidebar-wrap {
	    width: 320px;
	    float: right;
	    word-wrap: break-word;
	    overflow: hidden;
	}
	.clr {
	    clear: both;
	    float: none;
	}
	</style>
</head>
<body>
<div class="wrap-main">
<div class="outline">
	<div class="header-main">
		<div class="titleheader"><h1>BLOG PENGGUNA LINUX</h1></div>
	</div><!--header-main-->
	<div class="menuatas">
		<ul>
			<li><a href="/">Home</a></li>
			<li><a href="#">Disclaimer</a></li>
			<li><a href="#">Contact</a></li>
			<li><a href="#">Privacy Policy</a></li>
			<div class="menusearch">
				<form class="searchform" method="get" action="/search">
					<input class="searchfield" type="text" value="Cari disini">
				</form></div>
		</ul>

	</div><!--menuatas-->
	<nav id="menu"><!--menu-->
		<ul>
			<li><a href="/">Beranda</a></li>
			<li><a href="#">Majalah</a></li>
			<li><a href="#">Problem Solved</a></li>
			<li><a href="#">Forum Linux</a></li>
		</ul>
	</nav><!--end nav-->

	<div class="body-wrap">
	<?php if(isset($allpost)):foreach ($allpost as $baris):?>
		<div class="entry">
			<h1 class="title-entry"><?php echo anchor("/post/$baris->ID",$baris->post_title);?></h1>
			<div id="postentry">
				<div class="postentrydalam">
				<?php $content = $baris->post_content;
				$content=character_limiter($content,120);?>
				<?php echo $content; ?>
				</div>
			</div>
		</div>
	<?php endforeach; ?>
    <?php else: ?>
        <h2>Tidak Ada Data !!</h2>
    <?php endif; ?>
	</div><!--end wrap body-->
	<div class="clear"></div>
<!-- 	<div class="sidebar-wrap">
		
	</div> -->
	<div class="clr"></div>
	<div class="wrap-main">
			<div id="footer">
				<div id="credit">
				<div class="left">. All Rights Reserved by Faris || Copyright © 2015. <a class="sitename" href="/" title="Linuxer">Linuxer</a></div></div>
			</div>
		</div> 
		<div class="clear"></div>	
</div></div>
	
</body>
</html>