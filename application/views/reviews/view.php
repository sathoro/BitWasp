		<div class="span9 mainContent" id="view-reviews">
			
			<h2>Reviews for <?php echo $name; ?></h2>
			<div class='row-fluid'>
				<div class='span3'>Average Rating: <?php echo $average; ?></div>
			</div>
			<div class='row-fluid'><?php echo anchor("reviews/view/{$review_type}/{$subject_hash}", "[All Reviews ({$review_count['all']})]"); ?> <?php echo anchor("reviews/view/{$review_type}/{$subject_hash}/0", "[Positive Reviews ({$review_count['positive']})]"); ?> <?php echo anchor("reviews/view/{$review_type}/{$subject_hash}/1", "[Disputed Reviews {$review_count['disputed']}]"); ?></div>
			<br />
			
			<?php if($search_reviews !== FALSE) { ?>
			<div class='row-fluid'>
				<div class='well'>
				<?php 	foreach($search_reviews as $review) { ?>
					<div class='row-fluid'>
						<div class='span2'><?php foreach($review['rating'] as $rating_name => $rating){ echo ucfirst($rating_name) ." - $rating/5<br />"; } ?>Average: <?php echo $review['average_rating']; ?></div>
						<div class='span1'>Comments:<?php if($review['disputed'] == '1') { echo '<br />[disputed]'; } ?></div>
						<div class='span6'><?php echo $review['comments']; ?></div>
					</div><br /><?php	} ?>
				</div>
			<?php } else { 
				if($disputed == FALSE) { 
					echo "No reviews for {$name}.";
				} else {
					echo "No ".(($disputed == '0') ? 'positive' : 'negative'). " reviews for {$name}.";
				}
			 } ?>
		</div>
