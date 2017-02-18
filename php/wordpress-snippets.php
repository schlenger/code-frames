<?php 
	/* Show actual editors of a given Post through revisions*/ 

		// within the_loop
		$revs = wp_get_post_revisions($post, ARRAY_N);
		$authors = array();
		if($revs) {
			foreach ($revs as $rev) {
				$authors[] = get_author_name($rev->post_author);
			}

			$authors = array_unique($authors);
			print("<h2>Contributors:</h2>");
			print(implode(", ", $authors));
		}
 ?>


<?php 
	/* Show information of Post revisions*/ 

		// within the_loop
		$revs = wp_get_post_revisions($post, ARRAY_N);
		if($revs) {
			foreach ($revs as $rev) {
				print( "Rev, mod:" . $rev->post_modified);
				print( ", by " . get_author_name($rev->post_author) . "<br>");
			}
		}
 ?>

 <?php 
	/* Request a template variable, e.g. as an image*/ 

	if(get_post_custom_values("footer-img")) { ?>
    <div class="footer-img">
    	<!-- only get the first definition of that value -->
      <img src="<?php print(get_post_custom_values('footer-img')[0]); ?>">
    </div>
  <?php } else { ?>
    <!-- do nothing here, maybe a default picture -->
  <?php } 
?>