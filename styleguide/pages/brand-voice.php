
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

<section class="general-section brand-voice-section">
	<img src="/content/brand-voice/brand-voice.jpg" alt="Brand voice" />
	<div class="entry-content entry-content-left">
		<p>Our company continues to evolve from being a leading semiconductors manufacturer into the thought leader for Secure Connections for a Smarter World. We’ve moved away from purely communicating about products and technologies and have made the shift to taking part in - and often leading - the conversations about the solutions needed to meet the challenges today’s world presents us.</p>
		<p>NXP's Brand Voice has therefore also evolved to better address the different levels of our target audience and become one of ‘telling stories’. Stories in which we express our vision and how technology connects to the human experience and how we contribute to provide solutions for the smarter world. And the better we tell our stories, the more we connect with the people that inspire us; our customers, our peers and the business community. Our stories must reflect our passion and personality. They need to be fresh, engaging, inspiring, connected to everyday life and show how we can help our customers realize their vision of the smarter world.</p>
	</div>
</section>

<section class="general-section">
	<div class="entry-content entry-content-wide" style="padding: 0;">
		<img class="fill" src="/content/brand-voice/storytelling.jpg" alt="Storytelling" />
	</div>
</section>