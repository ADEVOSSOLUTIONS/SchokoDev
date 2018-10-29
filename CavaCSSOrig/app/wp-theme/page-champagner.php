<?php
/**
 * Шаблон для разработки от студии Cava Art Studio
 * Шаблон дополнительных страниц
 * 2017
 * @package WordPress
 * @subpackage cava-theme
 */
/*
Template Name: VERLEIH CHAMPAGNER
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
  <section class="block champ-products-block">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2>
            <?php the_field('block1_title'); ?>
          </h2>
        </div>
      </div>
      <div class="row">
        <div class="product-cards">
          <?php if (have_rows('block1_cards')): ?>
            <?php while( have_rows('block1_cards') ): the_row();?>
            
              <div class="col-md-4">
                <div class="card" style="background-image: url(<?php echo get_sub_field('card_image'); ?>)">
                  <div class="product-cards-content">
                    <h3><?php the_sub_field('card_title') ?></h3>
                    <h6><?php the_sub_field('card_description') ?></h6>
                    <a href="<?php the_sub_field('readmore_link') ?>" class="readmore">Read more</a>
                  </div>
                </div>
              </div>

            <?php endwhile; ?>
          <?php endif ?>
          
        </div>
      </div>
    </div>
  </section>
  <section class="block vechicles-block">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2><?php the_field('block2_title'); ?></h2>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4 fountain-text-cols fountain-text-left">
          <ul>
            <?php  
              $left_rows = get_field('block2_left_items' );
            ?>
            <li>
              <div class="text-side">
                <h4><?php echo $left_rows[0]['item_title']; ?></h4>
                <p><?php echo $left_rows[0]['item_description']; ?></p>
              </div>
              <div class="img-side"><img src="<?php echo get_template_directory_uri(); ?>/img/i/leaves.svg" alt=""></div>
            </li>
            <li>
              <div class="text-side">
                <h4><?php echo $left_rows[1]['item_title']; ?></h4>
                <p><?php echo $left_rows[1]['item_description']; ?></p>
              </div>
              <div class="img-side"><img src="<?php echo get_template_directory_uri(); ?>/img/i/heart.svg" alt=""></div>
            </li>
            <li>
              <div class="text-side">
                <h4><?php echo $left_rows[2]['item_title']; ?></h4>
                <p><?php echo $left_rows[2]['item_description']; ?></p>
              </div>
              <div class="img-side"><img src="<?php echo get_template_directory_uri(); ?>/img/i/leaves_3.svg" alt=""></div>
            </li>
          </ul>
        </div>
        <div class="col-md-4 fountain-img">
          <img src="<?php echo get_field('block2_image'); ?>" alt="">
        </div>
        <div class="col-md-4 fountain-text-cols fountain-text-right">
          <ul>
            <?php  
              $right_rows = get_field('block2_right_items' );
            ?>
            <li>
              <div class="text-side">
                <h4><?php echo $right_rows[0]['item_title']; ?></h4>
                <p><?php echo $right_rows[0]['item_description']; ?></p>
              </div>
              <div class="img-side"><img src="<?php echo get_template_directory_uri(); ?>/img/i/heart_candy.svg" alt=""></div>
            </li>
            <li>
              <div class="text-side">
                <h4><?php echo $right_rows[1]['item_title']; ?></h4>
                <p><?php echo $right_rows[1]['item_description']; ?></p>
              </div>
              <div class="img-side"><img src="<?php echo get_template_directory_uri(); ?>/img/i/rocket.svg" alt="" class="rocket-fix"></div>
            </li>
            <li>
              <div class="text-side">
                <h4><?php echo $right_rows[2]['item_title']; ?></h4>
                <p><?php echo $right_rows[2]['item_description']; ?></p>
              </div>
              <div class="img-side"><img src="<?php echo get_template_directory_uri(); ?>/img/i/list.svg" alt=""></div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <section class="block reviews-block">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2>
            <?php the_field('block3_title') ?>
          </h2>
        </div>
        <div class="col-md-12">

          <div class="reviews-slider-block">
            <div class="reviews-icon-slider">
              <ul>
                <?php if (have_rows('reviews')): ?>
                  <?php while( have_rows('reviews') ): the_row();?>
                  
                    <li>
                      <div class="img"><img src="<?php the_sub_field('reviewer_icon'); ?>" alt=""></div>
                    </li>

                  <?php endwhile; ?>
                <?php endif ?>
                
              </ul>
            </div>
            <div class="reviews-text-slider">
              <ul>
                <?php if (have_rows('reviews')): ?>
                  <?php while( have_rows('reviews') ): the_row();?>
                    <li>
                      <h4><?php the_sub_field('reviewer_name'); ?></h4>
                      <p><?php the_sub_field('reviewer_text'); ?></p>
                    </li>
                  <?php endwhile; ?>
                <?php endif ?>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="block tarifs-block">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2>
            <?php the_field('block4_title') ?>
          </h2>
        </div>
      </div>
      <div class="row">
            <div class="tarifs-wrapper"><div class="col-md-3">
                <div class="tarif basic">
                  <h4><?php the_field('tarif1_name'); ?></h4>
                  <div class="tarif-price"><?php the_field('tarif1_price'); ?></div>
                  <p>Schokoladenfontäne</p>
                  <p>Große Schokoladenfontäne</p>
                  <p>Riesen Schokoladenfontäne</p>
                  <p>Catering Schokobrunnen</p>
                  <a href="<?php the_field('read_more_link1'); ?>" class="readmore">Read more</a>
                </div>
              </div>
              <div class="col-md-3">
                <div class="tarif standart">
                  <h4><?php the_field('tarif2_name'); ?></h4>
                  <div class="tarif-price"><?php the_field('tarif2_price'); ?></div>
                  <p>Schokoladenfontäne</p>
                  <p>Große Schokoladenfontäne</p>
                  <p>Riesen Schokoladenfontäne</p>
                  <p>Catering Schokobrunnen</p>
                  <a href="<?php the_field('read_more_link2'); ?>" class="readmore">Read more</a>
                </div>
              </div>
              <div class="col-md-3">
                <div class="tarif premium">
                  <h4><?php the_field('tarif3_name'); ?></h4>
                  <div class="tarif-price"><?php the_field('tarif3_price'); ?></div>
                  <p>Schokoladenfontäne</p>
                  <p>Große Schokoladenfontäne</p>
                  <p>Riesen Schokoladenfontäne</p>
                  <p>Catering Schokobrunnen</p>
                  <a href="<?php the_field('read_more_link3'); ?>" class="readmore">Read more</a>
                </div>
              </div>
              <div class="col-md-3">
                <div class="tarif gold">
                  <h4><?php the_field('tarif4_name'); ?></h4>
                  <div class="tarif-price"><?php the_field('tarif4_price'); ?></div>
                  <p>Schokoladenfontäne</p>
                  <p>Große Schokoladenfontäne</p>
                  <p>Riesen Schokoladenfontäne</p>
                  <p>Catering Schokobrunnen</p>
                  <a href="<?php the_field('read_more_link4'); ?>" class="readmore">Read more</a>
                </div>
              </div>
                        </div>  </div>
    </div>
  </section>   
<?php get_footer();?>