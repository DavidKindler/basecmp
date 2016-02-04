<?php

    if ( isset( $sub_page ) && ( ! empty( $sub_page ) ) ) {
        $type = $config['subpages'][ $page ][ $sub_page ];
        $cat = $config['pages'][ $page ];

    } else {
        $cat = $config['pages'][ $page ];
        $type = '';
    }

?>

<section class="general-section mainvisual-section">
	<img src="/content/<?php echo ($type == '' ? $cat : strtolower( str_replace(' ', '-', $type) ) );?>/header.jpg" alt="Header" />
	<h1><?php echo $cat;?> <br /><span><?php echo $type;?></span></h1>
</section>

<div class="site-inner">
	<div class="content-sidebar-wrap">
		<div class="content">
			<div class="entry-content">
				<h3 class="tocable" data-toctitle="Templates">Advertising templates</h3>
				<p>The following templates provide guidance on designing offline advertisements. The guidelines provide freedom in design to demonstrate flexibility and encourage diversity.</p>
			</div><!--- .entry-content -->
		</div><!--- .content -->
	</div><!--- .content-sidebar-wrap -->
</div><!--- .site-inner -->

<div class="divider"></div>

<div class="site-inner">
	<div class="content-sidebar-wrap">
		<div class="content">
			<img class="aligncenter tocable" data-toctitle="Corporate potrait" src="/content/advertising/corporate-potrait.jpg" alt="Corporate potrait"/>
		</div><!--- .content -->
	</div><!--- .content-sidebar-wrap -->
</div><!--- .site-inner -->

<div class="divider"></div>

<div class="site-inner">
	<div class="content-sidebar-wrap">
		<div class="content">
			<img class="aligncenter tocable" data-toctitle="Corporate landscape" src="/content/advertising/corporate-landscape.jpg" alt="Corporate landscape"/>
		</div><!--- .content -->
	</div><!--- .content-sidebar-wrap -->
</div><!--- .site-inner -->

<div class="divider"></div>

<div class="site-inner">
	<div class="content-sidebar-wrap">
		<div class="content">
			<img class="aligncenter tocable" data-toctitle="Application potrait" src="/content/advertising/application-potrait.jpg" alt="Application potrait"/>
		</div><!--- .content -->
	</div><!--- .content-sidebar-wrap -->
</div><!--- .site-inner -->

<div class="divider"></div>

<div class="site-inner">
	<div class="content-sidebar-wrap">
		<div class="content">
			<img class="aligncenter tocable" data-toctitle="Application landscape" src="/content/advertising/application-landscape.jpg" alt="Application landscape"/>
		</div><!--- .content -->
	</div><!--- .content-sidebar-wrap -->
</div><!--- .site-inner -->

<div class="divider"></div>

<div class="site-inner">
	<div class="content-sidebar-wrap">
		<div class="content">
			<img class="aligncenter tocable" data-toctitle="Sub potrait" src="/content/advertising/sub-potrait.jpg" alt="Sub potrait"/>
		</div><!--- .content -->
	</div><!--- .content-sidebar-wrap -->
</div><!--- .site-inner -->

<div class="divider"></div>

<div class="site-inner">
	<div class="content-sidebar-wrap">
		<div class="content">
			<img class="aligncenter tocable" data-toctitle="Sub landscape" src="/content/advertising/sub-landscape.jpg" alt="Sub landscape"/>
		</div><!--- .content -->
	</div><!--- .content-sidebar-wrap -->
</div><!--- .site-inner -->

<div class="divider"></div>

<div class="site-inner">
	<div class="content-sidebar-wrap">
		<div class="content">
			<img class="aligncenter tocable" data-toctitle="Sub 2 potrait" src="/content/advertising/sub-2-potrait.jpg" alt="Sub 2 potrait"/>
		</div><!--- .content -->
	</div><!--- .content-sidebar-wrap -->
</div><!--- .site-inner -->

<div class="divider"></div>

<div class="site-inner">
	<div class="content-sidebar-wrap">
		<div class="content">
			<img class="aligncenter tocable" data-toctitle="Sub 2 landscape" src="/content/advertising/sub-2-landscape.jpg" alt="Sub 2 landscape"/>
		</div><!--- .content -->
	</div><!--- .content-sidebar-wrap -->
</div><!--- .site-inner -->

<div class="divider"></div>

<div class="site-inner">
	<div class="content-sidebar-wrap">
		<div class="content">
			<img class="aligncenter tocable" data-toctitle="Product potrait" src="/content/advertising/product-potrait.jpg" alt="Product potrait"/>
		</div><!--- .content -->
	</div><!--- .content-sidebar-wrap -->
</div><!--- .site-inner -->

<div class="divider"></div>

<div class="site-inner">
	<div class="content-sidebar-wrap">
		<div class="content">
			<img class="aligncenter tocable" data-toctitle="Product landscape" src="/content/advertising/product-landscape.jpg" alt="Product landscape"/>
		</div><!--- .content -->
	</div><!--- .content-sidebar-wrap -->
</div><!--- .site-inner -->

<div class="divider"></div>

<div class="site-inner">
	<div class="content-sidebar-wrap">
		<div class="content">
			<img class="aligncenter tocable" data-toctitle="Recrtuitment potrait" src="/content/advertising/recruitment-potrait.jpg" alt="Recrtuitment potrait"/>
		</div><!--- .content -->
	</div><!--- .content-sidebar-wrap -->
</div><!--- .site-inner -->

<div class="divider"></div>

<div class="site-inner">
	<div class="content-sidebar-wrap">
		<div class="content">
			<img class="aligncenter tocable" data-toctitle="Recrtuitment landscape" src="/content/advertising/recruitment-landscape.jpg" alt="Recrtuitment landscape"/>
		</div><!--- .content -->
	</div><!--- .content-sidebar-wrap -->
</div><!--- .site-inner -->

