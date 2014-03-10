<?php include (TEMPLATEPATH . '/smelt/smelt_template_head.php'); ?>
<body>
	<div class="header  clearfix">
		<header role="banner" class="banner  lc">
			<?php
			// Only use h1 for logo on homepage, else span - for SEO.
				if ( is_front_page() ) { ?>
					<h1 class="logo"><a href="http://craftdev.factotum.dk"><span class="logo--craft">Craft</span><span class="logo--dev">Dev</span></a></h1>
				<?php } else { ?>
					<span class="logo"><a href="http://craftdev.factotum.dk"><span class="logo--craft">Craft</span><span class="logo--dev">Dev</span></a></span>
				<?php }
			?>
			<span class="tagline"><?php bloginfo('description'); ?></span>
		</header>
		<nav role="navigation" class="nav--wrap  lc">
			<input type="checkbox" id="toggle-nav" class="is-hidden  c-transition-300" aria-hidden="true">
			<label for="toggle-nav" data-icon="menu" aria-hidden="true">Menu</label>
			<ul class="nav--list c-transition-300">
			<?php
				$args = array( 'title_li'     => __('') );
				wp_list_pages($args);
			?> 
			</ul>
		</nav>
	</div>