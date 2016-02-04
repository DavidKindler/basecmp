
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
				<p>We use our storytelling structure (see brand voice) to guide our photography and we use our photography to support our stories. Each layer has its own focus area with a fitted photographic style.</p>
			</div><!--- .entry-content -->
		</div><!--- .content -->
	</div><!--- .content-sidebar-wrap -->
</div><!--- .site-inner -->

<section class="general-section">
	<div class="entry-content entry-content-wide entry-content-photography" style="background:url(/content/photography/nxp-photography/background.jpg) top left no-repeat; background-size: 100% 100%;">
		<div class="clearfix">
			<div class="photo-section subsection">
				<h3 class="tocable">NXP Photography</h3>
			</div>
			<div class="gallery-section subsection"></div>			
		</div>
		<div class="clearfix">
			<div class="photo-section subsection">
				<p>An extensive library of photography is available on the <a href="https://nww.new.nxp.com/sites/branding/Photos/Pages/home.aspx" title="NXP Intranet">NXP Intranet</a>, representing our people and technology taken at NXP facilities.</p>
				<p><a href="/content/photography/nxp-photography/main.jpg" title="" data-fancybox-group="nxp-photography" class="fancybox"><img src="/content/photography/nxp-photography/thumbs/main.jpg" alt=""/></a></p>
			</div>
			<div class="gallery-section subsection">
				<p>More examples of images for this level: <br />(Click to enlarge image)</p>
				<ul>
					<?php 
						for( $i = 1; $i <= 6; $i++ ) {
							echo '<li><a href="/content/photography/nxp-photography/' . $i . '.jpg" title="" data-fancybox-group="nxp-photography" class="fancybox"><img src="/content/photography/nxp-photography/thumbs/' . $i . '.jpg" alt=""/></a></li>';
						}
					?>
				</ul>				
			</div>			
		</div>		
	</div>
</section>

<section class="general-section">
	<div class="entry-content entry-content-wide entry-content-photography text-dark" style="background:url(/content/photography/stock-photography/background.jpg) top left no-repeat; background-size: 100% 100%;">
		<div class="clearfix">
			<div class="gallery-section subsection"></div>	
			<div class="photo-section subsection">
				<h3 class="tocable">Stock photography</h3>
			</div>
		</div>
		<div class="clearfix">
			<div class="gallery-section subsection">
				<p>More examples of images for this level: <br />(Click to enlarge image)</p>
				<ul>
					<?php 
						for( $i = 1; $i <= 6; $i++ ) {
							echo '<li><a href="/content/photography/stock-photography/' . $i . '.jpg" title="" data-fancybox-group="stock-photography" class="fancybox"><img src="/content/photography/stock-photography/thumbs/' . $i . '.jpg" alt=""/></a></li>';
						}
					?>
				</ul>					
			</div>				
			<div class="photo-section subsection">
				<p>While we discourage extensive use of stock visual assets, we understand that from time to time they can be appropriate. Please make sure that the photography you select is in line with the NXP brand; they should be:</p>
				<ol>
					<li>Modern / high tech.</li>
					<li>Fresh / dynamic.</li>
					<li>Sharp / high contrast</li>
				</ol>
				<p><a href="/content/photography/stock-photography/main.jpg" title="" data-fancybox-group="stock-photography" class="fancybox"><img src="/content/photography/stock-photography/thumbs/main.jpg" alt=""/></a></p>
			</div>
		</div>		
	</div>
</section>

<section class="general-section">
	<div class="entry-content entry-content-wide entry-content-photography" style="background:url(/content/photography/secure-connections-for-a-smarter-world/background.jpg) top left no-repeat; background-size: 100% 100%;">
		<div class="clearfix">
			<div class="photo-section subsection">
				<h3 class="tocable" data-toctitle="Secure connections">Secure connections for a smarter world: <br />large scale, global, worldly, metropolitan</h3>
			</div>
			<div class="gallery-section subsection"></div>			
		</div>
		<div class="clearfix">
			<div class="photo-section subsection">
				<p>Show versatility through mastery of complexity and emphasis on speed and adding personal convenience to peoples lifes.</p>
				<p>Images should include the NXP colors in some degree.</p>
				<p><a href="/content/photography/secure-connections-for-a-smarter-world/main.jpg" title="" data-fancybox-group="secure-connections-for-a-smarter-world" class="fancybox"><img src="/content/photography/secure-connections-for-a-smarter-world/thumbs/main.jpg" alt=""/></a></p>
			</div>
			<div class="gallery-section subsection">
				<p>More examples of images for this level: <br />(Click to enlarge image)</p>
				<ul>
					<?php 
						for( $i = 1; $i <= 6; $i++ ) {
							echo '<li><a href="/content/photography/secure-connections-for-a-smarter-world/' . $i . '.jpg" title="" data-fancybox-group="secure-connections-for-a-smarter-world" class="fancybox"><img src="/content/photography/secure-connections-for-a-smarter-world/thumbs/' . $i . '.jpg" alt=""/></a></li>';
						}
					?>
				</ul>				
			</div>			
		</div>		
	</div>
