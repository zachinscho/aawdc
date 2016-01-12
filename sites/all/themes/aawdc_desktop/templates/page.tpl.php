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
  
  <?php 
	// Print hero image as background if present
	  if($heroImage != '') { ?>
	  <div class="imageHero" style="background: url(<?php print $heroImage ?>)">
  <?php } else { ?>
	  <div class="imageHero">
  <?php } ?>
		<section class="row">
			<div class="large-7 columns">
        		<h1>
					<?php print $title ?>
				</h1>
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
	<main role="main" class="row l-main">
    <div class="<?php print $main_grid; ?> main columns">
      <?php if (!empty($page['highlighted'])): ?>
        <div class="highlight panel callout">
          <?php print render($page['highlighted']); ?>
        </div>
      <?php endif; ?>
	<a id="main-content"></a>


      <?php if (!empty($tabs)): ?>
        <?php print render($tabs); ?>
        <?php if (!empty($tabs2)): print render($tabs2); endif; ?>
      <?php endif; ?>
      
    <!--.l-BC-->
    <section class="l-BC row">
      <div class="large-12 columns">
        <?php if ($breadcrumb): print $breadcrumb; endif; ?>
      </div>
    </section>
    <!--/.l-BC -->

      <?php if ($action_links): ?>
        <ul class="action-links">
          <?php print render($action_links); ?>
        </ul>
      <?php endif; ?>

      <?php print render($page['content']); ?>
    </div>
    <!--/.l-main region -->


    <?php if (!empty($page['sidebar_second'])): ?>
      <aside role="complementary" class="<?php print $sidebar_sec_grid; ?> l-sidebar-second columns sidebar">
        <?php print render($page['sidebar_second']); ?>
      </aside>
    <?php endif; ?>
  </main>

	  
	
	  
	  
	  
	</div>

  <!--/.l-main-->

    
<?php include(drupal_get_path('theme', 'aawdc_desktop') . '/templates/includes/footer.php'); ?>
    

  <?php if ($messages && $zurb_foundation_messages_modal): print $messages; endif; ?>
</div>
<!--/.page -->

