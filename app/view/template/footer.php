<footer>
	<div id="footer">

		<div class="top">

			<a href="home" class="h-logo"><img src="public/images/common/logo.png" alt="Logo"></a>

			<div class="flex">

				<div class="contact-info">
					<div class="text-left phone content">
						<img src="public/images/content/" alt="">
						<div class="text-left">
							<a href="tel:<?php $this->info("phone"); ?>">
								<?php $this->info("phone"); ?>
							</a>
						</div>
					</div>

					<div class="text-left email content">
						<img src="public/images/content/" alt="">
						<div class="text-left">
							<a href="mailto:<?php $this->info("email"); ?>">
								<?php $this->info("email"); ?>
							</a>
						</div>
					</div>

					<div class="text-left location content">
						<img src="public/images/content/" alt="">
						<div class="text-left">
							<a>
								<?php $this->info("address"); ?>
							</a>
						</div>
					</div>
				</div>

				<div class="follow-us">
					<a href="<?php $this->info('fb_link') ?>" target="_blank"><img src="public/images/content/"
							alt="facebook">Facebook</a>
					<a href="<?php $this->info('tt_link') ?>" target="_blank"><img src="public/images/content/"
							alt="twitter">Twitter</a>
					<a href="<?php $this->info('ig_link') ?>" target="_blank"><img src="public/images/content/"
							alt="instagram">Instagram</a>
					<a href="<?php $this->info('yt_link') ?>" target="_blank"><img src="public/images/content/"
							alt="youtube">Youtube</a>
					<a href="<?php $this->info('li_link') ?>" target="_blank"><img src="public/images/content/"
							alt="linkedIn">LinkedIn</a>
				</div>

				<div class="navigate">
					<nav>
						<ul>
							<li <?php $this->helpers->isActiveMenu("home"); ?>><a href="<?php echo URL ?>">Home</a></li>
							<li <?php $this->helpers->isActiveMenu("about"); ?>><a
									href="<?php echo URL ?>about#content">About Us</a></li>
							<li <?php $this->helpers->isActiveMenu("services"); ?>><a
									href="<?php echo URL ?>services#content">Services</a></li>
							<li <?php $this->helpers->isActiveMenu("gallery"); ?>><a
									href="<?php echo URL ?>gallery#content">Gallery</a></li>
							<li <?php $this->helpers->isActiveMenu("testimonials"); ?>><a
									href="<?php echo URL ?>reviews#content">Reviews</a></li>
							<li <?php $this->helpers->isActiveMenu("contact"); ?>><a
									href="<?php echo URL ?>contact#content">Contact Us</a></li>
						</ul>
					</nav>
				</div>

			</div>


		</div>


		<div class="right" id="contact">
			<div class="row">
				<div class="foreword">CONTACT US</div>
				<div class="contact-title">KEEP IN TOUCH</div>

				<form action="sendContactForm" method="post" class="sends-email ctc-form">
					<div class="flex">
						<label><span class="ctc-hide">Name</span>
							<input type="text" name="name" placeholder="Name">
						</label>
						<label><span class="ctc-hide">Phone</span>
							<input type="text" name="phone" placeholder="Phone">
						</label>
						<label><span class="ctc-hide">Email</span>
							<input type="text" name="email" placeholder="Email">
						</label>
					</div>

					<label><span class="ctc-hide">Message</span>
						<textarea name="message" cols="30" rows="10" placeholder="Message"></textarea>
					</label>

					<label for="g-recaptcha-response"><span class="ctc-hide">Recaptcha</span></label>
					<div class="g-recaptcha"></div>

					<button type="submit" class="ctcBtn btn" disabled>Submit Form</button>
				</form>
			</div>
		</div>
	</div>




	<div class="copyrights">
		<p class="copy">
			©
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