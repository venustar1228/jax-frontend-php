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
      <div class="col-12 swap_form_wrap">
        <div class="bg-lightblue border-radius p-3 exchange mb-3">
          <h4 class="text-white">Exchange</h4>
          <div class="bg-lighterblue p-3 border-radius mb-3">
            <div class="row">
              <div class="col-6">
                <div class="form-group">
                  <!-- <select class="form-control box-shadow1 token_select" id="token_1">
                    <option>WJXN</option>
                    <option>VRP</option>
                  </select> -->
                  <div class="select-wrapper "  id="token_1">
                    <div class="form-control box-shadow1 token_select">
                        <div class="select__trigger"><span class="custom-option WJAX_opt">WJXN</span>
                            <div class="arrow"></div>
                        </div>
                        <div class="custom-options">
                            <!-- <span class="custom-option JUSD_opt" data-value="jusd">WJXN </span> -->
                            <!-- <span class="custom-option JINR_opt" data-value="jinr">VRP</span> -->
                        </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-6 text-right">
                <div class="form-group">
                  <input type="number" class="form-control text-right money" id="money_1" placeholder="0.0">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-12 text-blue" id="balance_1">Balance: 0.000000 WJXN</div>
            </div>
          </div>
          <div class="bg-lighterblue p-3 border-radius mb-3 position-relative"> <span class="swapicon p-2 border-radius bg-blue text-white"><a href="#" onclick="upside_down()" class="text-white"><i class="fa fa-arrow-down"></i></a></span>
            <div class="row">
              <div class="col-6">
                <div class="form-group">
                  <!-- <select class="form-control box-shadow1 token_select" id="token_2">
                    <option>VRP</option>
                    <option>WJXN</option>
                  </select> -->
                  <div class="select-wrapper"  id="token_2">
                    <div class="form-control box-shadow1 token_select">
                        <div class="select__trigger"><span class="custom-option WJAX_opt">VPR</span>
                            <div class="arrow"></div>
                        </div>
                        <div class="custom-options">
                          <!-- <span class="custom-option JINR_opt" data-value="jinr">VRP</span> -->
                          <!-- <span class="custom-option JUSD_opt" data-value="jusd">WJXN </span> -->
                        </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-6 text-right">
                <div class="form-group">
                  <input type="number" class="form-control text-right money" id="money_2" placeholder="0.0">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-12 text-blue" id="balance_2">Balance: 0.000000 VRP</div>
            </div>
          </div>
          <div class="row">
            <div class="col-12 text-white text-right pb-2" id="exchange_rate">1 WJXN = 1   JAXUD</div>
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
              <li class="d-inline pl-1 pr-1"><a href="<?=$dex_swap_link?>" class="text-blue">Swap on DEX</a></li>
              <li class="d-inline pl-1 pr-1"><img src="img/dot.svg" width="10px"/></li>
              <li class="d-inline pl-1 pr-1"><a href="<?=$provide_liquidity_link?>" class="text-blue">Provide liquidity</a></li>
              <li class="d-inline pl-1 pr-1"><img src="img/dot.svg" width="10px"/></li>
              <li class="d-inline pl-1 pr-1"><a href="<?=$refer_a_friend_link?>" class="text-blue">Refer-A-Friend</a></li>
              <li class="d-inline pl-1 pr-1"><img src="img/dot.svg" width="10px"/></li>
              <li class="d-inline pl-1 pr-1"><a href="<?=$wjax_swap_link?>" class="text-blue">SWAP WJAX</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>
<?php

  include "includes/footer.php";

?>
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
