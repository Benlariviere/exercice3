<?php
/**
 * Template part pour afficher les blocs de front-page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package theme-4w4
 */
global $tPropriété;
?>

<article>
				<p><?php echo $tPropriété['$sigle'] . " - " .$tPropriété['$nbHeure'] . " - " .$tPropriété['$typeCours']?></p>
				<a href="<?php echo get_permalink(); ?> "><?php echo $tPropriété['$titre']; ?></a>
				<p>Session :<?php echo $tPropriété ['$session'];?> </p>
				<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#3B1E0D" fill-opacity="1" d="M0,32L60,69.3C120,107,240,181,360,208C480,235,600,213,720,208C840,203,960,213,1080,197.3C1200,181,1320,139,1380,117.3L1440,96L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"></path></svg>
				
				</article>