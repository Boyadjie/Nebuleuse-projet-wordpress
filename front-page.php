<?php
// à utiliser avec front-page.php
//wp_redirect(site_url());
//exit;
?>
<?php get_header(); ?>

<section id='content'>

  <div id="fieldsetcontent">

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

      <div class="post">

   	    <!-- Display the Title as a link to the Post's permalink. -->
   	    <h2><!-- titre du site --><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>

   	    <!-- Display the date (November 16th, 2009 format) and a link to other posts by this posts author. -->
   	    <small><!--Date et auteur --><?php the_time('j F Y à G:i'); ?> par <?php the_author_posts_link(); ?></small>

   	    <!-- Display the Post's content in a div box. -->
   	    <div class="entry">
          <div>
            <!--<legend>Contenu de l'article <code>the_content()</code></legend>-->
   		      <?php the_content(); ?>
          </div>
   	    </div>

        <p style="font-size:.9em;">
          <!-- Display the number of comments. -->
          Cet article a <a href="<?php the_permalink(); ?>#comments"><?php comments_number( 'aucun commentaire', 'un commentaire', '% commentaires' ); ?></a>.
   	      <!-- Display a comma separated list of the Post's Categories. -->
   	      <span class="postmetadata">Posté dans <?php the_category( ', ' ); ?></span>
        </p>

        <div style="margin-left:10%;">
          <!--<legend>Commentaires : <code>comments_template()</code></legend>-->
          <?php
              if ( comments_open() || get_comments_number() ) :
                        comments_template();
              endif;?>
        </div>
      </div> <!-- closes the first div box -->

    <?php endwhile; else : ?>
	  <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
    <?php endif; ?>
  </div>
</section>

<?php get_footer(); ?>
