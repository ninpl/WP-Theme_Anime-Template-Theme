<div class="sidebar-wrap">

<div class="sidebar block-1">        
      <?php	/* Widgetized sidebar */ if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar(1) ) : ?>    		

<div class="widget">
<h3 class="widgettitle">Categories</h3>
<ul>
<?php wp_list_categories('sort_column=name&optioncount=0&hierarchical=0'); ?>
</ul>
</div>

<div class="widget">
<h3 class="widgettitle">Archives</h3>
<ul>
<?php wp_get_archives('type=monthly'); ?>
</ul>
</div>

<div class="widget">
<h3 class="widgettitle">Tags</h3>
<ul>
<?php wp_tag_cloud('number=40&smallest=10'); ?>
</ul>
</div>

				
			<?php endif; /* End of widgetized sidebar */ ?>
</div><!-- end .block-1 -->

<div class="sidebar block-2">        
      <?php	/* Widgetized sidebar */ if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar(2) ) : ?>    				

<div class="widget">
<h3 class="widgettitle">Pages</h3>
<ul>
<?php wp_list_pages('title_li=' ); ?>
</ul>
</div>

<div class="widget">
<h3 class="widgettitle">Bookmarks</h3>
<ul>
<?php wp_list_bookmarks('title_li=&categorize=0'); ?>
</ul>
</div>

<div class="widget">
<h3 class="widgettitle">Meta</h3>
<ul>
<?php wp_register(); ?>
					<li><?php wp_loginout(); ?></li>
					<li><a href="http://validator.w3.org/check/referer" title="This page validates as XHTML 1.0 Transitional">Valid <abbr title="eXtensible HyperText Markup Language">XHTML</abbr></a></li>
					<li><a href="http://gmpg.org/xfn/"><abbr title="XHTML Friends Network">XFN</abbr></a></li>
					<li><a href="http://wordpress.org/" title="Powered by WordPress, state-of-the-art semantic personal publishing platform.">WordPress</a></li>
					<?php wp_meta(); ?>
</ul>
</div>



			<?php endif; /* End of widgetized sidebar */ ?>
</div><!-- end .block-2 -->

</div> <!-- end .sidebar-wrap -->

