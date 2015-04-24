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

AAWDC Homepage Here




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
