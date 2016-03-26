<?php get_header(); ?>
<div class="container">
<div class="row">
<div class="col-md-8">
	<div id="content">
	<?php get_template_part( 'loop' ); ?>
	</div>
</div>


<div class="col-md-4 text-center">
<?php get_sidebar(); ?>
</div>
</div>
</div>
<div class="clearfix">
<?php get_footer(); ?>
</div>