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
<section class="pt-5 pb-5">
    <div class="container">
      <div class="row">
        <div class="col-12 col-md-4 text-center">
          <h4 class="text-blue">BUSD Liquidty</h4>
          <div class="bg-white box-shadow pt-2 pb-2 mb-3 border-radius"><h5 class="greentext"><small>BUSD Liquidty Ratio: 15.2</small></h5></div>
          <div class="box-shadow bg-white border-radius p-4">
            <div id="chartdiv"></div>
            <hr>
            <div class="p-2 border-radius border mb-4">
              <p class="text-blue pb-0 mb-0"><span>WJAX Supply</span><br>
                <span class="fa-2x border-radius">0</span></p>
            </div>
			   <div class="p-2 border-radius border">
              <p class="text-blue pb-0 mb-0"><span>BUSD Reserves</span><br>
                <span class="fa-2x border-radius">0</span></p>
            </div>
            <!--chart--->
            <div class="graf_wrap">

              <div class="card mt-4">
                <div class="card-body p-0 pt-2">
                <div id="container1" style="height: 300px; width: 400"></div>
                </div>
              </div>
              
            </div>
            
            <!--chart---> 
          </div>
        </div>
		  <div class="col-12 col-md-4 text-center">
          <h4 class="text-blue ">WJAX Collateral</h4>
          <div class="bg-white box-shadow pt-2 pb-2 mb-3 border-radius"><h5 class="greentext"><small>WJAX collateral Ratio: 15.2</small></h5></div>
          <div class="box-shadow bg-white border-radius p-4">
            <div id="chartdiv1"></div>
            <hr>
            <div class="p-2 border-radius border mb-4">
              <p class="text-blue pb-0 mb-0"><span>WJAX $Value</span><br>
                <span class="fa-2x border-radius">0</span></p>
            </div>
			   <div class="p-2 border-radius border">
              <p class="text-blue pb-0 mb-0"><span>LSC $Value</span><br>
                <span class="fa-2x border-radius">0</span></p>
            </div>
             <!--chart--->
             <div class="graf_wrap">

<div class="card mt-4">
  <div class="card-body p-0 pt-2">
  <div id="container2" style="height: 300px; width: 400"></div>
  </div>
</div>

</div>

<!--chart---> 
          </div>
        </div>
		  <div class="col-12 col-md-4 text-center">
          <h4 class="text-blue ">WJXN Collateral (VRP)</h4>
          <div class="bg-white box-shadow pt-2 pb-2 mb-3 border-radius"><h5 class="greentext"><small>WJXN collateral Ratio: 15.2</small></h5></div>
          <div class="box-shadow bg-white border-radius p-4">
            <div id="chartdiv2"></div>
            <hr>
            <div class="p-2 border-radius border mb-4">
              <p class="text-blue pb-0 mb-0"><span>WJXN $Reserves</span><br>
                <span class="fa-2x border-radius">0</span></p>
            </div>
			   <div class="p-2 border-radius border">
              <p class="text-blue pb-0 mb-0"><span>WJAX $Reserves</span><br>
                <span class="fa-2x border-radius">0</span></p>
            </div>
             <!--chart--->
             <div class="graf_wrap">

<div class="card mt-4">
  <div class="card-body p-0 pt-2">
  <div id="container3" style="height: 300px; width: 400"></div>
  </div>
</div>

</div>

<!--chart---> 
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="bg-white pt-5 pb-5">
    <div class="container">
      <div class="row h-100">
        <div class="col-12 col-sm-4">
          <div class=""> <img src="img/icon1.svg" class="pb-4" width="70px">
            <h4 class="text-blue font-weight-normal pb-4">Fully backed by Proof of On-Chain reserves</h4>
          </div>
        </div>
        <div class="col-12 col-sm-4">
          <div class=""> <img src="img/icon2.svg" class="pb-4" width="60px">
            <h4 class="text-blue font-weight-normal pb-4">Democratic,  decentralized, auditable system</h4>
          </div>
        </div>
        <div class="col-12 col-sm-4">
          <div class=""> <img src="img/icon3.svg" class="pb-4" width="70px">
            <h4 class="text-blue font-weight-normal pb-4">Diverse community with ecosystem level checks: holders, stakers, liquidity providers</h4>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>
<?php include "includes/footer.php"; ?>

<?php include "includes/footerJs.php"; ?>
</body>
</html>
