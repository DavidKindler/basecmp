
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
	<img src="/content/tables-graphs/header.jpg" alt="Header" />
	<h1><?php echo $cat;?> <br /><span><?php echo $type;?></span></h1>
</section>

<div class="site-inner">
	<div class="content-sidebar-wrap">
		<div class="content">
			<div class="entry-content">
				<div class="print-text-column">
					<p>Simplicity is the aim. Always strive to make your tables and graphs as easy to understand as possible.</p>
					<p>The main title bar of the heading is always 100% color. All other fields are tints of that color. For color tint usage in tables refer to the tint specifications on page 28.</p>
					<h3 class="tocable" data-toctitle="Diagram">Main heading diagram</h3>
					
					<table class="table-no-padding">
						<tr>
							<td>Font</td>
							<td>Avenir LT Std 85 Heavy</td>
						</tr>
						<tr>
							<td>Size</td>
							<td>9pt on 13.5ptbr</td>
						</tr>
						<tr>
							<td>Color</td>
							<td>
								White on darker colors<br />
								Black on softer colors
							</td>
						</tr>
					</table>
					
				</div>
				<div class="print-text-column">

					<h3>Sub-heading diagram</h3>
					<table class="table-no-padding">
						<tr>
							<td>Font</td>
							<td>Avenir LT Std 85 Heavy</td>
						</tr>
						<tr>
							<td>Size</td>
							<td>8pt on 13.5pt</td>
						</tr>
						<tr>
							<td>Color</td>
							<td>
								White on darker colors <br />
								Black on softer colors
							</td>
						</tr>
					</table>

					<h3>Body text diagram</h3>
					<table class="table-no-padding">
						<tr>
							<td>Font</td>
							<td>Avenir LT Std 45 Book</td>
						</tr>
						<tr>
							<td>Size</td>
							<td>8pt</td>
						</tr>
						<tr>
							<td>Leading</td>
							<td>13.5pt</td>
						</tr>
						<tr>
							<td>Color</td>
							<td>
								White on darker colors<br />
								Black on softer colors
							</td>
						</tr>
					</table>

				</div>
				<img class="aligncenter"  src="/content/tables-graphs/tables.jpg" />
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
					<p>Charts are a great way of communicating complex information quickly. Remember to keep it simple and make sure the layout is straightforward. Keep text to a minimum by avoiding overly long function names. The font size should also be easy to read.</p>
					<h3 class="tocable" data-toctitle="Chart">Adobe Illustrator organization chart</h3>
					<ul>
						<li>Always use black text on one of the colored boxes</li>
						<li>Keep design clean and aligned</li>
						<li>Font: &emsp;&emsp;&emsp;Avenir</li>
						<li>
							Preferred text sizes: <br />
							Function:	&emsp;16pt <br />
							Name:	&emsp;&thinsp;&emsp;11pt
						</li>
						<li>Preferred line thickness 3pt</li>
						<li>
							Don’t use more than four levels in one organization	chart. Only use the colors from the color specifications: <br />
							Level 1:	&emsp;NXP Orange
							(the assistant can also be marked in orange, the same as the top level manager, to highlight the association between the manager and the assistant) <br />
							Level 2:	&emsp;NXP Blue <br />
							Level 3:	&emsp;NXP Green <br />
							Level 4:	&emsp;Aqua
						</li>
					</ul>
				</div>
				<div class="print-text-column">
					<h3>PowerPoint organization chart</h3>
					<ul>
						<li>Always use black text on one of the colored boxes</li>
						<li>Keep design clean and aligned</li>
						<li>Font: &emsp;&emsp;&emsp;Arial</li>
						<li>
							Preferred text sizes: <br />
							Function:	&emsp;14pt<br />
							Name:	&emsp;&thinsp;&emsp;10pt
						</li>
						<li>Preferred line thickness 2.25pt</li>
						<li>
							Don’t use more than four levels in one organization chart. Only use the colors from the color specifications:<br />
							Level 1:	&emsp;NXP Orange<br />
							Level 2:	&emsp;NXP Blue<br />
							Level 3:	&emsp;NXP Green<br />
							Level 4:	&emsp;Aqua
						</li>
						<li>If needed its allowed to convert a PowerPoint organization chart to PDF, in this case the font Arial can be retained</li>
					</ul>
				</div>
				<img class="aligncenter"  src="/content/tables-graphs/powerpoint.jpg" />
			</div>
			<!--- .entry-content -->
		</div><!--- .content -->
	</div><!--- .content-sidebar-wrap -->
</div><!--- .site-inner -->