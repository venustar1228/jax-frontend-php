$(function () {
  $('.gallery').gallery();
});

void function main() {
  hideAllDivs();
  $("#div_all").show();
  ethereum.on("connect", _.debounce(check_status));
  ethereum.on("accountsChanged", _.debounce(check_status));
  check_status();
}()

function check_status() {
  hideAllDivs();
  if(accounts.length == 0) {
    $("#div_connect").show();
    return;
  }
  $("#div_generate").show();
  $(".wallet-address").html(accounts[0]);
}

function hideAllDivs() {
  $("#div_error").hide();
  $("#div_connect").hide();
  $("#div_generate").hide();
  $("#div_success").hide();
}

async function generateReferralLink() {
  const {data} = await axios.get(`/swap/locked-tokens/refer-a-friend/generate_referral_link.php?address=${accounts[0]}`);
  // const {data} = {data:"123"};
  hideAllDivs();
  if(data == "NA") {
    $("#div_error").show();
    return;
  }
  $("#div_success").show();
  const link = "https://buy.jax.network/locked-token-sale/?id=" + data;
  $("#referral_link").html(link);
}

function copyReferralLink() {
  const link = $("#referral_link").html();
  navigator.clipboard.writeText(link);
}