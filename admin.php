<?php include("include/admin_process.php");?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>

<!-- Mirrored from www.lumaexchange.com/?a=login by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 15 Jan 2021 03:51:48 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>

<!-- Smartsupp Live Chat script -->
<script type="text/javascript">
var _smartsupp = _smartsupp || {};
_smartsupp.key = '515428fd3a1e70b9f1754bdb438b0f3403ecb391';
window.smartsupp||(function(d) {
  var s,c,o=smartsupp=function(){ o._.push(arguments)};o._=[];
  s=d.getElementsByTagName('script')[0];c=d.createElement('script');
  c.type='text/javascript';c.charset='utf-8';c.async=true;
  c.src='https://www.smartsuppchat.com/loader.js?';s.parentNode.insertBefore(c,s);
})(document);
</script>

<meta charset="utf-8">
<title>Admin Login</title>
<meta name="author" href="http://uniquehyips.com/">
<meta content="lumaexchange.com is a unique online investment platform, which allows independent investors from all over the world to receive dividends from trading different types of currency on major exchanges." name="description">
<meta content="lumaexchange.com, company, uk, investment, bitcoin, litecoin, ethereum, bitcoincash, price, deposit, withdraw, instant, perfectmoney, payeer, hyip, referral" name="keywords">
<meta name="format-detection" content="telephone=no">
<meta content="width=device-width, initial-scale=1" name="viewport">
<meta content="ie=edge" http-equiv="x-ua-compatible">
<link rel="apple-touch-icon" sizes="76x76" href="assets/favicons/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="assets/favicons/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="assets/favicons/favicon-16x16.png">
<link rel="stylesheet" href="assets/libs/bootstrap/bootstrap-grid.min.css">
<link rel="stylesheet" href="assets/libs/bootstrap-datepicker/bootstrap-datepicker.min.css">
<link rel="stylesheet" href="assets/libs/swiper/swiper.min.css">
<link rel="stylesheet" href="assets/libs/jquery-ui/jquery-ui.min.css">
<link rel="stylesheet" href="assets/libs/jquery-ui/jquery-ui.theme.min.css">
<link rel="stylesheet" href="assets/libs/formstyler/jquery.formstyler.css">
<link rel="stylesheet" href="assets/libs/formstyler/jquery.formstyler.theme.css">
<link rel="stylesheet" href="assets/libs/lobibox/css/lobibox.min.css">
<link rel="stylesheet" href="assets/libs/ResponsiveTables/ng_responsive_tables.css">
<link rel="stylesheet" href="assets/libs/magnific-popup/magnific-popup.css">
<link rel="stylesheet" href="assets/libs/aos/aos.css">
<link rel="stylesheet" href="assets/libs/flag-icon/css/flag-icon.min.css">
<link rel="stylesheet" href="assets/css/app.css">
<link rel="stylesheet" href="assets/css/custom.css">
<link rel="stylesheet" href="css/bootstrap.min.css">
<!--[if lt IE 9]><script src="http://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv.min.js"></script><![endif]-->
</head>
<body class="main-bg">
<svg class="svg-gradients">
<lineargradient id="gr-p" x1="0%" y1="0%" x2="0%" y2="100%">
<stop offset="0%" style="stop-color:rgba(67, 54, 182, 1);stop-opacity:1"></stop>
<stop offset="100%" style="stop-color:rgba(164, 78, 208, 1);stop-opacity:1"></stop>
</lineargradient>
<lineargradient id="gr-p-r" x1="0%" y1="0%" x2="0%" y2="100%">
<stop offset="0%" style="stop-color:rgba(164, 78, 208, 1);stop-opacity:1"></stop>
<stop offset="100%" style="stop-color:rgba(67, 54, 182, 1);stop-opacity:1"></stop>
</lineargradient>
</svg>
<div class="wrapper">
<section class="first first_bg">
<?php include("include/head.php");?>
<?php include("include/side.php");?>
<div class="col-lg-9">
<div class="first-content">
<div class="row">
<div class="col-lg-12">
<div class="main-title main-title_lower" data-aos="fade-right" data-aos-delay="0">Admin Authentication</div>
<div class="main-subtitle" data-aos="fade-right" data-aos-delay="0">Admin login</div>

