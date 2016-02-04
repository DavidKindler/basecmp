<?php

 $nxp_colors = array(
	array('NXP orange',				'#f9b500',	80	),
	array('NXP blue',				'#7bb1db',	70	),
	array('NXP green',				'#c9c900',	70	),
	array('Petrol blue',			'#007088',	30	),
	array('Olive green',			'#979200',	50	),
 );

?>

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
				<p>Technical illustrations are used to visualize a process or complex system, or when photography isn’t appropriate. They are used on leaflets, brochures, posters, in PowerPoint presentations, movies and press articles. Use the basic ingredient: the Avenir font and colors from the defined palette of the NXP guidelines. On the following pages please find different examples of technical illustrations.</p>
			</div><!--- .entry-content -->
		</div><!--- .content -->
	</div><!--- .content-sidebar-wrap -->
</div><!--- .site-inner -->

<div class="divider"></div>
<div class="site-inner">
	<div class="content-sidebar-wrap">
		<div class="content">
			<div class="entry-content">
				<div class="print-text-column">
					<img class="alignleft" src="/content/technical-illustrations/car-listimage.jpg" alt="Spreads" />
					<h3 class="tocable" data-toctitle="Technical illustrations">Example technical illustration</h3>
					<ul>
						<li>Dynamic look and feel</li>
						<li>Shadow and reflection is allowed</li>
						<li>Make use of transparency to show functionality</li>
						<li>NXP colors only to be used for highlighting important details</li>
					</ul>
				</div>
				<div class="print-text-column">
					<img class="aligncenter" style="margin-bottom: 1px;"src="/content/technical-illustrations/chip-listimage.jpg" alt="Spreads" />
					<h3>Example chip diagram</h3>
					<ul>
						<li>Use transparent blocks in NXP colors </li>
						<li>Show the visual, using perspective</li>
						<li>Integrate text and logo in the same perspective</li>
						<li>Show reflection to give depth</li>
					</ul>

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
				<div class="print-text-column">
					<img class="alignleft" src="/content/technical-illustrations/block-1-listimage.jpg" alt="Spreads" />
					<h3 class="tocable" data-toctitle="Block Diagrams">Example block diagrams</h3>
					<ul>
						<li>Use transparent blocks in NXP colors and accent colors from the color palette below</li>
						<li>Show the visual, using perspective</li>
						<li>Integrate text and logo in the same perspective</li>
						<li>Use white or a light gradient color for a background that fits the visual</li>
					</ul>

				</div>
				<div class="print-text-column">
					<img class="alignleft" src="/content/technical-illustrations/block-2-listimage.jpg" alt="Spreads" />
					<h3 class="alignleft">Example block diagram</h3>
					<ul class="alignleft">
						<li>To create an interesting layout, consider designing the block diagram in the shape of the end application, e.g. mobile phone</li>
						<li>Use either one color with tints or a combination of colors from the color palette, e.g. to highlight	a particular component</li>
					</ul>

				</div>

			</div>
			<!--- .entry-content -->
		</div><!--- .content -->
	</div><!--- .content-sidebar-wrap -->
</div><!--- .site-inner -->


<div class="site-inner">
	<div class="content-sidebar-wrap">
		<div class="content">
			<div class="entry-content">
				<div class="print-text-column">
					<p>
						<h3>Block diagrams color coding</h3>
						A color coding system has been developed to identify each of the High Performance Mixed Signal Technology competencies. This coding system is to be used consistently across all block diagrams to aid design engineers and manufacturers in the clear identification of application components.
					</p>
				</div>
				<div class="print-text-column five-colors">

					<div class="color-section">
						<div class="alignleft">
							<h4 style="color: #f9b500;">Digital <br /> Processing</h4>
							<?php
									echo nxp_color_section(  $nxp_colors[ 0 ] );
							?>
						</div>
						<div class="alignleft">
							<h4 style="color: #7bb1db;"><br />RF</h4>
							<?php
									echo nxp_color_section(  $nxp_colors[ 1 ] );
							?>
						</div>
						<div class="alignleft">
							<h4 style="color: #c9c900;"><br />Power</h4>
							<?php
									echo nxp_color_section(  $nxp_colors[ 2 ] );
							?>
						</div>
						<div class="alignleft">
							<h4 style="color: #007088;">Standard<br />Products</h4>
							<?php
									echo nxp_color_section(  $nxp_colors[ 3 ] );
							?>
						</div>
						<div class="alignleft">
							<h4 style="color: #979200;">Misc.<br />Products</h4>
							<?php
									echo nxp_color_section(  $nxp_colors[ 4 ] );
							?>
						</div>
					</div>
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
				<div class="print-text-column">
					<img class="alignleft" src="/content/technical-illustrations/poster-listimage.jpg" alt="Spreads" />
					<h3 class="tocable" data-toctitle="Posters">Example Posters</h3>
					<ul>
						<li>To show extra information display the illustrationon a white background</li>
						<li>Match the colors with the visual(s)</li>
					</ul>

				</div>
				<div class="print-text-column">
					<img class="alignleft" src="/content/technical-illustrations/leaflet-listimage.jpg" alt="Spreads" />
					<h3 class="alignleft">Example Leaflet</h3>
					<ul class="alignleft">
						<li>Use graphic elements in a clean way in line with the visual</li>
						<li>Keep the graphic elements in the same perspective as the visual</li>
					</ul>

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
				<div class="print-text-column column-3">
					<img class="alignleft" src="/content/technical-illustrations/do-not-1.jpg" alt="Spreads" />
					<p class="alignleft" ><b>Do not</b> use NXP colors to show technical functionalities because they might become too dominant and distracting.</p>
				</div>

				<div class="print-text-column column-3">
					<img class="alignleft" src="/content/technical-illustrations/do-not-2.jpg" alt="Spreads" style="margin-bottom: 35px;" />
					<p class="alignleft" ><b>Do not</b> exaggerate by using NXP colors for almost everything. This doesn’t look natural.</p>
				</div>

				<div class="print-text-column column-3">
					<img class="alignleft" src="/content/technical-illustrations/do-not-3.jpg" alt="Spreads" />
					<p class="alignleft" ><b>Do not</b> use a dark or black background.</p>
				</div>

			</div>
			<!--- .entry-content -->
		</div><!--- .content -->
	</div><!--- .content-sidebar-wrap -->
</div><!--- .site-inner -->