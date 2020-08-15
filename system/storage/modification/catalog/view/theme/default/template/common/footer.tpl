<footer>
  <div class="container">
    <div class="row">
      <?php if ($informations) { ?>
      <div class="col-sm-3">
        <h5><?php echo $text_information; ?></h5>
        <ul class="list-unstyled">
          <?php foreach ($informations as $information) { ?>
          <li><a href="<?php echo $information['href']; ?>"><?php echo $information['title']; ?></a></li>
          <?php } ?>
        </ul>
      </div>
      <?php } ?>
      <div class="col-sm-3">
        <h5><?php echo $text_service; ?></h5>
        <ul class="list-unstyled">
          <li><a href="<?php echo $contact; ?>"><?php echo $text_contact; ?></a></li>
          <li><a href="<?php echo $return; ?>"><?php echo $text_return; ?></a></li>
          <li><a href="<?php echo $sitemap; ?>"><?php echo $text_sitemap; ?></a></li>
        </ul>
      </div>
      <div class="col-sm-3">
        <h5><?php echo $text_extra; ?></h5>
        <ul class="list-unstyled">
          <li><a href="<?php echo $manufacturer; ?>"><?php echo $text_manufacturer; ?></a></li>
          <li><a href="<?php echo $voucher; ?>"><?php echo $text_voucher; ?></a></li>
          <li><a href="<?php echo $affiliate; ?>"><?php echo $text_affiliate; ?></a></li>
          <li><a href="<?php echo $special; ?>"><?php echo $text_special; ?></a></li>
        </ul>
      </div>
      <div class="col-sm-3">
        <h5><?php echo $text_account; ?></h5>
        <ul class="list-unstyled">
          <li><a href="<?php echo $account; ?>"><?php echo $text_account; ?></a></li>
          <li><a href="<?php echo $order; ?>"><?php echo $text_order; ?></a></li>
          <li><a href="<?php echo $wishlist; ?>"><?php echo $text_wishlist; ?></a></li>
          <li><a href="<?php echo $newsletter; ?>"><?php echo $text_newsletter; ?></a></li>
        </ul>
      </div>
    </div>
    <hr>
    <p><?php echo $powered; ?></p>
  </div>
</footer>

<!--
OpenCart is open source software and you are free to remove the powered by OpenCart if you want, but its generally accepted practise to make a small donation.
Please donate via PayPal to donate@opencart.com
//-->

<!-- Theme created by Welford Media for OpenCart 2.0 www.welfordmedia.co.uk -->


	<script>
		$(document).ready(function() {
			$('.image a, .thumbnails a').each(function () {
				if ($(this).find('img').attr('data-grey-image')) {
					$(this).find('img').addClass('greyimage');
					$(this).append('<div class="greylable">Нет в наличии</div>');
				}
			});
		});
	</script>
	<style>
	.image a{display:inline-block;}
	.image a, .thumbnails a{position:relative;}
	.product-thumb:hover .greylable, .thumbnails > li:hover .greylable{display:none;}
	/* .greylable {z-index: 9; text-align:center !important; width: 140px !important; height: 33px !important; position: absolute; top: 50%; left: 50%; margin: -15px 0 0 -70px !important; background:#aaa; background: linear-gradient(to bottom, #bbb 0%, #aaa 100%); color:#fff !important; font-size:14px !important; font-weight:400 !important; padding:6px 0; border-radius:5px; box-shadow:inset 0 1px 0 #ddd, 0 0 10px #444; text-shadow: 0px 1px 0 #666;} */
	.greylable {z-index: 9; font-family:Arial; line-height:normal !important; text-align:center !important; width: 136px !important; position: absolute; top: 50%; left: 50%; margin: -15px 0 0 -68px !important; background:#aaa; background: linear-gradient(to bottom, #bbb 0%, #aaa 100%); color:#fff !important; font-size:14px !important; font-weight:400 !important; padding:8px 0 9px; border-radius:5px; box-shadow:inset 0 1px 0 #ddd, 0 0 0px #444; text-shadow: 0px 1px 0 #666;}
	.greyimage{filter: url('image/grayscale.svg#greyscale'); filter: gray; -webkit-filter: grayscale(100%); -moz-filter: grayscale(100%); -ms-filter: grayscale(100%); -o-filter: grayscale(100%); filter: grayscale(100%); opacity:0.8;}
	</style>
	
</body></html>