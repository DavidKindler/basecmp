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
						This section is about posters, announcements and banners for internal and external use. It does not include posters for above-theline advertising, which are dealt with in the advertising rules.
					</p>
					<h3 class="tocable">Posters</h3>
					<p>Posters publicize product launches, events, programs, competitions and so on. Have them printed professionally in A3 size or larger and use them on walls and noticeboards. Posters may be supplied flat, rolled or folded (for example, as an insert in a magazine or folder).</p>
					<h3>Fixed elements</h3>
					<p>A poster always shows the NXP logo. For internal posters or posters with third parties such as distributors.</p>
					<h3>Photography</h3>
					<p>Use images from the Marcom Shop whenever possible. Make sure that the image is related to the headline and vice versa.</p>
				</div>
				<div class="print-text-column">
					<h3>logo</h3>
					<p>The size of the logo should be based on the following formula:
<br /><br />
(Height + Width of Document) / 11 = NXP
<br /><br />
Display the logo in company colors on a white background. If possible, position the logo in the bottom right of the poster.
The position of the logo is 1xN from the bottom and 75% of the height of N from the right.
<br /><br />
For the use on banners it might be appropriate to position the logo at the upper right corner where the position of the logo is 1xN from the top and 75% of the height of N from the right. Maintain a clear space as specified in the logo section.</p>
				</div>


			</div>
			<!--- .entry-content -->
		</div><!--- .content -->
	</div><!--- .content-sidebar-wrap -->
</div><!--- .site-inner -->

<div class="site-inner">
	<div class="content-sidebar-wrap">
		<div class="content">
			<img class="aligncenter" src="/content/posters/example-poster-banner.jpg" />
		</div><!--- .content -->
	</div><!--- .content-sidebar-wrap -->
</div><!--- .site-inner -->

<div class="divider"></div>

<div class="site-inner">
	<div class="content-sidebar-wrap">
		<div class="content">
			<div class="entry-content">
				<div class="print-text-column">
					<h3 class="tocable">Layout</h3>
					<p>You should strive for a bright and dynamic layout.</p>
					<h3>Tagline</h3>
					<p>Do not use the above-the-line tagline on posters, announcements or banners, except for approved advertising.</p>
					<h3>Logo</h3>
					<p>The size of the logo should be based on the following formula:
					<br /><br />
					(Height + Width of Document) / 11 = NXP
					<br /><br />
					The position of the logo is determined by the size of the logo. The logo’s distance from the bottom of the cover should be the same as the logo’s height. The distance of the logo from the right of the cover should be 75% of the logo’s height.
					<br /><br />
					Never use the logo in running text. When the word NXP needs to be used in text (such as in this paragraph), you should use the same typeface, style and color as the rest of the text. Always use only upper case characters – never nxp or Nxp for example, unless you are referring to it in a URL (e.g. www.nxp.com).</p>
					<h3>color</h3>
					<p>Consult the standard color palette in the Color section.</p>
				</div>
				<div class="print-text-column">
					<h3>Paper standard</h3>
					<p>We produce many brochures and printed materials worldwide every year. To achieve consistency and efficiency, we have defined a paper standard for all offset printing on sheets. The standard is Magno from the supplier Sappi (in the US it is Magno Doll). You can view all of the specifications at www.sappi.com/Magno. You may use matte vinyl for banners.</p>
					<h3>Typography</h3>
					<p>Main headlines
					Always use Avenir LT Std 85 Heavy, for the main headlines on a poster.
					<br /><br />
					Sub-headings
					Always use Avenir LT Std 65 Medium, for the sub-headings on a poster.
					<br /><br />
					Additional text
					Always use Avenir LT Std 45 Book, for any additional text on a poster.
					</p>
					<h3>Colored bars</h3>
					<p>If colored bars are used as background for text in the design of the poster please refer to the specifications as shown in the brochure cover section of this guideline document.</p>
				</div>
			</div>
			<!--- .entry-content -->
		</div><!--- .content -->
	</div><!--- .content-sidebar-wrap -->
</div><!--- .site-inner -->

<div class="site-inner">
	<div class="content-sidebar-wrap">
		<div class="content">
			<img class="aligncenter" src="/content/posters/example-paper.jpg" />
		</div><!--- .content -->
	</div><!--- .content-sidebar-wrap -->
</div><!--- .site-inner -->
