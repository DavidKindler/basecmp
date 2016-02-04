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
	<a href="/downloads/nxp-logo-package.zip" title="Download logo package" class="general-cta">Download <br /><span>logo package</span></a>
</section>

<div class="site-inner">
	<div class="content-sidebar-wrap">
		<div class="content">
			<div class="entry-content">

				<img class="alignleft" alt="NXP logo" src="/content/logo/logo-large.png" style="margin: 0 97px 87px 0;" />
				<p>Our logo symbolizes everything we stand for. It is vibrant and dynamic. It is colorful and stimulating, but still fresh and uncomplicated.</p>
				<h3>Standardized form</h3>
				<p>You must never change it in any way, under any circumstances. This ensures legal protection and helps recognition and awareness worldwide.</p>
				<h3 style="clear: left;">In text</h3>
				<p>Never use the logo in running text. When the word NXP needs to be used in text, use the same typeface, style and color as the rest of the text. Always use upper case characters – never nxp or Nxp for example, unless you are referring to it in a URL.</p>
				<h3 class="tocable">Logo versions</h3>
				<p>We have created the NXP logo and the NXP Software logo in four different versions:</p>

				<div class="two-thirds first">
					<div class="table">
						<ul class="logo-versions">
							<li><strong>1.</strong></li>
							<li><strong>Full-color logo:</strong> This default logo should be used in any circumstances if possible</li>
							<li><img src="/content/logo/logo-fullcolor.png" alt="Full-color logo" /></li>
						</ul>
						<ul>
							<li><strong>2.</strong></li>
							<li><strong>Grayscale logo:</strong> For use in newsprint or on a fax sheet</li>
							<li><img src="/content/logo/logo-grayscale.png" alt="Grayscale logo" /></li>
						</ul>
						<ul>
							<li><strong>3.</strong></li>
							<li><strong>Solid logo:</strong> For use in exceptional circumstances when full-color printing is unavailable or the logo will not appear on a white background</li>
							<li><img src="/content/logo/logo-solid.png" alt="Solid logo" /></li>
						</ul>
						<ul>
							<li><strong>4.</strong></li>
							<li><strong>Outline logo:</strong> Only for use on products or where technical restrictions dictate no full-color or solid logos can be used</li>
							<li><img src="/content/logo/logo-outline.png" alt="Outline logo" /></li>
						</ul>																		
					</div><!-- .table -->
				</div>

				<div class="one-third">
					<h3>Download full-color logo</h3>
					<a href="/downloads/nxp-fullcolor-rgb.zip" title="Download web logo" class="general-cta"><span class="blocker">Web</span> <span class="lower">(.png)</span></a>
					<a href="/downloads/nxp-fullcolor-cmyk.zip" title="Download print logo" class="general-cta"><span class="blocker">Print</span> <span class="lower">(.eps)</span></a>
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

				<h3 class="tocable">Logo size</h3>
				<div class="table">
					<ul>
						<li>The size of the logo should be based on the following formula:</li>
						<li>Minimum size for print:</li>
						<li><img src="/content/logo/logo-minimumsize-print.png" alt="Minimum size for print" /></li>
					</ul>
					<ul>
						<li><img style="margin:0;" src="/content/logo/logo-formula.png" alt="Height + width of document" /></li>
						<li>Minimum size for on screen use:</li>
						<li><img src="/content/logo/logo-minimumsize-web.png" alt="Minimum size for on screen use" /></li>
					</ul>
				</div><!-- .table -->

			</div><!--- .entry-content -->
		</div><!--- .content -->
	</div><!--- .content-sidebar-wrap -->
</div><!--- .site-inner -->

<div class="divider"></div>

<div class="site-inner">
	<div class="content-sidebar-wrap">
		<div class="content">
			<div class="entry-content">

				<h3 class="tocable">Logo clear space</h3>
				<div class="table table-equal">
					<ul>
						<li>				
							<p>Our logo must be shown in a clear and legible form. To help ensure this, please maintain a white ‘clear space’ around the logo – where no text, images or symbols may appear.</p>
							<p>The easy-to-follow rule to achieve the correct clear space is to ensure a minimum size of 50% of the logo height is left clear around the NXP logo.</p>
							<p>For ‘big impact’ items such as exhibition booths, sponsorships or building signage, or where the NXP logo fights for visibility among a collection of other logos, graphics and images, the “clear space” can be reduced or eliminated and the logo made larger where this will increase the visibility of the logo.</p>
						</li>
						<li><img src="/content/logo/logo-clearspace.png" alt="Logo clear space" /></li>
					</ul>
				</div><!-- .table -->

			</div><!--- .entry-content -->
		</div><!--- .content -->
	</div><!--- .content-sidebar-wrap -->
</div><!--- .site-inner -->			

<div class="divider"></div>

