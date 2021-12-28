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
          <div class="item">
            <div class="heading">
              <p>Pair	</p>
              <h3> WJAX /   JAXUD </h3>
              <div class="features">
                <h4>Fee: <span class="feature"> 2.5%</span></h4>
              </div>
            </div>
          </div>
        </div>
        <div class="col-6 col-md-4">
          <div class="item">
            <div class="heading">
              <p>Pair	</p>
              <h3>  JAXUD / J-INR</h3>
              <div class="features">
                <h4>Fee: <span class="feature"> 2.5%</span></h4>
              </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container pb-5">
      <div class="row">
        <div class="col-12">
          <h3 class="text-blue d-block text-uppercase text-center mt-5">TRANSACTION FEES</h3>
          <p class="text-center">Transaction fees are collected from receivers for accepting payments using WJAX and LSCs.</p>
        </div>
      </div>
      <div class="row justify-content-md-center pricing-table">
        <div class="col-6 col-md-4">
          <div class="item">
          <div class="heading">
              <p>Token	</p>
              <h3>VRP</h3>
              <div class="features">
                <h4>Fee: <span class="feature"> 0%</span></h4>
              </div>
          </div>
        </div>
        </div>
        <div class="col-6 col-md-4">
          <div class="item">
          <div class="heading">
              <p>Token	</p>
              <h3>WJAX</h3>
              <div class="features">
                <h4>Fee: <span class="feature"> 0%</span></h4>
              </div>
          </div>
          </div>
        </div>
      </div>
      <div class="row justify-content-md-center pricing-table">
      <div class="col-6 col-md-4">
          <div class="item">
          <div class="heading">
              <p>Token	</p>
              <h3>  JAXUD</h3>
              <div class="features">
                <h4>Fee: <span class="feature"> 10%</span></h4>
              </div>
          </div>
          </div>
        </div>
        <div class="col-6 col-md-4">
          <div class="item">
          <div class="heading">
              <p>Token	</p>
              <h3>J-INR</h3>
              <div class="features">
                <h4>Fee: <span class="feature"> 3%</span></h4>
              </div>
          </div>
          </div>
        </div>
    </div>
    <p class="text-blue"> The LP pairs whitelist and exchange pairs whitelist are set by the Governor. </p>
    </div>
  </section>

  <!-- old -->
  <!-- table start-->
  <!-- <section class="bg-lighterblue">
    <div class="container pt-5 pb-5">
      <div class="row">
        <div class="col-12">
          <h2 class="text-blue d-block text-uppercase">Markup fees</h2>
          <p>Markup fees are applied on top of the exchange rates while swapping WJAX, LSCs. Exchange rates are fetched from DEXs, decentralized oracles such as Chainlink or set by the Governor.</p>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <div class="table-responsive p-1">
            <table class="table hometable" style="border-collapse:inherit;border-spacing:0 20px;">
              <thead>
                <tr>
                  <th class="radius2 pt-3 pb-3">Pair</th>
                  <th class=" pt-3 pb-3">Fee</th>
                </tr>
              </thead>
              <tbody>
                <tr class="box-shadow1">
                  <td class="align-middle">WJAX/  JAXUD</td>
                  <td class="align-middle" id="wjax_jusd_markup_fee">0.01%</td>
                </tr>
                <tr class="box-shadow1">
                  <td class="align-middle">  JAXUD/J-INR</td>
                  <td class="align-middle" id="jusd_jinr_markup_fee">0.01%</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    <div class="container pb-5">
      <div class="row">
        <div class="col-12">
          <h2 class="text-blue d-block text-uppercase">Transaction fees</h2>
          <p>Transaction fees are collected from receivers for accepting payments using WJAX and LSCs.</p>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <div class="table-responsive p-1">
            <table class="table hometable" style="border-collapse:inherit;border-spacing:0 20px;">
              <thead>
                <tr>
                  <th class="radius2 pt-3 pb-3">Token</th>
                  <th class=" pt-3 pb-3">Fee</th>
                </tr>
              </thead>
              <tbody>
                <tr class="box-shadow1">
                  <td class="align-middle">VRP</td>
                  <td class="align-middle" id="vrp_tx_fee">0.01%</td>
                </tr>
                <tr class="box-shadow1">
                  <td class="align-middle">WJAX</td>
                  <td class="align-middle" id="wjax_tx_fee">0.01%</td>
                </tr>
                <tr class="box-shadow1">
                  <td class="align-middle">  JAXUD</td>
                  <td class="align-middle" id="jusd_tx_fee">0.01%</td>
                </tr>
                <tr class="box-shadow1">
                  <td class="align-middle">J-INR</td>
                  <td class="align-middle" id="jinrx_tx_fee">0.01%</td>
                </tr>
              </tbody>
            </table>
          </div>
          
        </div>
      </div>
    </div>
  </section> -->

  <!-- table end-->

</main>
<?php include "includes/footer.php"; ?>

<?php include "includes/footerJs.php"; ?>
</body>
</html>
