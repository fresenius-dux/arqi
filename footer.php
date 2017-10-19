<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Bootstrap to WordPress
 */
?>

<?php wp_footer(); ?>

<!-- BOOTSTRAP CORE JAVASCRIPT
	 Placed at the end of the document so the pages
	 load faster!
================================================== -->
<script src="<?php bloginfo('template_directory'); ?>/lib/jquery/jquery-2.1.1.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/lib/bootstrap/bootstrap.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/bower_components/angular/angular.min.js"></script>

<!--Controllers-->
<script src="<?php bloginfo('template_directory'); ?>/controllers/mainCtrl.js"></script>

<script src="<?php bloginfo('template_directory'); ?>/assets/js/main.js"></script>
<!-- TypeKit Fonts -->
<script src="//use.typekit.net/gla7wnd.js"></script>
<script>try{Typekit.load();}catch(e){}</script>

</body>
</html>
