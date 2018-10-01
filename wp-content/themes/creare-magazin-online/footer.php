<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Creare_Magazin_Online
 */

?>

	</div><!-- #content -->


<div class="footer-widget">
<div class="col-md-3">
<?php dynamic_sidebar( 'footer-1' ); ?>
</div>
<div class="col-md-3">
<?php dynamic_sidebar( 'footer-2' ); ?>
</div>
<div class="col-md-3">
<?php dynamic_sidebar( 'footer-3' ); ?>
</div>
<div class="col-md-3">
<?php dynamic_sidebar( 'footer-4' ); ?>
</div>
<div class="clearfix"></div>
</div>














	<footer id="colophon" class="site-footer" role="contentinfo">
	<p class="site-info">Recommended by <a href="https://web8.ro/creare-magazin-online/"><span>Creare Magazin Online</span></a>. Powered by WordPress</p>
	</footer><!-- #colophon -->
</div><!-- #page -->
<!-- Latest compiled and minified JavaScript -->
<script src="https://code.jquery.com/jquery-1.12.0.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	
<?php wp_footer(); ?>

</body>
</html>
