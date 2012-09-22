<?php
/**
* Evening Shade 1.2
* Designed by Pixel Theme Studio
* http://www.pixelthemestudio.ca
* studio@pixelthemestudio.ca
* License: Copyright 2009 Pixel Theme Studio 
* Not for distribution or resale without permission
*/

 get_header(); ?>

<!-- Start page templates -->
	<!-- Top Promo area for full width banners -->
	<?php include(TEMPLATEPATH . '/advertise.php'); ?>
		<!-- Breadcrumbs -->	 
			
<!-- Start one column -->
<table width="940" border="0" cellspacing="0" cellpadding="0" class="columns">
	<tr>
		<td id="contentwide">
			<div id="contentwide2">
			                                                
								<?php // if (have_posts()) : while (have_posts()) : the_post();?>
								<?php  if (have_posts()) { while (have_posts()); } else { the_post(); } ?>
			  <div id="postwrap-<?php the_ID();?>" class="post">
				<h1>Error 404 - Not Found</h1>
				
			      <div class="post"><p class="center">We are sorry, but you are looking for something that isn't here. Perhaps you types in something incorrectly or it might be that the keyword search you wanted doesn't exist. Simply try again and see if what you were looking for will show up. If it still does not show up any results, it could be that the content does not exist on this website.</p></div>
			    </div>
			</div>
		</td>
	</tr>
</table>
<!-- end column -->	
</div>
<!-- End innerwrap -->
</div>

<?php get_footer();?> 