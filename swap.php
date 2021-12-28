<?php

  include "includes/config.php";

?>

<?php

  include "includes/head.php";

?>
<?php include "includes/sidebar_logged_in.php"; ?>
<nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
  <div class="container-fluid"> <a class="navbar-brand" href="#"><img src="img/jax-money.svg" width="150"></a>
    <div class="mobhide ml-auto" id="">
      <form class="form-inline my-2 my-lg-0 homeselect mr-3">
        <div class="dropdown">
          <a id="btn_connect" href="#" class="btn btn-info my-2 my-sm-0 mr-3 border-radius pt-2 pb-2"   onclick="connect_wallet()">Connect a wallet</a>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
            <li><a class="dropdown-item" href="#" onclick="disconnect_wallet();">Disconnect wallet</a></li>
          </ul>
        </div>

        <!-------------------------------------------------------------->
        <div class="select selectwal" tabindex="1">
          <input class="selectopt" name="test" type="radio" id="opt1" checked>
          <label for="opt1" class="option">Binance Smart Chain Mainnet</label>
        </div>
        <!-------------------------------------------------------------->
      </form>
    </div>
    <button type="button" id="sidebarCollapse" class="btn btn-info"> <i class="fa fa-bars"></i> </button>
  </div>
</nav>
<main role="main" class="bg-lighterblue">
  <div class="container pt-5 pb-5">
    <div class="row justify-content-center">
      <div class="col-12 swap_form_wrap">
        <div class="bg-lightblue border-radius p-3 exchange mb-3">
          <h4 class="text-white">Exchange</h4>
          <div class="bg-lighterblue p-3 border-radius mb-3">
            <div class="row">
              <div class="col-4">
                <div class="form-group">
                  <select class="form-control box-shadow1 token_select" id="token_1">
                    <option>WJXN</option>
                    <option>VRP</option>
                  </select>
                </div>
              </div>
              <div class="col-8 text-right">
                <div class="form-group">
                  <input type="number" class="form-control text-right money" id="money_1" placeholder="0.0">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-12 text-blue" id="balance_1">Balance: 0.000000 WJAX</div>
            </div>
          </div>
          <div class="bg-lighterblue p-3 border-radius mb-3 position-relative"> <span class="swapicon p-2 border-radius bg-blue text-white"><a href="#" onclick="upside_down()" class="text-white"><i class="fa fa-arrow-down"></i></a></span>
            <div class="row">
              <div class="col-4">
                <div class="form-group">
                  <select class="form-control box-shadow1 token_select" id="token_2">
                    <option>VRP</option>
                    <option>WJXN</option>
                  </select>
                </div>
              </div>
              <div class="col-8 text-right">
                <div class="form-group">
                  <input type="number" class="form-control text-right money" id="money_2" placeholder="0.0">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-12 text-blue" id="balance_2">Balance: 0.000000   JAXUD</div>
            </div>
          </div>
          <div class="row">
            <div class="col-12 text-white text-right pb-2" id="exchange_rate">1 WJAX = 1   JAXUD</div>
          </div>
          <div class="row">
            <div class="col-12"><button id="btn_approve" style="display: none;" href="#" class="mb-3 btn btn-info w-100 btn-lg pt-3 pb-3" onclick="approve();">Approve</button></div>
          </div>
          <div class="row">
            <div class="col-12"><button id="btn_swap" href="#" class="btn btn-info w-100 btn-lg pt-3 pb-3"  onclick="swap();">Swap</button></div>
            <!-- data-toggle="modal" data-target="#exampleModalCenter" -->
          </div>
        </div>
        <div class="row">
          <div class="col-12 dashlinks">
            <ul class="p-0 m-0 text-center">
              <li class="d-inline pl-1 pr-1"><a href="#" class="text-blue">Fees</a></li>
              <li class="d-inline pl-1 pr-1"><img src="img/dot.svg" width="10px"/></li>
              <li class="d-inline pl-1 pr-1"><a href="#" class="text-blue">Whitelist pairs</a></li>
              <li class="d-inline pl-1 pr-1"><img src="img/dot.svg" width="10px"/></li>
              <li class="d-inline pl-1 pr-1"><a href="#" class="text-blue">Provide liquidity</a></li>
              <li class="d-inline pl-1 pr-1"><img src="img/dot.svg" width="10px"/></li>
              <li class="d-inline pl-1 pr-1"><a href="#" class="text-blue">Get VRP</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>
