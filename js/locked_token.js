
void async function main() {
    setInterval(onInterval, 1000);
}

async function onInterval() {
    let contract = new web3.eth.Contract(locked_abi, locked_token_sale_address);
    let eth_price = await get_bnb_price();
    eth_price = eth_price / (10 ** 8);
    let prices = await Promise.all([
        contract.methods.getUnlockedTokenPrice().call(),
        contract.methods.getLockedTokenPrice(1).call(),
        contract.methods.getLockedTokenPrice(2).call()
    ]);

    prices.map((each, index) => {
        $(`.price${index}`).html(Number(eth_price * web3.utils.fromWei(each)).toFixed(2));
    })

    const amount1 = $("#amount1").val() || 0;
    $("#approx_price1").html(Number(eth_price * web3.utils.fromWei(prices[1]) * amount1).toFixed(2));

    const amount2 = $("#amount2").val() || 0;
    $("#approx_price2").html(Number(eth_price * web3.utils.fromWei(prices[2]) * amount2).toFixed(2));

    let availableTokens = await contract.methods.balanceOfToken().call();
    $(".available_tokens").html(availableTokens);

    return;
}


async function buylockedtokens(plan) {
    if( accounts.length == 0) {
        await connect_wallet();
        return;
    }
    let contract = new web3.eth.Contract(locked_abi, locked_token_sale_address);
    let amount = $("#amount" + plan).val();
    if(amount < 100){
        notifier.alert("Amount should not be less than 100");
    }
    let value = amount * (await contract.methods.getLockedTokenPrice(plan).call()) * 1.1;
    let referrer = $("#referral" + plan).val();
    if(referrer == "") referrer = "0x0000000000000000000000000000000000000000"
    notifier.async(
        contract.methods.buyLockedTokens(plan, amount, referrer).send({ from: accounts[0], value })
        .then(() => {
            real_time_update();
            notifier.success("Transaction Completed");
        })
        .catch(error => {
            if (error.code != 4001) {
                notifier.alert(error.message);
            }
            console.error(error);
        }), null, null, "Please, wait...", {
            labels: {
                async: "Transaction is in progress..."
            }
        }
    )
}