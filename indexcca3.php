<?php
   include("include/signup_process.php");
?>
<?php 
$require = "";
 if(!isset($_GET['r'])){
     $referal= '';
     $dis = "";
   
}else{
  $referal= $_GET['r'];
  $dis = "disabled";
    }
    if($force_settings ==1){
        $require = "required";
    }else{
        $require = "";
    }
 ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>

<!-- Mirrored from www.lumaexchange.com/?a=signup by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 15 Jan 2021 03:51:48 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>

<!-- Smartsupp Live Chat script -->
<script type="text/javascript">
  <?php echo"$chat";?>
  </script>

<meta charset="utf-8">
<title><?php echo"$site_name3";?></title>
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
<link rel = "stylesheet" href="css/bootstrap.min.css">
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
<div class="main-title main-title_lower" data-aos="fade-right" data-aos-delay="0">Open a account</div>
<div class="main-subtitle" data-aos="fade-right" data-aos-delay="0">Member Signup</div>

<form method="POST" name="regform" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" class="sign"><input type="hidden" name="form_id" value="16106821271859"><input type="hidden" name="form_token" value="fab0adda846059090f568f928d7d3875">
<input type=hidden name=a value="signup">
<input type=hidden name=action value="signup">
<?php echo"$success";?>
<?php echo"$fail";?>
<!-- start -->
<?php echo"$first_name_err";?>
<label class="sign-input">

<input type="text" name='first_name' placeholder="Enter First Name"  autofocus required>
<div class="sign-input-wrap">
<div class="sign-input__check">
<svg>
<use xlink:href="assets/img/sprite.html#check"></use>
</svg>
</div><span><svg><use xlink:href="assets/img/sprite.html#user"></use></svg>Your First Name</span></div>
 </label> <!--end-->
 <!-- start -->
 <?php echo"$last_name_err";?>
<label class="sign-input">

<input type="text" name='last_name' placeholder="Enter Last Name" autofocus required>
<div class="sign-input-wrap">
<div class="sign-input__check">
<svg>
<use xlink:href="assets/img/sprite.html#check"></use>
</svg>
</div><span><svg><use xlink:href="assets/img/sprite.html#user"></use></svg>Your Last Name</span></div>
 </label> <!--end-->
 <!-- start -->
 <?php echo"$email_err";?>
 <label class="sign-input">

<input type="email" name='email' placeholder=" Enter Email " autofocus required>
<div class="sign-input-wrap">
<div class="sign-input__check">
<svg>
<use xlink:href="assets/img/sprite.html#check"></use>
</svg>
</div><span><svg><use xlink:href="assets/img/sprite.html#user"></use></svg>Your Email</span></div>
 </label> <!--end-->
 <!-- start -->
 <?php echo"$btc_address_error";?>
 <label class="sign-input">

<input type="text" name='wallet' placeholder="Enter Bicoin Wallet" autofocus >
<div class="sign-input-wrap">
<div class="sign-input__check">
<svg>
<use xlink:href="assets/img/sprite.html#check"></use>
</svg>
</div><span><svg><use xlink:href="assets/img/sprite.html#user"></use></svg>Bitcoin wallet address</span></div>
 </label> <!--end-->
 <!-- start -->
 <?php echo"$username_err";?>
 <label class="sign-input">

