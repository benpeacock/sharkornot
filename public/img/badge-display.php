<?php require_once('header.php'); ?>
<div role="main" class="main">
	<section class="page-top">
		<div class="container">
			<div class="row">
				<div class="span12">
					<ul class="breadcrumb">
						<li><a href="index.php">Home</a> <span class="divider">/</span></li>
						<li class="active">Badge</li>
					</ul>
				</div>
			</div>
			<div class="row">
				<div class="span12">
					<h2>Shark Test</h2>
				</div>
			</div>
		</div>
	</section>
	<div class="container">
		<div class="row">
			<div class="span6">
                <?php
				if (!isset($_GET['badge'])) {
						echo 'No badge found.';
					} else if (isset($_GET['badge'])) {
						$badge_name = $_GET['badge'];
						$type = $_GET['type'];
						echo '<img class="responsive" src="badges/' . $badge_name . '.' . $type . '" alt="' . $badge_name . '" />';
					} else {
						echo 'Could not retrieve badge name.';
					}
				?>
			</div>
            <div class="span6">
				<h4>Shark <strong>Testing</strong></h4>
				<p>This is one of the awesome Badges of Sharkularity available to those who pass the Shark Test.  You can <a href="test.php">try again</a> for another badge, or get the <a href="index.php">full Shark or Not experience</a> from the beginning.</p>
                <a href="test.php" class="btn btn-primary" style="margin-right:30px">Try Again</a>
                <a href="index.php" class="btn btn-primary">The Whole Enchilada</a>
				<h4 class="pull-top">Shark <strong>Sharing</strong></h4>
				<!-- AddThis Button BEGIN -->
                 <div class="addthis_toolbox addthis_default_style addthis_32x32_style">
                 	<a class="addthis_button_preferred_1"></a>
                    <a class="addthis_button_preferred_2"></a>
                    <a class="addthis_button_preferred_3"></a>
                    <a class="addthis_button_preferred_4"></a>
                    <a class="addthis_button_compact"></a>
                    <a class="addthis_counter addthis_bubble_style"></a>
                 </div>
				 <script type="text/javascript">var addthis_config = {"data_track_addressbar":true};</script>
                 <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5139275a0834ee11"></script>
                <!-- AddThis Button END -->
                <h4 style="margin-top:35px">Shark <strong>Download</strong>
                <br />
                <a href="<?php echo 'badges/' . $badge_name . '.php'; ?>" class="btn btn-primary" style="margin-top:15px">Download Badge</a>
                </div>
			</div>
      </div>
</div>
<?php require_once('footer.php'); ?>