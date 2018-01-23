<!--.page -->
<div role="document" class="page newyear">
<link rel="stylesheet" href="<?php print base_path() . path_to_theme(); ?>/css/newyear.css">
<script type="text/javascript" src="<?php print base_path() . path_to_theme(); ?>/js/vendor/plugins.js"></script>
<script type="text/javascript" src="<?php print base_path() . path_to_theme(); ?>/js/newyear.js"></script>

  <?php include(drupal_get_path('theme', 'aawdc_desktop') . '/templates/includes/navigation.php'); ?>

  <?php if (!empty($page['featured'])): ?>
    <!--.featured -->
    <section class="l-featured row">
      <div class="large-12 columns">
        <?php print render($page['featured']); ?>
      </div>
    </section>
    <!--/.l-featured -->
  <?php endif; ?>

  <?php if ($messages && !$zurb_foundation_messages_modal): ?>
    <!--.l-messages -->
    <section class="l-messages row">
      <div class="large-12 columns">
        <?php if ($messages): print $messages; endif; ?>
      </div>
    </section>
    <!--/.l-messages -->
  <?php endif; ?>

  <?php if (!empty($page['help'])): ?>
    <!--.l-help -->
    <section class="l-help row">
      <div class="large-12 columns">
        <?php print render($page['help']); ?>
      </div>
    </section>
    <!--/.l-help -->
  <?php endif; ?>


	<?php
	// Print hero image as background if present
	  if($heroImage != '') { ?>
	  <div class="imageHero" style="background: url(<?php print $heroImage ?>); background-repeat: no-repeat; background-size: cover; background-position: center center;">
  <?php } else { ?>
	  <div class="imageHero" style="background: url(<?php aawdc_desktop_random_image(); ?>); background-repeat: no-repeat; background-size: cover; background-position: center center;">
  <?php } ?>
		
	</div>
	<div class="ny-subnav">
		<div class="ny-subnav-links">
			<div class="large-3 columns">
				<a href="#success-stories">Success Stories</a>
			</div>
			<div class="large-3 columns">
				<a href="#events">Featured Event</a>
			</div>
			<div class="large-3 columns">
				<a href="#services">Our Services</a>
			</div>
			<div class="large-3 columns">
				<a href="#career-centers">Career Centers</a>
			</div>
		</div>
		<div class="ny-subnav-links duplicate">
			<div class="large-3 columns">
				<a href="#success-stories">Success Stories</a>
			</div>
			<div class="large-3 columns">
				<a href="#events">Featured Event</a>
			</div>
			<div class="large-3 columns">
				<a href="#services">Our Services</a>
			</div>
			<div class="large-3 columns">
				<a href="#career-centers">Career Centers</a>
			</div>
		</div>
		<div class="ny-bridge"></div>
	</div>
	

	<div class="mainWrapper">

	  <div class="row">
	  	<div class="large-12 columns mainColumn">
			  <?php if (!empty($tabs)): ?>
	        <?php print render($tabs); ?>
	        <?php if (!empty($tabs2)): print render($tabs2); endif; ?>
	      <?php endif; ?>
	
	      <?php print render($page['content']); ?>	
      </div>

	  </div>

	</div>

  <!--/.l-main-->


<?php include(drupal_get_path('theme', 'aawdc_desktop') . '/templates/includes/footer.php'); ?>


  <?php if ($messages && $zurb_foundation_messages_modal): print $messages; endif; ?>
</div>
<!--/.page -->
