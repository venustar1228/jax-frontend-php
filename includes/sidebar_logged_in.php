<nav id="sidebar">
  <div id="dismiss"> <i class="fa fa-window-close"></i> </div>
  <div class="sidebar-header">
    <h3 style="margin-top: -13px"><img src="img/jax-money.svg" width="150"></h3>
  </div>
  <ul class="list-unstyled components">
    <form class="form-inline my-2 ml-3 mr-3 homeselect hidedesk">
      <a href="#" class="btn btn-info border-radius w-100 mb-3"   >Connect a wallet</a>
      <!-------------------------------------------------------------->
      <div class="select selectwal mb-5" tabindex="1">
        <input class="selectopt" name="test" type="radio" id="opt1" checked>
        <label for="opt1" class="option">Binance Smart Chain Mainnet</label>
      </div>
      <!-------------------------------------------------------------->
    </form>
    <li class="mob_menu_hide"> <a class="nav-link" href="<?=$wjax_swap_link?>">EXCHANGE</a> </li>
      <li class="mob_menu_hide">  <a class="nav-link" href="<?=$provide_liquidity_link?>">PROVIDE LIQUIDITY</a> </li>
        <li> <a class="nav-link" href="<?=$refer_a_friend_link?>">REFER-A-FRIEND</a> </li>
        <li><hr></li>
        <li> <a href="<?=$stake_main_page_link?>" class="nav-link sub_stak">STAKE BUSD</a> </li>
          <li> <a href="<?=$wjxn_swap_link?>" class="nav-link sub_stak">STAKE WJXN</a> </li>
          <li><hr></li>
    <li><a href="#getWJAX" data-toggle="collapse" aria-expanded="false">GET WJAX & WJXN <span class="float-right"><i class="fa fa-sort-down"></i></a>
      <ul class="collapse list-unstyled" id="getWJAX">
        <li> <a href="<?=$wrapped_jaxnet_link?>">WRAPPED.JAX.NET</a> </li>
        <li> <a href="<?=$wjax_pancakeswap_link?>">WJAX ON PANCAKESWAP</a> </li>
        <li> <a href="<?=$wjxn_pancakeswap_link?>">WJXN ON PANCAKESWAP</a> </li>
      </ul>
    </li>
    <li><a href="#getJCOINS" data-toggle="collapse" aria-expanded="false">GET JAX Stablecoins <span class="float-right"><i class="fa fa-sort-down"></i></a>
      <ul class="collapse list-unstyled" id="getJCOINS">
      <li> <a href="<?=$jusd_pancakeswap_link?>">JAXUD ON PANCAKESWAP</a> </li>
        <li> <a href="<?=$jinr_pancakeswap_link?>">JAXRE ON PANCAKESWAP</a> </li>
      </ul>
    </li>
    <li> <a class="nav-link" href="<?=$bridge_link?>">BRIDGE</a> </li>
    <li><hr></li>
    <li> <a class="nav-link" href="<?=$reserves_link?>">AUDIT RESERVES</a> </li>
    <li class="mob_menu_hide"> <a class="nav-link" href="#Governance" data-toggle="collapse" aria-expanded="false">GOVERNANCE <span class="float-right"><i class="fa fa-sort-down"></i></span></a>
      <ul class="collapse list-unstyled" id="Governance">
        <li> <a href="<?=$wjxn_swap_link?>" class="nav-link">GET VRP TOKENS</a> </li>
        <li> <a href="<?=$voting_link?>" class="nav-link">VOTING</a> </li>
      </ul>
    </li>
    <li><a href="#info" data-toggle="collapse" aria-expanded="false">INFO <span class="float-right"><i class="fa fa-sort-down"></i></a>
      <ul class="collapse list-unstyled" id="info">
        <li> <a href="<?=$whitelist_link?>">WHITELISTS</a> </li>
        <li> <a href="<?=$fees_link?>">FEES</a> </li>
        <li> <a href="<?=$exchange_rates_link?>">EXCHANGE RATES</a> </li>
        <li> <a href="<?=$documentation_link?>">DOCUMENTATION</a> </li>
      </ul>
    </li>
  </ul>
</nav>
<nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
  <div class="container-fluid"> <a class="navbar-brand" href="<?=$home_link?>"><img src="img/jax-money.svg" width="150"></a>
    <div class="mobhide ml-auto" id="">
     <ul class="stak_menu_srap stakemenulg">
        <!-- <li> <a class="nav-link logInn_stk" href="<?=$stake_main_page_link?>">stake</a> </li> -->
        <li> <a class="nav-link logInn_stk" href="#STAKE" data-toggle="collapse" aria-expanded="false">STAKE <span class="float-right stak_menu_arrow"><i class="fa fa-sort-down"></i></span></a>
            <ul class="collapse list-unstyled stak_dropdown" id="STAKE">
            <li> <a href="<?=$stake_main_page_link?>" class="nav-link sub_stak">BUSD</a> </li>
              <li> <a href="<?=$wjxn_swap_link?>" class="nav-link sub_stak">WJXN</a> </li>
            </ul>
          </li>
          <li> <a class="nav-link logInn_stk" href="<?=$wjax_swap_link?>">swap</a> </li>
          <li> <a class="nav-link logInn_stk" href="#Govern" data-toggle="collapse" aria-expanded="false">Govern <span class="float-right stak_menu_arrow"><i class="fa fa-sort-down"></i></span></a>
            <ul class="collapse list-unstyled stak_dropdown" id="Govern">
              <li> <a href="<?=$wjxn_swap_link?>" class="nav-link sub_stak">GET VRP TOKENS</a> </li>
              <li> <a href="<?=$voting_link?>" class="nav-link sub_stak">VOTING</a> </li>
            </ul>
          </li>
      </ul>
      <form class="form-inline my-2 my-lg-0 homeselect mr-3">
        <div class="dropdown">
          <a id="btn_connect" href="#" class="btn btn-info my-2 my-sm-0 mr-3 border-radius pt-2 pb-2"    onclick="connect_wallet()">Connect a wallet</a>
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
