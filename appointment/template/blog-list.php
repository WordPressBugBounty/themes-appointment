<?php
/**
Template Name: Blog List
*/
get_header();
get_template_part('index','banner');
?>
<div class="clearfix"></div>
<!-- Blog Section with Sidebar -->
<div class="page-builder">
	<div class="container<?php echo esc_attr(webriti_blog_post_container());?>">
		<div class="row">
					
			<!-- Blog Area -->
			<div class="col-md-12" >
					<?php
					$paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
					$args = array( 'post_type' => 'post','paged'=>$paged);	
					$post_type_data = new WP_Query( $args );
					
					while($post_type_data->have_posts()){
						
						$post_type_data->the_post();
					
						get_template_part( 'template-parts/list-view/content' , get_post_format() );
					
					} 
					?>		
				<!-- Blog Pagination -->
				<?php 				
					$Webriti_pagination = new Webriti_pagination();
					$Webriti_pagination->Webriti_page($paged, $post_type_data); 
				?>
				<!-- /Blog Pagination -->
			</div>
			<!-- /Blog Area -->	
		</div>
	</div>
</div>
<!-- /Blog Section with Sidebar -->
<div class="clearfix"></div>
<?php get_footer(); ?>