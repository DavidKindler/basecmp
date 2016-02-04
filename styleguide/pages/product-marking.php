
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
	<img src="/content/product-marking/header.jpg" alt="Header" />
	<h1><?php echo $cat;?> <br /><span><?php echo $type;?></span></h1>
</section>

<div class="site-inner">
	<div class="content-sidebar-wrap">
		<div class="content">
			<div class="entry-content">

				<div class="print-text-column">
					<p>There is a special outline version of the logo for laser marking on chips. This is needed because of the technical infeasibility of printing other logo variants on chips.</p>

					<h3>Color</h3>
					<p>The outline logo should always be used in white reversed out of black on all products.</p>
				</div>
				<div class="print-text-column">
					<img class="alignright" src="/content/product-marking/outline.jpg" />



				</div>

			</div>
			<!--- .entry-content -->
		</div><!--- .content -->
	</div><!--- .content-sidebar-wrap -->
</div><!--- .site-inner -->
t

<div class="divider"></div>

<div class="site-inner">
	<div class="content-sidebar-wrap">
		<div class="content">
			<div class="entry-content">
				<div class="print-text-column">
					<p>The only exception for use of the outline logo not appearing in white, is when the chip is either clear or pale colored. In that case the outline logo appear’s in black. (See right)</p>
				</div>
				<div class="print-text-column">
					<img class="alignright" src="/content/product-marking/white.jpg" />
				</div>

			</div>
			<!--- .entry-content -->
		</div><!--- .content -->
	</div><!--- .content-sidebar-wrap -->
</div><!--- .site-inner -->

<div class="divider"></div>

<div class="site-inner">
	<div class="content-sidebar-wrap">
		<div class="content">
			<div class="entry-content">

				<img class="aligncenter" src="/content/product-marking/example.jpg" />

			</div>
			<!--- .entry-content -->
		</div><!--- .content -->
	</div><!--- .content-sidebar-wrap -->
</div><!--- .site-inner -->

