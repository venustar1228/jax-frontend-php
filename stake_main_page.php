<?php

  include "includes/config.php";

?>

<?php

  include "includes/head.php";

?>


<?php include "includes/sidebar_logged_in.php"; ?>
<header class="bg-lighterblue pt-5 pb-5">
  <div class="container">
    <div class="row h-100">
      <div class="col-12 col-md-6 my-auto">
        <div class="pb-3">
          <h1 class="text-blue pb-4">BUSD Staking</h1>
          <h4 class="text-blue pb-4">Earn up to _% API by providing liquidity</h4>
        </div>
      </div>
      <div class="col-12 col-md-6 video"><!-- THE YOUTUBE PLAYER -->
        <div class="vid-container">
          <iframe width="100%" height="100%" src="https://www.youtube.com/embed/Nj26lNgsvxY?controls=0" title="" id="vid_frame" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
      </div>
    </div>
  </div>
</header>
<main role="main">
<!--How mush can I earn? start-->
<section class="bg-white pt-5 pb-5">
  <div class="container">
    <h2 class="text-blue text-center d-block pb-5">How much can I earn?</h2>
    <div class="row h-100">
      <div class="col-12 col-md-6 mb-2 mb-md-0">
        <div class="p-2 p-md-5 bg-lighterblue border-radius box-shadow mb-2 h-100 d-block">
          <h4 class="text-blue font-weight-normal pb-4 text-center">How much you are investing</h4>
          <div class="text-center">
					  <h5 class="text-blue text-center out_bl"> BUSD AMOUNT <strong style="font-size:23px;"> <output id="rangevalue">10000</output> </strong> </h5>
					  <div class="col-auto mb-4">
						<label class="sr-only" for="inlineFormInputGroup">100000</label>
						<div class="input-group mb-2 rang_inp">
							<input type="range" value="1000" min="0" max="100000"   oninput="rangevalue.value=value;dayIncome.innerHTML = '$' +(value * 5 / (100 * 365)).toFixed(4)"/>

						  <!-- <input type="range" name = "hashrate_percentage" id = "hashrate_percentage"  onchange = "javascript:update_simulated_extra_revenues();" class="form-control blueborder p-2" id="inlineFormInputGroup" value = "100" placeholder="100" max="100"> -->
						  <!-- <div class="input-group-prepend">
							<div class="input-group-text">%</div>
						  </div> -->
						</div>
					  </div>
					</div>
					<div class="text-center">
            <h4 class="text-blue">Estimated income per day</h4>
            <div class="border-blue p-2 border-radius bg-white">
              <div class="d-flex">
                <div class="col-6 text-center">
                  <h6 class="text-blue">APY</h6>
                  <span class="text-blue"> 5 %</span> </div>
                <div class="col-6 text-center">
                  <h6 class="text-blue">Day Income</h6>
                  <span id="dayIncome" class="text-yellow font-weight-bold">  $ </span> </div>
              </div>
            </div>
          </div>
          <!-- <form>
            <div class="form-group" style="position: relative"> <span style="position: absolute; top:7px; right:15px;" class="text-blue font-weight-bold">BUSD</span>
              <input type="text" class="form-control border-blue" id="amount" aria-describedby="number" placeholder="">
            </div>
          </form> -->
        </div>
      </div>
      <div class="col-12 col-md-6 mb-2 mb-md-0">
        <div class="p-2 p-md-5 bg-lighterblue border-radius box-shadow mb-2 h-100 d-block">
          <h4 class="text-blue font-weight-normal text-center p-1 p-md-5">You can earn up to </h4>
          <h3 class="text-blue font-weight-bold text-center">500 BUSD at 50% APY </h3>
          <h4 class="text-blue font-weight-normal text-center">in 1 year</h4>
          <div class="text-center"><a href="<?=$dashboard_link?>" class="btn btn-info btn-lg">START EARNING</a></div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--How mush can I earn? end--> 

<!--3boxes with icons start-->
<section class="bg-lighterblue pt-5 pb-5">
  <div class="container">
    <div class="row h-100 dash_icon_wrap">
      <div class="col-12 col-sm-4">
        <div class="text-center"> <img src="img/icon1.svg" class="pb-4" width="70px"/>
          <h4 class="text-blue font-weight-normal pb-4">Only 1% swap fee</h4>
        </div>
      </div>
      <div class="col-12 col-sm-4">
        <div class="text-center"> <img src="img/icon2.svg" class="pb-4" width="60px"/>
          <h4 class="text-blue font-weight-normal pb-4">Unlimited withdrawals and deposits</h4>
        </div>
      </div>
      <div class="col-12 col-sm-4">
        <div class="text-center"> <img src="img/icon3.svg" class="pb-4" width="70px"/>
          <h4 class="text-blue font-weight-normal pb-4">Instant payouts</h4>
        </div>
      </div>
    </div>
  </div>