<input type="text" name='username' placeholder=" Enter Username " autofocus required>
<div class="sign-input-wrap">
<div class="sign-input__check">
<svg>
<use xlink:href="assets/img/sprite.html#check"></use>
</svg>
</div><span><svg><use xlink:href="assets/img/sprite.html#user"></use></svg>Username</span></div>
 </label> <!--end-->
 <!-- start -->
 <?php echo"$country_error";?>
 <label class="sign-input">
 
 <select name="country" id="country" >
                       <option value="select" selected>- Select Country - </option>
                       <option value="Afghanistan">Afghanistan</option>
                            <option value="Åland Islands">Åland Islands</option>
                            <option value="Albania">Albania</option>
                            <option value="Algeria">Algeria</option>
                            <option value="American Samoa">American Samoa</option>
                            <option value="Andorra">Andorra</option>
                            <option value="Angola">Angola</option>
                            <option value="Anguilla">Anguilla</option>
                            <option value="Antarctica">Antarctica</option>
                            <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                            <option value="Argentina">Argentina</option>
                            <option value="Armenia">Armenia</option>
                            <option value="Aruba">Aruba</option>
                            <option value="Australia">Australia</option>
                            <option value="Austria">Austria</option>
                            <option value="Azerbaijan">Azerbaijan</option>
                            <option value="Bahamas">Bahamas</option>
                            <option value="Bahrain">Bahrain</option>
                            <option value="Bangladesh">Bangladesh</option>
                            <option value="Barbados">Barbados</option>
                            <option value="Belarus">Belarus</option>
                            <option value="Belgium">Belgium</option>
                            <option value="Belize">Belize</option>
                            <option value="Benin">Benin</option>
                            <option value="Bermuda">Bermuda</option>
                            <option value="Bhutan">Bhutan</option>
                            <option value="Bolivia">Bolivia</option>
                            <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                            <option value="Botswana">Botswana</option>
                            <option value="Bouvet Island">Bouvet Island</option>
                            <option value="Brazil">Brazil</option>
                            <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                            <option value="Brunei Darussalam">Brunei Darussalam</option>
                            <option value="Bulgaria">Bulgaria</option>
                            <option value="Burkina Faso">Burkina Faso</option>
                            <option value="Burundi">Burundi</option>
                            <option value="Cambodia">Cambodia</option>
                            <option value="Cameroon">Cameroon</option>
                            <option value="Canada">Canada</option>
                            <option value="Cape Verde">Cape Verde</option>
                            <option value="Cayman Islands">Cayman Islands</option>
                            <option value="Central African Republic">Central African Republic</option>
                            <option value="Chad">Chad</option>
                            <option value="Chile">Chile</option>
                            <option value="China">China</option>
                            <option value="Christmas Island">Christmas Island</option>
                            <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                            <option value="Colombia">Colombia</option>
                            <option value="Comoros">Comoros</option>
                            <option value="Congo">Congo</option>
                            <option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option>
                            <option value="Cook Islands">Cook Islands</option>
                            <option value="Costa Rica">Costa Rica</option>
                            <option value="Cote D'ivoire">Cote D'ivoire</option>
                            <option value="Croatia">Croatia</option>
                            <option value="Cuba">Cuba</option>
                            <option value="Cyprus">Cyprus</option>
                            <option value="Czech Republic">Czech Republic</option>
                            <option value="Denmark">Denmark</option>
                            <option value="Djibouti">Djibouti</option>
                            <option value="Dominica">Dominica</option>
                            <option value="Dominican Republic">Dominican Republic</option>
                            <option value="Ecuador">Ecuador</option>
                            <option value="Egypt">Egypt</option>
                            <option value="El Salvador">El Salvador</option>
                            <option value="Equatorial Guinea">Equatorial Guinea</option>
                            <option value="Eritrea">Eritrea</option>
                            <option value="Estonia">Estonia</option>
                            <option value="Ethiopia">Ethiopia</option>
                            <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                            <option value="Faroe Islands">Faroe Islands</option>
                            <option value="Fiji">Fiji</option>
                            <option value="Finland">Finland</option>
                            <option value="France">France</option>
                            <option value="French Guiana">French Guiana</option>
                            <option value="French Polynesia">French Polynesia</option>
                            <option value="French Southern Territories">French Southern Territories</option>
                            <option value="Gabon">Gabon</option>
                            <option value="Gambia">Gambia</option>
                            <option value="Georgia">Georgia</option>
                            <option value="Germany">Germany</option>
                            <option value="Ghana">Ghana</option>
                            <option value="Gibraltar">Gibraltar</option>
                            <option value="Greece">Greece</option>
                            <option value="Greenland">Greenland</option>
                            <option value="Grenada">Grenada</option>
                            <option value="Guadeloupe">Guadeloupe</option>
                            <option value="Guam">Guam</option>
                            <option value="Guatemala">Guatemala</option>
                            <option value="Guernsey">Guernsey</option>
                            <option value="Guinea">Guinea</option>
                            <option value="Guinea-bissau">Guinea-bissau</option>
                            <option value="Guyana">Guyana</option>
                            <option value="Haiti">Haiti</option>
                            <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
                            <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                            <option value="Honduras">Honduras</option>
                            <option value="Hong Kong">Hong Kong</option>
                            <option value="Hungary">Hungary</option>
                            <option value="Iceland">Iceland</option>
                            <option value="India">India</option>
                            <option value="Indonesia">Indonesia</option>
                            <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
                            <option value="Iraq">Iraq</option>
                            <option value="Ireland">Ireland</option>
                            <option value="Isle of Man">Isle of Man</option>
                            <option value="Israel">Israel</option>
                            <option value="Italy">Italy</option>
                            <option value="Jamaica">Jamaica</option>
                            <option value="Japan">Japan</option>
                            <option value="Jersey">Jersey</option>
                            <option value="Jordan">Jordan</option>
                            <option value="Kazakhstan">Kazakhstan</option>
                            <option value="Kenya">Kenya</option>
                            <option value="Kiribati">Kiribati</option>
                            <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
                            <option value="Korea, Republic of">Korea, Republic of</option>
                            <option value="Kuwait">Kuwait</option>
                            <option value="Kyrgyzstan">Kyrgyzstan</option>
                            <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
                            <option value="Latvia">Latvia</option>
                            <option value="Lebanon">Lebanon</option>
                            <option value="Lesotho">Lesotho</option>
                            <option value="Liberia">Liberia</option>
                            <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                            <option value="Liechtenstein">Liechtenstein</option>
                            <option value="Lithuania">Lithuania</option>
                            <option value="Luxembourg">Luxembourg</option>
                            <option value="Macao">Macao</option>
                            <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option>
                            <option value="Madagascar">Madagascar</option>
                            <option value="Malawi">Malawi</option>
                            <option value="Malaysia">Malaysia</option>
                            <option value="Maldives">Maldives</option>
                            <option value="Mali">Mali</option>
                            <option value="Malta">Malta</option>
                            <option value="Marshall Islands">Marshall Islands</option>
                            <option value="Martinique">Martinique</option>
                            <option value="Mauritania">Mauritania</option>
                            <option value="Mauritius">Mauritius</option>
                            <option value="Mayotte">Mayotte</option>
                            <option value="Mexico">Mexico</option>
                            <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
                            <option value="Moldova, Republic of">Moldova, Republic of</option>
                            <option value="Monaco">Monaco</option>
                            <option value="Mongolia">Mongolia</option>
                            <option value="Montenegro">Montenegro</option>
                            <option value="Montserrat">Montserrat</option>
                            <option value="Morocco">Morocco</option>
                            <option value="Mozambique">Mozambique</option>
                            <option value="Myanmar">Myanmar</option>
                            <option value="Namibia">Namibia</option>
                            <option value="Nauru">Nauru</option>
                            <option value="Nepal">Nepal</option>
                            <option value="Netherlands">Netherlands</option>
                            <option value="Netherlands Antilles">Netherlands Antilles</option>
                            <option value="New Caledonia">New Caledonia</option>
                            <option value="New Zealand">New Zealand</option>
                            <option value="Nicaragua">Nicaragua</option>
                            <option value="Niger">Niger</option>
                            <option value="Nigeria">Nigeria</option>
                            <option value="Niue">Niue</option>
                            <option value="Norfolk Island">Norfolk Island</option>
                            <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                            <option value="Norway">Norway</option>
                            <option value="Oman">Oman</option>
                            <option value="Pakistan">Pakistan</option>
                            <option value="Palau">Palau</option>
                            <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
                            <option value="Panama">Panama</option>
                            <option value="Papua New Guinea">Papua New Guinea</option>
                            <option value="Paraguay">Paraguay</option>
                            <option value="Peru">Peru</option>
                            <option value="Philippines">Philippines</option>
                            <option value="Pitcairn">Pitcairn</option>
                            <option value="Poland">Poland</option>
                            <option value="Portugal">Portugal</option>
                            <option value="Puerto Rico">Puerto Rico</option>
                            <option value="Qatar">Qatar</option>
                            <option value="Reunion">Reunion</option>
                            <option value="Romania">Romania</option>
                            <option value="Russian Federation">Russian Federation</option>
                            <option value="Rwanda">Rwanda</option>
                            <option value="Saint Helena">Saint Helena</option>
                            <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                            <option value="Saint Lucia">Saint Lucia</option>
                            <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                            <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option>
                            <option value="Samoa">Samoa</option>
                            <option value="San Marino">San Marino</option>
                            <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                            <option value="Saudi Arabia">Saudi Arabia</option>
                            <option value="Senegal">Senegal</option>
                            <option value="Serbia">Serbia</option>
                            <option value="Seychelles">Seychelles</option>
                            <option value="Sierra Leone">Sierra Leone</option>
                            <option value="Singapore">Singapore</option>
                            <option value="Slovakia">Slovakia</option>
                            <option value="Slovenia">Slovenia</option>
                            <option value="Solomon Islands">Solomon Islands</option>
                            <option value="Somalia">Somalia</option>
                            <option value="South Africa">South Africa</option>
                            <option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option>
                            <option value="Spain">Spain</option>
                            <option value="Sri Lanka">Sri Lanka</option>
                            <option value="Sudan">Sudan</option>
                            <option value="Suriname">Suriname</option>
                            <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                            <option value="Swaziland">Swaziland</option>
                            <option value="Sweden">Sweden</option>
                            <option value="Switzerland">Switzerland</option>
                            <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                            <option value="Taiwan, Province of China">Taiwan, Province of China</option>
                            <option value="Tajikistan">Tajikistan</option>
                            <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
                            <option value="Thailand">Thailand</option>
                            <option value="Timor-leste">Timor-leste</option>
                            <option value="Togo">Togo</option>
                            <option value="Tokelau">Tokelau</option>
                            <option value="Tonga">Tonga</option>
                            <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                            <option value="Tunisia">Tunisia</option>
                            <option value="Turkey">Turkey</option>
                            <option value="Turkmenistan">Turkmenistan</option>
                            <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                            <option value="Tuvalu">Tuvalu</option>
                            <option value="Uganda">Uganda</option>
                            <option value="Ukraine">Ukraine</option>
                            <option value="United Arab Emirates">United Arab Emirates</option>
                            <option value="United Kingdom">United Kingdom</option>
                            <option value="United States">United States</option>
                            <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                            <option value="Uruguay">Uruguay</option>
                            <option value="Uzbekistan">Uzbekistan</option>
                            <option value="Vanuatu">Vanuatu</option>
                            <option value="Venezuela">Venezuela</option>
                            <option value="Viet Nam">Viet Nam</option>
                            <option value="Virgin Islands, British">Virgin Islands, British</option>
                            <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                            <option value="Wallis and Futuna">Wallis and Futuna</option>
                            <option value="Western Sahara">Western Sahara</option>
                            <option value="Yemen">Yemen</option>
                            <option value="Zambia">Zambia</option>
                            <option value="Zimbabwe">Zimbabwe</option>
                       </select>
