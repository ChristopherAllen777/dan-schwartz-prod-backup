<?php
/**
 * Template Name: Donate -CA
 *
 * Template for donate
 *
 * @package Harris Media Base Theme
 */

get_header(); ?>

<div class="container posts custom">

    <!-- <h1 id="title"><?php wp_title('', true,''); ?></h1> -->

    <span id="title"><?php echo the_title('', true,''); ?></span>

    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script type="text/javascript">
    function getQueryVariable(variable) {
      var query = window.location.search.substring(1);
      var vars = query.split("&");
      for (var i = 0; i < vars.length; i++) {
        var pair = vars[i].split("=");
        if (decodeURIComponent(pair[0]) === variable) {
          return decodeURIComponent(pair[1]);
        }
      }
    }
    var amount = getQueryVariable("amount");
    var sourceCode = getQueryVariable("source_code");

    amount = amount ? ("&amount=" + amount) : "";
    sourceCode = sourceCode ?  ("&source_code=" + sourceCode) : "";

    $(document).ready(function() {
      $("#anedot-iframe").attr("src", "https://secure.anedot.com/dan-4-nevada/general-fund-c53ca13ce1d?embed=true" + sourceCode + amount);
    });
    </script>
    <iframe id="anedot-iframe" src="" width="100%" height="1000" frameborder="0"></iframe>
    <noscript>
      <iframe src="https://secure.anedot.com/dan-4-nevada/general-fund-c53ca13ce1d?embed=true" width="100%" height="1000" frameborder="0"></iframe>
    </noscript>

            <?php if ( have_posts() ) : ?>

              <?php while ( have_posts() ) : the_post(); ?>
                
                <?php the_content(); ?>
                
              <?php endwhile; ?>

            <?php endif; ?>

</div><!-- .container -->

<?php get_footer(); ?>