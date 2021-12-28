<?php

  include "includes/config.php";

?>

<?php

  include "includes/head.php";

?>
<?php

  include "includes/sidebar.php";

?>
<main role="main" class="bg-lighterblue">
  <!-- table start-->
  <section class="bg-lighterblue">
    <div class="container pt-5 pb-5">
      <div class="row">
        <div class="col-12">
          <h3 class="text-blue d-block text-uppercase text-center">MARKUP FEES</h3>
			<p class="text-center">Markup fees are applied on top of the exchange rates while swapping WJAX, LSCs. Exchange rates are fetched from DEXs, decentralized oracles such as Chainlink or set by the Governor.</p>
        </div>
      </div>
      <div class="row justify-content-md-center pricing-table">
        <div class="col-6 col-md-4">
          <div class="item alert-info">
            <div class="heading">
              <p>Pair</p>
              <h3>WJAX/  JAXUD</h3>
            
            </div>
            <p>Fees</p>
            <h5 class="bg-lighterblue border-radius p-2 text-center"  >0.01%</h5>
          </div>
        </div>
        <div class="col-6 col-md-4">
          <div class="item alert-info">
            <div class="heading">
              <p>Pair</p>
              <h3>  JAXUD/J-INR</h3>
           
            </div>
            <p>Fees</p>
            <h5 class="bg-lighterblue border-radius p-2 text-center"  >0.01%</h5>
          </div>
        </div>
      </div>
    </div>
    <div class="container pb-5">
      <div class="row">
        <div class="col-12">
          <h3 class="text-blue d-block text-uppercase text-center mt-5">TRANSACTION FEES</h3>
          <p class="text-center">Transaction fees are collected from receivers for accepting payments using WJAX and LSCs.</p>
			<p class="text-center">The LP pairs whitelist and exchange pairs whitelist are set by the Governor.</p>
        </div>
      </div>
      <div class="row justify-content-md-center pricing-table">
        <div class="col-6 col-md-3">
          <div class="item alert-info">
            <div class="heading">
              <p>Token</p>
              <h3>VRP</h3>           
            </div>
            <p>Fee</p>
            <h5 class="bg-lighterblue border-radius p-2 text-center"  >0.01%</h5>
          </div>
        </div>
		  <div class="col-6 col-md-3">
          <div class="item alert-info">
            <div class="heading">
              <p>Token</p>
              <h3>WJAX</h3>           
            </div>
            <p>Fee</p>
            <h5 class="bg-lighterblue border-radius p-2 text-center"  >0.01%</h5>
          </div>
        </div>
		  <div class="col-6 col-md-3">
          <div class="item alert-info">
            <div class="heading">
              <p>Token</p>
              <h3>  JAXUD</h3>           
            </div>
            <p>Fee</p>
            <h5 class="bg-lighterblue border-radius p-2 text-center"  >0.01%</h5>
          </div>
        </div>
		  <div class="col-6 col-md-3">
          <div class="item alert-info">
            <div class="heading">
              <p>Token</p>
              <h3>J-INR</h3>           
            </div>
            <p>Fee</p>
            <h5 class="bg-lighterblue border-radius p-2 text-center"  >0.01%</h5>
          </div>
        </div>
      </div>
    </div>
 
  </section>

  <!-- table end-->

</main>
<?php include "includes/footer.php"; ?>

<?php include "includes/footerJs.php"; ?>
</body>
</html>
