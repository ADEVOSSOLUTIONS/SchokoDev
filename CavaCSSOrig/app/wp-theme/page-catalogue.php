<?php
/**
 * Шаблон для разработки от студии Cava Art Studio
 * Шаблон дополнительных страниц
 * 2017
 * @package WordPress
 * @subpackage cava-theme
 */
/*
Template Name: Catalogue
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
        </div>
      </div>
      
    </div>
  </section>













  <section class="block soft-title-block catalogue-block1">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2>
            <?php the_field('block1_title'); ?>
          </h2>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="catalogue-text-block1">
            <?php the_field('block1_left_text'); ?>
              
          </div>        
        </div>
        <div class="col-md-6">
          <div class="catalogue-block1-right-img"><img src="<?php the_field('block1_right_image'); ?>" alt=""></div>
        </div>
      </div>
      <div class="catalogue-block1-cover-img"><img src="<?php echo get_template_directory_uri(); ?>/img/catalogue-block1-img2.png" alt=""></div>
    </div>
  </section>
  <section class="block catalogue-block2">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="catalogue-items-block">
            <?php if (have_rows('block2_catalogue')): ?>
              <ul>
              <?php while( have_rows('block2_catalogue') ): the_row();?>
                <li>
                  <div class="img"><img src="<?php the_sub_field('thumbnail'); ?>" alt=""></div>
                  <div class="catalogue-text">
                    <h5><?php the_sub_field('title'); ?></h5>
                    <h6 class="desc"><?php the_sub_field('text1'); ?></h6>
                    <p class="soft-text"><?php the_sub_field('text2'); ?></p>
                    <p class="mark"><?php the_sub_field('text3'); ?></p>
                    <p><?php the_sub_field('text4'); ?></p>
                  </div>
                </li>
              <?php endwhile; ?>
              </ul>
            <?php endif ?>
            
          </div>
        </div>
      </div>
    </div>
  </section>
  
<?php get_footer();?>