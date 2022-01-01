var state = {
    balance_wjxn: -1,
    balance_wjax: -1,
    token1: "wjax",
    token2: "jusd",
};

var token_info = {
    "wjxn": {
        name: "WJXN",
        pairs: ["vrp"]
    },
    "vrp": {
        name: "VRP",
        pairs: ["wjxn"]
    },
    "wjax": {
        name: "WJAX",
        pairs: ["jusd"]
    },
    "jusd": {
        name: "JAXUD",
        pairs: ["wjax", "jinr"]
    },
    "jinr": {
        name: "JAXRE",
        pairs: ["jusd"]
    }
}

var maxUint = "1" + "0".repeat(77);

void async function main() {
    setInterval(update_balance, 1000);
    update_balance();
    ethereum.on("accountsChanged", _.debounce(check_status));
    $("#token_1").on("change", init_inputs);
    $("#token_1").on("change", on_token1_changed);
    $("#token_2").on("change", on_token2_changed);
    on_token1_changed();
    $("#btn_swap").click(swap);
}()

async function update_balance() {
    if(accounts.length == 0) return;
    const balance_token1 = await get_balance(contracts[state.token1]);
    const balance_token2 = await get_balance(contracts[state.token2]);
    if(state.balance_token1 != balance_token1 || state.balance_token2 != balance_token2)
        check_status();
    $("#balance_token1").html(balance_token1);
    $("#balance_token2").html(balance_token2);
    state.balance_token1 = balance_token1;
    state.balance_token2 = balance_token2;
}

function isJToken(token) {
    switch(token){
        case "wjxn":
        case "vrp":
        case "wjax":
        case "jusd":
            return false;
    }
    return true;
}

async function swap() {
    let amountIn = $("#money_1").val();
    if(!amountIn) return;
    const decimal = await get_decimal(contracts[state.token1]);
    let balance = await get_balance(contracts[state.token1], decimal);
    if(amountIn > balance){
        notifier.warning("Insufficient fund");
        return;
    }
    let from = state.token1;
    let to = state.token2;
    let jtoken_address;

    if(isJToken(from)) {
        jtoken_address = contracts[from]._address;
        from = "jtoken";
    }
    if(isJToken(to)) {
        jtoken_address = contracts[to]._address;
        to = "jtoken";
    }

    const func = `swap_${from}_${to}`;
    let args = [parseUnit(amountIn, decimal)];
    if(jtoken_address) {
        args = [jtoken_address].concat(args);
    }
    const {success, gas, message}  = await estimateGas(contracts.jaxSwap, func, ...args);
    if(!success) {
        notifier.warning(message);
        return;
    }
    disable_swap(true);
    await notifier.async(runSmartContract(contracts.jaxSwap, func, ...args)
        , null, null, `Swapping ${amountIn} ${token_info[state.token1].name} to ${token_info[state.token2].name}`);
    disable_swap(false);
    check_status();
}

async function check_status() {
    if(accounts.length == 0) {
        $("#btn_wallet").show();
        $("#btn_swap").hide();
        $("#btn_approve").hide();
        return;
    }
    $("#btn_wallet").hide();
    if(!contracts.busd) {
        return;
    }
    let allowance = await contracts[state.token1].methods.allowance(accounts[0], contracts.jaxSwap._address).call();
    allowance = formatUnit(allowance);
    if(allowance < 10000) {
        $("#btn_approve").show();
        $("#btn_swap").hide();
        return;
    }
    $("#btn_approve").hide();
    $("#btn_swap").show();
}

async function approve() {
    await notifier.async(
        runSmartContract(contracts[state.token1], "approve", contracts.jaxSwap._address, maxUint), 
        null, null, `Approving ${token_info[state.token1].name}`);
    check_status();
}

function init_inputs() {
    $("#money_1").val("");
    $("#money_2").val("");
}

function disable_swap(flag) {
    $("#btn_swap").attr("disabled", flag);
}

function build_token2_selector(token1) {
    const html = token_info[token1].pairs
        .map(each => `<option value='${each}'>${token_info[each].name}</option>`)
        .join((a, b) => a+b);
    $("#token_2").html(html);
}

function on_token1_changed() {
    state.token1 = $("#token_1").val();
    build_token2_selector(state.token1)
    state.token2 = token_info[state.token1].pairs[0];
    $("#token_2").val(state.token2);
    update_balance();
    check_status();
}

function on_token2_changed() {
    state.token2 = $("#token_2").val();
    update_balance();
    check_status();
}

function swap_currency() {
    state.token1 = $("#token_2").val()
    state.token2 = $("#token_1").val()
    $("#token_1").val(state.token1);
    build_token2_selector(state.token1);
    $("#token_2").val(state.token2);
    init_inputs();
    update_balance();
    check_status();
}