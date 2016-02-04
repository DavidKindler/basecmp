
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
	<img src="/content/press/header.jpg" alt="Header" />
	<h1><?php echo $cat;?> <br /><span><?php echo $type;?></span></h1>
</section>

<div class="site-inner">
	<div class="content-sidebar-wrap">
		<div class="content">
			<div class="entry-content">
				<div class="print-text-column">
                <p>A variety of press materials are available to use for external communications with the media and industry/market analysts. It is important that we show consistency across the press materials produced to reinforce the NXP brand identity. The following items have been identified as the most frequently used press materials: biography, company profile, press releases, backgrounder and press kit folders.</p>
                <h3>Press release</h3>
                <p>The press release should tell a story about a product, technology or business agreement. It should clearly explain how NXP is providing more versatility for customers.</p>
				</div>
				<div class="print-text-column">
                   <p>All press releases must use the approved NXP template. Title is centered, in bold, Arial 14 point. Sub-heading is centered, in italics, Arial 12 point. Press release body text is leftjustified, Arial 10 point</p>
                   <img class="alignleft" src="/content/press/press.jpg" />
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
                <img class="aligncenter" src="/content/press/press-2.jpg" />
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
                <img class="aligncenter" src="/content/press/press-3.jpg" />
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
                <img class="aligncenter" src="/content/press/press-4.jpg" />
            </div>
            <!--- .entry-content -->
        </div><!--- .content -->
    </div><!--- .content-sidebar-wrap -->
</div><!--- .site-inner -->