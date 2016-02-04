
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
	<img src="/content/merchandising/header.jpg" alt="Header" />
	<h1><?php echo $cat;?> <br /><span><?php echo $type;?></span></h1>
</section>

<div class="site-inner">
	<div class="content-sidebar-wrap">
		<div class="content">
			<div class="entry-content">
				<div class="print-text-column">
                  <p>Promotional items and premiums enable us to create unique and personal objects that strike a chord with particular audiences. We must take great care to ensure both the items themselves and the way they reflect our brand are consistent with our brand identity and Brand Positioning.</p>
                    <p>Promotional items include displays, CDs and one-offs. Premiums are gifts customized to bear the NXP logo, such as hats, pens and other small items.</p>
                    <h3>Logo</h3>
                    <p>Position the logo proudly. The logo must be in full-color on a white background except where a metallic background is more appropriate, in which case you should use the solid white or solid black logo. In the instance of the giveaway itself being of a colored background you should opt for
                    the solid white or solid black logo — this can often be the case when arranging two</p>
				</div>
				<div class="print-text-column">
                   <p>team’s shirts for sporting activities, for example. It must never be placed on top of a photograph.</p>
                    <p>To create brand impact or for easy recognition from a distance, you can choose to reduce the “clear space” around the logo and display the NXP logo larger.</p>
                    <h3>Design elements</h3>
                    <p>The multi-colored line and/or the multicolored band can be enlarged and used freely to make items more interesting, as in the examples pictured.</p>
				</div>
				<img class="alignleft" src="/content/merchandising/merch.jpg" />
			</div>
			<!--- .entry-content -->
		</div><!--- .content -->
	</div><!--- .content-sidebar-wrap -->
</div><!--- .site-inner -->