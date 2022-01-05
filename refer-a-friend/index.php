<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">
<title>Jax.Network : Refer-A-Friend</title>
<link rel="icon" href="https://jax.network/wp-content/uploads/2021/05/Group-752-150x150.png" sizes="32x32" />
<link rel="icon" href="https://jax.network/wp-content/uploads/2021/05/Group-752.png" sizes="192x192" />
<link rel="apple-touch-icon" href="https://jax.network/wp-content/uploads/2021/05/Group-752.png" />
<!-- Bootstrap core CSS -->
<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
<script src="https://cdn.jsdelivr.net/gh/anuraghazra/VerlyRangeSlider@v1.0.0/src/VerlyRange.js"></script>
<link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<link href="css/awn.min.css" rel="stylesheet">

<!-- Custom styles for this template -->

<link href="css/jax-landing.css" rel="stylesheet">
</head>

<body>

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-white fixed-top">
  <div class="container"> <a class="navbar-brand" href="#"><img src="image/jax-logo.svg" height="40px"/></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto smooth-scroll list-unstyled">
        <li class="nav-item"> <a class="nav-link pl-3 pr-3" href="https://arxiv.org/pdf/2005.01865.pdf" target = "_blank">ACADEMIC PAPER <span class="sr-only">(current)</span> </a> </li>
        <li class="nav-item"> <a class="nav-link pl-3 pr-3" href="https://www.jax.network" target = "_blank">PROJECT WEBSITE</a> </li>
        <li class="nav-item"> <a class="nav-link pl-3 pr-3" href="https://buy.jax.network/swap/locked-tokens" target="_blank">BUY LOCKED TOKENS</a> </li>
        <li class="nav-item"> <a class="nav-link pl-3 pr-3" href="https://buy.jax.network" target="_blank">BUY UNLOCKED TOKENS</a> </li>
        <li class="nav-item"> <a class="nav-link pl-3 pr-3" href="https://jax.network/contact/" target="_blank">CONTACT</a> </li>
        <li class="nav-item pl-2 mb-2"> <a id="btn_connect" target="_new" class="btn bluebtn pl-3 pr-3 " onclick="connect_wallet()">Connect Wallet</a> </li>
        <li class="nav-item pl-2 d-none d-md-block">
          <select class="custom-select my-select" id="chainSelector">
            <option value="bscmainnet" selected>Binance Smart Chain</option>
            <option value="ethmainnet">Ethereum Chain</option>
          </select>
        </li>
      </ul>
    </div>
  </div>
</nav>
<!-- header starts -->
<header>
  <div class="container pt-3">

    <!---------------FOR MOBILE VIEW--->

    <select class="custom-select my-select pl-3 pr-3s d-sm-none ml-md-2 mr-md-2 mb-3">
      <option>Ethereum Smart Chain</option>
    </select>
    <!---------------FOR MOBILE VIEW--->

    <div class="row align-items-center" id="div_all" style="display:none">
      <div class="col-12 text-center">
        <h1 class="blueclr font-weight-normal pt-3 pt-md-5">REFER-A-FRIEND &amp; <span class="yellowclr">GET 30% COMMISSION!</span></h1>
        <p class="blueclr font20 mt-0 mb-md-5 mb-md-4 mb-sm-0">Refer your friends and get 30% commission on their purchase instantly.</p>
          <div class="d-flex justify-content-center">
    			   <div class="p-2 p-md-5 boxshadow col-12 col-md-6 bluebtn" style="border-radius: 10px;" id="div_error">
    			  <h3 class="text-danger">An error occured. Multiple accounts aren't allowed.</h3>
    		 <a href="https://buy.jax.network/swap/locked-tokens/refer-a-friend/" class="btn btn-lg btn2 pl-3 pr-3">Back</a>
    			  </div>
    		  </div>
		   <div class="d-flex justify-content-center">
			   <div class="p-2 p-md-5 boxshadow col-12 col-md-6 bluebtn" style="border-radius: 10px;" id="div_connect">

				    <p>Get your referral link</p>
		  <a href="#" class="btn btn-lg btn2 pl-3 pr-3 " onclick="connect_wallet()">Connect Wallet</a>
			  </div>
      </div>
      <div class="d-flex justify-content-center">
        <div class="p-2 p-md-5 boxshadow col-12 col-md-6 bluebtn" style="border-radius: 10px;" id="div_generate">
       <p>Your address:</p>
          <h6 class="blueclr pb-3 text-white wallet-address">0xca1262e77fb25c0a4112cfc9bad3ff54f617f2e6</h6>
          <a href="#" class="btn btn-lg btn2 pl-3 pr-3" onclick="generateReferralLink()">Generate referral link</a>
       </div>
     </div>

     <div class="d-flex justify-content-center">
       <div class="p-2 p-md-5 boxshadow col-12 col-md-6 bluebtn" style="border-radius: 10px;" id="div_success">
         <p><u>Your Wallet address:</u></p>
            <h6 class="blueclr pb-3 text-white wallet-address">0xca1262e77fb25c0a4112cfc9bad3ff54f617f2e6</h6>
            <p><u>Your Referral Commission %:</u></p>
               <h6 class="blueclr pb-3 text-white">30%</h6>
      <p><u>Your referral link: </u></p>
         <h6 class="text-white pb-3" id="referral_link">https://buy.jax.network/locked-token-sale/?id=</h6>
    <a href="#" class="btn btn-lg btn2 pl-3 pr-3" onclick="copyReferralLink();">Copy</a>
      </div>
		  </div>





      </div>
    </div>
    <!-- /.row -->
  </div>


