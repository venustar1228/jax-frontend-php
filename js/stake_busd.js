
void async function main() {
    setInterval(update_balance_busd, 500);
    update_balance_busd();
}()

async function update_balance_busd() {
    let balance = 0;
    if(accounts.length) {
        balance = await contracts.busd.balanceOf(accounts[0]);
        balance = formatUnit(balance);
    }
    $("#balance_busd").html(balance);
}