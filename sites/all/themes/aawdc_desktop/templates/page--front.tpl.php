<!--.page -->
<div role="document" class="page">

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
  

	<div class="imageHero">
		<section class="row">
			<div class="large-7 columns">
        		<h1>Building Your Success</h1>
      		</div>
    	</section>
	</div>
	
	<div class="calloutTryp">
	  	<section class="row">
		  	<div class="large-4 columns negative">
	        	<span class="career"></span>
	        	<h3>Take the next<br/> career step</h3>
	      	</div>
	      	<div class="large-4 columns negative">
	        	<span class="workforce"></span>
	        	<h3>Build your<br/> workforce</h3>
	      	</div>
	      	<div class="large-4 columns negative">
	        	<span class="involved"></span>
	        	<h3>Get<br/> Involved</h3>
	      	</div> 	
	  	</section>
	</div>
	
	<div class="calloutHero">
		<section class="row">
			<div class="large-12 columns">
        		<?php print render($page['MissionStatement']); ?>
      		</div>
    	</section>
    	
	</div>
	
	
	<div class="mainWrapper">
		
	  <div class="row topFacts">
	  	<div class="large-4 columns">
		  	<div class="negative">
        		<?php print render($page['HomepageFactOne']); ?>
		  	</div>
       	</div>
      	
      	<div class="large-4 columns">
		  	<div class="negative">
        		<?php print render($page['HomepageFactTwo']); ?>
		  	</div>
       	</div>
      	
      	<div class="large-4 columns">
		  	<div class="negative">
        		<?php print render($page['HomepageFactThree']); ?>
		  	</div>
       	</div>
	  </div>
	  
	  <div class="row">
	  	<div class="large-9 columns">
		  	<div class="negative">
			  	<span class="smallLabel">Blog</span>
	        	<?php print views_embed_view('homepage', 'block'); ?>
		  	</div>
      	</div>
      	
      	<div class="large-3 columns">
	      	<div class="negative">
	        	<span class="smallLabel">What's New</span>
	        	<?php print render($page['HomepageWhatsNew']); ?>
	      	</div>
      	</div>
      	
	  </div>
	  
	  <div class="row">
	  	<div class="large-9 columns">
		  	<div class="negative">
	        	<span class="smallLabel">Success Stories</span>
	        	<?php print views_embed_view('homepage', 'block_1'); ?>
		  	</div>
      	</div>
      	
      	<div class="large-3 columns">
	      	<div class="negative">
	        	<span class="smallLabel">Hot Jobs</span>
			  	<?php print views_embed_view('homepage', 'block_2'); ?>
	      	</div>
      	</div>
      	
	  </div>
	  
	</div>

  <!--/.l-main-->

    
<?php include(drupal_get_path('theme', 'aawdc_desktop') . '/templates/includes/footer.php'); ?>
    

  <?php if ($messages && $zurb_foundation_messages_modal): print $messages; endif; ?>
</div>
<!--/.page -->
