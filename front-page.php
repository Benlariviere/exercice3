<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package theme-4w4
 */

get_header();
?>
//////////////////////////////////FRONT-PAGE.PHP
	<main id="primary" class="site-main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
				the_archive_title( '<h1 class="page-title">', '</h1>' );
				the_archive_description( '<div class="archive-description">', '</div>' );
				?>
			</header><!-- .page-header -->
			<section class= "list-cours">
			
			
			<?php
			/* Start the Loop */
			
            $precedent = "XXXXXX";
			while ( have_posts() ) :
				the_post();
                $titre_grand = get_the_title();
				$session = substr($titre_grand, 4,1);
				$nbHeure = substr($titre_grand, -4,3 );
				$titre = substr($titre_grand,8, -6 );
				$sigle = substr($titre_grand,0, 7);
				$typeCours = get_field('type_de_cours');	
				if($precedent != $typeCours): ?>
				<?php	if($precedent != "XXXXXX") :?>
					</section>
					<?php endif ?>
					<h2><?php echo $typeCours?></h2>
				<section>
					
				<?php endif ?>
				<article>
				<p><?php echo $sigle . " - " . $nbHeure . " - " . $typeCours;		?></p>
				<a href="<?php echo get_permalink(); ?> "><?php echo $titre; ?></a>
				<p>Session :<?php echo $session;?> </p>
				<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#3B1E0D" fill-opacity="1" d="M0,32L60,69.3C120,107,240,181,360,208C480,235,600,213,720,208C840,203,960,213,1080,197.3C1200,181,1320,139,1380,117.3L1440,96L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"></path></svg>
				
				</article>
		
		
		
	<?php	
	$precedent = $typeCours;
	endwhile
	
	 ?>

	
</section>
	

<?php endif;?>

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
