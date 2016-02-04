
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
				<div class="print-text-column">
					<p>White papers provide technical information for specific products and services. They are informational pieces consisting primarily of text and diagrams supporting the technology or service. Photography is not used in white paper formats. The white paper layout is a one-column format.</p>
					<h3 class="tocable">Use of color</h3>
					<ul>
						<li>The headline is reversed out of a color block. Select any color from the color palette for the color block.</li>
						<li>The color block always overlaps a band of color on the top of the white paper. That band of color is a 50% transparency of color block.</li>
						<li>Use the same color for subheads and the NXP URL within a single white paper</li>
					</ul>
				</div>

				<div class="print-text-column">
					<ul>
						<li>For shading in tables, diagrams and charts you may use lower percentages of the colors in the palette. Consult the color guidelines earlier in this document for more information</li>
					</ul>

					<h3>Grid</h3>
					<p>
						White papers are developed as a one-column layout based off of the 12-column grid used in brochures. Each column is equivalent to 9 grid units. 12-column grid margins:<br />
						<br />
						Top 12mm <br />
						Bottom 16.5mm <br />
						Left 12mm <br />
						Right 12mm <br />
						Gutter 4mm
					</p>
				</div>

				<img class="alignleft leftfix" src="/content/white-papers/white-paper.jpg" />

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
				<div class="print-text-column">
					<h3 class="tocable">Paper standard</h3>
					<p>We produce many leaflets and printed materials worldwide every year. To achieve consistency and efficiency, we have defined a paper standard for all offset printing on sheets.</p>
					<p>The standard is Magno from the supplier Sappi (in the US it is Magno Doll). You can view all of the specifications at www.sappi.com/ Magno.</p>
				</div>
				<div class="print-text-column">
					<h3>Copyright information</h3>
					<p>Always place the copyright and trademarks text on the back cover.</p>
					<h3>URL</h3>
					<p>For the URL www.nxp.com on the back, use the same color as the color block on the front.</p>

				</div>
				<img class="alignleft leftfix" style="margin-top: 20px;" src="/content/white-papers/white-paper-2.jpg" />
			</div>
			<!--- .entry-content -->
		</div><!--- .content -->
	</div><!--- .content-sidebar-wrap -->
</div><!--- .site-inner -->