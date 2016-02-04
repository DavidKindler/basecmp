
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
						Brochures present information about our company, products and services. 
						They are one of the most important marketing tools we have. 
						ales, marketing or company brochures must all present a cohesive marketing message by having one look and feel. 
						We will achieve this by using a consistent layout, application of colors and use of elements for maximum brand impact. 
						The purpose of these guidelines is to show you how to apply our brand identity to brochures. 
						Use the structure, style and content of our communications as defined in this document. 
						Apply the communication elements, principles and signature of our brand identity to achieve inspiring and effective brochures.						
					</p>

					<h3 class="tocable">Use of color</h3>
					<ul>
						<li>Use color headlines for emphasis and clarity. Use one color for headlines throughout a section unless differentiating contents</li>
						<li>For stories within stories, use colored text blocks to separate and organize information</li>
						<li>For shading in tables, diagrams and charts you may use lower percentages of the colors in the palette. Consult the color guidelines earlier in this document for more information</li>
					</ul>
				</div>
				<div class="print-text-column">
					<h3>Footer</h3>
					<p>
						Always start the footer with NXP, then brochure title and then if relevant the sub-section/chapter of the brochure.
					</p>

					<h3>Photography</h3>
					<p>
						To represent our company style visually, all photographs should be dynamic and colorful. Please see the photographic style guidelines earlier in this document.
					</p>
					<h3>Color block</h3>
					<p>
						The main design element besides the headline and photo is the distinctive colored block. The color block always overlaps the photo at 50% transparency, creating synergy in design with the overlapping in the logo.
					</p>
					<h3>Paper standard</h3>
					<p>
						We produce many brochures and printed materials worldwide every year. To achieve consistency and efficiency, we have defined a paper standard for all offset printing on sheets. The standard is Magno from the supplier Sappi (in the US it is Magno Doll). You can view all of the specifications at www.sappi.com/Magno. 
						An example for brochure use is Sappi Magno 250g for the cover and 170g for the inside pages.
						<br />
						<br />
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
			<img class="aligncenter" src="/content/brochures/spreads.jpg" alt="Spreads" />
		</div><!--- .content -->
	</div><!--- .content-sidebar-wrap -->
</div><!--- .site-inner -->

<div class="divider"></div>

<div class="site-inner">
	<div class="content-sidebar-wrap">
		<div class="content">
			<div class="entry-content">
				<div class="print-text-column">
					<h3 class="tocable">Grid</h3>
					<p>
						This grid shows the fixed sizes and distances you must apply to all insert photography and typography variations. See Layout of Front Covers for the variations.
					</p>
					<p>
						Use the 12-column grid for a one-, two-, three- or four- column layout. Make sure the layout within a single  publication is consistent unless variation is required to differentiate information.				
					</p>
				</div>
				<div class="print-text-column">
					<h3>12-column grid margins:</h3>
					<div class="one-third first">
						<p>
						Top<br /> 		
						Bottom<br />
						Left<br /> 	
						Right<br /> 
						Gutter<br /> 	 
						</p>
					</div>
					<div class="one-third">
						12.0 mm<br />
						16.5 mm<br />
						12.0 mm<br />
						12.0 mm<br />
						4.0 mm<br />
					</div>
					<div class="one-third"></div>
					<div class="clearfix"></div>
					<br />
					<h3>Text frame width parameters:</h3>
					<div>
						<table class="print-table">
							<tr>
								<td></td><td>Minimum</td><td>Maximum</td>
							</tr>
							<tr>
								<td>Introduction text </td><td>6 columns </td><td>10 columns</td>
							</tr>										 		
							<tr>
								<td>Body text </td><td>3 columns</td><td>6 columns</td>
							</tr>									
						</table>	 
					</div>
				</div>
			</div>
			<!--- .entry-content -->
		</div><!--- .content -->
	</div><!--- .content-sidebar-wrap -->
</div><!--- .site-inner -->

<div class="site-inner">
	<div class="content-sidebar-wrap">
		<div class="content">
			<img class="aligncenter" src="/content/brochures/grid.jpg" alt="Solutions page grid" />
		</div><!--- .content -->
	</div><!--- .content-sidebar-wrap -->
