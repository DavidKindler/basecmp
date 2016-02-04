
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
					<p>
						Leaflets present crucial information about our technology and services in an easy to digest way. They are one of our most important tools for communication and must have a strong impact to stand out from our competitors. They should be concise, consistent, clear and memorable to maximize brand recognition.
					</p>

					<h3 class="tocable">Logo</h3>

					<p>The size of the logo should be based on the following formula:</p>

					<p>(Height + Width of Document) / 11 = NXP</p>

					<p>The position of the logo is determined by the size of the logo. The logo’s distance from the bottom of the cover should be the same as the logo’s height. The distance of the logo from the right of the cover should be 75% of the logo’s height.</p>

					<p>Never use the logo in running text. When the word NXP needs to be used in text (such as in this paragraph), you should use the same typeface, style and color as the rest of the text. Always use only upper case characters – never nxp or Nxp for example, unless you are referring to it in a URL (e.g. www.nxp.com).</p>
				</div>
				<div class="print-text-column">

					<h3>Headlines</h3>
					<p>
						Headlines always start with a capital letter, with all words following using lower case (apart from names or acronyms). 
					</p>

					<h3>Front cover types</h3>
					<p>
						Choose one of the following front cover types depending on the subject, market context and target audience.
					</p>

					<h3>Photography</h3>
					<p>
						For photographs, please go to the Marcom Shop. Never use photos unless you have secured the usage rights. When using
						photography, do not use more than two images.
					</p>

					<h3>Paper standard</h3>
					<p>
						We produce many leaflets and printed materials worldwide every year. To achieve consistency and efficiency, we have defined a paper standard for all offset printing on sheets. The standard is Magno from the supplier Sappi (in the US it is Magno Doll). You can view all of the specifications at www.sappi.co
					</p>

				</div>
			</div>
			<!--- .entry-content -->
		</div><!--- .content -->
	</div><!--- .content-sidebar-wrap -->
</div><!--- .site-inner -->

<div class="site-inner">
	<div class="content-sidebar-wrap">
		<div class="content">
			<br />
			<br />
			<br />
			<img class="aligncenter" src="/content/leaflets/leaflet.jpg" alt="Basic leaflet" />
		</div><!--- .content -->
	</div><!--- .content-sidebar-wrap -->
</div><!--- .site-inner -->

<div class="divider"></div>

<div class="site-inner">
	<div class="content-sidebar-wrap">
		<div class="content">
			<div class="entry-content">
				<div class="print-text-column">
					<h3 class="tocable">Typography</h3>
					<br />
					<h3>General typographic rules</h3>
					<ul>
						<li>Set on baseline grid of 4.5pt</li>
						<li>No automatic hyphenation</li>
						<li>Ligatures preferred</li>
						<li>Standard word and letter spacing,
							adjusted in headlines if required</li>
						<li>Tabs at start of columns</li>
						<li>Body text can be in 1, 2 or 3 columns,
							as long as it fits to the grid</li>
					</ul>

					<h3>Main headlines (Must be white)</h3>

					<table class="table-no-padding">
						<tr>
							Main headline 1 line
						</tr>
						<tr>
							<td>Font</td> 		<td>Avenir LT Std 85 Heavy</td>
						</tr>
						<tr>
							<td>Size</td> 		<td>33pt</td>
						</tr>
						<tr>
							<td>Leading</td> 	<td>40.5pt</td>
						</tr>
					</table>

					<table class="table-no-padding">
						<tr>
							Main headline 2 lines
						</tr>
						<tr>
							<td>Font</td> 		<td>Avenir LT Std 85 Heavy</td>
						</tr>
						<tr>
							<td>Size</td> 		<td>27pt</td>
						</tr>
						<tr>
							<td>Leading</td> 	<td>36pt</td>
						</tr>
					</table>

					<h3>Sub-heading (Must be NXP GRAY)</h3>

					<table class="table-no-padding">
						<tr>
							<td>Font</td> 		<td>Avenir LT Std 65 Medium</td>
						</tr>
						<tr>
							<td>Size</td> 		<td>20pt</td>
						</tr>
						<tr>
							<td>Leading</td> 	<td>27pt</td>
						</tr>
					</table>

					<h3>Introduction text</h3>

					<table class="table-no-padding">
						<tr>
							<td>Font</td> 		<td>Avenir LT Std 45 Book</td>
						</tr>
						<tr>
							<td>Size</td> 		<td>12pt</td>
						</tr>
						<tr>
							<td>Leading</td> 	<td>18pt</td>
						</tr>
						<tr>
							<td>Color</td> 	<td>Black</td>
						</tr>						
					</table>

				</div>
				<div class="print-text-column">
					<h3></h3>
					<br />
					<h3>Body text</h3>
					
					<table class="table-no-padding">
						<tr>
							<td>Font</td> 		<td>Avenir LT Std 45 Book</td>
						</tr>
						<tr>
							<td>Size</td> 		<td>9pt</td>
						</tr>
						<tr>
							<td>Leading</td> 	<td>13.5pt</td>
						</tr>
						<tr>
							<td>Color</td> 	<td>Black</td>
						</tr>						
					</table>

					<h3>Body text headings</h3>
					
					<table class="table-no-padding">
						<tr>
							Body text heading
						</tr>
						<tr>
							<td>Font</td> 		<td>Avenir LT Std 85 Heavy</td>
						</tr>
						<tr>
							<td>Size</td> 		<td>9pt</td>
						</tr>
						<tr>
							<td>Leading</td> 	<td>13.5pt</td>
						</tr>
						<tr>
							<td>Color</td> 	<td>Black</td>
						</tr>						
					</table>

					<h3>Bullets</h3>
					<p>
						You have a choice of dots, dashes or arrows to use as bullet points in brochures (see page 30). 
					</p>

					<h3>Additional items back cover</h3>

					<h3>Copyright information</h3>
					<p>Always place the copyright and trademarks text on the back cover.</p>

					<h3>URL</h3>
					<p>For the URL www.nxp.com on the back use the same color as the colored bar on the front.</p>

					<p>The white space on the left bottom corner
					may only be used for a Distributor logo.</p>
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
			<img class="aligncenter tocable" data-toctitle="Layout" src="/content/leaflets/layout-examples.jpg" alt="Leaflet layout examples" />
		</div><!--- .content -->
	</div><!--- .content-sidebar-wrap -->
</div><!--- .site-inner -->

<div class="divider"></div>

<div class="site-inner">
	<div class="content-sidebar-wrap">
		<div class="content">
			<img class="aligncenter tocable" data-toctitle="Grid front/back" src="/content/leaflets/grid.jpg" alt="Leaflet grid" />
		</div><!--- .content -->
	</div><!--- .content-sidebar-wrap -->
</div><!--- .site-inner -->
