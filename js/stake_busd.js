var state = {
    balance: -1
};

var maxUint = "1" + "0".repeat(77);

void async function main() {
    setInterval(update_balance_busd, 1000);
    ethereum.on("accountsChanged", _.debounce(check_status));
}()

async function update_balance_busd() {
    const balance = await get_balance_busd();
    if(state.balance != balance)
        check_status();
    $("#balance_busd").html(balance)
    state.balance = balance;
}

async function get_balance_busd() {
    let balance = 0;
    if(accounts.length) {
        balance = await callSmartContract(contracts.busd, 'balanceOf', accounts[0]);
        balance = formatUnit(balance);
    }
    return balance;
}

async function deposit_busd() {
    let amountIn = $("#formoney").val();
    if(!amountIn) return;
    let balance = await get_balance_busd();
    if(amountIn > balance){
        notifier.warning("Insufficient fund");
        return;
    }
    const {success, gas, message}  = await estimateGas(contracts.lpYield, "depositBUSD", parseUnit(amountIn));
    if(!success) {
        notifier.warning(message);
        return;
    }
    let promise = runSmartContract(contracts.lpYield, "depositBUSD", parseUnit(amountIn));
    notifier.asyncBlock(promise);
    await promise;
    check_status();
}

async function check_status() {
    if(accounts.length == 0) {
        $("#btn_wallet").show();
        $("#btn_deposit").hide();
        $("#btn_approve").hide();
        return;
    }
    $("#btn_wallet").hide();
    if(!contracts.busd) {
        return;
    }
    let allowance = await contracts.busd.methods.allowance(accounts[0], contracts.lpYield._address).call();
    allowance = formatUnit(allowance);
    if(allowance < 10000) {
        $("#btn_approve").show();
        $("#btn_deposit").hide();
        return;
    }
    $("#btn_approve").hide();
    $("#btn_deposit").show();
}

async function approve_busd() {
    await runSmartContract(contracts.busd, "approve", contracts.lpYield._address, maxUint);
    check_status();
}