</div><!--- .site-inner -->

<div class="divider"></div>

<div class="site-inner">
	<div class="content-sidebar-wrap">
		<div class="content">
			<div class="entry-content">
				<div class="print-text-column">
					<h3 class="tocable">Front covers</h3>
					<p>
						Brochure covers should be eye-catching and enticing. They must grab people’s attention and persuade them that reading this brochure would be a worthwhile use of their time. A good cover is a combination of an exciting
						headline and interesting photograph that are related and work well together. They must totally reflect the message that the brochure is trying to convey.
					</p>
					<h3>Logo</h3>
					<p>
						The logo only ever appears on the front cover. The size of the logo should be based on the following formula:
					</p>
					<p>
						(Height + Width of Document) / 11 = NXP
					</p>
					<p>
						The position of the logo is determined by the size of the logo. The logo’s distance from the bottom of the cover should be the same as the logo’s height. The distance of the logo from the right of the cover should be 75% of the logo’s height.
					</p>
					<p>
						Never use the logo in running text. When the word NXP needs to be used in text (such as in this paragraph), you should use the same typeface, style and color as the rest of the text. Always use only upper case characters – never nxp or Nxp for example, unless you are referring to it in a URL (e.g. www.nxp.com).
					</p>
					<p>
						The white space on the left bottom corner may only be used for a Distributor logo.
					</p>

					<img class="alignleft" src="/content/brochures/front-covers.jpg" alt="Front covers" />


					<h3>General typographic rules</h3>
					<ul>
						<li>Set on baseline grid of 4.5pt</li>
						<li>No automatic hyphenation</li>
						<li>Ligatures preferred</li>
						<li>Standard word and letter spacing, adjusted in headlines if required</li>
						<li>Tabs at start of columns</li>
					</ul>

					<h3>Main headlines (must be white)</h3>

					<table class="table-no-padding">
						<tr>
							<td>Small headline</td>
						</tr>
						<tr>
							<td>Font</td> 		<td>Avenir LT Std 85 Heavy</td>
						</tr>
						<tr>
							<td>Size</td> 		<td>33pt</td>
						</tr>
						<tr>
							<td>Leading</td> 	<td>39pt</td>
						</tr>
					</table>

					<h3>Sub-heading (must be 40% main color)</h3>
					<table class="table-no-padding">
						<tr>
							<td>Font</td> 		<td>Avenir LT Std 65 Medium</td>
						</tr>
						<tr>
							<td>Size</td> 		<td>20pt</td>
						</tr>
						<tr>
							<td>Leading</td> 	<td>24pt</td>
						</tr>
					</table>

					<h3 class="tocable">Colored bars</h3>
					<table class="table-no-padding">
						<tr>
							<td>Example A</td>
						</tr>
						<tr>
							<td>Height</td> 		<td>83mm</td>
						</tr>
						<tr>
							<td>Content</td> 		<td>4 lines</td>
						</tr>
					</table>

					<table class="table-no-padding">
						<tr>
							<td>Example B</td>
						</tr>
						<tr>
							<td>Height</td> 		<td>75mm</td>
						</tr>
						<tr>
							<td>Content</td> 		<td>3 lines</td>
						</tr>
					</table>

					<table class="table-no-padding">
						<tr>
							<td>Example C</td>
						</tr>
						<tr>
							<td>Height</td> 		<td>72mm</td>
						</tr>
						<tr>
							<td>Content</td> 		<td>3 lines</td>
						</tr>
					</table>

				</div>
				<div class="print-text-column">
				<h3>headlines</h3>
				<p>The objective is to grab the reader’s interest. We recommend that your headline is never longer than two lines. Remember that translated texts are usually 25-40% longer.</p>

				<h3>Sub-headings</h3>
				<p>The sub-heading should inform you exactly what the brochure contains. We suggest a sub-heading is never more than three lines long (and where applicable should start with the Naming Architecture e.g. in the case of a product name).</p>

				<h3>Photography</h3>
				<p>Brochure covers use one single photograph. Depending on subject, market context and target audience it is possible to select from the photography levels thereby determining the emphasis of the message.</p>

				<h3>Tagline</h3>
				<p>Do not use the above-the-line tagline on below-the-line brochures.</p>
				<img class="alignleft" src="/content/brochures/tagline.jpg" alt="Tagline" />
				<br />
				<h3>Layout of front covers</h3>
				<p>
				There are four layout options for front covers as featured on the opposite page.
				</p>

				<h3>Main image</h3>
				<p>
				The main image always starts on a fixed point.
				</p>
				<h3>Bleed</h3>
				<p>
				The main image should bleed on the top or the side as shown – but never on three sides.
				</p>
				<h3>Grid</h3>
				<p>
				Always design to the grid. Positioning of the photographic and typographic elements must fit.
				</p>
				<h3>Colored bar</h3>
				<p>
				The length of the colored bar can vary as long as it fits on the grid. The width of the bar depends on the number of lines in the headline. The size of the overlap for the baseline of the photo should always remain 4 points high – regardless of the bar’s width.
				 </p>
				<h3>Headlines</h3>
				<p>
				Headlines always start with a capital letter, with all words following using lower case (apart from names or acronyms).
				</p>
				<img class="center" src="/content/brochures/headlines.jpg" alt="Headlines" />
				</div>
			</div>

			<!--- .entry-content -->
		</div><!--- .content -->

	</div><!--- .content-sidebar-wrap -->
