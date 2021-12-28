<?php

  include "includes/config.php";

?>

<?php

  include "includes/head.php";

?>


<?php include "includes/sidebar_logged_in.php"; ?>

<main role="main" class="bg-lighterblue">
  <div class="container pt-5 pb-5">
    <div class="row justify-content-center">
      <div class="col-12 col-md-6">
        <div class="bg-lightblue border-radius p-3 exchange mb-3">
          <h4 class="text-white">Unstake</h4>
          <div class="bg-lighterblue p-3 border-radius mb-3">
            <div class="row">
              <div class="col-4">
                <div class="text-blue font-weight-bold"><h4>BUSD</h4></div>
              </div>
              <div class="col-8 text-right">
                <div class="form-group">
                  <input type="text" class="form-control text-right" id="formoney" placeholder="0.00000">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-8 text-blue">Balance: 0.000000 BUSD</div>
				<div class="col-4 text-blue text-right font-weight-bold"><a href="#" class="text-blue">All</a></div>
            </div>
          </div>
        
          <div class="row">
			  <div class="col-6 text-white text-left pb-2 font3w">MIN 10 BUSD</div>
            <div class="col-6 text-white text-right pb-2 font3w">MAX 10,000 BUSD</div>
          </div>
          <div class="row">
            <div class="col-12"><a href="#" class="btn btn-info w-100 btn-lg pt-3 pb-3" data-toggle="modal" data-target="#exampleModalCenter" >Deposit</a></div>
          </div>
        </div>
       
      </div>
    </div>
  </div>
</main>

<!------------------------------MODEL START--------------------------------> 
<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-blue" id="exampleModalLongTitle">Confirm Deposit</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
      </div>
      <div class="modal-body">
        <div class="exchange">
        
          <div class="bg-lighterblue border-lightblue p-3 border-radius mb-3">
          
            <div class="row">
              <div class="col-4">
               <div><h4 class="text-blue mb-0">BUSD</h4></div>
              </div>
              <div class="col-8 text-right">
                <div><h4 class="text-blue font-weight-normal mb-0">150</h4></div>
              </div>
            </div>
          </div>
          <div class="bg-lighterblue border-lightblue p-3 border-radius mb-3 position-relative">
          
            <div class="row">
              <div class="col-4">
               <div class="text-blue">Network fee</div>
              </div>
              <div class="col-8 text-right">
               <div class="text-blue font-weight-bold">0.00073 BNB</div>
              </div>
            </div>
          </div>
        
       
          <div class="row">
            <div class="col-12"><a href="#" class="btn btn-info w-100 btn-lg pt-3 pb-3" data-toggle="modal" data-target="#exampleModalCenter" >Confirm Deposit</a></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
  <?php include "includes/footer.php"; ?>

  <?php include "includes/footerJs.php"; ?>
</body>
</html>
