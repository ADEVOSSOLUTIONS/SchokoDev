<?php
/**
 * Шаблон для разработки от студии Cava Art Studio
 * Шаблон дополнительных страниц
 * 2017
 * @package WordPress
 * @subpackage cava-theme
 */
/*
Template Name: Support Page
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
  <section class="block support-block1 soft-title-block support-block">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2>
            <?php the_field('block_1_title'); ?>
          </h2>
          <h5>
            <?php the_field('block_1_sub_title'); ?>
           
          </h5>
          <?php the_field('block_1_text'); ?>
        </div>
      </div>
      
    </div>
  </section>
  <section class="support-block2"><img src="<?php the_field('block2_image'); ?>" alt=""></section>
  <section class="block support-block3 soft-title-block support-block">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2>
            <?php the_field('block3_title'); ?>
          </h2>
          <h5>
            <?php the_field('block3_sub_title'); ?>
           
          </h5>
          <?php the_field('block3_text'); ?>
        </div>
      </div>
    </div>
  </section>
  <section class="block support-block support-block4 white-title-block">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2>
            <?php the_field('block4_title'); ?>
          </h2>
          <h5>
            <?php the_field('block4_sub_title'); ?>
           
          </h5>
          <?php the_field('block4_text'); ?>
        </div>
      </div>
    </div>
  </section>
  <section class="block support-block5 soft-title-block">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2>
            <?php the_field('block5_title'); ?>
          </h2>
          <div class="support-table-block">
            <table>
              <thead>
                <tr>
                  <td>
                    <?php the_field('block_5_table_header_name_1'); ?>
                  </td>
                  <td>
                    <?php the_field('block_5_table_header_name_2'); ?>
                  </td>
                </tr>
              </thead>
              <?php if (have_rows('table_data')): ?>
                <tbody>
                <?php while( have_rows('table_data') ): the_row();?>
                
                  <tr>
                    <td><?php the_sub_field('country'); ?></td>
                    <td><?php the_sub_field('cost'); ?></td>
                  </tr>

                <?php endwhile; ?>
                </tbody>
              <?php endif ?>
              
            </table>
          </div>
        </div>
      </div>
    </div>
  </section>
  
<?php get_footer();?>