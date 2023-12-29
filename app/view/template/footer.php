<footer>
	<div id="footer">
		<div class="row flex footer-con">
			<div class="left">

				<a href="home" class="logo"><img src="public/images/content/logo.png" alt="Logo"></a>

				<div class="box">
					<div class="content contact-info">
						<div class="title">CONTACT INFO</div>
						<div class="flex">
							<div class="con phone">
								<img src="public/images/content/ft-phone.png" alt="">
								<div class="text-left">
									<a class="con-hvr-underline" href="tel:<?php $this->info("phone"); ?>">
										<?php $this->info("phone"); ?>
									</a>
								</div>
							</div>

							<div class="con email">
								<img src="public/images/content/ft-email.png" alt="">
								<div class="text-left">
									<a class="con-hvr-underline" href="mailto:<?php $this->info("email"); ?>">
										<?php $this->info("email"); ?>
									</a>
								</div>
							</div>

							<div class="con location">
								<img src="public/images/content/ft-address.png" alt="">
								<div class="text-left">
									<a>
										<?php $this->info("address"); ?>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="box">
					<div class="content follow-us">
						<div class="title">FOLLOW US</div>
						<div class="flex">
							<div class="ft-social">
								<img src="public/images/content/ft-fb.png" alt="facebook">
								<a class="con-hvr-underline" href="<?php $this->info('fb_link') ?>"
									target="_blank">Facebook</a>
							</div>

							<div class="ft-social">
								<img src="public/images/content/ft-tw.png" alt="twitter">
								<a class="con-hvr-underline" href="<?php $this->info('tt_link') ?>"
									target="_blank">Twitter</a>
							</div>

							<div class="ft-social">
								<img src="public/images/content/ft-ig.png" alt="instagram">
								<a class="con-hvr-underline" href="<?php $this->info('ig_link') ?>"
									target="_blank">Instagram</a>
							</div>

							<div class="ft-social">
								<img src="public/images/content/ft-yt.png" alt="youtube">
								<a class="con-hvr-underline" href="<?php $this->info('yt_link') ?>"
									target="_blank">Youtube</a>
							</div>

							<div class="ft-social">
								<img src="public/images/content/ft-li.png" alt="linkedIn">
								<a class="con-hvr-underline" href="<?php $this->info('li_link') ?>"
									target="_blank">LinkedIn</a>
							</div>

						</div>
					</div>
				</div>

				<div class="box">
					<div class="content navigate">
						<div class="title">NAVIGATE</div>
						<div class="flex">
							<nav>
								<ul>
									<li <?php $this->helpers->isActiveMenu("home"); ?>><a class="con-hvr-underline"
											href="<?php echo URL ?>">Home</a></li>
									<li <?php $this->helpers->isActiveMenu("about"); ?>><a class="con-hvr-underline"
											href="<?php echo URL ?>about#content">About Us</a></li>
									<li <?php $this->helpers->isActiveMenu("services"); ?>><a class="con-hvr-underline"
											href="<?php echo URL ?>services#content">Services</a></li>
									<li <?php $this->helpers->isActiveMenu("gallery"); ?>><a class="con-hvr-underline"
											href="<?php echo URL ?>gallery#content">Gallery</a></li>
									<li <?php $this->helpers->isActiveMenu("testimonials"); ?>><a class="con-hvr-underline"
											href="<?php echo URL ?>reviews#content">Reviews</a></li>
									<li <?php $this->helpers->isActiveMenu("contact"); ?>><a class="con-hvr-underline"
											href="<?php echo URL ?>contact#content">Contact Us</a></li>
								</ul>
							</nav>
						</div>
						<nav>
					</div>
				</div>


			</div>


			<div class="right" id="contact">
				<div class="box">
					<div class="contact-con">
						<div class="foreword">CONTACT US</div>
						<div class="contact-title">KEEP IN TOUCH</div>

						<form action="sendContactForm" method="post" class="sends-email ctc-form">

							<label><span class="ctc-hide name">Name</span>
								<input type="text" name="name" placeholder="NAME">
							</label>
							<div class="flex">
								<label><span class="ctc-hide">Phone</span>
									<input type="text" name="phone" placeholder="PHONE">
								</label>
								<label><span class="ctc-hide">Email</span>
									<input type="text" name="email" placeholder="EMAIL">
								</label>
							</div>

							<label><span class="ctc-hide">Message</span>
								<textarea name="message" cols="30" rows="10" placeholder="MESSAGE"></textarea>
							</label>
							<!-- 
							<label for="g-recaptcha-response"><span class="ctc-hide">Recaptcha</span></label>
							<div class="g-recaptcha"></div> -->

							<button type="submit" class="ctcBtn btn hvr-grow" disabled>Submit Form</button>
						</form>
					</div>
				</div>
			</div>
		</div>
		<div class="copyrights">
			<p class="copy">
				Copyright
				<?php echo date("Y"); ?>.
				<?php $this->info("company_name"); ?> All Rights Reserved.
			</p>
			<p class="techno">
				<img class="lazy loaded" src="public/images/hd-logo.png" alt=""><a
					href="http://technodreamoutsourcing.com/">Web Design</a> Done by <a
					href="http://technodreamoutsourcing.com/"> TechnoDream LLC</a>
			</p>
		</div>
	</div>






