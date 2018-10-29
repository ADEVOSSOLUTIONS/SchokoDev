<?php
/**
 * Шаблон для разработки от студии Cava Art Studio
 * Шаблон дополнительных страниц
 * 2017
 * @package WordPress
 * @subpackage cava-theme
 */
/*
Template Name: Verleih
*/
get_header();?> 
<section class="main-title-block" style="background-image: url(<?php echo get_the_post_thumbnail_url( $post, 'full' ); ?>)">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1><?php the_title(); ?></h1>
        </div>
      </div>
    </div>
  </section>
  <section class="block soft-title-block support-block verleih-block1">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2>
            <?php the_field('block1_title'); ?>
          </h2>

          <?php the_field('block1_text'); ?>
        </div>
      </div>
      
    </div>
  </section>
  <section class="block verleih-block2 soft-title-block support-block">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2><?php the_field('block2_title'); ?></h2>
          
        </div>
      </div>
      <div class="row verleih-block2-cards">
        <?php if (have_rows('block2_cols')): ?>
          <?php while( have_rows('block2_cols') ): the_row();?>
            <div class="col-md-4">
              <div class="card">
                <div class="card-top">
                  <h4><?php the_sub_field('title'); ?></h4>
                  <h6><?php the_sub_field('size'); ?></h6>
                  <p><span class="cost"><?php the_sub_field('price'); ?></span>brutto</p>
                </div>
                <div class="img"><img src="<?php the_sub_field('image'); ?>" alt=""></div>
              </div>
            </div>
            
          <?php endwhile; ?>
        <?php endif ?>
        
      </div>
    </div>
  </section>
  <section class="block support-block support-block4 white-title-block">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2>
            <?php the_field('block3_title'); ?>
          </h2>
          <h5><?php the_field('block3_sub_title'); ?></h5>
          <?php the_field('block3_text'); ?>
        </div>
      </div>
    </div>
  </section>
  <section class="block soft-title-block support-block verleih-block4">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2>
            <?php the_field('block4_title'); ?>
          </h2>
          <?php the_field('block4_text'); ?>
        </div>
      </div>
      
    </div>
  </section>
  
<?php get_footer();?>