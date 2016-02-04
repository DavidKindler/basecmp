
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
				<h3>Advertising grid</h3>
				<p>The following templates provide guidance on designing offline advertisements. The guidelines provide freedom in design to demonstrate flexibility and encourage diversity.</p>
				<img class="aligncenter" src="/content/print/advertising-grid.png" alt="Advertising grid" />

			</div><!--- .entry-content -->
		</div><!--- .content -->
	</div><!--- .content-sidebar-wrap -->
</div><!--- .site-inner -->

<div class="divider"></div>

<div class="site-inner">
	<div class="content-sidebar-wrap">
		<div class="content">
			<div class="entry-content">
				<h3>Poster grid</h3>
				<p>The following templates provide guidance on designing posters. The guidelines provide freedom in design to demonstrate flexibility and encourage diversity.</p>
				<img class="aligncenter" src="/content/print/poster-grid.png" alt="Poster grid" />
			</div><!--- .entry-content -->
		</div><!--- .content -->
	</div><!--- .content-sidebar-wrap -->
</div><!--- .site-inner -->

<div class="divider"></div>

<div class="site-inner">
	<div class="content-sidebar-wrap">
		<div class="content">
			<div class="entry-content">
				<h3>Banner grid</h3>
				<p>The following templates provide guidance on designing offline banners. The guidelines provide freedom in design to demonstrate flexibility and encourage diversity.</p>
				<img class="aligncenter" src="/content/print/banner-grid.png" alt="Banner grid" />
			</div><!--- .entry-content -->
		</div><!--- .content -->
	</div><!--- .content-sidebar-wrap -->
</div><!--- .site-inner -->

<div class="divider"></div>

<div class="site-inner">
	<div class="content-sidebar-wrap">
		<div class="content">
			<div class="entry-content">
				<h3>Business card grid</h3>
				<p>The following templates provide guidance on designing offline banners. The guidelines provide freedom in design to demonstrate flexibility and encourage diversity.</p>
				<img class="aligncenter" src="/content/print/business-card-grid.png" alt="Business card grid" />
			</div><!--- .entry-content -->
		</div><!--- .content -->
	</div><!--- .content-sidebar-wrap -->
</div><!--- .site-inner -->