<div class="sign-input-wrap">
<div class="sign-input__check">
<svg>
<use xlink:href="assets/img/sprite.html#check"></use>
</svg>
</div><span><svg><use xlink:href="assets/img/sprite.html#user"></use></svg> Your Country</span></div>
 </label> <!--end-->
 <!-- start -->
 <?php echo"$referal_code_err";?>
 <label class="sign-input">


<input type="text" id="code" placeholder="Enter Referal Code" value="<?php echo"$referal";?>" name="code" <?php echo"$require";?>>
<div class="sign-input-wrap">
<div class="sign-input__check">
<svg>
<use xlink:href="assets/img/sprite.html#check"></use>
</svg>
</div><span><svg><use xlink:href="assets/img/sprite.html#user"></use></svg> Your Referal Code</span></div>
 </label> <!--end-->
 <!-- start -->
 <?php echo"$password_err";?>
 <label class="sign-input">

<input type="password" name='password' placeholder="Enter Password"  autofocus required>
<div class="sign-input-wrap">
<div class="sign-input__check">
<svg>
<use xlink:href="assets/img/sprite.html#check"></use>
</svg>
</div><span><svg><use xlink:href="assets/img/sprite.html#user"></use></svg>Your Password</span></div>
 </label> <!--end-->
 <!-- start -->
 <label class="sign-input">
<input type="password" name='password2' placeholder= "Confirm Password" autofocus required>
<div class="sign-input-wrap">
<div class="sign-input__check">
<svg>
<use xlink:href="assets/img/sprite.html#check"></use>
</svg>
</div><span><svg><use xlink:href="assets/img/sprite.html#user"></use></svg>Retype Your Password</span></div>
 </label> <!--end-->

<div class="sign-agree">
<label class="sign-check">
<input type="radio" name="agree" value=1>
<span><svg>
<use xlink:href="assets/img/sprite.html#check"></use>
</svg>
<input type="radio" name="agree" value=1> I agree with <a href="indexa972.php?a=rules">Terms and conditions</a>
</span>
</label>
</div>
<div class="sign-capch">
<div class="sign-bot login-mod">
<button class="main-btn" type="submit" name="auth_form_btn">Signup</button>
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
</div>
</section>
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
<script>		
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>
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

<!-- Mirrored from www.lumaexchange.com/?a=signup by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 15 Jan 2021 03:51:48 GMT -->
</html>
