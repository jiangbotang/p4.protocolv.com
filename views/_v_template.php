<!DOCTYPE html>
<html>
<head>
	<title><?php if(isset($title)) echo $title; ?></title>

	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

	<link rel="stylesheet" href="/css/layout.css" type="text/css" media="all">
	<script src="/js/jquery-1.8.2.min.js"></script>
	<script src="/js/cufon-yui.js"></script>
	<script src="/js/cufon-replace.js"></script>
	<script src="/js/Myriad_Pro_300.font.js"></script>
	<script src="/js/Myriad_Pro_400.font.js"></script>
	<!-- form validation plugin from formvalidator.net -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.1.27/jquery.form-validator.min.js"></script>
					
	<!-- Controller Specific JS/CSS -->
	<?php if(isset($client_files_head)) echo $client_files_head; ?>
	
</head>

<body id="<?=$pageN?>">
	<!-- START PAGE SOURCE -->
	<div class="body1"></div>
	<div class="body2">
	  <div class="main">
	    <header>
	      <div class="wrapper">
	        <nav>
	          <ul id="menu">
	            <li <?php if(isset($menu_home)) echo 'id="'."$menu_home".'"' ?>><a href="/">Home</a></li>
	            <li <?php if(isset($menu_res)) echo 'id="'."$menu_res".'"' ?>><a href="/research/index">Researches</a></li>
	            <li <?php if(isset($menu_arch)) echo 'id="'."$menu_arch".'"' ?>><a href="/primers/index">Archives</a></li>
	            <li <?php if(isset($menu_cont)) echo 'id="'."$menu_cont".'"' ?>><a href="/contacts/index">Contacts</a></li>
	            <?php if($user): ?>
	            <li class="bg_none"><a href="/users/logout">Logout: <?=$user->first_name?></a></li>
	        	<?php else: ?>
	        	<li class="bg_none" <?php if(isset($menu_login)) echo 'id="'."$menu_login".'"' ?>><a href="/users/login">Login</a></li>
	        	<?php endif; ?>
	          </ul>
	        </nav>
	        <h1><a href="#" id="logo">science</a></h1>
	      </div>
	      <div class="wrapper">
	        <article class="col1 pad_left2">
	          <div class="text1">Discovering New Ways <span>of Managing Research</span></div>
	          <p>As a scientist working in a biomedical research laboratory, I often feel the need of an efficient way to orgnize reagents, protocols, etc.
	            So here is the website I build to help myself. I am also thinking about ways of using this site to help other scientists as well, 
	            so please stay tuned.</p>
	        </article>
	      </div>
	    </header>
	  </div>
	</div>
	
	<!-- view content goes here -->
	<?php if(isset($content)) echo $content; ?>

	<!-- footer -->
	<footer>
	  <div class="footerlink">
	    <p class="lf">Copyright &copy; 2012 <a href="#">Research Manager</a> by Jiangbo Tang - All Rights Reserved</p>
	    <p class="rf"><a href="http://www.free-css.com/">Free CSS Templates</a> by <a href="http://www.templatemonster.com/">TemplateMonster</a></p>
	    <div style="clear:both;"></div>
	  </div>
	</footer>

	<?php if(isset($client_files_body)) echo $client_files_body; ?>

	<script> Cufon.now(); </script>
	<!-- load forma validation here -->
	<script>
		$.validate({
			modules: 'security'
		});
	</script>
</body>
</html>