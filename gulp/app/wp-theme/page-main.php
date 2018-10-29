<?php
/**
 * Шаблон для разработки от студии Cava Art Studio
 * MainPage
 * 2018
 * @package WordPress
 * @subpackage cava-theme
 */
/*
Template Name: MainPage
*/
get_header();?> 

<section class="main-slider">
    <ul>
      <?php if (have_rows('slider')): ?>
        <?php while( have_rows('slider') ): the_row();?>
        
          <li style="background-image: url(<?php echo get_sub_field('slide_image') ?>)">
            <div class="container">
              <div class="row">
                <div class="col-md-12">
                  <div class="slider-title">
                    <?php echo get_sub_field('slide_title') ?>
                  </div>
                  <p class="slider-desc">
                    <?php echo get_sub_field('slide_text') ?>
                  </p>
                </div>
              </div>
            </div>
          </li>

        <?php endwhile; ?>
      <?php endif ?>
    </ul>
  </section>
  <section class="main-products-block">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2><?php the_field('block2_title') ?></h2>
          <h5><?php the_field('block2_description ') ?></h5>
        </div>
      </div>
      <div class="product-cards">
        <div class="row">
          <?php if (have_rows('block2_cards')): ?>
            <?php while( have_rows('block2_cards') ): the_row();?>
            
              <div class="col-md-3">
                <div class="card" style="background-image: url(<?php echo get_sub_field('card_image'); ?>)">
                  <div class="product-cards-content">
                    <h3><?php the_sub_field('card_title') ?></h3>
                    <h6><?php the_sub_field('card_description') ?></h6>
                  </div>
                </div>
              </div>

            <?php endwhile; ?>
          <?php endif ?>
          
        </div>
      </div>
    </div>
  </section>
  <section class="block select-block">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2>block3_title</h2>
        </div>
      </div>

      <div class="row">
        <div class="col-md-5 selection-table">
          <ul>
            <li class="current-selection">
              <img src="<?php echo get_template_directory_uri(); ?>/img/i/ring.svg" alt="rings">
              <h4>Hochzeiten</h4>
            </li>
            <li>
              <img src="<?php echo get_template_directory_uri(); ?>/img/i/gift.svg" alt="gift">
              <h4>Kindergeburtstage</h4>
            </li>
            <li>
              <img src="<?php echo get_template_directory_uri(); ?>/img/i/colp.svg" alt="">
              <h4>Firmenfeiern</h4>
            </li>
            <li>
              <img src="<?php echo get_template_directory_uri(); ?>/img/i/ballon.svg" alt="air ballon">
              <h4>Ausstellungen</h4>
              
            </li>
          </ul>
        </div>
        <div class="col-md-7 selection-image" >
          <ul>
            <?php if (have_rows('block3_right_content')): ?>
              <?php while( have_rows('block3_right_content') ): the_row();?>
              
                
                <li style="background-image: url(<?php echo get_sub_field('image'); ?>)">
                  <h6><?php the_sub_field('text'); ?></h6>
                </li>

              <?php endwhile; ?>
            <?php endif ?>
            
          </ul>
        </div>
      </div>
    </div>
  </section>
  <section class="block reservation-block">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2><?php the_field('block4_title') ?></h2>
        </div>
      </div>
      <div class="row">
        <div class="col-md-8 reservation-text">
          <h3><?php the_field('block4_left_sub_title'); ?></h3>
          
          <?php the_field('block4_left_text_content'); ?>
        </div>
        <div class="col-md-4">
          <div class="form-block">
            <div class="form-tabs">
              <ul>
                <li class="current">VERCAUF</li>
                <li>VERLEIH</li>
              </ul>
            </div>
            <div class="form-tabs-content">
              <ul>
                <li class="current-tab">
                  <div class="form-section">
                    <h5>LIEFERUNG</h5>
                    <div class="select-input">
                      <select name="lieferung" id="lief">
                        <option value="1" disabled>Select a city</option>
                        <option value="1">Select a city</option>
                        <option value="1">Select a city</option>
                      </select>
                    </div>
                    <div class="checkbox-block">
                      <div class="checkbox-input">
                        <input type="checkbox">
                      </div>
                      <div class="checkbox-text">Return car to a different location</div>
                    </div>
                  </div>
                  <div class="form-section checkbox-active">
                    <h5>RETOUR</h5>
                    <div class="select-input">
                      <select name="fontaenetype" id="fontaene">
                        <option value="1" disabled>Select Return Location</option>
                        <option value="1">Select</option>
                        <option value="1">Select</option>
                      </select>
                    </div>
                    
                  </div>
                  <div class="form-section">
                    <h5>ABHOLSDATUM</h5>
                    <div class="date-input">
                      <input type="text" placeholder="Pick up date">
                    </div>
                  </div>
                  <div class="form-section">
                    <h5>FONTAENETYPE</h5>
                    <div class="select-input">
                      <select name="fontaenetype" id="fontaene">
                        <option value="1" disabled>Select</option>
                        <option value="1">Select</option>
                        <option value="1">Select</option>
                      </select>
                    </div>
                    
                  </div>
                  
                </li>
                <li>
                  <div class="form-section">
                    <h5>LIEFERUNG</h5>
                    <div class="select-input">
                      <select name="lieferung" id="lief">
                        <option value="1" disabled>Select a city</option>
                        <option value="1">Select a city</option>
                        <option value="1">Select a city</option>
                      </select>
                    </div>
                    <div class="checkbox-block">
                      <div class="checkbox-input">
                        <input type="checkbox">
                      </div>
                      <div class="checkbox-text">Return car to a different location</div>
                    </div>
                  </div>
                  <div class="form-section checkbox-active">
                    <h5>RETOUR</h5>
                    <div class="select-input">
                      <select name="fontaenetype" id="fontaene">
                        <option value="1" disabled>Select Return Location</option>
                        <option value="1">Select</option>
                        <option value="1">Select</option>
                      </select>
                    </div>
                    
                  </div>
                  <div class="form-section">
                    <h5>FONTAENETYPE</h5>
                    <div class="select-input">
                      <select name="fontaenetype" id="fontaene">
                        <option value="1" disabled>Select</option>
                        <option value="1">Select</option>
                        <option value="1">Select</option>
                      </select>
                    </div>
                    
                  </div>
                </li>
                <div class="submit-section">
                  <div class="input-wrapper">
                    <input type="submit" value="MAKE RESERVATION NOW">
                  </div>
                </div>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

<?php get_footer();?>