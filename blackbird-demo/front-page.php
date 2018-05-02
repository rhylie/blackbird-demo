<?php
/**
 * The template for displaying a custom home front page.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package blackbird-demo
 */
?>

<?php define('WP_USE_THEMES', true); get_header(); ?>

<?php if ( is_front_page() && !is_home() ) : ?> <!-- If homepage displays as > static page -->

  <!-- Banner -->
  <section id="banner" class="major">
    <div class="inner">
      <header class="major">
        <h1><?php the_title(); ?></h1>
      </header>
      <div class="content">

        <?php 
          while ( have_posts() ) : the_post();
        ?>
        <?php the_content(); ?>

        <?php
        endwhile; //resetting the page loop
        wp_reset_query(); //resetting the page query
        ?>

        <ul class="actions">
          <li><a href="#one" class="button next scrolly">Get Started</a></li>
        </ul>
      </div>
    </div>
  </section>

  <!-- Main -->
    <div id="main">

      <!-- One -->
        <section id="one" class="tiles">

          <?php 
          // the query
          $wpb_all_query = new WP_Query(

            array(
              'post_type'=>'post', 
              'post_status'=>'publish', 
              'posts_per_page'=>-1
            )

          ); ?>

          <?php if ( $wpb_all_query->have_posts() ) : ?>

            <!-- the loop -->
            <?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>
              <article>

                <span class="image">
                  <img src="/" alt=""/>
                </span>
                <header class="major">
                  <h3>
                    <a class="link" href="<?php the_permalink(); ?>">
                      <?php the_title(); ?>
                    </a>
                  </h3>
                  <p>
                    <?php 
                      echo '<p>' . wp_trim_words( get_the_content(), 10 ) . '</p>';
                    ?>
                  </p>
                </header>

              </article>
            <?php endwhile; ?>
            <!-- end of the loop -->

            <?php wp_reset_postdata(); ?>

          <?php else : ?>
            <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
          <?php endif; ?>

        </section>

      <!-- Two -->
        <section id="two">
          <div class="inner">
            <header class="major">
              <h2><?php the_field('cta1home_head'); ?></h2>
            </header>
            <p><?php the_field('cta1home_text'); ?></p>
            <ul class="actions">
              <li><a href="landing.html" class="button next">Get Started</a></li>
            </ul>
          </div>
        </section>

    </div><!-- /.ends main -->

<?php else : ?><!-- Else if homepage displays as 'Your latest posts... revert back to index.php' -->

  <div id="primary" class="content-area index-template copied-index"><!-- Markup directly copied from index.php, can be improved -->
    <main id="main" class="site-main">

    <?php
    if ( have_posts() ) :

      if ( is_home() && ! is_front_page() ) :
        ?>
        <header>
          <h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
        </header>
        <?php
      endif;

      /* Start the Loop */
      while ( have_posts() ) :
        the_post();

        /*
         * Include the Post-Type-specific template for the content.
         * If you want to override this in a child theme, then include a file
         * called content-___.php (where ___ is the Post Type name) and that will be used instead.
         */
        get_template_part( 'template-parts/content', get_post_type() );

      endwhile;

      the_posts_navigation();

    else :

      get_template_part( 'template-parts/content', 'none' );

    endif;
    ?>

    </main><!-- #main -->
  </div><!-- #primary -->

<?php endif; ?><!-- Ends conditional statement, responsibile for displaying alt index.php -->



  <!-- Contact -->
    <section id="contact">
      <div class="inner">

        <section>

          <!-- <form method="post" action="#">
            <div class="field half first">
              <label for="name">Name</label>
              <input type="text" name="name" id="name" />
            </div>
            <div class="field half">
              <label for="email">Email</label>
              <input type="text" name="email" id="email" />
            </div>
            <div class="field">
              <label for="message">Message</label>
              <textarea name="message" id="message" rows="6"></textarea>
            </div>
            <ul class="actions">
              <li><input type="submit" value="Send Message" class="special" /></li>
              <li><input type="reset" value="Clear" /></li>
            </ul>
          </form> -->

          <!-- Load WPForms Builder -->
          <?php 
            echo do_shortcode( '[wpforms id="72" title="false" description="false"]' );
          ?>
          

        </section>

        <section class="split">

          <section>
            <div class="contact-method">
              <span class="icon alt fa-envelope"></span>
              <h3>Email</h3>
              <a href="#">information@untitled.tld</a>
            </div>
          </section>

          <section>
            <div class="contact-method">
              <span class="icon alt fa-phone"></span>
              <h3>Phone</h3>
              <span>(000) 000-0000 x12387</span>
            </div>
          </section>

          <section>
            <div class="contact-method">
              <span class="icon alt fa-home"></span>
              <h3>Address</h3>
              <span>1234 Somewhere Road #5432<br />
              Nashville, TN 00000<br />
              United States of America</span>
            </div>
          </section>

        </section>

      </div><!-- /.ends #inner -->
    </section>

<?php get_footer(); ?>