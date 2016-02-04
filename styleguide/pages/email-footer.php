
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
	<img src="/content/email-footer/header.jpg" alt="Header" />
	<h1><?php echo $cat;?> <br /><span><?php echo $type;?></span></h1>
</section>

<div class="site-inner">
	<div class="content-sidebar-wrap">
		<div class="content">
			<div class="entry-content">
				<p>NXP has developed identity rules for the e-mail footer. Below is the format of how to fill in your personal details in the signature field. The format should be:</p>
                <p>
                &lt;Firstname Lastname&gt; &lt;Job title&gt;<br />
                &lt;Department&gt; NXP Semiconductors (mandatory) <br />
                &lt;Visiting address&gt; <br />
                &lt;city&gt; <br />
                &lt;Country&gt; <br />
                Tel: &lt;xxxxxxx&gt; <br />
                Fax: (optional) <br />
                Mobile: (optional) <br />
                E-mail: &lt;name&gt;nxp.com <br />
                www.nxp.com (optional) <br />
                Skype: (optional) Twitter: (optional)</p>
			</div>
			<!--- .entry-content -->
		</div><!--- .content -->
	</div><!--- .content-sidebar-wrap -->
</div><!--- .site-inner -->
