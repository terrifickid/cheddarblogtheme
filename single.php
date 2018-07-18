<?php get_header(); ?>
<div id="post_header">
	<div class="row">
	<div class="col-lg-8"><h1><?php the_title(); ?></h1><!-- Go to www.addthis.com/dashboard to customize your tools --> <div class="addthis_inline_share_toolbox"></div></div>
	<div id="c_list_head" class="col-12 col-lg-3 offset-lg-1 text-left text-lg-center">
		<h3>Join IN OUR <span class="y">MAILING LIST</span> AND STAY TUNED ON OUR <span class="y">LATEST RELEASES</span></h3>
		
		<form id="subForm" class="js-cm-form" action="https://www.createsend.com/t/subscribeerror?description=" method="post" data-id="191722FC90141D02184CB1B62AB3DC268644CF4468C6A5FF76622F7F7A6CADA29077F2C6D8BD8CDC8F607A42427E90B96E1488B3444CA1A5F9ABADFD2746032B">

 
 <div class="form-group">
<input id="fieldEmail" placeholder="your@emailaddress.com" class="js-cm-email-input form-control sign-me-up" name="cm-gjkjkj-gjkjkj" type="email" required />
 </div>
 
<button class="sign-me-up js-cm-submit-button" type="submit">Sign me up</button>
 
</form>
<script type="text/javascript" src="https://js.createsend1.com/javascript/copypastesubscribeformlogic.js"></script>


	</div>
	</div><!-- end row -->
</div><!-- end post_header -->

<div class="white_content">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); 	
		$image = wp_get_attachment_url( get_post_thumbnail_id($post->ID)); 
		if($image) echo '<div class="col-sm-5 float-right"><img style="margin-bottom: 2rem; width: 100%;"  src="'.$image.'"><p>'.the_post_thumbnail_caption().'</p></div>';
		?>

	
	<?php the_content(); ?>
	
	<?php 
		$previous = get_previous_post(); 
		$next = get_next_post(); 
	?>
	
	
	    <div class="row">
    	    <div class="col-12 text-center">
    	    <a href="https://www.getcheddar.com/signup"><button style="cursor: pointer;" class="sign-me-up">Sign up for a free developer account with Cheddar.</button></a>
    	    </div>
	    </div>
	    
		<div id="c_backtoblog" class="text-center"><a href="<?php echo get_home_url(); ?>" class="back-to-blog">Back to Blog</a></div>
		<div class="footer_content">
		<div class="row align-items-center">
		
		 <?php if($previous): ?>
		<div class="col-6 c_link" onclick="window.location='<?php echo get_permalink($previous->ID); ?>';">
			 
					 <div class="row align-items-center">
						 <div class="d-none d-sm-block col-2">
                            <i class="fas fa-chevron-left"></i>
						 </div>
						 <div class="col-10">
			 <span class="g-link">Previous Post</span> 
			<p><?php echo $previous->post_title; ?></p>
						 </div>
						 
					 </div>
			</div>
			 <?php endif; ?>
			 
			 <?php if($next): ?>
			<div class="col-6 c_link" onclick="window.location='<?php echo get_permalink($next->ID); ?>';">
					 <div class="row text-right align-items-center">
						 <div class="col-sm-10">
			 <span class="g-link">Next Post</span>
			<p><?php echo $next->post_title; ?></p>
						 </div>
						 <div class="d-none d-sm-block col-sm-2">
			<i class="fas fa-chevron-right"></i>
						 </div>
					 </div>
			</div><!-- en col -->
			<?php endif; ?>
			
		</div><!-- end row -->
	</div><!-- end footer_content -->
	<?php endwhile; else : ?>
		<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
	<?php endif; ?>
	
</div><!-- end white_content -->
<?php get_footer(); ?>