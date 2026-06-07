<?php
/**
Template Name: Blog List Sidebar
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
			<div class="<?php esc_attr(appointment_post_layout_class()); ?>" >
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
			<?php
			if(is_active_sidebar('sidebar-1')){?>
				<!--Sidebar Area-->
				<div class="col-md-4 rest-sidebar">
					<?php get_sidebar(); ?>
				</div>
				<!--Sidebar Area-->		
			<?php } ?>
		</div>
	</div>
</div>
<!-- /Blog Section with Sidebar -->
<div class="clearfix"></div>
<?php get_footer(); ?>