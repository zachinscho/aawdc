	<footer class="topFooter">
		<div class="curvedPiece"></div>
	  	<div class="row">
			  <div class="large-4 columns">
				  <?php print render($page['footerOne']); ?>
			  </div>
			  <div class="large-4 columns">
				  <?php print render($page['footerTwo']); ?>
			  </div>
			  <div class="large-4 columns">
				  <?php print render($page['footerThree']); ?>
			  </div>
		  </div>
	</footer>	  
	  
    <footer class="middleFooter">  
	    <div class="row">
	          <div class="large-4 columns getInTouch">
		          <span class="smallLabel">Get in touch</span>
		          <?php print render($page['footerFour']); ?>
	          </div>
			  <div class="large-8 columns legal">
		           <p class="copyright"><a href="http://aawdc.org/">&copy; <?php print date('Y') . ' ' . "Anne Arundel Workforce Development Corporation" . ' ' . t('All rights reserved.'); ?></a> AAWDC YouthWorks programs are equal opportunity, affirmative action, Title IX and ADA Title 504 compliant. Assistive devices and alternative materials for services are available with advanced request.</p>
	          </div>  
	    </div>
    </footer>
    
    <footer class="bottomFooter">  
	    <div class="row">
		    <div class="large-6 columns">
	          <a href="#" class="MWE"></a>
		    </div>
		    <div class="large-6 columns">
	          <a href="#" class="MJN"></a>
		    </div>
	    </div>
    </footer>