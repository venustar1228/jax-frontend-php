<?php

  include "includes/config.php";

?>

<?php

  include "includes/head.php";

?>
<?php

  include "includes/sidebar_logged_in.php";

?>
<main role="main" class="bg-lighterblue">
  <div class="container pt-5 pb-5">
    <div class="row justify-content-center">
      <div class="col-12 col-md-12">
        <div class="bg-white box-shadow border-radius p-4 mb-4">
            <h3 class="text-blue pb-3">Voting</h3>
            <p class="text-blue">VRP tokens represent voting shares in Jax.Money  governance. Volatility reserves pool (VRP) token holders can participate in governor election.</p>
            <p><a href="#" class="text-blue" style="text-decoration: underline">Read more about Jax.Network Governance.</a></p>
        <a href="<?=$wjxn_swap_link?>" class="btn btn-info btn-lg mb-4">GET VRP TOKENS</a>
          </div>
        <div class="text-center active_vote"> 
          <h4 class="text-blue">No active voting at the moment</h4>
        </div>
        <div class="active_voting_wrap  active">
          <div class="text-center mb-3">
            <h4 class="text-blue">Active Votings</h4>
          </div>
          <div id="voting_cl_wrap" class="bg-white box-shadow border-radius p-4 mb-4 voting ">
            <div class="flex-fill d-flex voting_dis_wrap">
              <div class="col-6 d-flex justify-content-start align-items-center"><p class="text-blue font80 mb-0">Governor Election</p></div>
              <div class="col-6 d-flex justify-content-end align-items-center"><div class="btn btn-info btn-lg font80" onclick="makeActive()" >Vote</div></div>
            </div>
            <div class="voting_inner">
                <h4 class="text-blue">Governor Election</h4>
                <div class="flex-fill d-flex justify-content-start align-items-center">
                  <div class="col-12 p-0 col-md-6 justify-content-center align-items-center mx-auto pt-4">
                    <div class="p-3 p-md-5 bg-lighterblue border-radius mb-2 fill_form_vote_wrap active">
                      <h5 class="text-blue font-weight-normal pb-1 pb-md-4 text-center">Enter preferred Governor’s key </h5>
                      <form>
                        <div class="form-group mb-0" style="position: relative">
                          <input type="text" class="form-control border-blue pt-2 pb-2" id="amount" aria-describedby="number" placeholder="">
                          <div class="text-center mt-3"> <a href="#" class="btn btn-info btn-lg">Vote</a> </div>
                        </div>
                      </form>
                    </div>
                    <div class="p-3 p-md-5 bg-lighterblue border-radius mb-2 succes_form_wrap">
                      <h5 class="text-success font-weight-normal pb-1 pb-md-4 text-center">Thank you for your vote!</h5>
                      <form>
                        <div class="form-group mb-0" style="position: relative">
                          <input type="text" class="form-control brdsuccess pt-2 pb-2" id="amount" aria-describedby="number" placeholder="f82sdsa3564sadsad4">
                          <div class="text-center mt-3"> <p class="text-blue pb-0 mb-0">Your voting is successful. get more VRP tokens here.</p> </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
                <p class="pt-3 pb-0 mb-0"><a href="#" class="text-blue">Read more about Governor’s election</a></p>
              </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>
<?php include "includes/footer.php"; ?>

<?php include "includes/footerJs.php"; ?>
</body>
</html>
