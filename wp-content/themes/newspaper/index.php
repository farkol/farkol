<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head profile="http://gmpg.org/xfn/11">

	<title><?php bloginfo('name'); ?><?php wp_title(); ?></title>

	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />	
	<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" />

	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
	<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/jquery-1.11.3"></script>
	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/myTheme.js"></script>

	<?php wp_get_archives('type=monthly&format=link'); ?>
	<?php wp_head(); ?>
</head>
<body>
<div id="container">
    <div id="header">
        <h1>iBlog - Wordpress and jQuery together in <e
<div id="wrapper">
    <?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
 
        <div class="post">
 
            <div class="left">
                <p class="postmetadata">
                    <strong>Post Details</strong><br />
                    Posted: <em><?php the_time('l, jS F, Y'); ?></em>
                    at <em><?php the_time('g:i a'); ?></em>.<br />
                    Written by: <em><?php the_author(); ?>.</em><br />
                    Number of comments: <em><?php get_comments_number('none', '1', '%'); ?></em>.<br />
                    Posted in: <em><?php the_category(', '); ?></em>.
                </p>
            </div><!-- end div.left -->
 
            <div class="right">
                <h2><?php the_title(); ?></h2>
                <div class="entry">
                    <?php the_content('more...'); ?>
                </div><!-- end div.entry -->
            </div><!-- end div.right -->
 
        </div><!-- end div.post -->
 
    <?php endwhile; ?>
    <?php endif; ?>
</div><!-- end div#wrapper -->
</div>

</body>
</html>