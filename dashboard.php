<?php

  include "includes/config.php";

?>

<?php

  include "includes/head.php";

?>


<?php include "includes/sidebar_logged_in.php"; ?>
<main role="main" class="bg-lighterblue pt-2 pb-2 pt-md-5 pb-md-5">
  <div class="container">
    <div class="stats row text-blue mb-2 mb-md-5">
      <div> WJXN PRICE<br/>
        <strong>$916</strong> </div>
      <div> DAILY REWARDS<br/>
        <strong>10,000 WJXN</strong> </div>
      <div> COLLATERAL RATIO<br/>
        <strong>110%</strong> </div>
      <div> RESERVES RATIO<br/>
        <strong>110%</strong> </div>
    </div>
    <!-- two boxes start-->
    <div class="row mb-md-4 mb-2">
      <div class="col-12 col-md-6 mb-3">
        <div class="stakebox text-center p-md-5 p-2">
          <h3 class="text-blue pb-md-3 pb-2">My BUSD Staking</h3>
          <div class="row mr-0 ml-0 goldbrd mb-md-4 mb-2" >
            <div class="col-6 pt-2 pb-2">
              <p class="pb-0 text-info mb-2">Total staked:</p>
              <h4 class="text-blue pb-0 mb-0"><strong>916 BUSD</strong></h4>
            </div>
            <div class="col-6 pt-2 pb-2">
              <p class="pb-0 text-info mb-2">Total staked:</p>
              <h4 class="text-blue pb-0 mb-0"><strong>916 BUSD</strong></h4>
            </div>
          </div>
          <div class="row">
            <div class="col-12">
               <a href="<?=$swap_busd_link?>" class="btn btn-info btn-lg w-100">Deposit</a> 
               <a href="<?=$swap_unstake_busd_link?>" class="btn btn-link btn-lg w-100">Unstake</a> 
              </div>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-6 mb-3">
        <div class="stakebox text-center p-md-5 p-2">
          <h3 class="text-blue pb-md-3 pb-2">My VRP Staking</h3>
          <div class="row mr-0 ml-0 goldbrd mb-md-4 mb-2" >
            <div class="col-6 pt-2 pb-2">
              <p class="pb-0 text-info mb-2">Total staked:</p>
              <h4 class="text-blue pb-0 mb-0"><strong>916 BUSD</strong></h4>
            </div>
            <div class="col-6 pt-2 pb-2">
              <p class="pb-0 text-info mb-2">Total staked:</p>
              <h4 class="text-blue pb-0 mb-0"><strong>916 BUSD</strong></h4>
            </div>
          </div>
          <div class="row">
            <div class="col-12">
               <a href="<?=$wjxn_swap_link?>" class="btn btn-info btn-lg w-100">Deposit</a> 
            <a href="<?=$unstake_swap_wjxn_link?>" class="btn btn-link btn-lg w-100">Unstake</a>
           </div>
          </div>
        </div>
      </div>
    </div>
    <!-- two boxes start--> 
    <!--Accumulated Yield start-->
    <div class="row stakebox accumulated ml-0 mr-0 box-shadow mb-md-5 mb-2">
      <div class="col-6 p-3">
        <div>
          <p class="mb-0 pb-0 text-info">Accumulated Yield</p>
          <h4 class="mb-0 pb-0 text-blue"><strong>502,236.25 WJXN</strong></h4>
        </div>
      </div>
      <div class="col-6 p-3">
        <div class="text-right"> <a href="<?=$swap_harvest_link?>" class="btn btn-info btn-lg">Harvest</a> </div>
      </div>
    </div>
    <!--Accumulated Yield end--> 
    <!--My yield start-->
    <div class="row stakebox myyield ml-0 mr-0">
      <div class="p-md-3 p-2 col-12">
        <h3 class="pb-md-4 pb-2 text-blue">My yield</h3>
        <div class="row d-flex mb-md-4 mb-2">
          <div class="col-6">
            <p class="text-info mb-0 pb-0">Total BUSD Staking yield</p>
            <h3 class="text-blue">411,357.93 WJXN</h3>
          </div>
          <div class="col-6">
            <p class="text-info mb-0 pb-0">Total VRP Staking yield</p>
            <h3 class="text-blue">411,357.93 WJXN</h3>
          </div>
        </div>
        <h4 class="text-blue">Latest Activity</h4>
        <!-- table start-->
        <div class="restable" id="results">
          <div class="theader">
            <div class="table_header pt-md-3 pb-md-3 pt-1 pb-1 pl-2">Date</div>
            <div class="table_header pt-md-3 pb-md-3 pt-1 pb-1 pl-2">BUSD Staking <span>Restake</span></div>
            <div class="table_header pt-md-3 pb-md-3 pt-1 pb-1 pl-2">VRP Staking <span>Restake</span></div>
          </div>
          <div class="table_row">
            <div class="table_small">
              <div class="table_cell">Date</div>
              <div class="table_cell">19.08.2019 at 19:43</div>
            </div>
            <div class="table_small">
              <div class="table_cell">BUSD Staking <span>Restake</span></div>
              <div class="table_cell"><span class="text-success">+ 63</span> WJXN</div>
            </div>
            <div class="table_small">
              <div class="table_cell">VRP Staking <span>Restake</span></div>
              <div class="table_cell"><span class="text-danger">- 63</span> WJXN</div>
            </div>
          </div>
          <div class="table_row">
            <div class="table_small">
              <div class="table_cell">Date</div>
              <div class="table_cell">19.08.2019 at 19:43</div>
            </div>
            <div class="table_small">
              <div class="table_cell">BUSD Staking <span>Restake</span></div>
              <div class="table_cell"><span class="text-success">+ 63</span> WJXN</div>
            </div>
            <div class="table_small">
              <div class="table_cell">VRP Staking <span>Restake</span></div>
              <div class="table_cell"><span class="text-success">+ 63</span> WJXN</div>
            </div>
          </div>
        </div>
        <!-- table end--> 
      </div>
    </div>
    <!--My yield end--> 
  </div>
</main>

<?php include "includes/footer.php"; ?>

<?php include "includes/footerJs.php"; ?>







</body>
</html>
