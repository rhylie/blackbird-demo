 <?php /*
Template Name: Landing Page
*/ ?>
<?php define('WP_USE_THEMES', true); get_header(); ?>

  <section id="banner" class="style2">
    <div class="inner">
      <span class="image">
        <img src="images/pic07.jpg" alt="" />
      </span>
      <header class="major">
        <h1><?php the_title(); ?></h1>
      </header>
      <div class="content">

          <?php
          // TO SHOW THE PAGE CONTENTS
          while ( have_posts() ) : the_post(); ?> <!--Because the_content() works only inside a WP Loop -->

            <?php the_content(); ?> <!-- Page Content -->

          <?php
          endwhile; //resetting the page loop
          wp_reset_query(); //resetting the page query
          ?>

      </div>
    </div>
  </section>

  <!-- Main -->
    <div id="main">

      <!-- One -->
        <section id="one">
          <div class="inner">
            <header class="major">
              <h2><?php the_field('cta1home_head'); ?></h2><!-- Query the custom advanced field -->
            </header>
            <p><?php the_field('cta1home_text'); ?></p>
          </div>
        </section><!-- /.ends #one -->

      <!-- Two -->
        <section id="two" class="spotlights">

          <!-- Custom posts query -->
          <?php 
          // the query
          $wpb_all_query = new WP_Query(
            array(
              'post_type'=>'post', 
              'post_status'=>'publish', 
              'posts_per_page'=>-1
            )
          ); 
          ?>

          <?php if ( $wpb_all_query->have_posts() ) : ?>

            <!-- the loop -->
            <?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>

              <section>
                <!-- Begins structure of post -->
                <a href="/" class="image">
                  <img src="/" alt="" data-position="center center" />
                </a>
                <div class="content">
                  <div class="inner">
                    <header class="major">
                      <h3><?php the_title(); ?></h3>
                    </header>
                    <p><?php the_content(); ?></p>
                    <ul class="actions">
                      <li><a href="<?php the_permalink(); ?>" class="button">Learn more</a></li>
                    </ul>
                  </div>
                </div>

              </section>
            <?php endwhile; ?>
            <!-- end of the loop -->

            <?php wp_reset_postdata(); ?>

          <?php else : ?>
            <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
          <?php endif; ?>

        </section><!-- /.ends #two -->

      <!-- Three -->
        <section id="three">
          <div class="inner">
            <header class="major">
              <h2>Massa libero</h2>
            </header>
            <p>Nullam et orci eu lorem consequat tincidunt vivamus et sagittis libero. Mauris aliquet magna magna sed nunc rhoncus 
            pharetra. Pellentesque condimentum sem. In efficitur ligula tate urna. Maecenas laoreet massa vel 
            lacinia pellentesque lorem ipsum dolor. Nullam et orci eu lorem consequat tincidunt. 
            Vivamus et sagittis libero. Mauris aliquet magna magna sed nunc rhoncus amet pharetra et feugiat tempus.</p>
            <ul class="actions">
              <li><a href="generic.html" class="button next">Get Started</a></li>
            </ul>
          </div>
        </section>

    </div><!-- /.ends #main -->

<?php get_footer(); ?>