</section>
<!--3boxes with icons end--> 
<!--points starts--->
<section class="bg-white pt-5 pb-5">
  <div class="container">
    <h3 class="text-blue font-weight-bold pb-4 text-center">How to start?</h3>
    <div class="row h-100 bridgetext">
      <ul class="pb-0 mb-0 ml-0 pl-2">
        <li class="d-block text-blue pb-3"><i class="bg-blue">1</i> Get BUSD tokens</li>
        <li class="d-block text-blue pb-3"><i class="bg-blue">2</i> Stake BUSD on Jax.Money</li>
        <li class="d-block text-blue pb-3"><i class="bg-blue">3</i> Receive yield from Jax.Money and DEXs</li>
      </ul>
    </div>
    <div class="row h-100 text-center d-block pt-3"> <a href="<?=$dashboard_link?>" class="btn btn-info btn-lg">STAKE BUSD</a> </div>
  </div>
</section>
<!--points ends---> 
<!---FAQ-->
	<section class="bg-lighterblue pt-5">
		<div class="container">
   <h3 class="text-blue font-weight-bold text-center">FAQ</h3>
    <div class="row my-5">
      <div class="col-lg-6"> 
        
        <!-- Accordion -->
        <div id="accordionExample" class="accordion"> 
          
          <!-- Accordion item 1 -->
          <div class="card">
            <div id="headingOne" class="card-header border-0">
              <h6 class="mb-0 font-weight-bold"><a href="#" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne" class="d-block position-relative text-uppercase collapsible-link py-2 blueclr">What is Jax.Network?</a></h6>
            </div>
            <div id="collapseOne" aria-labelledby="headingOne" data-parent="#accordionExample" class="collapse">
              <div class="card-body p-5">
                <p class="font-weight-light m-0 blueclr">Jax.Network is a blockchain platform that follows the JaxNet protocol. Jax.Network is anchored to the Bitcoin blockchain and issues two coins: JAX and JXN. JAX coins are created on top of Jax.Network shard chains. Their value is always stable, as its based on the cost of 1 unit of computing power. They can be used as a stable payment method for day-to-day transactions. JXN is issued on top of the beacon chain of the Jax.Network blockchain. It has a fixed reward per block and can be used for speculative purposes and as a store of value. Learn more at <a href="https://jax.network/">jax.network</a>. </p>
              </div>
            </div>
          </div>
          
          <!-- Accordion item 2 -->
          <div class="card">
            <div id="headingTwo" class="card-header border-0">
              <h6 class="mb-0 font-weight-bold"><a href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" class="d-block position-relative collapsed text-uppercase collapsible-link py-2 blueclr">What is WJXN?</a></h6>
            </div>
            <div id="collapseTwo" aria-labelledby="headingTwo" data-parent="#accordionExample" class="collapse">
              <div class="card-body p-5 blueclr">
                <p class="font-weight-light m-0">WJXN token is Wrapped JXN coin. It’s an ERC-20 token.</p>
              </div>
            </div>
          </div>
          
          <!-- Accordion item 3 -->
          <div class="card">
            <div id="headingThree" class="card-header border-0">
              <h6 class="mb-0 font-weight-bold"><a href="#" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree" class="d-block position-relative collapsed text-uppercase collapsible-link py-2 blueclr">Why do I need WJXN tokens?</a></h6>
            </div>
            <div id="collapseThree" aria-labelledby="headingThree" data-parent="#accordionExample" class="collapse">
              <div class="card-body p-5 blueclr">
                <p class="font-weight-light m-0">WJXN tokens allow everyone to buy JXN coins at the lowest price and get a higher ROI in the future. Our prediction is that once the network gains adopters, its value will increase, thus increasing the value of JXN coins.</p>
                <p>For more information regarding the potential returns on your investment watch our video: <a href="https://www.youtube.com/watch?v=1Oh67wlFvlo">https://www.youtube.com/watch?v=1Oh67wlFvlo</a></p>
              </div>
            </div>
          </div>
          <!-- Accordion item 4 -->
          <div class="card">
            <div id="headingFour" class="card-header border-0">
              <h6 class="mb-0 font-weight-bold"><a href="#" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour" class="d-block position-relative collapsed text-uppercase collapsible-link py-2 blueclr">What is the exchange rate?</a></h6>
            </div>
            <div id="collapseFour" aria-labelledby="headingFour" data-parent="#accordionExample" class="collapse">
              <div class="card-body p-5">
                <p class="font-weight-light m-0 blueclr">WJXN is backed at a 1:1 rate with the MainNet beacon JXN token. Jax.Network is responsible for swapping unlocked WJXN to JXN anytime you want after we launch our MainNet.</p>
              </div>
            </div>
          </div>
          <!-- Accordion item 4 --> 
          <!-- Accordion item 5 -->
          <div class="card">
            <div id="headingFive" class="card-header border-0">
              <h6 class="mb-0 font-weight-bold"><a href="#" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive" class="d-block position-relative collapsed text-uppercase collapsible-link py-2 blueclr">What is the price of WJXN?</a></h6>
            </div>
            <div id="collapseFive" aria-labelledby="headingFive" data-parent="#accordionExample" class="collapse">
              <div class="card-body p-5">
                <p class="font-weight-light m-0 blueclr">The starting price of 1 WJXN is $0.97. As soon as we released the tokens on the decentralized exchanges, they are governed by the market rules, meaning the price may go up when there are more buyers, and go down when sellers prevail. </p>
              </div>
            </div>
          </div>
          <!-- Accordion item 5 --> 
          
        </div>
      </div>
      <div class="col-lg-6"> 
        
        <!-- Accordion -->
        <div id="accordionExample1" class="accordion"> 
          
          <!-- Accordion item 8 -->
          <div class="card">
            <div id="headingEight" class="card-header border-0">
              <h6 class="mb-0 font-weight-bold"><a href="#" data-toggle="collapse" data-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight" class="d-block position-relative text-uppercase collapsible-link py-2 blueclr">What are the official contract addresses of WJXN?</a></h6>
            </div>
            <div id="collapseEight" aria-labelledby="headingEight" data-parent="#accordionExample1" class="collapse">
              <div class="card-body p-5">
                <p class="font-weight-light m-0 blueclr">WJXN contract addresses:</p>
                <p>BEP-20: 0xca1262e77fb25c0a4112cfc9bad3ff54f617f2e6</p>
                <p>ERC-20: 0xcA1262e77Fb25c0a4112CFc9bad3ff54F617f2e6</p>
                <p>Please, ensure that you accept WJXN tokens ONLY from these contract addresses as there’s a chance of scammers copying these contracts and trying to sell you counterfeit tokens. </p>
              </div>
            </div>
          </div>
          
          <!-- Accordion item 9 -->
          <div class="card">
            <div id="headingNine" class="card-header border-0">
              <h6 class="mb-0 font-weight-bold"><a href="#" data-toggle="collapse" data-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine" class="d-block position-relative collapsed text-uppercase collapsible-link py-2 blueclr">How can I buy WJXN?</a></h6>
            </div>
            <div id="collapseNine" aria-labelledby="headingNine" data-parent="#accordionExample1" class="collapse">
              <div class="card-body p-5">
                <p class="font-weight-light m-0 blueclr">You can get our WJXN tokens on Uniswap and PancakeSwap. Just follow this link for Uniswap and this for PancakeSwap. Please double-check the contract address before you buy any WJXN tokens from DEXs.</p>
              </div>
            </div>
          </div>
          
          <!-- Accordion item 10 -->
          <div class="card">
            <div id="headingTen" class="card-header border-0">
              <h6 class="mb-0 font-weight-bold"><a href="#" data-toggle="collapse" data-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen" class="d-block position-relative collapsed text-uppercase collapsible-link py-2 blueclr">How many tokens are there for sale?</a></h6>
            </div>
            <div id="collapseTen" aria-labelledby="headingTen" data-parent="#accordionExample1" class="collapse">
              <div class="card-body p-5">
                <p class="font-weight-light m-0 blueclr">16.000.000 WJXN tokens are available for sale.</p>
              </div>
            </div>
          </div>
          <!-- Accordion item 11 -->
          <div class="card">
            <div id="headingEleven" class="card-header border-0">
              <h6 class="mb-0 font-weight-bold"><a href="#" data-toggle="collapse" data-target="#collapseEleven" aria-expanded="false" aria-controls="collapseEleven" class="d-block position-relative collapsed text-uppercase collapsible-link py-2 blueclr">How do you intend to use the funds?</a></h6>
            </div>
            <div id="collapseEleven" aria-labelledby="headingEleven" data-parent="#accordionExample1" class="collapse">
              <div class="card-body p-5">
                <p class="font-weight-light m-0 blueclr">The funds raised will be used for R&amp;D, Marketing, Market making, ecosystem growth funding, and general support of the protocol. Please refer to our "use of funds" section or check our investment proposal for more details.</p>
              </div>
            </div>
          </div>
          <!-- Accordion item 12 -->
          <div class="card">
            <div id="headingTwelve" class="card-header border-0">
              <h6 class="mb-0 font-weight-bold"><a href="#" data-toggle="collapse" data-target="#collapseTwelve" aria-expanded="false" aria-controls="collapseTwelve" class="d-block position-relative collapsed text-uppercase collapsible-link py-2 blueclr">When will the token sale end?</a></h6>
            </div>
            <div id="collapseTwelve" aria-labelledby="headingTwelve" data-parent="#accordionExample1" class="collapse">
              <div class="card-body p-5">
                <p class="font-weight-light m-0 blueclr">Token sale will last till 30th of November or until all allocated tokens will be sold, whichever is earlier. </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
	</section>
	<!--FAQ-->
</main>
<?php include "includes/footer.php"; ?>

<?php include "includes/footerJs.php"; ?>
</body>
</html>
