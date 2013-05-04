<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="nl" lang="nl">
<head>
 	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
 	<meta name="description" content="A short description." />
 	<meta name="keywords" content="put, keywords, here" />
 	<title>ITHC</title>
	<link rel="stylesheet" href="style.css" type="text/css">
  <!--  <link rel="stylesheet" href="nav.css" type="text/css">-->
</head>
<style>
.top_bar{
    background-color: #09F;
	width:100%;
	height:41px; }
.top_bar ul{
    margin: 0; padding: 0;
    float: right;}
 
.top_bar ul li {
    display: inline;}
 
.top_bar ul li a {
    float: left; text-decoration: none;
    color: white; 
    padding: 10.5px 11px;
    background-color: #09f; }
 
.top_bar ul li a:visited{
    color: white;}
 
.top_bar ul li a:hover, .menu ul li .current{
    color: #fff;
    background-color:#0b75b2;
}
#top_right{
	float:left;
}
.links { 
	text-decoration:none;
	font-family:"Courier New", Courier, monospace;
	color:#303;	}
.links:hover {
	text-decoration:underline;
	}
.links:visited {
	color:#000;
}
/*for sub menus*/
.top_bar ul ul{
	display:none;
}
.top_bar ul li:hover > ul{
	display:block;
}
.top_bar ul li{
	float:left;
}
.top_bar ul{
	display:inline-table;
	position:relative;
}
.top_bar ul ul li{
	float:none;
}
.top_bar ul ul {
	position: absolute;
	padding: 0 0px;
	margin-top:41px;
	z-index:2;
}
/*new content area*/
.module {
	background: #eee;
	margin: 0 0 20px 0;
}
.module h2 {
	background: #9FCFFF;
	line-height: 2;
	padding: 0 0 0 10px;
	font-size: 16px;
	box-shadow: inset 0 25px 10px -10px rgba(255, 255, 255, 0.2);
}
.module h2 a {
	float: right;
	position: relative;
	text-decoration: none;
	color: #333;
	padding: 0 10px;
	border-left: 5px solid white;
	-webkit-transition: padding 0.3s linear;
	-moz-transition: padding 0.3s linear;
	-ms-transition: padding 0.3s linear;
	-o-transition: padding 0.3s linear;
}
.module h2 a:hover {
	padding: 0 14px;
}
.module h2 a:active {
	padding: 0 16px;
}
.module ul {
	list-style: none;
	padding: 10px 0;
}
.module li {
	color: #333;
	border-bottom: 1px solid #cfcfcf;
	border-top: 1px solid #fbf6f6;
	padding: 10px;
	font-family: Georgia, Serif;
}
.module li:first-child {
	border-top: 0;
	padding-top: 0;
}
.module li:last-child {
	border-bottom: 0;
	padding-bottom: 0;
}
.module h2 a:before,
.module h2 a:after {
  content: "";
	position: absolute;
	top: 50%;
	width: 0;
	height: 0;
}
.module h2 a:before {
	left: -12px;
	border-top: 8px solid transparent;
	border-bottom: 8px solid transparent;
	border-right: 8px solid white;
	margin-top: -8px;
}
/*module blue*/
.module.blue h2 a {
	background: #a2d6eb;
}
.module.blue h2 a:hover {
	background: #c5f0ff;
}
.module.blue h2 a:after {
	left: -5px;
	border-top: 6px solid transparent;
	border-bottom: 6px solid transparent;
	border-right: 6px solid #a2d6eb;
	margin-top: -6px;
}
.module.blue h2 a:hover:after {
	border-right-color: #c5f0ff;
}
/*module green*/
.module.green h2 a {
	background: #9cf1a4;
}
.module.green h2 a:hover {
	background: #bbffcf;
}
.module.green h2 a:after {
	left: -5px;
	border-top: 6px solid transparent;
	border-bottom: 6px solid transparent;
	border-right: 6px solid #9cf1a4;
	margin-top: -6px;
}
.module.green h2 a:hover:after {
	border-right-color: #bbffcf;
}
/*module red*/
.module.red h2 a {
	background: #f0a5b5;
}
.module.red h2 a:hover {
	background: #ffc7d2;
}
.module.red h2 a:after {
	left: -5px;
	border-top: 6px solid transparent;
	border-bottom: 6px solid transparent;
	border-right: 6px solid #f0a5b5;
	margin-top: -6px;
}
.module.red h2 a:hover:after {
	border-right-color: #ffc7d2;
}
/*coloumed*/
.left{
	
	width:70%;
	position:relative;
}
.right{
	float:right;
	margin-top:0%;
	width:25%;
	position:relative;
}
/*for footer*/
.footer{
	background:transparent;
	clear:both;
}
/*view date of posts*/
#date{
	font-size:12px;
	text-align:right;
}
/*Boxes*/
.arrow_box {
	position: relative;
	background: #88b7d5;
	border: 4px solid #c2e1f5;
	width 35%;
	height:100px;
	float:left;
	border-radius:10px; 
	padding:5px 10px;
	
}
.arrow_box:after, .arrow_box:before {
	left: 100%;
	border: solid transparent;
	content: " ";
	height: 0;
	width: 0;
	position: absolute;
	pointer-events: none;
}

.arrow_box:after {
	border-color: rgba(136, 183, 213, 0);
	border-left-color: #88b7d5;
	border-width: 30px;
	top: 50%;
	margin-top: -30px;
}
.arrow_box:before {
	border-color: rgba(194, 225, 245, 0);
	border-left-color: #c2e1f5;
	border-width: 36px;
	top: 50%;
	margin-top: -36px;
}
#top_right{
	float:left;}
#site_name{
	border-right: ridge thick #0C0;
	font-weight:bold;
	font-family:"Lucida Sans Unicode", "Lucida Grande", sans-serif ;
	font-variant:small-caps;
}
</style>
<body>
<!--<h1>IT HELP CENTER</h1>-->
<div id="wrapper">
<div class="top_bar">
<ul  id="top_right">
<li id="site_name"><a href="index.php">IT Help Center</a></li>
<li><a href="index.php">Home</a></li>
<li><a href="create_topic.php">New Post</a></li>
<li><a href="#">Category</a>
	<ul>
    <li><a href="browse_cat.php">Browse Categories</a></li>
    <li><a href="create_cat.php">Create new Category</a></li>
    </ul>
<li><a href="rules.php">Rules</a></li>
<li><a href="about.php">About Us</a></li>
</ul>
<?php
		if(isset($_SESSION['signed_in']) && $_SESSION['signed_in'] == true)
		{
			echo '
			<ul>
			<li><a href="#">Hello <b>' . htmlentities($_SESSION['user_name']) . '</b>. Not you? </a></li>
			<li><a href="signout.php">Sign out</a></li>
			</ul></div>';
		}
		else
		{
			echo '<ul>
					<li><a href="signin.php">Sign in</a></li>
					<li><a href="signup.php">Create Account</a></li>
				 </ul></div>';
		}
?>


		<div id="content">
<?php
echo "<mm:dwdrfml documentRoot=" . __FILE__ .">";$included_files = get_included_files();foreach ($included_files as $filename) { echo "<mm:IncludeFile path=" . $filename . " />"; } echo "</mm:dwdrfml>";
?>