
async function checkPermission() {
    const vrp_balance = get_balance(contracts.vrp, 18);
    return vrp_balance > 0;
}

async function vote() {
    const governor = $("#governor").val();
    if(!governor) return;
    if(!checkPermission()) {
        notifier.warning("No VRP Balance");
        return;
    }    
    const {success, gas, message}  = await estimateGas(contracts.vrp, "vote_governor", governor);
    if(!success) {
        notifier.warning(message);
        return;
    }
    await notifier.async(
        runSmartContract(contracts.vrp, "vote_governor", governor), 
        null, null, `Transaction is in progress`);
}