<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" name=mainform class="sign"><input type="hidden" name="form_id" value="16106821273256"><input type="hidden" name="form_token" value="e20310ab3ae32a0cc7a5932b27d4ef89">
<input type=hidden name=a value='do_login'>
<?php echo"$fail";?>
<input type=hidden name=follow value=''>
<input type=hidden name=follow_id value=''>
<label class="sign-input">

<input type="text" value="" name="username" placeholder="<?php echo"$username_err";?>" autofocus required>
<div class="sign-input-wrap">
<div class="sign-input__check">
<svg>
<use xlink:href="assets/img/sprite.html#check"></use>
</svg>
</div><span><svg><use xlink:href="assets/img/sprite.html#user"></use></svg>Your Username</span></div>
</label>
<label class="sign-input">

<input type="password" name="password" placeholder="<?php echo"$password_err";?>" required>
<div class="sign-input-wrap">
<div class="sign-input__check">
<svg><use xlink:href="assets/img/sprite.html#check"></use></svg>
</div><span><svg><use xlink:href="assets/img/sprite.html#pass"></use>
</svg>Your Password</span></div></label>
<div class="sign-capch">
<div class="sign-bot login-mod">
<button class="main-btn" type="submit" name="auth_form_btn">Login</button>

</div>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<section class="wallets">
<div class="container">
<div class="row">
<div class="col-md-12" data-aos="fade-up" data-aos-delay="0">
<div class="wallets__list">
<div class="wallets__item"><img src="assets/img/wallet-1.png" alt="wallet-1" /></div>
<div class="wallets__item"><img src="assets/img/wallet-2.png" alt="wallet-2" /></div>
<div class="wallets__item"><img src="assets/img/wallet-3.png" alt="wallet-3" /></div>
<div class="wallets__item"><img src="assets/img/wallet-4.png" alt="wallet-4" /></div>
<div class="wallets__item"><img src="assets/img/wallet-5.png" alt="wallet-5" /></div>
<div class="wallets__item"><img src="assets/img/wallet-6.png" alt="wallet-6" /></div>
<div class="wallets__item"><img src="assets/img/wallet-7.png" alt="wallet-7" /></div>
<div class="wallets__item"><img src="assets/img/wallet-8.png" alt="wallet-8" /></div>
</div>
</div>
</div>
</div>
</section>
</div>
<?php include("include/foot.php");?>
</div>
<script src="assets/libs/jquery.min.js"></script>
<script src="assets/libs/pacejs/pace.min.js"></script>
<script src="assets/libs/svg4everybody.js"></script>
<script src="assets/libs/momentjs/moment.min.js"></script>
<script src="assets/libs/momentjs/moment-time-zone.js"></script>
<script src="assets/libs/bootstrap-datepicker/bootstrap-datepicker.js"></script>
<script src="assets/libs/swiper/swiper.min.js"></script>
<script src="assets/libs/jquery-ui/jquery-ui.min.js"></script>
<script src="assets/libs/touch-punch.js"></script>
<script src="assets/libs/chartjs/chartjs.js"></script>
<script src="assets/libs/formstyler/jquery.formstyler.min.js"></script>
<script src="assets/libs/clipboard.js/clipboard.min.js"></script>
<script src="assets/libs/lobibox/js/lobibox.min.js"></script>
<script src="assets/libs/ResponsiveTables/ng_responsive_tables.js"></script>
<script src="assets/libs/magnific-popup/magnific-popup.min.js"></script>
<script src="assets/libs/marquee/jquery.marquee.min.js"></script>
<script src="assets/libs/jquery.nicescroll/jquery.nicescroll.min.js"></script>
<script src="assets/libs/parallax/parallax.min.js"></script>
<script src="assets/libs/aos/aos.js"></script>
<script src="assets/js/app.js"></script>
<script src="assets/js/calc.js"></script>
<style>
	        .deposit_confirm{
        color: #fff;
    }
    
    .sbmt{
        background: #fdd186;
        border: none;
        border-radius: 4px;
        padding: 6px 12px;
        margin-top: 10px;
        margin-right: 10px;
        cursor: pointer;
    }
	</style>
</body>

<!-- Mirrored from www.lumaexchange.com/?a=login by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 15 Jan 2021 03:51:48 GMT -->
</html>
