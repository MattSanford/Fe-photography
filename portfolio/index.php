<?php $pageTitle="<title>Felicia Noelle's Portfolio</title>"?>
<?php include('../head.php'); ?>
		<div class="main">
			<div class="thumbnail-wrap">
				<div class="portfolio-thumbnail">
				<a href="senior-pics/"/><img src="/images/fe-images/senior/9.jpg"></a>
				<h2>Senior Pictures</h2>
				</div>
				<div class="portfolio-thumbnail">
				<a href="weddings/"><img src="/images/fe-images/weddings/12.jpg"></a>
				<h2>Weddings</h2>
				</div>
				<div class="portfolio-thumbnail">
				<a href="newborn/"><img src="/images/fe-images/newborn/2.jpg"></a>
				<h2>Newborn and Children</h2>
				</div>
				<div class="portfolio-thumbnail couple">
				<a href="#" id="#couples"><img src="/images/fe-images/couples.jpg"></a>
				<h2 id="couples1">Couples</h2>
				</div>										
			</div>
		</div>
	</div>
<?php include('../footer.php');?>
	<script type="text/javascript">
	$(document).ready(function() {
		$('.couple').on('click', function() {
			var comingSoon = $('<h2>Coming Soon</h2>');
			$('.couple').append(comingSoon);
			$('#couples1').remove();

		});
	});
	</script>
</body>
</html>