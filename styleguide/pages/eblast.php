
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
					<p>E-mails are an efficient, cost-effective way of mass-communication. You should use them as newsletters to keep your audience informed or to highlight new product offers.</p>
					<p>Always use the standard template with all the key elements and follow the guidelines below.</p>

				</div>
				<div class="print-text-column">
					<h3>Copy</h3>
					<p>The number of people who open an e-mail can be low. You can increase the number of readers with an interesting subject line that encourages people to open the e-mail. The headline and body copy should also be very short and to the point. If more information is needed, then it should be in a linked webpage.</p>

				</div>
				<img class="alignleft leftfix" src="/content/eblast/eblast.jpg" />
			</div>
			<!--- .entry-content -->
		</div><!--- .content -->
	</div><!--- .content-sidebar-wrap -->
</div><!--- .site-inner -->
