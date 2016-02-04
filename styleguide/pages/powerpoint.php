
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
	<a href="/downloads/nxp-ppt-templates.zip" title="Download ppt templates" class="general-cta grey-cta">Download <br /><span>ppt templates</span></a>
</section>

<div class="site-inner">
	<div class="content-sidebar-wrap">
		<div class="content">
			<div class="entry-content">
				<div class="print-text-column">
					<p>Your presentations should be consistent and reflect the brand identity. The guidelines and templates on this page will help you achieve this. An official template is available and you should use this to create all your NXP presentations. Do not use any slides other than these.</p>

					<h3 class="tocable" data-toctitle="Slide">Cover slide</h3>
					<p>Every presentation should begin with this slide. On it you should state your name, the subject, project and date of presentation. The logo appears prominently on the
					starting slide and should not be resized or altered. Do not add pictures or graphics to cover slides.
					</p>
					<h3>Content slides</h3>
					<p>All of the content of your presentation should appear on the white space above the multicolored line. Do not use blank slides without this format under any circumstances. The logo appears at the bottom on the left of every content page below the multi-colored line. You should fill your information in the space provided below the line, but do not let text or images overlap onto this space.</p>


				</div>
				<div class="print-text-column">
					<h3>Title/subtitle</h3>
					<ul>
						<li>Title left aligned, Arial 30pt (bold, black)</li>
						<li>Subtitle left aligned, Arial 20pt (regular, black)</li>
						<li>To ensure consistency, do not change the position of the title</li>
						<li>Keep the slide title brief</li>
						<li>Titles and sub-titles should be in black</li>
					</ul>

					<h3>Text</h3>

					<ul>
						<li>Text: Arial plain, black (20, 18 or 16pt, no smaller than 12pt)</li>
						<li>Emphasized words or phrases should be in italic, not underlined or bold</li>
						<li>Align standard text left with the title</li>
						<li>If the text doesn’t fit on the slide then spread it over more slides. Never reduce the font size below 12pt</li>
						<li>The spacing between paragraphs is one line</li>
					</ul>

					<h3>Animations</h3>
					<p>You may use animations in your presentation but they must not show</p>


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
					<h3>Working from a template</h3>
					<p>There are basically two ways to start working from a template:</p>
					<h3>1. Using a PowerPoint template</h3>
					<p>Open the PowerPoint template – we advise to open and start with a PowerPoint template file (.pot) instead of ‘applying’ a template. This way you will have automatic page numbering and have the full NXP color pallet (applying a template only applies the basic color scheme to your presentation and does not activate the numbering automatically). </p>

					<p>Should you ‘apply’ a template, numbered slides and footers need to be activated and changed with the insert date and time function. </p>

					<p>The placeholders have been incorporated into the master so activating the page number and footer is sufficient to make them appear.</p>
				</div>


				<div class="print-text-column" style="margin-top:95px;">
					<h3>2. Copying slides</h3>
					<p>When copying slides from an existing presentation, always make sure that the slides are produced using the PowerPoint
					master items such as ‘Title’ and ‘Body text’. If the slides are not produced according to standard items, the template will not convert the title and body text into the right format and position. This will have to be verified and changed manually. Even applying a new slide layout will not work.</p>
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
				<h3 class="tocable aligncenter">Powerpoint templates</h3>
				<div class="table">
					<ul>
						<li>
							<img class="shadow" src="/content/powerpoint/template-confidential.jpg" />
							<div class="table" style="margin: 10px 0 20px 0;">
								<ul>
									<li>
										<h3>Confidential template</h3>
									</li>
									<li>
										<a class="general-cta general-cta-inline" href="/downloads/Template-CONFIDENTIAL-4x3.potx">4:3</a>
									</li>
									<li>
										<a class="general-cta general-cta-inline" href="/downloads/Template-CONFIDENTIAL-16x9.potx">16:9</a>
									</li>
								</ul>
							</div>
						</li>
						<li>
							<img class="shadow" src="/content/powerpoint/template-internal.jpg" />
							<div class="table" style="margin: 10px 0 20px 0;">
								<ul>
									<li>
										<h3>Internal template</h3>
									</li>
									<li>
										<a class="general-cta general-cta-inline" href="/downloads/Template-INTERNAL-4x3.potx">4:3</a>
									</li>
									<li>
										<a class="general-cta general-cta-inline" href="/downloads/Template-INTERNAL-16x9.potx">16:9</a>
									</li>
								</ul>
							</div>							
						</li>
					</ul>
					<ul>
						<li>
							<img class="shadow" src="/content/powerpoint/template-public.jpg" />
							<div class="table" style="margin: 10px 0 20px 0;">
								<ul>
									<li>
										<h3>Public template</h3>
									</li>
									<li>
										<a class="general-cta general-cta-inline" href="/downloads/Template-PUBLIC-4x3.potx">4:3</a>
									</li>
									<li>
										<a class="general-cta general-cta-inline" href="/downloads/Template-PUBLIC-16x9.potx">16:9</a>
									</li>
								</ul>
							</div>							
						</li>
						<li>
							<img class="shadow" src="/content/powerpoint/template-secret.jpg" />
							<div class="table" style="margin: 10px 0 20px 0;">
								<ul>
									<li>
										<h3>Secret template</h3>
									</li>
									<li>
										<a class="general-cta general-cta-inline" href="/downloads/Template-SECRET-4x3.potx">4:3</a>
									</li>
									<li>
										<a class="general-cta general-cta-inline" href="/downloads/Template-SECRET-16x9.potx">16:9</a>
									</li>
								</ul>
							</div>							
						</li>
					</ul>
				</table>
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

				<img class="aligncenter tocable" data-toctitle="Do's and don'ts" src="/content/powerpoint/dodont.jpg" />
			</div>
			<!--- .entry-content -->
		</div><!--- .content -->
	</div><!--- .content-sidebar-wrap -->
</div><!--- .site-inner -->