</header>

<!--FAQ starts-->
<section class="pb-5 pt-5">
  <div class="container">
    <h2 class="blueclr"><span class="pr-4">{</span>FAQs<span class="float-right">}</span></h2>
    <div class="row my-5">
      <div class="col-lg-6">
        <div id="accordionExample" class="accordion">
          <div class="card">
            <div id="headingZero" class="card-header border-0">
              <h6 class="mb-0 font-weight-bold"><a href="#" data-toggle="collapse" data-target="#collapseZero" aria-expanded="false" aria-controls="collapseZero" class="d-block position-relative text-uppercase collapsible-link py-2 blueclr">How much is the commission?</a></h6>
            </div>
            <div id="collapseZero" aria-labelledby="headingZero" data-parent="#accordionExample" class="collapse">
              <div class="card-body p-5">
                <p class="font-weight-light m-0 blueclr">The commission at the moment is 30%. We reserve the right to change it.</p>
              </div>
            </div>
          </div>
          <div class="card">
            <div id="headingThree" class="card-header border-0">
              <h6 class="mb-0 font-weight-bold"><a href="#" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree" class="d-block position-relative collapsed text-uppercase collapsible-link py-2 blueclr">How can I collect my commission?</a></h6>
            </div>
            <div id="collapseThree" aria-labelledby="headingThree" data-parent="#accordionExample" class="collapse">
              <div class="card-body p-5 blueclr">
                <p class="font-weight-light m-0">The commission collection process is automatic. First, you have to generate a referral link for yourself in this page. Then, you can share this referral link with your friends and when ever they make a purchase, the commission is instantly transferred to your wallet.</p>
              </div>
            </div>
          </div>
          <div class="card">
            <div id="headingOne" class="card-header border-0">
              <h6 class="mb-0 font-weight-bold"><a href="#" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne" class="d-block position-relative text-uppercase collapsible-link py-2 blueclr">Where can I find more info about locked tokens?</a></h6>
            </div>
            <div id="collapseOne" aria-labelledby="headingOne" data-parent="#accordionExample" class="collapse">
              <div class="card-body p-5">
                <p class="font-weight-light m-0 blueclr">You can learn more about the locked tokens by <a target = "_new" href="https://buy.jax.network/swap/locked-tokens/">clicking here</a>. </p>
              </div>
            </div>
          </div>

        </div>
      </div>
      <div class="col-lg-6">
        <div id="accordionExample1" class="accordion">
          <div class="card">
            <div id="headingEighta" class="card-header border-0">
              <h6 class="mb-0 font-weight-bold"><a href="#" data-toggle="collapse" data-target="#collapseEighta" aria-expanded="false" aria-controls="collapseEighta" class="d-block position-relative collapsed text-uppercase collapsible-link py-2 blueclr">What happens if my referral returns to the page later and purchases?</a></h6>
            </div>
            <div id="collapseEighta" aria-labelledby="headingEighta" data-parent="#accordionExample" class="collapse">
              <div class="card-body p-5">
                <p class="font-weight-light m-0 blueclr">Please note that we store a cookie when someone visits your referral link and the last person to refer a user is the one who gets the commission. The lifetime of the cookie is 30 days. </p>
              </div>
            </div>
          </div>
          <div class="card">
            <div id="headingEleven" class="card-header border-0">
              <h6 class="mb-0 font-weight-bold"><a href="#" data-toggle="collapse" data-target="#collapseEleven" aria-expanded="false" aria-controls="collapseEleven" class="d-block position-relative collapsed text-uppercase collapsible-link py-2 blueclr">Can I get a commission on selling unlocked WJXN?</a></h6>
            </div>
            <div id="collapseEleven" aria-labelledby="headingEleven" data-parent="#accordionExample1" class="collapse">
              <div class="card-body p-5">
                <p class="font-weight-light m-0 blueclr">Unfortunately, we don't have such a scheme right now.</p>
              </div>
            </div>
          </div>
          <div class="card">
            <div id="headingSeventeen" class="card-header border-0">
              <h6 class="mb-0 font-weight-bold"><a href="#" data-toggle="collapse" data-target="#collapseSeventeen" aria-expanded="false" aria-controls="collapseSeventeen" class="d-block position-relative collapsed text-uppercase collapsible-link py-2 blueclr">There are no more locked tokens for sale, will you top up the balance?
