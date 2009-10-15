<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" >
<head>
	<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
	<meta name="author" content="Dave Shea" />
	<meta name="keywords" content="design, css, cascading, style, sheets, xhtml, graphic design, w3c, web standards, visual, display" />
	<meta name="description" content="A demonstration of what can be accomplished visually through CSS-based design." />
	<meta name="robots" content="all" />
	<title>css Zen Garden: The Beauty in CSS Design</title>

	<!-- to correct the unsightly Flash of Unstyled Content. http://www.bluerobot.com/web/css/fouc.asp -->
	<?= js('jquery/jquery.js'); ?>
        <?= js('jquery/easySlider1.5.js'); ?>
	<link href="application/assets/css/home.css" rel="stylesheet" type="text/css" media="screen" />
        
	<link rel="Shortcut Icon" type="image/x-icon" href="http://www.csszengarden.com/favicon.ico" />
	<link rel="alternate" type="application/rss+xml" title="RSS" href="http://www.csszengarden.com/zengarden.xml" />
        <script type="text/javascript">
		$(document).ready(function(){
			$("#slider").easySlider();
		});
	</script>
</head>

<!--


	This xhtml document is marked up to provide the designer with the maximum possible flexibility.
	There are more classes and extraneous tags than needed, and in a real world situation, it's more
	likely that it would be much leaner.

	However, I think we can all agree that even given that, we're still better off than if this had been
	built with tables.


-->

<body id="css-zen-garden" style="background-color:green;">

<div id="container">
	
    <a href="news" style="display:block;text-decoration:none;"><img style="border:0;" src="application/assets/img/solgan.jpg" /><span style="display:none;">成长日志</span></a>
    <div id="slider">
			<ul>
				<li><a href="application/assets/img/homepage/01.jpg"><img src="application/assets/img/homepage/01.jpg" alt="Css Template Preview" /></a></li>
				<li><a href="application/assets/img/homepage/02.jpg"><img src="application/assets/img/homepage/02.jpg" alt="Css Template Preview" /></a></li>
				<li><a href="application/assets/img/homepage/03.jpg"><img src="application/assets/img/homepage/03.jpg" alt="Css Template Preview" /></a></li>
				<li><a href="application/assets/img/homepage/04.jpg"><img src="application/assets/img/homepage/04.jpg" alt="Css Template Preview" /></a></li>
				<li><a href="application/assets/img/homepage/05.jpg"><img src="application/assets/img/homepage/05.jpg" alt="Css Template Preview" /></a></li>
			</ul>
		</div>
</div>


</body>
</html>