<footer class="py-5 bg-blue text-white">
  <div class="container">
    <div class="row my-5">
      <div class="col-12 col-md-4  pb-3">
        <div> <img src="img/jax_logo_white.svg" width="100px">
          <div class="social mt-3 pb-3"> <a href="#" target="_blank" class="p-2"><img src="img/facebook.svg" width="15px"/></a> <a href="#" target="_blank" class="p-2"><img src="img/twitter.svg" width="15px"/></a> <a href="#" target="_blank" class="p-2"><img src="img/linkedin.svg" width="15px"/></a> <a href="#" target="_blank" class="p-2"><img src="img/telegram.svg" width="15px"/></a> </div>
          ©2021. JAX Net. All rights reserved </div>
      </div>
      <div class="col-lg-3 pb-3">
        <h6>Product</h6>
        <a target="_blank" href="#">Explorer</a><br>
        <a target="_blank" href="#">Statistics</a><br>
        <a target="_blank" href="#">API</a><br>
        <a target="_blank" href="#">Exchange Agents</a><br>
      </div>
      <div class="col-lg-3 pb-3">
        <h6>Company</h6>
        <a target="_blank" href="#">Jax.Network</a><br>
        <a target="_blank" href="#">Jax.Net</a><br>
        <a target="_blank" href="#">Wallet</a><br>
        <a target="_blank" href="#">Mining Pool</a><br>
        <a target="_blank" href="#">Transfer Hub</a><br>
      </div>
      <div class="col-lg-2 pb-3">
        <h6>Support</h6>
        <a target="_blank" href="#">Help Center</a><br>
        <a target="_blank" href="#">Terms of Service</a><br>
        <a target="_blank" href="#">Privacy Policy</a><br>
      </div>
    </div>
  </div>
  <!-- /.container -->
</footer>
<!------------------------------MODEL START-------------------------------->
<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-blue" id="exampleModalLongTitle">Confirm swap</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
      </div>
      <div class="modal-body">
        <div class="exchange">

          <div class="bg-lighterblue border-lightblue p-3 border-radius mb-3">
            <div class="row">
              <div class="col-12 text-blue">From</div>
            </div>
            <div class="row">
              <div class="col-4">
                <div class="form-group mb-0">
                  <select class="form-control box-shadow1" id="exampleFormControlSelect1">
                    <option>WJAX</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                  </select>
                </div>
              </div>
              <div class="col-8 text-right">
                <div class="form-group mb-0">
                  <input type="number" class="form-control text-right" id="formoney" placeholder="0.0">
                </div>
              </div>
            </div>
          </div>
          <div class="bg-lighterblue border-lightblue p-3 border-radius mb-3 position-relative"> <span class="swapicon p-2 border-radius bg-blue text-white"><a href="#" class="text-white"><i class="fa fa-arrow-down"></i></a></span>
            <div class="row">
              <div class="col-12 text-blue">To</div>
            </div>
            <div class="row">
              <div class="col-4">
                <div class="form-group mb-0">
                  <select class="form-control box-shadow1" id="exampleFormControlSelect1">
                    <option>  JAXUD</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                  </select>
                </div>
              </div>
              <div class="col-8 text-right">
                <div class="form-group mb-0">
                  <input type="number" class="form-control text-right" id="formoneya" placeholder="0.0">
                </div>
              </div>
            </div>
          </div>
          <div class="row pb-2">
            <div class="col text-left text-blue font-weight-bold">
              <h5>Price</h5>
            </div>
            <div class="col text-right text-blue font-weight-bold">
              <h5>1 WJAX = 1   JAXUD</h5>
            </div>
          </div>
          <div class="bg-lighterblue border-lightblue p-2 border-radius mb-3">
            <div class="row">
              <div class="col text-left text-blue">Transaction fee</div>
              <div class="col text-right text-blue">0.000000 WJXN</div>
            </div>
			  <div class="row">
              <div class="col text-left text-blue">Markup fee</div>
              <div class="col text-right text-blue">0.000000 WJXN</div>
            </div>
			  <div class="row">
              <div class="col text-left text-blue">Markup fee</div>
              <div class="col text-right text-blue">0.000000 WJXN</div>
            </div>
          </div>
          <div class="row">
            <div class="col-12"><a href="#" class="btn btn-info w-100 btn-lg pt-3 pb-3" data-toggle="modal" data-target="#exampleModalCenter" >Confirm swap</a></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<?php include "includes/footerJs.php"; ?>
</body>
</html>
