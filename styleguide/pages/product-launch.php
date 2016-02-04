
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
	<img src="/content/product-launch/header.jpg" alt="Header" />
	<h1><?php echo $cat;?> <br /><span><?php echo $type;?></span></h1>
</section>

<div class="site-inner">
	<div class="content-sidebar-wrap">
		<div class="content">
			<div class="entry-content">

				<div class="print-text-column">
					<h3>Product launch packages (PLP)</h3>
					<p>Always use leaflet layout when product families are described. The content should have a description, key features, key benefits and key applications. Possibly add package shots on the front and diagrams, product tables on the inside left page. Only have samples on the inside right page. Back page is for additional diagram or to be left blank.</p>

					<p>Package drawings combined with tables are to be placed outside and above the table, and only as line drawing (no colored package).</p>
				</div>
				<div class="print-text-column">
					<p>Only when the content is based on an application, the brochure layout can be used. The document should then contain several samples from different product families that are used in the application. The text should then contain more explanation, ie mentioning the specific application and explaining more about the products included in that application. This can be extended to a six pager but always in a brochure style.</p>

					<p>Each pack should contain a sticker with NXP logo, product name and if available key line for the product family. The size of the sticker is square 3.3 cm with rounded corners. Choose color from the accent color palette (see guidelines on page 25).</p>



				</div>
					<img class="alignleft" src="/content/product-launch/sticker.jpg" />
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

				<img class="aligncenter" src="/content/product-launch/example.jpg" />

			</div>
			<!--- .entry-content -->
		</div><!--- .content -->
	</div><!--- .content-sidebar-wrap -->
</div><!--- .site-inner -->
