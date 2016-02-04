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
	<a href="/downloads/nxp-font-package.zip" title="Download logo package" class="general-cta grey-cta">Download <br /><span>font package</span></a>
</section>

<div class="site-inner">
	<div class="content-sidebar-wrap">
		<div class="content">
			<div class="entry-content">

				<p>Avenir is our company font. It has been chosen for its high legibility and perfect fit to our logo. You must use Avenir in all products to ensure worldwide consistency in our identity. The only exception to this rule is in the case of company templates: letters, financial documents, reports, PowerPoint etc. In these cases you should use the Arial font (it will be embedded within the template for you). This is to avoid copyright infringement and ensure that the documents can be read by external parties.</p>
			
				<div class="table table-equal">
					<ul>
						<li>
							<h3 class="tocable">About Avenir</h3>
							<p>Avenir is unusual in that it has font families (weights) that are similar, but each is designed for a different purpose. For example, Book is most appropriate for text blocks, while the Light is better for adding a contrast element to a heavier weight. The various weight selections of the Avenir family also allow for optimal results under varied resolutions.</p>
							<h3>Copyright of a font</h3>
							<p>NXP have bought the usage rights of the Avenir font for selected staff worldwide. But this does not allow you to ever give the font family to third parties. This would be an infringement of the copyright law. NXP employees can apply for a font licence by contacting your regional IT helpdesk. Please state your reason for applying. Agencies must purchase their own font license. Any agency or printer producing collateral for NXP must buy the usage rights of the font themselves.</p>
						</li>
						<li>
							<?php

								$fonts = array(
									'Avenir Light',
									'Avenir Light Oblique',
									'Avenir Book',
									'Avenir Book Oblique',
									'Avenir Roman',
									'Avenir Roman Oblique',
									'Avenir Medium',
									'Avenir Medium Oblique',
									'Avenir Heavy',
									'Avenir Heavy Oblique',
									'Avenir Black',
									'Avenir Black Oblique',
								);

								$counter = 0;
								foreach( $fonts as $font ) {

									$classes = array( 'one-half' );
									if ( $counter % 2 == 0 ) {
										$classes[] = ' first';
									} 
									$classes[] = strtolower( str_replace( ' ', '-', $font ) );
									$classes = implode( ' ', $classes );

								?>
									<div class="<?php echo $classes; ?>">
										<p class="spaced"><?php echo $font; ?></p>
									</div>
								<?php
									$counter++;
								}

							?>
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
							<img src="/content/typography/font-sizes.png" alt="Font sizes" />
						</li>
						<li>
							<h3 class="tocable">Font size</h3>
							<p>Font size does play a very important role in our digital branding. Not everything that we display on our website has to be oversized. Headings or the important notes can be of the bigger size but the rest have to be well maintained and should look decent enough for readers to come in and read. It has to be like a visual treat for the readers. So, it’s important that you go with a proper font size that doesn’t really give a bad look on your website.</p>
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
							<h3 class="tocable">Leading</h3>
							<p>Leading does make a difference. No reader will be willing to read a paragraph that is never going to end. And more importantly, there has to be leading for readers to feel comfortable reading the post. Whenever, you find a post that didn’t follow leading, more are the chances that you will be lost reading midway. It isn’t a proper way to maintain a website.</p>
						</li>
						<li><img src="/content/typography/leading.png" alt="Leading" /></li>
					</ul>
				</div><!-- .table -->

			</div><!--- .entry-content -->
		</div><!--- .content -->
	</div><!--- .content-sidebar-wrap -->
</div><!--- .site-inner -->

<div class="divider"></div>

<?php

	$fonts = array(
		'avenir-light',
		'avenir-book',
		'avenir-roman',
		'avenir-medium',
		'avenir-heavy',
		'avenir-black',
	);

	foreach( $fonts as $font ) {
?>
		<div class="site-inner">
			<div class="content-sidebar-wrap">
				<div class="content">
					<div class="entry-content <?php echo $font; ?>">
						<p><?php echo strtoupper( str_replace( '-', ' ', $font ) ); ?></p>
						<p><span class="p30">ABCDEFGHIJKLMNOPQRSTUVWXYZ<br />abcdefghijklmnopqrstuvwxyz<br />0123456789</span><br /><span class="p12">&#192;&#193;&#194;&#195;&#196;&#197;&#198;&#199;&#200;&#201;&#202;&#203;&#204;&#205;&#206;&#207;&#208;&#209;&#210;&#211;&#212;&#213;&#214;&#216;&#217;&#218;&#219;&#220;&#221;&#222;ŁOEŠŸŽ&#223;&#224;&#225;&#226;&#227;&#228;&#229;&#231;&#232;&#233;&#234;&#235;&#236;&#237;&#238;&#239;&#240;&#241;&#242;&#243;&#244;&#245;&#246;&#248;&#249;&#250;&#251;&#252;&#253;&#254;&#255;ıłoešž<br />&#162;&#163;&#164;&#165;€#$%1⁄41⁄23⁄4⁄+&lt;=&gt;^|~&#166;&#172;&#177;&#215;&#247;ΔΩμπ∂ΠΣ−&#183;√∞∫≈≠≤≥◊&#176;&amp;()/[\]{}*@&#167;&#169;&#174;&#182;†‡•™</span></p>
					</div><!--- .entry-content -->
				</div><!--- .content -->
			</div><!--- .content-sidebar-wrap -->
		</div><!--- .site-inner -->

		<div class="divider"></div>
<?php
	}
?>

<div class="site-inner">
	<div class="content-sidebar-wrap">
		<div class="content">
			<div class="entry-content">
		
				<div class="table table-equal">
					<ul>
						<li>
							<h3 class="tocable">Bullets</h3>
							<p>There are three types of bullet points available to you in the NXP house style: dots, dashes and arrows. These are interchangeable and can be used in documents as you see fit. However, you must always use them consistently. To insert them in Microsoft programs, click 'Format' on the toolbar, select 'Bullets and numbering' and then choose the bullet you wish to use. For agencies using Adobe Indesign (Mac and PC), do the following:</p>
						</li>
						<li>
							<p>Dots - Select the Avenir LT Std font and press Alt '8'<br />&emsp;&#8226; Example text</p>
							<p>Dashes - Select the Avenir LT Std font and press Alt '-'<br />&emsp;&#8211; Example text</p>
							<p>Arrows - Select the Wingdings 3 font and press '}'<br />&emsp;<span class="wingdings-3">}</span> Example text</p>
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

				<h3 class="tocable">Foreign fonts</h3>
				<p>When using text in any printed collateral in Japanese, Chinese or Korean, please use the following fonts:</p>
		
				<div class="one-third first">
					<p class="aligncenter">Japanese: DFPHSGothicCID</p>
					<img class="aligncenter" src="/content/typography/font-japanese.png" alt="Japanese font" />
				</div>

				<div class="one-third">
					<p class="aligncenter">Chinese: STHeiti</p>
					<img class="aligncenter" src="/content/typography/font-chinese.png" alt="Chinese font" />
				</div>

				<div class="one-third">
					<p class="aligncenter">Korean: HYGothic</p>
					<img class="aligncenter" src="/content/typography/font-korean.png" alt="Korean font" />
				</div>

			</div><!--- .entry-content -->
		</div><!--- .content -->
	</div><!--- .content-sidebar-wrap -->
</div><!--- .site-inner -->


