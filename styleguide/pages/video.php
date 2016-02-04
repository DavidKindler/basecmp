
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
	<img src="/content/<?php echo ($type == '' ? strtolower($cat) : strtolower( str_replace(' ', '-', $type) ) );?>/header.jpg" alt="Header" />
	<h1><?php echo $cat;?> <br /><span>guidelines</span></h1>
	<a href="http://www.nxp.com/videocreator" title="Check out our video creator" class="general-cta grey-cta">Check out our<br /><span>video creator</span></a>
</section>

<div class="site-inner">
	<div class="content-sidebar-wrap">
		<div class="content">
			<div class="entry-content">
				<h3 class="tocable">Tone of voice</h3>
				<p>Without naming specific locations, NXP represents a rich cultural world. We focus on the scale of our world and hinting at the ubiquity of technical applications and real life situations.</p>

				<div class="video-image-column">
					<img src="/content/video/1.jpg" />
					<img src="/content/video/3.jpg" />
				</div><!-- .video-image-column -->

				<div class="video-image-column">
					<img src="/content/video/2.jpg" />
					<img src="/content/video/4.jpg" />
				</div><!-- .video-image-column -->				

			</div><!--- .entry-content -->
		</div><!--- .content -->
	</div><!--- .content-sidebar-wrap -->
</div><!--- .site-inner -->	

<div class="divider"></div>

<div class="site-inner">
	<div class="content-sidebar-wrap">
		<div class="content">
			<div class="entry-content">

				<div class="video-text-column">
					<h3 class="tocable" data-toctitle="Format">Format | minmum quality requirements</h3>
					<p>Unless otherwise specified, always work in 16:9 frame aspect ratio.</p>
					<p>Pixel aspect ratio should usually be: Square pixels.</p>
					<p>For best compatibility, always work in full High Definition TV resolution or higher then: 1920 x 1080 pixels.</p>
				</div><!-- .video-text-column -->

				<div class="video-image-column">
					<img src="/content/video/5.jpg" />
				</div><!-- .video-image-column -->				

			</div><!--- .entry-content -->
		</div><!--- .content -->
	</div><!--- .content-sidebar-wrap -->
</div><!--- .site-inner -->	

<div class="divider"></div>

<div class="site-inner">
	<div class="content-sidebar-wrap">
		<div class="content">
			<div class="entry-content">

				<div class="video-text-column">
					<p class="no-margin"><label>Event video</label> 0:10 - 2:00</p>
					<div class="duration" style="width:265px;"><div class="progress" style="width:13px;"></div></div>
					<p class="no-margin"><label>Product video</label> 0:30 - 13:00</p>
					<div class="duration" style="width:198px;"><div class="progress" style="width:66px;"></div></div>
					<p class="no-margin"><label>Instruction video</label> 0:30 - 2:00</p>
					<div class="duration" style="width:265px;"><div class="progress" style="width:66px;"></div></div>
				</div><!-- .video-text-column -->	

				<div class="video-text-column">
					<h3 class="tocable">Duration</h3>
					<p>Keep video’s the appropriate length. Use our guidance on the left for duration.</p>
				</div><!-- .video-text-column -->

				<div class="clearfix"></div>

				<p class="no-margin"><label>Brand video</label> 1:30 - 6:00</p>
				<div class="duration" style="width:794px;"><div class="progress" style="width:198px;"></span></div>

			</div><!--- .entry-content -->
		</div><!--- .content -->
	</div><!--- .content-sidebar-wrap -->
</div><!--- .site-inner -->	

<div class="divider"></div>

<div class="site-inner">
	<div class="content-sidebar-wrap">
		<div class="content">
			<div class="entry-content">
				<h3 class="tocable">Leader</h3>
				<p>Always use our standard leader before all videos, movies and motion. Always use our standard outro after all videos, movies and motion. Leaders come in different lengths, so find the appropriate leader for your production.</p>

				<div class="video-image-column">
					<img src="/content/video/6.jpg" />
				</div><!-- .video-image-column -->

				<div class="video-image-column">
					<img src="/content/video/7.jpg" />
				</div><!-- .video-image-column -->				

			</div><!--- .entry-content -->
		</div><!--- .content -->
	</div><!--- .content-sidebar-wrap -->
