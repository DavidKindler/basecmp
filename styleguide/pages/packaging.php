
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
					<h3>Logo on printed packaging</h3>
					<p>Where possible always print the full-color logo on white carton. If this is not possible then use the black-and-white version of the logo on flexographic printed packaging.</p>

					<h3>Color of the NXP logo</h3>
					<p>You must always reproduce the NXP logo in full-color on white, or black on the brown carton.</p>

					<h3>Logo</h3>
					<p>For flexographic printing the minimum width of the logo is 45mm. When applying the logo on the surface of a box there are the following rules:</p>

					<table class="table-no-padding table-145">
					<tr><td><h3>Box surface</h3></td><td><h3>Min. width logo</h3></td></tr>

					<tr><td>< 180 x 120mm</td><td>49mm </td></tr>
					<tr><td>> 180 x 120mm</td><td>65mm  </td></tr>
					<tr><td>> 400 x 190mm</td><td>86mm </td></tr>
					</table>
				</div>
				<div class="print-text-column">
					<p>For the printing of the logo on the side of
					a box there are the following rules:</p>

					<table class="table-no-padding table-145">
					<tr><td><h3>Box height</h3></td><td><h3>Min. width logo</h3></td></tr>
					<tr><td>< 20mm	</td><td>no logo applied  </td></tr>
					<tr><td>20-25mm	</td><td>45mm </td></tr>
					<tr><td>  > 25mm	</td><td>49mm </td></tr>
					</table>

					<h3>Clear space</h3>
					<p>Always maintain a clear space around the logo. No text, images or symbols may appear in the clear space. The clear space is starts at the edge of the carton box. The easy-to-follow rule to achieve the correct clear space is to ensure a minimum size of 50% of the capheight of the N of the logo is left clear around the NXP logo at all times (see example).</p>

					<img class="alignright" src="/content/packaging/clear.jpg" />

				</div>

			</div>
			<!--- .entry-content -->
		</div><!--- .content -->
	</div><!--- .content-sidebar-wrap -->
</div><!--- .site-inner -->
