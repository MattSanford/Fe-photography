<?php $pageTitle="<title>Weddings by Felicia Noelle</title>" ?>
<?php include('../galleria-head.php');?>

			<div class="main">
				<section id="galleria">
					<img src="/images/fe-images/weddings/1.jpg">
					<img src="/images/fe-images/weddings/2.jpg">
					<img src="/images/fe-images/weddings/3.jpg">
					<img src="/images/fe-images/weddings/4.jpg">
					<img src="/images/fe-images/weddings/5.jpg">
					<img src="/images/fe-images/weddings/6.jpg">	
					<img src="/images/fe-images/weddings/7.jpg">
					<img src="/images/fe-images/weddings/8.jpg">
					<img src="/images/fe-images/weddings/9.jpg">
					<img src="/images/fe-images/weddings/10.jpg">
					<img src="/images/fe-images/weddings/11.jpg">	
					<img src="/images/fe-images/weddings/12.jpg">
					<img src="/images/fe-images/weddings/13.jpg">
					<img src="/images/fe-images/weddings/14.jpg">
					<img src="/images/fe-images/weddings/15.jpg">
					<img src="/images/fe-images/weddings/16.jpg">
					<img src="/images/fe-images/weddings/17.jpg">
					<img src="/images/fe-images/weddings/18.jpg">
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
    '/images/fe-images/weddings/1.jpg',
    '/images/fe-images/weddings/2.jpg',
    '/images/fe-images/weddings/3.jpg',    
    '/images/fe-images/weddings/4.jpg',
    '/images/fe-images/weddings/5.jpg',
    '/images/fe-images/weddings/6.jpg',    
    '/images/fe-images/weddings/7.jpg',
    '/images/fe-images/weddings/8.jpg',
    '/images/fe-images/weddings/9.jpg',
    '/images/fe-images/weddings/10.jpg',
    '/images/fe-images/weddings/11.jpg',
    '/images/fe-images/weddings/12.jpg',
    '/images/fe-images/weddings/13.jpg',
    '/images/fe-images/weddings/14.jpg',
    '/images/fe-images/weddings/15.jpg',
    '/images/fe-images/weddings/16.jpg',
    '/images/fe-images/weddings/17.jpg',
    '/images/fe-images/weddings/18.jpg',
]);
					</script>												
				</section>
				<article class="after-gallery">
					<h1>wedding pictures</h1>
					<p>The merging of two lives is one of life's many beauties. Let me be there to capture all of the smiles, hugs, kisses, tears of joy, all of it. Many photographers are obtrusive and disturb the flow of the ceremony, I pride myself on my ability to capture the best moments of your wedding while being as inconspicuous as possible. I don't bring tons of equipment to clutter up your ceremony, I know how to utilize the tools I have in a way that captures the same quality without the use of backdrops and additional lighting. </p>
				</article>									
			</div>
<?php include('../../footer.php');?>