<div class="site-inner">
	<div class="content-sidebar-wrap">
		<div class="content">
			<div class="entry-content">

				<div class="table table-equal">
					<ul>
						<li>				
							<img src="/content/logo/logo-colors.png" alt="Logo colors" />
						</li>
						<li>
							<h3>Logo colors</h3>
							<p>We’re a colorful company and our logo communicates this instantly. The colors have been specially chosen to be dynamic and inspiring.</p>
							<p>The correct colors are specified on the left for use in pixel and print – CMYK (full-color for print), RGB (for digital) and Pantone (for pure solid color in print).</p>
							<p>When using the three Pantone colors for offset printing (e.g. stationery), the colors will mix on the overlap. Always print the Pantone 292 on top of the orange and green as the last color. For silk screen printing use the five Pantone color version of the logo.</p>
						</li>
					</ul>
				</div><!-- .table -->

			</div><!--- .entry-content -->
		</div><!--- .content -->
	</div><!--- .content-sidebar-wrap -->
</div><!--- .site-inner -->			

<div class="divider"></div>

<div class="site-inner">
	<div class="content-sidebar-wrap">
		<div class="content">
			<div class="entry-content">

				<div class="table table-equal">
					<ul>
						<li>
							<h3 class="tocable" data-toctitle="Logo exception – black and white">Logo exception – black and white logo</h3>
							<p>The use of the black and white version is only for exceptional circumstances where full-color is not possible, for instance in newsprint or on a fax sheet.</p>
						</li>						
						<li>				
							<img src="/content/logo/logo-bw-colors.png" alt="Logo colors" />
						</li>
					</ul>
				</div><!-- .table -->

			</div><!--- .entry-content -->
		</div><!--- .content -->
	</div><!--- .content-sidebar-wrap -->
</div><!--- .site-inner -->	

<div class="divider"></div>

<div class="site-inner">
	<div class="content-sidebar-wrap">
		<div class="content">
			<div class="entry-content">

				<div class="table table-equal">
					<ul>
						<li>				
							<img src="/content/logo/logo-exception-solids.png" alt="Logo exception – solid logo" />
						</li>
						<li>
							<h3 class="tocable">Logo exception – solid logo</h3>
							<p>The solid version of the logo can only be used in exceptional circumstances, such as when an event or carrier dictates a single colored background (e.g. a non-distracting backdrop at a tennis tournament or the team color of a racing car).</p>
							<p>Depending on the background color, the logo should be used in solid white – preferably on one of the color palette background colors. If white does not show the logo clearly enough, then the solid black may be used.</p>
							<p>Another option is the logo reversed out of one of the accent colors (but never in one of the company colors). On all other items, the fullcolor logo is compulsory on a white background.</p>
						</li>
					</ul>
				</div><!-- .table -->

			</div><!--- .entry-content -->
		</div><!--- .content -->
	</div><!--- .content-sidebar-wrap -->
</div><!--- .site-inner -->

<div class="divider"></div>

<div class="site-inner">
	<div class="content-sidebar-wrap">
		<div class="content">
			<div class="entry-content">

				<div class="table table-equal">
					<ul>
						<li>
							<h3 class="tocable">Logo exception – outline logo</h3>
							<p>There is a special outline version of the logo for laser marking on chips. This is due to the technical infeasibility of printing the other logo variants on chips.</p>
						</li>
						<li>				
							<img src="/content/logo/logo-outline-large.png" alt="Logo exception – Outline logo" />
						</li>						
					</ul>
				</div><!-- .table -->

			</div><!--- .entry-content -->
		</div><!--- .content -->
	</div><!--- .content-sidebar-wrap -->
</div><!--- .site-inner -->

<div class="divider"></div>



<section class="general-section">
	<div class="entry-content entry-content-wide" style="background:url(/content/logo/circuitboard.jpg) top left no-repeat; background-size: 100% 100%;">
		<h2 class="tocable">Never...</h2>
		<div class="grid">
			<div><p>Consistency is crucial if our brand identity is to be effective. Nowhere is that more important than when using the logo. You must ensure the NXP logo is never altered or tampered with. Here are some examples of the ways that the logo could be compromised, so you can understand how to avoid them.</p></div>
			<?php 

				$items = array(
					'Never substitute the company colors in any letters other than the ones shown in the logo colors guide.',
					'Never change the overlap position of the letter layers in any way.',
					'Never rotate the logo in any way.',
					'Never use the full-color logo in just one color (not even if it is one of the colors from the company palette).',
					'Never place the full-color logo on any background other than white.',
					'Never use any colors in the full-color logo other than the company ones specified.',
					'Never use one of the corporate colors for the solid logo.',
					'Never change the size or the position of the letters in any way.',
					'Never change the transparency of the letter’s overlap.',
					'Never allow text or symbols to run on top of the logo.',
					'Never place the full-color logo on a background shape or color.',
					'Never use the full-color logo as an outline.',
					'Never use combinations or blends of the company colors.',
					'Never encroach the clear space of the logo with any other names or words.',
					'Never change the shape of the characters or use different fonts.',
					'Never stretch or distort the logo.',
				);
				$counter = 0;

				foreach( $items as $item ) {

					$classes = array( 'one-fourth' );
					if ( $counter % 4 == 0) {
						$classes[] = 'first';
					}
					$classes = implode( ' ', $classes );

					$counter++;

					echo '<div class="' . $classes . '">';
					echo 	'<img src="/content/logo/never/' . $counter . '.jpg" />';
					echo 	'<p>' . $item . '</p>';
					echo '</div>';

				}

			?>
		</div>
	</div>
</section>