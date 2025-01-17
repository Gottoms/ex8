<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package underscores
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
	<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
            
        // The Query
        $args = array(
            "category_name" => "nouvelles",
            "posts_per_page" => 3,
            "orderby" => "date",
            "order" => "DESC"
        );
        
        $query1 = new WP_Query($args);
        // The Loop
        while ( $query1->have_posts() ) {

            $query1->the_post();
            echo '<h4><b>Généré par WP_Query&nbsp;</b>' . get_the_title() . '</h4>';
            echo '<p>' . get_the_excerpt() . '</p>';
        }
        
        /* Restore original Post Data 
        * NB: Because we are using new WP_Query we aren't stomping on the 
        * original $wp_query and it does not need to be reset with 
        * wp_reset_query(). We just need to set the post data back up with
        * wp_reset_postdata().
        */
        wp_reset_postdata();
    
        
        $args2 = array(

            "category_name" => "evenement",

        );

         //The 2nd Query (without global var) 
         $query2 = new WP_Query( $args2 );


        $category = get_the_category($args2);

         echo "<h2>" . category_description($category[0]) . "</h2>";

        // The 2nd Loop
        while ( $query2->have_posts() ) {
            $query2->the_post();

            echo '<li>' . get_the_title( $query2->post->ID ) . '</li>';
            echo '<p>Thumnail : </p>';
            echo get_the_post_thumbnail(null, "thumbnail");
}
        
        // Restore original Post Data
        wp_reset_postdata();
            
        ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
