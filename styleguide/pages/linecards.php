
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
			<p>
				Keep the design as simple as possible and avoid repetition. As there is a lot of information, you should try to make it as easy to navigate as possible.
			</p>
			<h3>Text</h3>
			<ul>
				<li>Basic grid + table grid (table grid as needed)</li>
				<li>Keep design clean and aligned</li>
				<li>Try to avoid duplicating content</li>
				<li>For color tint usage in tables refer to the tint specifications (see page 26 & 27)</li>
			</ul>
			<img class="alignleft" style="margin-top: 20px;" src="/content/linecards/linecards.jpg" />
			</div><!--- .entry-content -->
		</div><!--- .content -->
	</div><!--- .content-sidebar-wrap -->
</div><!--- .site-inner -->