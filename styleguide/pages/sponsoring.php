
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
					<h3 class="tocable">General advice</h3>
                    <p>Sponsoring is a branding tool and to use it effectively our logo must always have a prominent place in any sponsoring and our brand positioning should be relevant. Our messaging should be supported totally by the sponsorship.</p>

                    <p>Apart from the sponsoring in the Global Marketing programs we do not pro-actively search out sponsoring programs. Sponsorship is not a key marketing tool for NXP.</p>

                    <p>When evaluating a sponsorship please ask the following questions:
                    <ul>
                    <li>Which business objectives will be served by the sponsorship?</li>
                    <li>What target audience are we trying to reach?</li>
                    <li>How visible will our brand be relative to other sponsors?</li></ul>
                    </p>

				</div>
				<div class="print-text-column">
                    <ul>
                        <li>What’s the additional effort involved (people and materials) in order for the sponsoring to have an impact? </li>
                        <li>Is there any risk that could give rise to negative publicity? </li>
                    </ul>
                    <p>Sponsoring will always require additional marketing efforts so:</p>
                    <ul>
                        <li>When sponsoring a sports event we need to leverage and set up hosting for customers and stakeholders. </li>
                        <li>If you are sponsoring a university event make sure we can do a presentation, are on jury or otherwise actively participate in person. </li>
                        <li>When sponsoring any kind of community event, see if employees can actively contribute investing spare time and make sure our logo banners are visible. </li>
                        <li>When sponsoring a technical conference we should contribute through presentations, speeches or participation on panels. </li>
                    </ul>


				</div>
					<img class="aligncenter" src="/content/sponsoring/sponsoring.jpg" />
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
                <h3 class="tocable">Logo</h3>
                <div class="print-text-column">
                    <p>Display the NXP logo at all sponsorship events in such a way that it stands out as much as possible from the logos of other companies. The size of the logo depends on the space available and the size of other companies’ trademarks and logos.</p>

                    <p>The logo guidelines should be followed in full for all applications of NXP sponsorship. In circumstances where you need to create brand impact or for easier recognition from a distance, you can choose to reduce the “clear space” around the logo and display the NXP logo larger. For example, on advertising boards at stadiums (see picture) where the logo has to be highly visible to television cameras, a special clear space has been devised to get the logo as large as possible.</p>

                </div>
                <div class="print-text-column">
                   <p>Always use the full-color logo unless the background color cannot be white. In this instance use the solid logo in one of the accent colors (see guidelines on page 17).</p>

 <img class="aligncenter" style="margin-top:38px;" src="/content/sponsoring/soccer.jpg" />
                </div>

            </div>
            <!--- .entry-content -->
        </div><!--- .content -->
    </div><!--- .content-sidebar-wrap -->
</div><!--- .site-inner -->
