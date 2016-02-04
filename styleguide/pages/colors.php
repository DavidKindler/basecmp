<?php
 
 $nxp_colors = array(
	// 0 - 2 (Regular)
	array('NXP orange',				'#f9b500',	80	),
	array('NXP blue',				'#7bb1db',	70	),
	array('NXP green',				'#c9c900',	70	),

	// 3 - 5 (Dark regular)
	array('NXP dark orange',		'#f9a200',	80	),
	array('NXP dark blue',			'#6496c8',	70	),
	array('NXP dark green',			'#b8b800',	70	),

	// 6 - 12 (Accent colors #1)
	array('Deep orange',			'#d54e12',	50	),
	array('Deep red',				'#a40044',	30	),
	array('Deep green',				'#005042',	30	),
	array('Olive green',			'#979200',	50	),
	array('Purple',					'#50227b',	30	),
	array('Deep blue',				'#003883',	30	),
	array('Petrol blue',			'#007088',	30	),

	// 13 - 19 (Accent colors #2)
	array('Marine blue',			'#056c96',	30	),
	array('Pale blue',				'#5e89c1',	40	),
	array('Aqua',					'#00a4a7',	40	),
	array('Pale aqua',				'#9ed3ca',	100	),
	array('Yellow',					'#ffcf00',	100	),
	array('Magenta',				'#e2007b',	40	),
	array('Red',					'#d20300',	40	),

	// 20 - 25 (Greyscale)
	array('NXP black',				'#313233',	0	),
	array('NXP anthracite',			'#5a5b5c',	0	),
	array('NXP dark grey',			'#848586',	0	),
	array('NXP grey',				'#adaeaf',	0	),
	array('NXP light grey',			'#d5d7d8',	0	),
	array('NXP extra light grey', 	'#e3e4e5',	0	),

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
	<a href="/downloads/nxp-color-palette.zip" title="Download color palette" class="general-cta grey-cta">Download <br /><span>color palette</span></a>
</section>

<div class="site-inner">
	<div class="content-sidebar-wrap">
		<div class="content">
			<div class="entry-content">
				<h3 class="tocable">Company colors</h3>
				<p>We have three company colors. These make up our logo and should be your first choice whenever you need to represent our company. There is an additional darker variation available for use of accents.</p>

				<div class="color-section-half">
					<?php 
						for ( $i = 0; $i <= 2; $i++ ) {
							echo nxp_color_section(  $nxp_colors[ $i ] );
						}
					?>
					<div class="clearfix"></div>
				</div>
				<div class="color-section-half">
					<?php 
						for ( $i = 3; $i <= 5; $i++ ) {
							echo nxp_color_section(  $nxp_colors[ $i ] );
						}
					?>
					<div class="clearfix"></div>
				</div>
			</div><!--- .entry-content -->
		</div><!--- .content -->
	</div><!--- .content-sidebar-wrap -->
</div><!--- .site-inner -->			

<div class="divider"></div>

<div class="site-inner">
	<div class="content-sidebar-wrap">
		<div class="content">
			<div class="entry-content">
				<h3 class="tocable">Accent colors</h3>
				<p>We also added other accent colors for secondary options when making graphic elements.</p>

				<div class="color-section">
					<?php 
						for ( $i = 6; $i <= 12; $i++ ) {
							echo nxp_color_section(  $nxp_colors[ $i ] );
						}
					?>
					<div class="clearfix"></div>
					<?php 
						for ( $i = 13; $i <= 19; $i++ ) {
							echo nxp_color_section(  $nxp_colors[ $i ] );
						}
					?>
					<div class="clearfix"></div>					
				</div>
			</div><!--- .entry-content -->
		</div><!--- .content -->
	</div><!--- .content-sidebar-wrap -->
</div><!--- .site-inner -->		

<div class="divider"></div>

<div class="site-inner">
	<div class="content-sidebar-wrap">
		<div class="content">
			<div class="entry-content">
				<h3 class="tocable">Greyscale</h3>
				<p>Next to these colors is the opportunity to use our greyscale-palette.</p>
				<div class="color-section">
					<?php 
						for ( $i = 20; $i <= 25; $i++ ) {
							echo nxp_color_section(  $nxp_colors[ $i ] );
						}
					?>
					<div class="clearfix"></div>		
				</div>
			</div><!--- .entry-content -->
		</div><!--- .content -->
	</div><!--- .content-sidebar-wrap -->
</div><!--- .site-inner -->		

<div class="divider"></div>

<div class="site-inner">
	<div class="content-sidebar-wrap">
		<div class="content">
			<div class="entry-content">
				<h3 class="tocable">Tints</h3>
				<p>Tints are avaible for use in diagrams or design elements. The three company colors and the accent colors can all be used at percentages of between 10% and 100%. You must take care to ensure readability when putting text on tints. The examples below show whether you should use dark or light text depending on the percentage of tint.</p>
				<div class="color-section">
					<?php 
						echo nxp_color_tints_head();

						for ( $i = 0; $i <= 2; $i++ ) {
							echo nxp_color_tints(  $nxp_colors[ $i ] );
						}
					?>
					<div class="clearfix clear-spacer"></div>

					<?php 
						echo nxp_color_tints_head();

						for ( $i = 6; $i <= 19; $i++ ) {
							echo nxp_color_tints(  $nxp_colors[ $i ] );
						}
					?>
					<div class="clearfix"></div>							

				</div>
			</div><!--- .entry-content -->
		</div><!--- .content -->
	</div><!--- .content-sidebar-wrap -->
</div><!--- .site-inner -->		