<?php
/*
Template Name: Cubs
*/
?>
<?php get_header(); ?>
<div id="main-content">
<div id="page-content">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<h1><?php the_title(); ?></h1>
	<?php the_content(); ?>
<?php endwhile; endif; ?>

<h3>Latest News (Cubs)</h3>
<ul>
<?php
$category_ID = get_category_id('Cubs');
query_posts('posts_per_page=5&cat='.$category_ID);
while(have_posts()) : the_post();
?>
<li><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></li>
<?php endwhile; ?>
</ul>

</div>
<div id="main-sidebar">
<center><img src='<?php bloginfo('template_directory'); ?>/_/img/cubs.jpg' alt='Logo' /></center><br />
<div class='sidebar-box'>
<div class='sidebar-box-title'>
<?php the_title(); ?> Menu
</div>
<div class='sidebar-box-menu'>
<?php wp_nav_menu(array('theme_location' => 'cubs_menu')); ?>
</div>
<br />
<?php get_sidebar(); ?>
</div>
</div>
<?php get_footer(); ?>