</div><!--- .site-inner -->

<div class="site-inner">
	<div class="content-sidebar-wrap">
		<div class="content">
			<img class="aligncenter" src="/content/brochures/front-covers-2.jpg" alt="Typography on front-covers" />
		</div><!--- .content -->
	</div><!--- .content-sidebar-wrap -->
</div><!--- .site-inner -->

<div class="divider"></div>

<div class="site-inner">
	<div class="content-sidebar-wrap">
		<div class="content">
			<div class="entry-content">
				<div class="print-text-column">
					<h3 class="tocable">Layout back covers</h3>
					<p>
						The back cover contains spillover elements from the front cover. This gives every brochure a unified feel.
					</p>

					<h3>Photography</h3>
					<p>
					If the photograph on the front cover bleeds to the left, then the photograph should continue on the back cover. It should match the grid layout. The minimum width is 20mm and the maximum is 71.3mm.
					</p>
					<p>
					Alternatively, if the front cover photo doesn’t bleed to the left, then the photograph should not appear on the back.
					</p>
					<h3>Copyright information</h3>
					<p>
					Always place the copyright and trademarks text on the back cover.
					</p>
					<h3>URL</h3>
					<p>
					For the URL www.nxp.com on the back, use the same color as the colored bar on the front.
					</p>
				</div>
				<div class="print-text-column">
					<img class="alignleft" src="/content/brochures/back-cover.jpg" alt="Back cover" />
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
					<img class="alignleft" src="/content/brochures/inside-spreads.jpg" alt="Inside spreads" />
				</div>
				<div class="print-text-column">
					<h3 class="tocable">Inside spreads</h3>
					<p>
						The layout should be interesting and eyecatching. When arranging text, images and elements, remember that your viewer’s attention will be caught and held by the composition that’s legible and easy to experience.
					</p>
					<h3>Style in your layout</h3>
					<p>Achieve our style with layouts that:
					</p>
					<ul>
						<li>Are open and uncluttered, using only those elements essential to the message</li>
						<li>Lead the viewer to the essence of the message</li>
						<li>Grab and hold attention</li>
						<li>Have variety and a hint of the unexpected</li>
						<li>Use headlines that are short, clear and personal, inspiring belief in our message</li>
						<li>Do not place text wholly or partially on photographs</li>
					</ul>
					<h3>Creating flow in the brochure</h3>
					<p>
						The NXP identity style used effectively can divide your brochure up into effective sections. Use variety in styles throughout the brochure to make it easier to read. Here are
						the different types available to you:
					</p>
					<h3>Opening spreads – inside front cover and first page</h3>
					<p>
						An opening spread introduces the subject of the brochure to the reader. It can include a welcome or introduction text, photographs and an explanation or overview of contents.
					</p>
					<h3>Section spreads – to introduce a main section/topic</h3>
					<p>
						To create surprise, variety and a strong impact within a larger brochure, introduce a main section with a large headline supported by a large photograph and a short text.
					</p>
					<h3>Spreads with headline</h3>
					<p>
						Many brochure spreads will use a large headline. Create layouts that are open, dynamic and colorful in a way that creates rhythm and variety. 
					</p>
					<h3>General spreads</h3>
					<p>
						Most brochure spreads will have a balance of text and photographs. Give one element prominence. Use white space and color to create an elegant layout and the desired reading pattern.
					</p>
					<h3>Text-rich spreads</h3>
					<p>
						Even on spreads that carry a lot of text, essential for many types of brochure, there are various ways to make the content accessible and create breathing spaces and variety.
					</p>
					<h3>Bullets</h3>
					<p>
						You have a choice of dots, dashes or arrows to use as bullet points in brochures.
					</p>
					<h3>Footer</h3>
					<p>
						Always start the footer with NXP, then brochure title and then if relevant the sub-section/chapter of the brochure.
					</p>
				</div>
			</div>

			<!--- .entry-content -->
		</div><!--- .content -->

	</div><!--- .content-sidebar-wrap -->
