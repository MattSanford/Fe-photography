<?php $pageTitle="<title>Senior Pictures by Felicia Noelle</title>"?>
<?php include("../galleria-head.php"); ?>
			<div class="main">
				<section id="galleria">
					<img src="/images/fe-images/senior/2.jpg">
					<img src="/images/fe-images/senior/4.jpg">
					<img src="/images/fe-images/senior/5.jpg">
					<img src="/images/fe-images/senior/7.jpg">
					<img src="/images/fe-images/senior/8.jpg">
					<img src="/images/fe-images/senior/9.jpg">
					<img src="/images/fe-images/senior/10.jpg">
					<img src="/images/fe-images/senior/11.jpg">	
					<img src="/images/fe-images/senior/12.jpg">
					<img src="/images/fe-images/senior/13.jpg">
					<img src="/images/fe-images/senior/14.jpg">
					<img src="/images/fe-images/senior/16.jpg">
					<img src="/images/fe-images/senior/17.jpg">
					<img src="/images/fe-images/senior/18.jpg">
					<img src="/images/fe-images/senior/19.jpg">
					<img src="/images/fe-images/senior/20.jpg">
					<img src="/images/fe-images/senior/21.jpg">
					<img src="/images/fe-images/senior/22.jpg">
					<img src="/images/fe-images/senior/23.jpg">
					<img src="/images/fe-images/senior/24.jpg">	
					<img src="/images/fe-images/senior/25.jpg">
					<img src="/images/fe-images/senior/26.jpg">
					<img src="/images/fe-images/senior/27.jpg">
					<img src="/images/fe-images/senior/28.jpg">
					<img src="/images/fe-images/senior/29.jpg">	
					<script>
   					Galleria.loadTheme('../galleria/themes/classic/galleria.classic.min.js'); 
    				Galleria.run('#galleria');
					</script>
					<script type="text/javascript">
					function preload(arrayOfImages) {
    				$(arrayOfImages).each(function(){
      			  	$('<img/>')[0].src = this;
        			// Alternatively you could use:
       				 // (new Image()).src = this;
    });
}

// Usage:

preload([
    '/images/fe-images/senior/2.jpg',
    '/images/fe-images/senior/4.jpg',
    '/images/fe-images/senior/5.jpg',
    '/images/fe-images/senior/7.jpg',
    '/images/fe-images/senior/8.jpg',
    '/images/fe-images/senior/9.jpg',
    '/images/fe-images/senior/10.jpg',
    '/images/fe-images/senior/11.jpg',
    '/images/fe-images/senior/12.jpg',
    '/images/fe-images/senior/13.jpg',
    '/images/fe-images/senior/14.jpg',
    '/images/fe-images/senior/15.jpg',
    '/images/fe-images/senior/16.jpg',
    '/images/fe-images/senior/17.jpg',
    '/images/fe-images/senior/18.jpg',
    '/images/fe-images/senior/19.jpg',
    '/images/fe-images/senior/20.jpg',
    '/images/fe-images/senior/21.jpg',
    '/images/fe-images/senior/22.jpg',
    '/images/fe-images/senior/23.jpg',
    '/images/fe-images/senior/24.jpg',
    '/images/fe-images/senior/25.jpg',
    '/images/fe-images/senior/26.jpg',
    '/images/fe-images/senior/27.jpg',
    '/images/fe-images/senior/28.jpg',
    '/images/fe-images/senior/29.jpg',
    '/images/fe-images/senior/30.jpg',
]);
					</script>						
				</section>
				<article class="after-gallery">
					<h1>senior pictures</h1>
					<p>Senior Pictures are a milestone in a few different ways. They celebrate the student's hard work and long hours put into their work but also it is the inaguration into adulthood. Highschool is now over and now we are capturing their first day at the "school of life". A triumph of school and the start of a new chapter in their life, two very good reasons to capture this milestone in your young person's life.  </p>
				</article>				
			</div>
<?php include('../../footer.php'); ?>
</body>
</html>