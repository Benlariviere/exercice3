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


<div class="galerie_info">
<?php the_title();?>

</div>
     
</article>
<article class="flip-card">

  <div class="flip-card-inner">
    <div class="flip-card-front">
    </div>
    <div class="flip-card-back">
      <h1><a href="<?php echo get_permalink() ?>"><?php the_title(); ?> </a></h1> 
     
    </div>
  </div>
</div>


</article>