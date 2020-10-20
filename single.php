<?php
// à utiliser avec front-page.php
//wp_redirect(site_url());
//exit;
?>
<?php get_header(); ?>

<section id='content'>
  <aside>
    <fieldset id="fieldsetsidebar">
  <!--<legend>index.php: &lt;aside&gt; + <code>get_sidebar()</code></legend>-->
  <?php get_sidebar(); ?>
  </aside>
</section>

<?php get_footer(); ?>