</section>

<section class="general-section">
	<div class="entry-content entry-content-wide entry-content-photography text-dark" style="background:url(/content/photography/thoughtleadership/background.jpg) top left no-repeat; background-size: 100% 100%;">
		<div class="clearfix">
			<div class="gallery-section subsection"></div>	
			<div class="photo-section subsection">
				<h3 class="tocable" data-toctitle="Thought leadership">Thought leadership: <br />close up, personal, 'real' applications</h3>
			</div>
		</div>
		<div class="clearfix">
			<div class="gallery-section subsection">
				<p>More examples of images for this level: <br />(Click to enlarge image)</p>
				<ul>
					<?php 
						for( $i = 1; $i <= 6; $i++ ) {
							echo '<li><a href="/content/photography/thoughtleadership/' . $i . '.jpg" title="" data-fancybox-group="thoughtleadership" class="fancybox"><img src="/content/photography/thoughtleadership/thumbs/' . $i . '.jpg" alt=""/></a></li>';
						}
					?>
				</ul>				
			</div>				
			<div class="photo-section subsection">
				<p>Show versatility through mastery of complexity and emphasis on speed and adding personal convenience to peoples lifes.</p>
				<p>Images should include the NXP colors in some degree.</p>
				<p><a href="/content/photography/thoughtleadership/main.jpg" title="" data-fancybox-group="thoughtleadership" class="fancybox"><img src="/content/photography/thoughtleadership/thumbs/main.jpg" alt=""/></a></p>
			</div>
		</div>		
	</div>
</section>

<section class="general-section">
	<div class="entry-content entry-content-wide entry-content-photography" style="background:url(/content/photography/applications-technologies/background.jpg) top left no-repeat; background-size: 100% 100%;">
		<div class="clearfix">
			<div class="photo-section subsection">
				<h3 class="tocable" data-toctitle="Applications / technologies">Applications / technologies: <br />technical, development, detailed</h3>
			</div>
			<div class="gallery-section subsection"></div>			
		</div>
		<div class="clearfix">
			<div class="photo-section subsection">
				<p>Show versatility through mastery of complexity and emphasis on speed and adding personal convenience to peoples lifes.</p>
				<p>Images should include the NXP colors in some degree.</p>
				<p><a href="/content/photography/applications-technologies/main.jpg" title="" data-fancybox-group="applications-technologies" class="fancybox"><img src="/content/photography/applications-technologies/thumbs/main.jpg" alt=""/></a></p>
			</div>
			<div class="gallery-section subsection">
				<p>More examples of images for this level: <br />(Click to enlarge image)</p>
				<ul>
					<?php 
						for( $i = 1; $i <= 6; $i++ ) {
							echo '<li><a href="/content/photography/applications-technologies/' . $i . '.jpg" title="" data-fancybox-group="applications-technologies" class="fancybox"><img src="/content/photography/applications-technologies/thumbs/' . $i . '.jpg" alt=""/></a></li>';
						}
					?>
				</ul>				
			</div>			
		</div>		
	</div>
</section>

<section class="general-section">
	<div class="entry-content entry-content-wide entry-content-photography text-dark" style="background:url(/content/photography/products/background.jpg) top left no-repeat; background-size: 100% 100%;">
		<div class="clearfix">
			<div class="gallery-section subsection"></div>	
			<div class="photo-section subsection">
				<h3 class="tocable" data-toctitle="Products">Products: <br />technical, production, result, detailed</h3>
			</div>
		</div>
		<div class="clearfix">
			<div class="gallery-section subsection">
				<p>More examples of images for this level: <br />(Click to enlarge image)</p>
				<ul>
					<?php 
						for( $i = 1; $i <= 6; $i++ ) {
							echo '<li><a href="/content/photography/products/' . $i . '.jpg" title="" data-fancybox-group="products" class="fancybox"><img src="/content/photography/products/thumbs/' . $i . '.jpg" alt=""/></a></li>';
						}
					?>
				</ul>					
			</div>				
			<div class="photo-section subsection">
				<p>Show versatility through mastery of complexity and emphasis on speed and adding personal convenience to peoples lifes.</p>
				<p>Images should include the NXP colors in some degree.</p>
				<p><a href="/content/photography/products/main.jpg" title="" data-fancybox-group="products" class="fancybox"><img src="/content/photography/products/thumbs/main.jpg" alt=""/></a></p>
			</div>
		</div>		
	</div>
</section>