</div><!--- .site-inner -->

<br />
<br />

<div class="site-inner">
	<div class="content-sidebar-wrap">
		<div class="content">
			<div class="entry-content">
				<div class="print-text-column">
					<h3>General typographic rules</h3>
						<ul>		
							<li>Set on baseline grid of 4.5pt</li>
							<li>No automatic hyphenation</li>
							<li>Ligatures preferred</li>
							<li>Standard word and letter spacing, adjusted in headlines if required</li>
							<li>Tabs at start of columns</li>
						</ul>
					<h3>Main Headlines</h3>

					<table class="table-no-padding typography">
						<tr>
							Main headline 1 Small
						</tr>
						<tr>
							<td>Font</td> 		<td>Avenir LT Std 85 Heavy</td>
						</tr>
						<tr>
							<td>Size</td> 		<td>27pt</td>
						</tr>
						<tr>
							<td>Leading</td> 		<td>31.5pt</td>
						</tr>
						<tr>
							<td>Color</td> 		<td>White on colored bar</td>
						</tr>						
					</table>

					<table class="table-no-padding">
						<tr>
							Main headline 2 medium
						</tr>
						<tr>
							<td>Font</td> 		<td>Avenir LT Std 85 Heavy</td>
						</tr>
						<tr>
							<td>Size</td> 		<td>33pt</td>
						</tr>
						<tr>
							<td>Leading</td> 		<td>40.5pt</td>
						</tr>
						<tr>
							<td>Color</td> 		<td>White on colored bar</td>
						</tr>						
					</table>

					<table class="table-no-padding">
						<tr>
							Main headline 3 large
						</tr>
						<tr>
							<td>Font</td> 		<td>Avenir LT Std 85 Heavy</td>
						</tr>
						<tr>
							<td>Size</td> 		<td>45pt</td>
						</tr>
						<tr>
							<td>Leading</td> 		<td>49.5pt</td>
						</tr>
						<tr>
							<td>Color</td> 		<td>White on colored bar</td>
						</tr>						
					</table>

					<table class="table-no-padding">
						<tr>
							Main headline 4 extra large
						</tr>
						<tr>
							<td>Font</td> 		<td>Avenir LT Std 85 Heavy</td>
						</tr>
						<tr>
							<td>Size</td> 		<td>56pt</td>
						</tr>
						<tr>
							<td>Leading</td> 		<td>58.5pt</td>
						</tr>
						<tr>
							<td>Color</td> 		<td>White on colored bar</td>
						</tr>						
					</table>

					<h3>Text Block Headings</h3>
					
					<table class="table-no-padding">
						<tr>
							Text block main heading
						</tr>
						<tr>
							<td>Font</td> 		<td>Avenir LT Std 95 Black</td>
						</tr>
						<tr>
							<td>Size</td> 		<td>13pt</td>
						</tr>
						<tr>
							<td>Leading</td> 		<td>18pt</td>
						</tr>
						<tr>
							<td>Color</td> 		<td>White on soft and darker colors<br />
												Black on soft and lighter colors<br />
												(see the color palette)</td>
						</tr>						
					</table>										

					<table class="table-no-padding">
						<tr>
							Text block heading
						</tr>
						<tr>
							<td>Font</td> 		<td>Avenir LT Std 85 Heavy</td>
						</tr>
						<tr>
							<td>Size</td> 		<td>9pt</td>
						</tr>
						<tr>
							<td>Leading</td> 		<td>13.5pt</td>
						</tr>
						<tr>
							<td>Color</td> 		<td>White on soft and darker colors<br />
												Black on soft and lighter colors<br />
												(see the color palette)</td>
						</tr>						
					</table>


					<h3>Captions</h3>
					
					<table class="table-no-padding">
						<tr>
							Caption heading
						</tr>
						<tr>
							<td>Font</td> 		<td>Avenir LT Std 85 Heavy</td>
						</tr>
						<tr>
							<td>Size</td> 		<td>7pt</td>
						</tr>
						<tr>
							<td>Leading</td> 		<td>13.5pt</td>
						</tr>
						<tr>
							<td>Color</td> 		<td>As main headline</td>
						</tr>						
					</table>										

					<table class="table-no-padding">
						<tr>
							Caption text
						</tr>
						<tr>
							<td>Font</td> 		<td>Avenir LT Std 35 Light</td>
						</tr>
						<tr>
							<td>Color</td> 		<td>As main headline</td>
						</tr>						
					</table>	

				</div>

				<div class="print-text-column">
					<h3>Sub-heading</h3>
					
					<table class="table-no-padding">
						<tr>
							<td>Font</td> 		<td>Avenir LT Std 65 Medium</td>
						</tr>
						<tr>
							<td>Size</td> 		<td>20pt</td>
						</tr>
						<tr>
							<td>Leading</td> 	<td>22.5pt</td>
						</tr>
						<tr>
							<td>Color</td> 		<td>NXP Gray</td>
						</tr>						
					</table>

					<h3>Introduction text</h3>
					
					<table class="table-no-padding">
						<tr>
							Introduction text 1 Small
						</tr>
						<tr>
							<td>Font</td> 		<td>Avenir LT Std 45 Book</td>
						</tr>
						<tr>
							<td>Size</td> 		<td>9.5pt</td>
						</tr>
						<tr>
							<td>Leading</td> 	<td>13.5pt</td>
						</tr>
						<tr>
							<td>Color</td> 		<td>As main headline</td>
						</tr>						
					</table>

					<table class="table-no-padding">
						<tr>
							Introduction text 2 large
						</tr>
						<tr>
							<td>Font</td> 		<td>Avenir LT Std 45 Book</td>
						</tr>
						<tr>
							<td>Size</td> 		<td>12pt</td>
						</tr>
						<tr>
							<td>Leading</td> 	<td>22.5pt</td>
						</tr>
						<tr>
							<td>Color</td> 		<td>Black
												</td>
						</tr>						
					</table>

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
							<td>Color</td> 		<td>(White on soft and darker colors)
													Indent after bullet 3mm</td>
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
							<td>Color</td> 		<td>As main headline</td>
						</tr>						
					</table>

					<h3>Quotes</h3>
					
					<table class="table-no-padding">
						<tr>
							<td>Font</td> 		<td>Avenir LT Std 95 Black Oblique</td>
						</tr>
						<tr>
							<td>Size</td> 		<td>16pt</td>
						</tr>
						<tr>
							<td>Leading</td> 	<td>22.5pt</td>
						</tr>
						<tr>
							<td>Color</td> 		<td>As main headline<br />
													Indent after " 3mm
												</td>
						</tr>						
					</table>

					<h3>Footer</h3>
					
					<table class="table-no-padding">
						<tr>
							Page number
						</tr>
						<tr>
							<td>Font</td> 		<td>Avenir LT Std 85 Heavy</td>
						</tr>
						<tr>
							<td>Size</td> 		<td>7pt</td>
						</tr>
						<tr>
							<td>Color</td> 		<td>Black
												</td>
						</tr>						
					</table>

					<table class="table-no-padding">
						<tr>
							NXP
						</tr>
						<tr>
							<td>Font</td> 		<td>Avenir LT Std 85 Heavy</td>
						</tr>
						<tr>
							<td>Size</td> 		<td>6pt</td>
						</tr>
						<tr>
							<td>Color</td> 		<td>Black
												</td>
						</tr>						
					</table>

					<table class="table-no-padding">
						<tr>
							Brochure headline
						</tr>
						<tr>
							<td>Font</td> 		<td>Avenir LT Std 35 Light</td>
						</tr>
						<tr>
							<td>Size</td> 		<td>6pt</td>
						</tr>
						<tr>
							<td>Color</td> 		<td>Black
												</td>
						</tr>						
					</table>

					<table class="table-no-padding">
						<tr>
							Sub-section/chapter
						</tr>
						<tr>
							<td>Font</td> 		<td>Avenir LT Std 35 Light</td>
						</tr>
						<tr>
							<td>Size</td> 		<td>6pt</td>
						</tr>
						<tr>
							<td>Color</td> 		<td>Color of colored bar or text color
												</td>
						</tr>						
					</table>															

				</div>
			</div>

			<!--- .entry-content -->
		</div><!--- .content -->

	</div><!--- .content-sidebar-wrap -->