</a></h6>
            </div>
            <div id="collapseSeventeen" aria-labelledby="headingSeventeen" data-parent="#accordionExample1" class="collapse">
              <div class="card-body p-5">
                <p class="font-weight-light m-0 blueclr">Please note that locked tokens are available in limited quantities from time to time and we reserve the right to decide whether topup the balance of this contract.</p>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</section>
<!-- FAQ ends-->
<!-- /.container -->

<!-- Footer -->
<footer class="py-5 bg-dark text-white">
  <div class="container">
    <div class="row my-5">
      <div class="col-lg-3"><img src="image/jax_logo_white.svg" height="30" class="mb-2"  /><br/>
        <p>Jax.Network extends Bitcoin by following the JaxNet protocol and issues the decentralized, scalable, and stable JAX coin.</p>
      </div>
      <div class="col-lg-3"> <a href="https://jax.network/">JAX.NETWORK</a><br/>
        <a href="https://peacewallet.io/">WALLET</a><br/>
        <a href="https://gitlab.com/groups/jaxnet/-/activity">GITLAB</a><br/>
        <a href="https://arxiv.org/pdf/2005.01865.pdf">ACADEMIC PAPER</a> </div>
      <div class="col-lg-3"> <a href="https://jax-network.gitbook.io/token-sale/">DOCUMENTATION</a><br/>
        <a href="https://medium.com/jax-network">BLOG</a><br/>
        <a href="https://www.jax.network/privacy">PRIVACY POLICY</a><br/>
        <a href="https://www.jax.network/terms">TERMS</a> </div>
      <div class="col-lg-3">
        <div><a href="https://t.me/jax_chat" class="btn btn2 pl-3 pr-3">Join Telegram Chat <img src="image/telegram.svg" width="25px;"></a></div>
        <div class="social mt-3"> <a href="https://www.facebook.com/network.jax/" target="_blank"><img src="image/facebook.svg" width="25px;"></a> <a href="https://www.linkedin.com/company/jax-network/" target="_blank"><img src="image/linkedin.svg" width="25px;"></a> <a href="https://twitter.com/CommunityJax" target="_blank"><img src="image/twiiter.svg" width="25px;"></a> <a href="https://t.me/jax_network" target="_blank"><img src="image/telegram.svg" width="25px;"></a> <a href="https://www.youtube.com/channel/UCGLFiBG4j-CzEs9TFTKk51g" target="_blank"><img src="image/youtube.svg" width="25px;"></a></div>
        ©2021. Jax.Network. All rights reserved </div>
    </div>
  </div>
  <!-- /.container -->
</footer>

<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
<script src="vendor/jquery/slider.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/hammer.js/2.0.4/hammer.min.js"></script>
<script src="js/axios.min.js"></script>
<script src="js/lodash.min.js"></script>
<script src="js/awn.min.js"></script>
<script src="js/web3.min.js"></script>
<script src="js/util.js"></script>
<script src="js/wallet1.js"></script>
<script src="js/main.js"></script>
<script>
document.getElementById("amount1").addEventListener("change", function() {
  let v = parseInt(this.value);
  if (v < 100) this.value = 100;

});
document.getElementById("amount2").addEventListener("change", function() {
  let v = parseInt(this.value);
  if (v < 100) this.value = 100;

});
</script>
<script type="text/javascript">
	$("nav ul li a[href^='#']").on('click', function(e) {

   // prevent default anchor click behavior
   e.preventDefault();

   // store hash
   var hash = this.hash;

   // animate
   $('html, body').animate({
       scrollTop: $(hash).offset().top
     }, 700, function(){

       // when done, add hash to url
       // (default click behaviour)
       window.location.hash = hash;
     });

});
	</script>
</body>
</html>
