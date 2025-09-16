<!-- === Footer original === -->
<footer>
	<div class="container">
		<div data-aos="zoom-in" class="col">
			<div class="logo">
				<img src="<?=ROOT?>/assets/images/logo_final.png">
			</div>
			<p class="text-center">Around The Corner makes the most delicious, hand made treats you have ever tasted.  Try some today, you won't be disappointed.</p>
			<!-- <ul class="social-icons"> 
				<li><div class="fa fa-facebook"></div></li>
				<li><div class="fa fa-twitter"></div></li>
				<li><div class="fa fa-github"></div></li>
				<li><div class="fa fa-youtube"></div></li>
			</ul> -->
		</div>

		<!-- <div data-aos="zoom-in" class="col" class="company"> 
			<h3 class="company">Company</h3>
			<ul class="footer-links">
				<li class="company">Home</li>
				<li class="company">Menu</li>
				<li class="company">About</li>
				<li class="company">Order</li>
			</ul>
		</div> -->

		<div data-aos="zoom-in" class="col" class="contact">
			<h3>Get in Touch</h3>
			<ul class="footer-links text-center">
				<li class="contact">questions@atcbakery.ca</li>
				<li class="contact">289-325-4771</li>
				<li class="contact">Around The Corner Bakery</li>
				<li class="contact">Bolton, Ontario</li>
		<!-- only show login if not already logged in -->
			<?php if(!logged_in()):?>  
				<li><a href="<?=ROOT?>/login">Login</a></li>
			<?php endif;?>
			</ul>
		</div>
	</div>

	<hr class="divider">
	<div class="copyright">
		<p>Copyright @<?=date("Y")?> Around The Corner</p>
		<p>*** All products may contain or  have come into contact with nuts ***</p>
		<p>Web Design and Development by <a href="https://ez-webs.com">ez-webs.com</a></p>
	</div>
</footer>

<!-- ================== AOS ================== -->
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script> 
	AOS.init({
		duration:1600,
	});
</script>

<!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script> -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

<!-- scripts from Ecom site to ensure owl works -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js" integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<!-- Owl Carousel Js file -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha256-pTxD+DSzIwmwhOqTFN+DB+nHjO4iAsbgfyFq5K5bcE0=" crossorigin="anonymous"></script>

<!--  isotope plugin cdn  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js" integrity="sha256-CBrpuqrMhXwcLLUd5tvQ4euBHCdh7wGlDfNz8vbu/iI=" crossorigin="anonymous"></script>

<!-- END scripts from Ecom site to ensure owl works -->


<!-- Scripts for swiper carousel  -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<!-- Swipper JS code for slides-->
<script>
let swiperCards = new Swiper('.card__content', {
    loop: true,
    spaceBetween: 32,
    grabCursor: true,

    pagination: {
      el: '.swiper-pagination',
      clickable: true,
      dynamicBullets: true,
      },

    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
      },

    breakpoints:{
      600: {
        slidesPerView: 2,
      },
      968: {
        slidesPerView: 3,
      },
    },

    });
</script>

<script src="<?=ROOT?>/assets/js/menu-popper.js?<?= time();?>"></script>
<script src="<?=ROOT?>/assets/js/index.js?<?= time();?>"></script>

</body>
</html>