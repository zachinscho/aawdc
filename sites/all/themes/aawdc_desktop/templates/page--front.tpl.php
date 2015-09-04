<!--.page -->
<div role="document" class="page">

  <!--.l-header -->
  <header class="l-header">
  	
  	<a href="#" class="logo"></a>
  	
         <nav>
          <?php if ($top_bar_main_menu) :?>
            <?php print $top_bar_main_menu; ?>
          <?php endif; ?>
          <?php if ($top_bar_secondary_menu) :?>
            <?php print $top_bar_secondary_menu; ?>
          <?php endif; ?>
        </nav>
        <?php print render($page['header']); ?>

    <?php if (!empty($page['header'])): ?>
      <!--.l-header-region -->
      <section class="l-header-region row">
        <div class="large-12 columns">
          
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
			<div class="large-12 columns">
        		Committed to you
      		</div>
    	</section>
	</div>
	
	<div class="calloutTryp">
	  	<section class="row">
		  	<div class="large-4 columns negative">
	        	<span></span>
	        	<h3>Take the next career step</h3>
	      	</div>
	      	<div class="large-4 columns negative">
	        	<span></span>
	        	<h3>Build your workforce</h3>
	      	</div>
	      	<div class="large-4 columns negative">
	        	<span></span>
	        	<h3>Get Involved</h3>
	      	</div> 	
	  	</section>
	</div>
	
	<div class="calloutHero">
		<section class="row">
			<div class="large-12 columns">
        		Our vision, mission, and core values are at the heart of the way we work to help you achieve success.  Our committed staff and Boards of Directors want to help you to achieve the goals for your business or career success.
      		</div>
    	</section>
	</div>
	
	<div class="mainWrapper">
	  <div class="row">
	  	<div class="large-4 columns negative">
        		<h3>10,000</h3> 
        		Job seekers Trained.
       	</div>
      	
      	<div class="large-4 columns negative">
        		<h3>10,000</h3> 
        		Job seekers Trained.
      	</div>
      	
      	<div class="large-4 columns negative">
        		<h3>10,000</h3> 
        		Job seekers Trained.
      	</div>
	  </div>
	  
	  <div class="row">
	  	<div class="large-9 columns negative">
		  	<span>Blog</span>
		  	<h3>Title Here</h3>
        	<p>Our vision, mission, and core values are at the heart of the way we work to help you achieve success.  Our committed staff and Boards of Directors want to help you to achieve the goals for your business or career success.</p>
      	</div>
      	
      	<div class="large-3 columns negative">
        	<span>What's New</span>
		  	<h3>Title Here</h3>
        	<p>Our vision, mission, and core values are at the heart of the.</p>
      	</div>
      	
	  </div>
	  
	  <div class="row">
	  	<div class="large-9 columns negative">
        	<span>Success Stories</span>
		  	<h3>Title Here</h3>
        	<p>Our vision, mission, and core values are at the heart of the way we work to help you achieve success.  Our committed staff and Boards of Directors want to help you to achieve the goals for your business or career success.</p>
      	</div>
      	
      	<div class="large-3 columns negative">
        	<span>Hot Jobs</span>
		  	<h3>Title Here</h3>
        	<p>Our vision, mission, and core values are at the heart of the way we work to.</p>
      	</div>
      	
	  </div>
	  
	</div>

  <!--/.l-main-->
	<footer class="topFooter">
	  	<div class="row">
			  <div class="large-4 columns">
				  <h3>Learn More</h3>
			  </div>
			  <div class="large-4 columns">
				  <h3>Get Involved</h3>
			  </div>
			  <div class="large-4 columns">
				  <h3>Stay In Touch</h3>
				 <div class="footerInner">
			        <a href="https://twitter.com/aawdc"><i class="icon icomoon icon-Twitter" aria-hidden="true"></i></a>
			        <a href="https://www.facebook.com/pages/AAWDCs-Youth-Employment-Services-YES-Center/344111735673607?fref=nf"><i class="icon icomoon icon-Facebook" aria-hidden="true"></i></a>
			        <a href="https://www.linkedin.com/company/1447261?trk=tyah"><i class="icon icomoon icon-Linked_In" aria-hidden="true"></i></a>
		        </div>
			  </div>
		  </div>
	</footer>	  
	  
    <footer class="middleFooter">  
	    <div class="row">
	          <div class="large-4 columns">
		          <span>Get in touch</span>
		          <p><a href="tel://410-766-5212">410-766-5212</a><br/>
		          7493 Baltimore-Annapolis Blvd. Glen Burnie, MD 21061</p>
	          </div>
			  <div class="large-8 columns">
		           <p class="copyright"><a href="http://aawdc.org/">&copy; <?php print date('Y') . ' ' . "Anne Arundel Workforce Development Corporation" . ' ' . t('All rights reserved.'); ?></a> AAWDC YouthWorks programs are equal opportunity, affirmative action, Title IX and ADA Title 504 compliant. Assistive devices and alternative materials for services are available with advanced request.</p>
	          </div>  
	    </div>
    </footer>
    
    <footer class="bottomFooter">  
	    <div class="row">
	          <a href="#" class="MWE"></a>
	          <a href="#" class="MJN"></a>
	    </div>
    </footer>
    

  <?php if ($messages && $zurb_foundation_messages_modal): print $messages; endif; ?>
</div>
<!--/.page -->
