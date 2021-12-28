<?php

  include "includes/config.php";

?>

<?php

  include "includes/head.php";

?>
<?php include "includes/sidebar.php"; ?>

<header class="bg-lighterblue pt-5">
  <div class="container" style="padding-top: 30px;">
    <div class="row h-100">
      <div class="col-12 col-md-6 my-auto">
        <div class="pb-3">
          <h1 class="text-blue pb-4">Jax.Money</h1>
          <h4 class="text-blue pb-4">An energy standard monetary system<br/>
            issuing localized stablecoins</h4>
          <a href="https://jax-network.gitbook.io/jax-money/" target="_blank" class="btn btn-light my-2 my-sm-0 border-radius pt-2 pb-2" >Documentation</a> 
          <a href="<?=$telegram_link?>" target="_blank" class="btn btn-info my-2 my-sm-0 mr-3 border-radius pt-2 pb-2 " >Join Telegram Chat</a> 
        </div>
      </div>
      <div class="col-12 col-md-6 video"><!-- THE YOUTUBE PLAYER -->
        <div class="vid-container">
          <iframe width="100%" height="100%" src="https://www.youtube.com/embed/7b0bg1D-TWA?controls=0" title="" id="vid_frame" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>

        <!-- THE PLAYLIST video -->
        <div class="vid-list-container mx-auto">
          <div class="vid-list">
            <div class="vid-item" onClick="document.getElementById('vid_frame').src='https://www.youtube.com/embed/7b0bg1D-TWA?controls=0'">
              <div class="thumb"><img src="img/thumb1.png"></div>
            </div>
            <!-- <div class="vid-item" onClick="document.getElementById('vid_frame').src='https://www.youtube.com/embed/7o9lmlb70LE?controls=0&rel=0'">
              <div class="thumb"><img src="img/thumb2.png"></div>
            </div>
            <div class="vid-item" onClick="document.getElementById('vid_frame').src='https://www.youtube.com/embed/tn6f__Pw5e0?controls=0&rel=0'">
              <div class="thumb"><img src="img/thumb3.png"></div>
            </div> -->
            <div class="vid-item" onClick="document.getElementById('vid_frame').src='https://www.youtube.com/embed/CcJGXEwe_cI?controls=0&rel=0'">
              <div class="thumb"><img src="img/thumb4.png"></div>
            </div>
            <div class="vid-item" onClick="document.getElementById('vid_frame').src='https://www.youtube.com/embed/RGOjPnQ9g8A?controls=0&rel=0'">
              <div class="thumb"><img src="img/thumb5.png"></div>
            </div>
          </div>
        </div>

        <!-- LEFT AND RIGHT ARROWS -->
        <!-- <div class="arrows">
          <div class="arrow-left"><i class="fa fa-chevron-left fa-lg"></i></div>
          <div class="arrow-right"><i class="fa fa-chevron-right fa-lg"></i></div>
        </div> -->
      </div>
    </div>
  </div>
</header>
<main role="main">
  <!--3boxes with icons start-->
  <section class="bg-white pt-5 pb-5">
    <div class="container">
      <div class="row h-100">
        <div class="col-12 col-sm-4">
          <div class=""> <img src="img/icon1.svg" class="pb-4" width="70px"/>
            <h4 class="text-blue font-weight-normal pb-4">Fully backed by Proof of On-Chain reserves of Energy tokens</h4>
          </div>
        </div>
        <div class="col-12 col-sm-4">
          <div class=""> <img src="img/icon2.svg" class="pb-4" width="60px"/>
            <h4 class="text-blue font-weight-normal pb-4">Democratic, decentralized, auditable system</h4>
          </div>
        </div>
        <div class="col-12 col-sm-4">
          <div class=""> <img src="img/icon3.svg" class="pb-4" width="70px"/>
            <h4 class="text-blue font-weight-normal pb-4">Diverse community with ecosystem level checks: , VRP stakers, liquidity providers</h4>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--3boxes with icons end-->
  <!--3boxes start-->
  <?php

    include "includes/statistics.php";

    ?>
  <!--3boxes end-->
  <!-- table start-->
 <!-- table start-->
 <section class="bg-lighterblue">
    <div class="container pt-5 pb-5">
      <h2 class="text-blue text-center d-block pb-5">Exchange</h2>
      <div class="row">
        <div class="col-12">
			<div class="exchangetable box-shadow">
          <table class="table">
            <thead>
              <tr>
                <td class="lineheight38">Currency</td>
                <td class="rowclr lineheight38">Buy Rate</td>
                <td class="lineheight38">Sell Rate</td>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="align-middle"><img class="curr_logo" src="img/JUSD_blue.svg" class="align-middle" />   JAXUD</td>
                <td class="align-middle rowclra"><span class="align-items-start float-left lineheight38">0.999 BUSD</span> <a href="#" class="btn greentext font-weight-bold float-right">BUY</a></td>
                <td class="align-middle"><span class="align-items-start float-left lineheight38">0.001 BUSD</span> <a href="#" class="btn text-danger font-weight-bold float-right">SELL</a></td>
              </tr>
              <tr>
                <td class="align-middle"><img class="curr_logo" src="img/JR_blue.svg" class="align-middle" />  JAXRE</td>
                <td class="align-middle rowclr"><span class="align-items-start float-left lineheight38">0.013 JAXUD</span> <a href="#" class="btn greentext font-weight-bold float-right">BUY</a></td>
                <td class="align-middle"><span class="align-items-start float-left lineheight38">0.0137 JAXUD</span> <a href="#" class="btn text-danger font-weight-bold float-right">SELL</a></td>
              </tr>
              <tr>
                <td class="align-middle"><img class="curr_logo" src="img/jxnLogo.png" class="align-middle" /> WJXN</td>
                <td class="align-middle rowclra"><span class="align-items-start float-left lineheight38">1.25 BUSD</span> <a href="#" class="btn greentext font-weight-bold float-right">BUY</a></td>
                <td class="align-middle"><span class="align-items-start float-left lineheight38">1.25 BUSD</span> <a href="#" class="btn text-danger font-weight-bold float-right">SELL</a></td>
              </tr>
				 <tr>
                <td class="align-middle"><img class="curr_logo" src="img/jusdLogo.png" class="align-middle" /> WJAX</td>
                <td class="align-middle rowclra"><span class="align-items-start float-left lineheight38">4 BUSD</span> <a href="#" class="btn greentext font-weight-bold float-right">BUY</a></td>
                <td class="align-middle"><span class="align-items-start float-left lineheight38">4 BUSD</span> <a href="#" class="btn text-danger font-weight-bold float-right">SELL</a></td>
              </tr>
            </tbody>
          </table>
				</div>
        </div>
      </div>
    </div>
  </section>
  
  <!-- table end--> 

  <!-- table end-->

</main>
<?php include "includes/footer.php"; ?>

<?php include "includes/footerJs.php"; ?>
</body>
</html>