</div><!--- .site-inner -->

<div class="site-inner">
	<div class="content-sidebar-wrap">
		<div class="content">
			<img class="aligncenter" src="/content/brochures/typography-colored-bars.jpg" alt="Typography and use of colored bars" />
		</div><!--- .content -->
	</div><!--- .content-sidebar-wrap -->
</div><!--- .site-inner -->

<div class="divider"></div>

<div class="site-inner">
	<div class="content-sidebar-wrap">
		<div class="content">
			<div class="entry-content">
				<div class="print-text-column">
					<h3 class="tocable" data-toctitle="Other">Other formats – front covers</h3>
					<br />
					<h3>Logo size</h3>
					<p>
						The logo only ever appears on the front cover. The size of the logo should be based on the following formula:
					</p>
					<p>
						(Height + Width of Document) / 11 = NXP
					</p>
					<h3>Logo position</h3>
					<p>
						The position of the logo is determined by the size of the logo. The logo’s distance from the bottom of the cover should be the same as the logo’s height. The distance of the logo from the right of the cover should be 75% of the logo’s height.
					</p>

					<h3>Margins</h3>
					<table class="table-no-padding typography">
						<tr>
							<td>A5 to A4=</td> <td>Top</td> 		<td>12mm</td>
						</tr>
						<tr>
							<td></td> <td>Bottom</td> 		<td>16.5mm</td>
						</tr>
						<tr>
							<td></td> <td>Inside</td> 		<td>12mm</td>
						</tr>
						<tr>
							<td></td> <td>Outside</td> 		<td>12mm</td>
						</tr>																							
					</table>

					<table class="table-no-padding typography">
						<tr>
							<td>A4 to A3=</td> <td>Top</td> 		<td>16mm</td>
						</tr>
						<tr>
							<td></td> <td>Bottom</td> 		<td>20.5mm</td>
						</tr>
						<tr>
							<td></td> <td>Inside</td> 		<td>16mm</td>
						</tr>
						<tr>
							<td></td> <td>Outside</td> 		<td>16mm</td>
						</tr>																							
					</table>														

				</div>

				<div class="print-text-column">
						<h3>Other formats – back covers</h3>
						<br />
						<p>
							The back cover contains spillover elements from the front cover. This gives every brochure a unified feel.
						</p>

						<h3>Photography</h3>
						<p>
							The photograph from the front should overlap on the back. The length of it on the back cover can vary as long as it fits into the grid (maximum of 71.3mm).
						</p>

						<h3>Copyright information</h3>
						<p>
								Always place the copyright and trademarks text on the back cover.
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
			<img class="aligncenter" src="/content/brochures/formats.jpg" alt="Different formats" />
		</div><!--- .content -->
	</div><!--- .content-sidebar-wrap -->
</div><!--- .site-inner -->