</div><!--- .site-inner -->	

<div class="divider"></div>

<div class="site-inner">
	<div class="content-sidebar-wrap">
		<div class="content">
			<div class="entry-content">

				<div class="video-text-column">
					<h3 class="tocable">Typography</h3>
					<p>The DIN font is carefully picked for use in all type video production and type motion. The typeface is closely related and an addition to Avenir, but has a more smart, technical and modern feel.</p>
					<p>Always use the DIN font in a combination of Ultra-light and Light. Do not use more than two weights in a sentence.</p>
					<p>We use DIN Light to emphasize a clear benefit. Creating contrast between Ultra-light and Light adds personality.</p>
				</div><!-- .video-text-column -->

				<div class="video-image-column">
					<img src="/content/video/8.jpg" />

					<div class="one-half first din-ultra-light">
						<h3>DIN Ultra-Light:</h3>
						<p><span class="p12">ABCDEFGHIJKLMNOPQRSTUVWXYZ<br />abcdefghijklmnopqrstuvwxyz<br />(.,:;?!@#$%*) 0123456789</span></p>
						<p><span class="p12">color: # 8E8E8E<br />Type font size: 78 px<br />line spacing: 87px</span></p>
					</div>

					<div class="one-half din-light">
						<h3>DIN Light:</h3>
						<p><span class="p12">ABCDEFGHIJKLMNOPQRSTUVWXYZ<br />abcdefghijklmnopqrstuvwxyz<br />(.,:;?!@#$%*) 0123456789</span></p>
						<p><span class="p12">color: # 585858<br />Type font size: 78 px<br />line spacing: 87px</span></p>
					</div>
				</div><!-- .video-image-column -->				

			</div><!--- .entry-content -->
		</div><!--- .content -->
	</div><!--- .content-sidebar-wrap -->
</div><!--- .site-inner -->	

<div class="divider"></div>

<div class="site-inner">
	<div class="content-sidebar-wrap">
		<div class="content">
			<div class="entry-content">

				<div class="video-image-column">
					<img src="/content/video/9.jpg" />
					<img src="/content/video/10.jpg" />
				</div><!-- .video-image-column -->		

				<div class="video-text-column">
					<h3 class="tocable">Graphics</h3>
					<p>We use lower thirds for names and titles for introduction of characters.</p>
					<p>When subject is on the right side of the frame, the lower third should be placed left.</p>
					<p>When subject is on the left side of the frame, the lower third should be placed right.</p>
					<p>Always use the DIN light font with a drop shadow.</p>
					<p>Always use only the speakers name and never use a subtitle. At NXP we care about the story, so it doesn’t matter what title the speaker has.</p>
					<div class="one-half first">
						<h3>Type</h3>
						<p>Font size: 105px<br />Opacity: 100%<br />Char.pace: 0 px</p>
					</div>
					<div class="one-half">
						<h3>Drop shadow</h3>
						<p>Color: black<br />Opacity: 25%<br />Distance: 0<br />Softness 5 px</p>
					</div>
				</div><!-- .video-text-column -->

			</div><!--- .entry-content -->
		</div><!--- .content -->
	</div><!--- .content-sidebar-wrap -->
</div><!--- .site-inner -->	

<p>&nbsp;</p>

<div class="site-inner">
	<div class="content-sidebar-wrap">
		<div class="content">
			<div class="entry-content">

				<div class="video-text-column">
					<p>As an alternative you can use our downloadable lower third.</p>

					<div class="one-half first">
						<h3>Name.Type</h3>
						<p>Font size: 57px<br />Opacity: 100%<br />Char.pace: 0 px</p>
					</div>
					<div class="one-half">
						<h3>Title.type</h3>
						<p>Font size: 30px<br />Opacity: 100%<br />Char.pace: 0 px</p>
					</div>

					<p>&nbsp;</p>

					<div class="one-half first">
						<h3>Drop shadow</h3>
						<p>Color: black<br />Opacity: 25%<br />Distance: 0<br />Softness 5 px</p>
					</div>
					<div class="one-half">
						<h3>Drop shadow</h3>
						<p>Color: black<br />Opacity: 25%<br />Distance: 0<br />Softness 5 px</p>
					</div>			

					<p>&nbsp;</p>

					<p>Do not use a stroke around typography and do not use a self chosen color shape behind a lower third.</p>

					<div class="one-half first">
						<img src="/content/video/13.jpg" />
					</div>
					<div class="one-half">
						<img src="/content/video/14.jpg" />
					</div>						

				</div><!-- .video-text-column -->

				<div class="video-image-column">
					<img src="/content/video/11.jpg" />
					<img src="/content/video/12.jpg" />
				</div><!-- .video-image-column -->

			</div><!--- .entry-content -->
		</div><!--- .content -->
	</div><!--- .content-sidebar-wrap -->
</div><!--- .site-inner -->					

<div class="divider"></div>

<div class="site-inner">
	<div class="content-sidebar-wrap">
		<div class="content">
			<div class="entry-content">
				<h3 class="tocable">Grading</h3>
				<p>Always make sure you start with a flat profile and neutral colors. Try to make sure all of your shots are well balanced and consistent in color, brightness and contrast.</p>

				<div class="video-image-column">
					<img src="/content/video/15.jpg" />
					<img src="/content/video/16.jpg" />
				</div><!-- .video-image-column -->

				<div class="video-image-column">
					<img src="/content/video/17.jpg" />
					<img src="/content/video/18.jpg" />
				</div><!-- .video-image-column -->

				<p>Do not use different color gradient overlays or sepia filters.</p>

				<span class="one-fifth first">
					<img src="/content/video/19.jpg" />
				</span>
				<span class="one-fifth">
					<img src="/content/video/20.jpg" />
				</span>
				<span class="one-fifth">
					<img src="/content/video/21.jpg" />
				</span>
				<span class="one-fifth">
					<img src="/content/video/22.jpg" />
				</span>

			</div><!--- .entry-content -->
		</div><!--- .content -->
	</div><!--- .content-sidebar-wrap -->
</div><!--- .site-inner -->	

<div class="divider"></div>

<div class="site-inner">
	<div class="content-sidebar-wrap">
		<div class="content">
			<div class="entry-content">

				<div class="video-image-column">
					<img src="/content/video/23.jpg" />
					<img src="/content/video/24.jpg" />
				</div><!-- .video-image-column -->		

				<div class="video-text-column">
					<h3 class="tocable">Motion graphics</h3>
					<p>Keep motion graphics as subtle and ‘quiet’ as possible.</p>
					<p>Use motion tracking for convenient reading of text; if you use text in the video, try to move it along with the motion in the shot, since your eyes are already following the motion, it’s easier and less disturbing to read.</p>
					<p>Avoid long texts and use motion graphics only when relevant.</p>
				</div><!-- .video-text-column -->

			</div><!--- .entry-content -->
		</div><!--- .content -->
	</div><!--- .content-sidebar-wrap -->
</div><!--- .site-inner -->	

<div class="divider"></div>

<div class="site-inner">
	<div class="content-sidebar-wrap">
		<div class="content">
			<div class="entry-content">

				<div class="video-text-column">
					<h3 class="tocable">Audio</h3>
					<p>Always use motivational, positive and inspirational pieces/soundscapes with a technical feel. Try to synchronize the paceof your video well balanced to your soundtrack. Always make sure audio quality is at least 48 Khz/16 bit to meet the industry standard audio.</p>
				</div><!-- .video-text-column -->

				<div class="video-text-column">
					<h3>Questions</h3>
					<p>If you ever in doubt, just refer back to this page. All questions regarding anything related to making a video for NXP you can send an email to: <a href="mailto:helga.de.ruijter@nxp.com">helga.de.ruijter@nxp.com</a></p>
				</div><!-- .video-text-column -->

			</div><!--- .entry-content -->
		</div><!--- .content -->
	</div><!--- .content-sidebar-wrap -->
</div><!--- .site-inner -->	