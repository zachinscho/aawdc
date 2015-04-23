<script type="text/javascript">
// For resizing the main image window on load/resize
window.addEventListener('load',fit,false);
window.addEventListener('resize',fit,false);
function fit(){
    var myHeight;
    var myMargin;
    if( typeof( window.innerWidth ) == 'number' ) {
        //Non-IE
        myHeight = window.innerHeight;
    } else if( document.documentElement && ( document.documentElement.clientWidth || document.documentElement.clientHeight ) ) {
        //IE 6+ in 'standards compliant mode'
        myHeight = document.documentElement.clientHeight;
    }
    myHeight = myHeight - 75;
    myMargin = myHeight;
    myMargin = myMargin - 400;
    myMargin = myMargin / 2;
    document.getElementById('resizeOnLoad').style.height=myHeight + 'px';
    document.getElementById('marginOnLoad').style.marginTop=myMargin + 'px';
}
</script>



<?php
// make sure we have metatags for the front page
render($page['content']['metatags']); 

?>

<!--.page -->
<div role="document" class="page">

  <!--.l-header -->
  <header role="banner" class="l-header">

    <?php if ($top_bar): ?>
      <!--.top-bar -->
      <?php if ($top_bar_classes): ?>
        <div class="<?php print $top_bar_classes; ?>">
      <?php endif; ?>
      <nav class="top-bar"<?php print $top_bar_options; ?>>
        <ul class="title-area">
          <li class="name"><a href="<?php print $front_page; ?>"></a></li>
          <li class="toggle-topbar menu-icon"><a href="#"><span><?php print $top_bar_menu_text; ?></span></a></li>
        </ul>
        <section class="top-bar-section">
          <?php if ($top_bar_main_menu) :?>
            <?php print $top_bar_main_menu; ?>
          <?php endif; ?>
          <?php if ($top_bar_secondary_menu) :?>
            <?php print $top_bar_secondary_menu; ?>
          <?php endif; ?>
        </section>
      </nav>
      <?php if ($top_bar_classes): ?>
        </div>
      <?php endif; ?>
      <!--/.top-bar -->
    <?php endif; ?>


    <?php if (!empty($page['header'])): ?>
      <!--.l-header-region -->
      <section class="l-header-region row">
        <div class="large-12 columns">
          <?php print render($page['header']); ?>
        </div>
      </section>
      <!--/.l-header-region -->
    <?php endif; ?>

  </header>
  <!--/.l-header -->

  <?php if (!empty($page['featured'])): ?>
    <!--.featured -->
    <section class="l-featured row">
      <div class="large-12 columns">
        <?php print render($page['featured']); ?>
      </div>
    </section>
    <!--/.l-featured -->
  <?php endif; ?>
<a id="main-content"></a>

<?php if (!empty($tabs)): ?>
        <?php print render($tabs); ?>
        <?php if (!empty($tabs2)): print render($tabs2); endif; ?>
<?php endif; ?>

<div id="resizeOnLoad" class="imageHero">
	<a id="marginOnLoad" class="centerText" href="#routes">	
		<h1>Launch Your <br>Career <strong>Today</strong></h1>
		<h3>You have come to the right place</h3>
		<i class="fi-arrow-down"></i>
	</a>
</div>
		
<div id="routes" class="routes frontRow">
<div class="edges">
	<div class="row homeInner">		
<i class="main icon icomoon icon-routes-to-employment" aria-hidden="true"></i><h1>Routes to Employment</h1>
<?php print render($page['home_routes']); ?>
	</div>
</div>
</div>

<div class="successStors frontRow">
	
<div class="edges">
	<div class="row homeInner">
	<i class="main icon icomoon icon-success-stories" aria-hidden="true"></i><h1>Success Stories</h1>
	<div class="boxer">
<?php print render($page['home_story']); ?>
	</div>
	</div>
</div>
</div>

<div class="announcements frontRow">
<div class="edges">
	<div class="row homeInner">
	<i class="main icon icomoon icon-announcements" aria-hidden="true"></i><h1>Announcements</h1>
	<div class="boxer">
<?php print render($page['home_announcements']); ?>
	</div>
	</div>
</div>
</div>

<div class="polls frontRow">
<div class="edges">
	<div class="row homeInner">
	<i class="main icon icomoon icon-polls" aria-hidden="true"></i><h1>Polls</h1>
	<div class="large-6 columns poll">
	<div class="boxer">
		<?php print render($page['home_poll']); ?>
	</div>
	</div>
	<div class="large-6 columns know">
	<div class="boxer">
		<?php print render($page['home_know']); ?>
	</div>
	</div>
	</div>
</div>
</div>


    <!--.l-footer-->
    <footer class="l-footer panel" role="contentinfo">
    <div class="row">
          
        <div class="large-9 columns">
	      <p>7493 Baltimore-Annapolis Blvd. Glen Burnie, MD 21061 | <a href="tel://410-766-5212">410-766-5212</a></p>
          <p class="copyright"><a href="http://aawdc.org/">&copy; <?php print date('Y') . ' ' . "Anne Arundel Workforce Development Corporation" . ' ' . t('All rights reserved.'); ?></a> AAWDC YouthWorks programs are equal opportunity, affirmative action, Title IX and ADA Title 504 compliant. Assistive devices and alternative materials for services are available with advanced request.</p>
        </div>
       
    </div>
    
     <div class="socialFooter">
	        <div class="footerInner">
		        <a href="https://twitter.com/aawdc"><i class="icon icomoon icon-Twitter" aria-hidden="true"></i></a>
		        <a href="https://www.facebook.com/pages/AAWDCs-Youth-Employment-Services-YES-Center/344111735673607?fref=nf"><i class="icon icomoon icon-Facebook" aria-hidden="true"></i></a>
		        <a href="https://www.linkedin.com/company/1447261?trk=tyah"><i class="icon icomoon icon-Linked_In" aria-hidden="true"></i></a>
	        </div>
	 </div>

    </footer>
    <!--/.footer-->





  <?php if ($messages && $zurb_foundation_messages_modal): print $messages; endif; ?>
</div>
<!--/.page -->
