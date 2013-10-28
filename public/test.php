<?php 
require_once('header.php');

function download() {
	$choice = '';
	$num = rand(0,2);
	if ($num == 0) {
		$choice =  'badge-display.php?badge=SharkBomb&type=png';
	} elseif ($num == 1) {
		$choice =  'badge-display.php?badge=PatrolShark&type=png';
	} elseif ($num == 2) {
		$choice =  'badge-display.php?badge=HelloShark&type=gif';
	} else {
		$choice =  'Error selecting download.';
	}
	return $choice;
}

function sharkTest() {
	global $message;
	$rand = rand(0,1);
	if ($rand == 1) {
		$choice = download();
		$message = '<div id="slider"><strong class="inverted">Congratulations,</strong>
						<br />you\'re a shark!
						<hr />
						Download your Badge of Sharkularity:
						<br />
						<a href="' . $choice . '" class="btn btn-primary" id="bigbtn">Get Badge</a> <span class="arrow hlb hidden-phone" style="margin-top:25px"></div';
	} else if ($rand == 0) {
		$message = '<div id="slider"><strong class="inverted">Sorry,</strong><br /> you\'re not a shark.<br /><a href="test.php" class="btn btn-primary" id="bigbtn">Try Again</a> <span class="arrow hlb hidden-phone" style="margin-top:25px"></div>';
	} else {
		$message = 'Shark test failed.';
	}
	return $message;
}

?>
<div role="main" class="main">
	<section class="page-top">
		<div class="container">
			<div class="row">
				<div class="span12">
					<ul class="breadcrumb">
						<li><a href="index.php">Home</a> <span class="divider">/</span></li>
						<li class="active">Test</li>
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
				$content = '';
				$accept = '';
				if (!isset($_POST['test'])) {
					$content = '
								<div class="form">
									<form action="test.php" method="post">
										<ul class="fields nolist">
											<li class="fields">
												<input class="fields" type="checkbox" name="terms" value="1" />
													<span class="fields"> I accept the <a href="terms.php" target="_blank">terms</a> of use</span>
											</li>
											<input type="hidden" name="test" value="1" />
											<li class="fields">
												<input type="submit" class="btn btn-primary btn-custom" id="bigrbtn" value="Begin Test" />
											</li>
										</ul>
									</form>
								</div>
								';
				} 
				else if (isset($_POST['test'])) {
					if (!isset($_POST['terms'])) {
						$content = 'You must accept the <a href="terms.php" target="_blank">terms</a> in order to proceed.     <a href="test.php"><- Back</a>';
					} else if (isset($_POST['terms'])) {
						$accept = $_POST['terms'];
						if ($accept != 1) {
						}
						elseif ($accept == 1) {
							if (isset($_POST['test'])) {
								require_once('sharkSlider.inc.php');
							} else {
							$content = 'There was a problem with terms ascceptance.';
							}
						}
                	} 
				} else {
					echo 'There was a problem submitting your test.';
				} // end test
				echo $content;
                ?>
			</div>
            <div class="span6">
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
				</div>
			</div>
      </div>
</div>

<?php require_once('footer.php'); ?>