<?php $pageTitle="<title>Felicia Noelle's Portfolio</title>"?>
<?php include('../head.php'); ?>
		<div class="main">
			<div class="thumbnail-wrap">
				<div class="portfolio-thumbnail">
				<a href="senior-pics/"/><img src="/images/fe-images/Senior.jpg"></a>
				<span>Senior Pictures</span>
				</div>
				<div class="portfolio-thumbnail">
				<a href="weddings/"><img src="/images/fe-images/wedding.jpg"></a>
				<span>Weddings</span>
				</div>
				<div class="portfolio-thumbnail">
				<a href="newborn/"><img src="/images/fe-images/huntersharlow.jpg"></a>
				<span>Newborn and Children</span>
				</div>
				<div class="portfolio-thumbnail couple">
				<a href="#" id="#couples"><img src="/images/fe-images/couples.jpg"></a>
				<span id="couples1">Couples</span>
				</div>										
			</div>
		</div>
	</div>
<?php include('../footer.php');?>
	<script type="text/javascript">
	$(document).ready(function() {
		$('.couple').on('click', function() {
			var comingSoon = $('<span>Coming Soon</span>');
			$('.couple').append(comingSoon);
			$('#couples1').remove();

		});
	});
	</script>
</body>
</html>