</footer>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="<?php echo URL; ?>public/scripts/sendform.js" data-view="<?php echo $view; ?>" id="sendform"></script>
<!-- <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>  -->
<script src="<?php echo URL; ?>public/scripts/responsive-menu.js"></script>
<script src="https://unpkg.com/sweetalert2@7.20.10/dist/sweetalert2.all.js"></script>

<?php if ($this->siteInfo['cookie']): ?>
	<script src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.js"></script>
	<script src="<?php echo URL; ?>public/scripts/cookie-script.js"></script>
<?php endif ?>

<?php if (in_array($view, ["home", "contact"])): ?>
	<textarea id="g-recaptcha-response" class="destroy-on-load"></textarea>
	<script src='//www.google.com/recaptcha/api.js?onload=captchaCallBack&render=explicit' async defer></script>
	<script>
		var captchaCallBack = function () {
			$('.g-recaptcha').each(function (index, el) {
				var recaptcha = grecaptcha.render(el, { 'sitekey': '<?php $this->info("site_key"); ?>' });
				$('.destroy-on-load').remove();
			})
		};


		$('.consentBox').click(function () {
			if ($(this).is(':checked')) {
				if ($('.termsBox').length) {
					if ($('.termsBox').is(':checked')) {
						$('.ctcBtn').removeAttr('disabled');
					}
				} else {
					$('.ctcBtn').removeAttr('disabled');
				}
			} else {
				$('.ctcBtn').attr('disabled', true);
			}
		});

		$('.termsBox').click(function () {
			if ($(this).is(':checked')) {
				if ($('.consentBox').is(':checked')) {
					$('.ctcBtn').removeAttr('disabled');
				}
			} else {
				$('.ctcBtn').attr('disabled', true);
			}
		});


		function reveal() {
			var reveals = document.querySelectorAll(".reveal");

			for (var i = 0; i < reveals.length; i++) {
				var windowHeight = window.innerHeight;
				var elementTop = reveals[i].getBoundingClientRect().top;
				var elementVisible = 150;

				if (elementTop < windowHeight - elementVisible) {
					reveals[i].classList.add("active");
				} else {
					reveals[i].classList.remove("active");
				}
			}
		}

		window.addEventListener("scroll", reveal);


	</script>

<?php endif; ?>


<?php if ($view == "gallery"): ?>
	<script src="<?php echo URL; ?>public/fancybox/source/jquery.fancybox.js?v=2.1.5"></script>
	<script src="<?php echo URL; ?>public/scripts/jquery.pajinate.js"></script>
	<script>
		$('#gall1').pajinate({ num_page_links_to_display: 3, items_per_page: 10 });
		$('.fancy').fancybox({
			helpers: {
				title: {
					type: 'over'
				}
			}
		});
	</script>
<?php endif; ?>

<a class="cta" href="tel:<?php $this->info("phone"); ?>"><span
		style="display: block; width: 1px; height: 1px; overflow: hidden;">Call To Action Button</span></a>

<?php $this->checkSuspensionFooter(); ?>
</body>

</html>