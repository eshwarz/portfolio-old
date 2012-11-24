<!DOCTYPE html>
<html>
	<head>

		<meta name="keywords" content="eshwar, pavani, pavesh, pavsesh, eshwar chandra, pavani kumari, eshwar chandra y k, pavani kumari s" />
		<meta name="description" content="Eshwar Chandra's portfolio, blog, events etc." />
		
		<title><?php echo $title; ?></title>
		<?php 
		require_once ($ROOT."app/assets/stylesheets/css.php");
		require_once ($ROOT."app/assets/favicon/favicon.php");
		require_once ($ROOT."app/assets/javascripts/scripts.php");
		?>

	</head>
	<body>
		<div class="ma topBarWidth">

			<?php
			$locals = array('home' => $home, 'about' => $about, 'portfolio' => $portfolio, 'blog' => $blog, 'network' => $network, 'contact' => $contact);
			View::render( array( 'partial' => 'shared/header', 'locals' => $locals ) );
			?>
		</div>
		
		<div id="container_padder" style="padding-top:70px;">
			<div id="container" class="rad10 shadow_max">
				<div class="left_panel">
	<h1 class="page_header left tc">We build Web Products</h1>
	<div class="m15">
		<div class="mt20 paras">
			<ul class="main_list">
				<li>We are happy by devloping the web products. Kick start your web application with us and have it completed in less than 6 weeks.</li>
				<li>We produce <b>Ruby On Rails</b> and <b>PHP</b> products</li>
				<li>Expert in <b>Ruby On Rails</b> </li>
				<li>Expert in <b>Linux, Apache, MySQL, PHP</b></li>
				<li>We use <b>FlyPHP</b> for MVC - Created by US.</li>
				<li>We work with <b>CakePHP</b>, <b>CodeIgniter</b>, <b>Zend</b>, etc.</li>
			</ul>

			<div>
				<div class="fr">
					<?php link_to( 'Visit our Portfolio',  portfolio_path, array('class' => 'tiny_text') ) ?>
				</div>
				<div class="clearfix"></div>
			</div>	
			<div class="programming_images">
				<div class="image">
					<?php image_tag('icons/rails.png'); ?>
					<div class="desc">Rails</div>
				</div>
				<div class="image">
					<?php image_tag('icons/php.png'); ?>
					<div class="desc">PHP</div>
				</div>
				<div class="image">
					<?php image_tag('icons/ruby.png'); ?>
					<div class="desc">Ruby</div>
				</div>
				<div>
					<div class="clearfix"></div>
				</div>
			</div>

		</div>
	</div>
</div>

<div class="right_panel">
	<h1 class="page_header right tc">Twitter Updates</h1>
	<div class="scrollbar" style="height: 479px;">

		<?php
		View::render( array( 'partial' => 'tweets' ) );
		?>
	</div>
		
</div>
				<div class="clearfix"></div>
			</div>
		</div>

		<?php View::render( array( 'partial' => 'shared/footer' ) ); ?>

	</body>
</html>