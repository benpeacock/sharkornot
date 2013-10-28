<div class="flexslider flexslider-center-mobile flexslider-simple" data-plugin-options='{"animation":"slide", "animationLoop": false, "maxVisibleItems": 1, }'>
	<ul class="slides">
    	<li><div class="message"><h2>Test beginning...</h2></div></li>
        <li><img src="img/trippyShark.gif" alt="shark with glowing eyes on rotating background" /></li>
		<li><?php 
			$message = '';
			if (isset($_POST['test']) && $_POST['test'] == 1) {
				$message = '';
				$result = sharkTest();
			}
			echo '<div class="message"><h2>' . $message . '</h2></div>';
			?>
		</li>
    </ul>
</div>