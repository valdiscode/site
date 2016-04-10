<?php get_header(); ?>

<?php
	// Start the loop.
	while ( have_posts() ) : the_post(); ?>

		<div class="content_header">
			<h1><?php the_title(); ?></h1>
			<?php the_content(); ?>
		</div>

		<div class="content_body">
			<div class="row form_contacts">
				<div class="col-sm-6">
					<ul class="ul_contacts">
						<li>
							<h3><i class="icon icon-basic-webpage-img-txt"></i> My site:</h3>
							<p><a href="http://<?php echo get_post_meta($post->ID, 'website', true); ?>" target="_blank"><?php echo get_post_meta($post->ID, 'website', true); ?></a></p>
						</li>
						<li>
							<h3><i class="icon icon-basic-geolocalize-05"></i> Address:</h3>
							<p><?php echo get_post_meta($post->ID, 'address', true); ?></p>
						</li>
						<li>
							<h3><i class="icon icon-basic-smartphone"></i> Phone:</h3>
							<p><?php echo get_post_meta($post->ID, 'phone', true); ?></p>
						</li>
					</ul>
				</div>
				<div class="col-sm-6">
					<form id="callback" class="callback">

						<h3>Submit your application</h3>
						
						<label>
							Your name
							<input type="text" name="name" required>
						</label>

						<label>
							Your E-mail
							<input type="text" name="email" required>
						</label>
						
						<label>
							Сomment
							<textarea name="message"></textarea>
						</label>

						<button class="button" type="submit">Send</button>

					</form>
				</div>
			</div>
			

		</div>

	<?php endwhile; ?>


<?php get_footer(); ?>