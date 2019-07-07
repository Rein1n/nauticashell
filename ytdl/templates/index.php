<?php echo $this->inc('header.php', ['title' => 'Youtube Downloader']); ?>
	<div class="well">
		<form class="" method="get" id="download" action="getvideo.php">
			<h1 class="form-download-heading">E</h1>
				<div class="input-group">
				  <input type="text" name="videoid" id="videoid" class="form-control input-lg" placeholder="YouTube Link or VideoID" autofocus>
				  <span class="input-group-btn">
					<input class="btn btn-primary btn-lg" type="submit" name="type" id="type" value="Download" />
				  </span>
				</div><!-- /input-group -->
			<div class="video-info">
				<p>Valid inputs are YouTube links or VideoIDs:</p>
					<ul>
					 <li>Note that you have to go to Proxy V1 and copy the link of the video and then copy it here. This is very likely temporary.</li>
						<li>youtube.com/watch?v=...</li>
						<li>youtu.be/...</li>
						<li>youtube.com/embed/...</li>
						<li>youtube-nocookie.com/embed/...</li>
						<li>youtube.com/watch?feature=player_embedded&v=...</li>
					</ul>
			</div>
		<!-- @TODO: Prepend the base URI -->
		<?php
		if ( $this->get('showBrowserExtensions') === true )
		{
			echo '<center><a href="ytdl.user.js" class="btn btn-sm btn-success" title="Install chrome extension to view a \'Download\' link to this application on Youtube video pages."> Install Chrome Extension </a></center>';
		}
		?>
		<hr />
		<div class="clearfix"></div>
		</form>
	</div>
<?php echo $this->inc('footer.php'); ?>
