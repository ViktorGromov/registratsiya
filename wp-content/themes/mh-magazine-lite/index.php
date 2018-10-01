<?php get_header(); ?>
<div class="mh-wrapper clearfix">
	<div id="main-content" class="mh-loop mh-content" role="main">
	<?php
		mh_before_page_content();
		$post = get_post(64);
		echo $post->post_title;
		echo $post->post_content;
		#print_r($post);die();
		if (have_posts()) {
			if (is_home() && !is_front_page()) { ?>
				<header class="page-header">
					<h1 class="page-title">
						<?php single_post_title(); ?>
					</h1>
				</header><?php
			}
			
			$query1 = new WP_Query( 'cat=8&posts_per_page=20' );
			#print_r($query1);die();
			?>
			
			<br />
			<br />
			<h4 class="mh-widget-title"><span class="mh-widget-title-inner">Сейчас читают</span></h4>
			<div class="your-class">
			<?php while ($query1->have_posts()) : $query1->the_post(); ?>
  				<div style="margin-left:5px;"><a href="<?php echo get_post_permalink(); ?>"><?php echo get_the_post_thumbnail() ?><span style="font-size: 16px;margin-left:5px;"><?php echo get_the_title();?></span></a></div>
  			<?php endwhile;  ?>
			</div>
			
			<br />
			<br />
			<h4 class="mh-widget-title"><span class="mh-widget-title-inner">Последние новости игорного бизнеса</span></h4>
			<?php 
			$query = new WP_Query( 'cat=7&&posts_per_page=5' );
			
			while ($query->have_posts()) : $query->the_post();
			get_template_part('content', 'loop');
			endwhile;
			?>
			<div id="text-2" class="mh-widget mh-pages-2 widget_text">			<div class="textwidget">&nbsp;
<p style="text-align: center;"><a class="maxbutton-19 maxbutton maxbutton-vse-novosti" href="http://официальные-букмекерские-конторы.рф/category/новости/"><span class="mb-text">ВСЕ НОВОСТИ</span></a></p>
&nbsp;</div>
		</div>
		<?php 
			#mh_magazine_lite_pagination();
		} else {
			get_template_part('content', 'none');
		} ?>
	</div>
	<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>