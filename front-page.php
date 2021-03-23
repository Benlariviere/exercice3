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


<section class="carrousel_2">
					<article class="slide__conteneur">
						<div class="slide">
							<img src="" alt="">
							<div class="slide__info"></div>
								<p>582-4W4-90H-Web</p>
								<p>Conception d'interface et developpement Web</p>
								<p>Session : 4</p>
							</div>
					</article>
					<article></article>
					<article>Page</article>
</section>
<section class="boutons">
				<button id="un"><input name="radCarrousel" type="radio"></button>
				<button id="deux" ><input name="radCarrousel"  type="radio"></button>
				<button id="trois"><input name="radCarrousel"  type="radio"></button>
</section>


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
			while(have_posts());
			the_post();
			//Animation et  interactivité en Jeu

			convertir_tableau($tPropriété);
				if($precedent != $tPropriété['$typeCours']): ?>
				<?php	if($precedent != "XXXXXX") :?>
					</section>
					<?php endif ?>
					<h2><?php echo $tPropriété['$typeCours']?></h2>
				<section>
					
				<?php endif ?>
			

				<?php	
				get_template_part( 'template-parts/content', 'bloc' );
				$precedent = $tPropriété['$typeCours'];
				endwhile; ?>
		</section>
	

<?php endif;?>

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();

function convertir_tableau(&$tPropriété){
	$titre_grand = get_the_title();
	$tPropriété['session'] = substr($titre_grand, 4,1);
	$tPropriété['nbHeure']= substr($titre_grand, -4,3 );
	$tPropriété['titre'] = substr($titre_grand,8, -6 );
	$tPropriété['sigle']= substr($titre_grand,0, 7);
	$tPropriété['typeCours']= get_field('type_de_cours');
}
