<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package nondesigns
 */

?>
<?php if ( is_front_page() ) { ?>
            <div class="footer">
                <div class="enter"> </div>
                <div class="copyright">all site content &copy; NONDESIGNS, LLC</div>
            </div>
<?php } ?>

        </div><!-- #container -->

	</div><!-- #content -->

</div><!-- #page -->

<?php wp_footer(); ?>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-63031234-1', 'auto');
  ga('send', 'pageview');

</script>  

</body>
</html>
