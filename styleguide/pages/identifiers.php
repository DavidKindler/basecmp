
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
					<h3>Program and project identifiers</h3>
<p>Logo design for products or projects that are being used for external communications is not allowed without express permission from Corporate Communications & Branding. For internal communications however it is sometimes necessary to develop a recognizable style for a certain kind of program or project.</p>

<p>For that reason it is allowed to develop a so called program identifier. The identifier must be constructed with the basic ingredients, Avenir font, and color from the defined palette (with the exception of the primary colors) of the NXP house style. It is a typographic construction of a name, with colored emphasis on a single character or if
possible separate word. Always align with the Corporate Communications & Branding department on identifiers.</p>

				</div>
				<div class="print-text-column">
                    <p>For identifiers used on nxp.com colors are defined to indicate the functionality of specific sections.</p>

                    <p>
                        <ul>
                            <li>Green for support</li>
                            <li>Orange for products</li>
                            <li>Blue for applications</li>
                        </ul>
                    </p>
                    <p>Contact brand.support@nxp.com for questions and support.</p>
                    <p>See example below for a support related identifier.</p>
                    <img class="alignleft" src="/content/identifiers/corner.jpg" />
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
                <img class="aligncenter" src="/content/identifiers/identifier.jpg" />
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
                <img class="aligncenter" src="/content/identifiers/blackwhite.jpg" />
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
                <img class="aligncenter" src="/content/identifiers/maximum.jpg" />
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
                <img class="aligncenter" src="/content/identifiers/maximumcolor.jpg" />
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
                <img class="aligncenter" src="/content/identifiers/dont.jpg" />
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
                <h3>Position identifier</h3>
                <p>The position and the size of the identifier is determined by the size of the NXP logo. The size of the NXP logo is based on the size of the document. To make this we use the following formula: ( Height + Width of document ) / 11 = NXP</p>
                <img class="aligncenter" src="/content/identifiers/position.jpg" />
            </div>
            <!--- .entry-content -->
        </div><!--- .content -->
    </div><!--- .content-sidebar-wrap -->
</div><!--- .site-inner -->
