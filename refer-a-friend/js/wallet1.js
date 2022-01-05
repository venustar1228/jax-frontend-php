let web3;
let accounts = [];
let mode = "test";
let active_network = "bscmainnet";
let testnet_chain_id = "0x61";
let markup_fee_decimal = 8;
//https://f3oall.github.io/awesome-notifications/docs/
let notifier;

let networks = {
    ethmainnet: {
        url: "https://mainnet.infura.io/v3/6797126c4f0942d99b649046e1ade16d",
        chainId: "0x1"
    },
    bsctestnet: {
        url: "https://data-seed-prebsc-2-s3.binance.org:8545/",
        chainId: "0x61",
    },
    bscmainnet: {
        url: `https://bsc-dataseed1.binance.org/`,
        chainId: "0x38"
    },
    polygonmainnet: {
        url: `https://rpc-mainnet.maticvigil.com/`,
        chainId: "0x89"
    },
    polygontestnet: {
        url: `https://rpc-mumbai.maticvigil.com/`,
        chainId: "0x13881",
    },
    avatestnet: {
        url: `https://api.avax-test.network/ext/bc/C/rpc/`,
        chainId: "0xa869",
    },
}

function locked_token_sale_address() {
    if(active_network == "ethmainnet")
        return "0x65c612a00b18eECC957Bb55820b427D3bF030581";
    if(active_network == "bscmainnet")
        return "0x496f0DC63D083ACf8B0827CaCe0efF127d7de9Ff"
}


let exchange_rate = 0;


let minABI = [{ "inputs": [], "stateMutability": "payable", "type": "constructor" }, { "anonymous": false, "inputs": [{ "indexed": true, "internalType": "address", "name": "owner", "type": "address" }, { "indexed": true, "internalType": "address", "name": "spender", "type": "address" }, { "indexed": false, "internalType": "uint256", "name": "value", "type": "uint256" }], "name": "Approval", "type": "event" }, { "anonymous": false, "inputs": [{ "indexed": true, "internalType": "address", "name": "previousOwner", "type": "address" }, { "indexed": true, "internalType": "address", "name": "newOwner", "type": "address" }], "name": "OwnershipTransferred", "type": "event" }, { "anonymous": false, "inputs": [{ "indexed": true, "internalType": "address", "name": "from", "type": "address" }, { "indexed": true, "internalType": "address", "name": "to", "type": "address" }, { "indexed": false, "internalType": "uint256", "name": "value", "type": "uint256" }], "name": "Transfer", "type": "event" }, { "inputs": [{ "internalType": "address", "name": "owner", "type": "address" }, { "internalType": "address", "name": "spender", "type": "address" }], "name": "allowance", "outputs": [{ "internalType": "uint256", "name": "", "type": "uint256" }], "stateMutability": "view", "type": "function" }, { "inputs": [{ "internalType": "address", "name": "spender", "type": "address" }, { "internalType": "uint256", "name": "amount", "type": "uint256" }], "name": "approve", "outputs": [{ "internalType": "bool", "name": "", "type": "bool" }], "stateMutability": "nonpayable", "type": "function" }, { "inputs": [{ "internalType": "address", "name": "account", "type": "address" }], "name": "balanceOf", "outputs": [{ "internalType": "uint256", "name": "", "type": "uint256" }], "stateMutability": "view", "type": "function" }, { "inputs": [], "name": "decimals", "outputs": [{ "internalType": "uint8", "name": "", "type": "uint8" }], "stateMutability": "view", "type": "function" }, { "inputs": [{ "internalType": "address", "name": "spender", "type": "address" }, { "internalType": "uint256", "name": "subtractedValue", "type": "uint256" }], "name": "decreaseAllowance", "outputs": [{ "internalType": "bool", "name": "", "type": "bool" }], "stateMutability": "nonpayable", "type": "function" }, { "inputs": [], "name": "getOwner", "outputs": [{ "internalType": "address", "name": "", "type": "address" }], "stateMutability": "view", "type": "function" }, { "inputs": [{ "internalType": "address", "name": "spender", "type": "address" }, { "internalType": "uint256", "name": "addedValue", "type": "uint256" }], "name": "increaseAllowance", "outputs": [{ "internalType": "bool", "name": "", "type": "bool" }], "stateMutability": "nonpayable", "type": "function" }, { "inputs": [], "name": "name", "outputs": [{ "internalType": "string", "name": "", "type": "string" }], "stateMutability": "view", "type": "function" }, { "inputs": [], "name": "owner", "outputs": [{ "internalType": "address", "name": "", "type": "address" }], "stateMutability": "view", "type": "function" }, { "inputs": [], "name": "renounceOwnership", "outputs": [], "stateMutability": "nonpayable", "type": "function" }, { "inputs": [{ "internalType": "uint256", "name": "_tx_fee", "type": "uint256" }], "name": "setTransactionFee", "outputs": [], "stateMutability": "nonpayable", "type": "function" }, { "inputs": [{ "internalType": "address", "name": "_wallet", "type": "address" }], "name": "setTransactionFeeWallet", "outputs": [], "stateMutability": "nonpayable", "type": "function" }, { "inputs": [], "name": "symbol", "outputs": [{ "internalType": "string", "name": "", "type": "string" }], "stateMutability": "view", "type": "function" }, { "inputs": [], "name": "totalSupply", "outputs": [{ "internalType": "uint256", "name": "", "type": "uint256" }], "stateMutability": "view", "type": "function" }, { "inputs": [], "name": "transaction_fee", "outputs": [{ "internalType": "uint256", "name": "", "type": "uint256" }], "stateMutability": "view", "type": "function" }, { "inputs": [], "name": "transaction_fee_decimal", "outputs": [{ "internalType": "uint256", "name": "", "type": "uint256" }], "stateMutability": "view", "type": "function" }, { "inputs": [{ "internalType": "address", "name": "recipient", "type": "address" }, { "internalType": "uint256", "name": "amount", "type": "uint256" }], "name": "transfer", "outputs": [{ "internalType": "bool", "name": "", "type": "bool" }], "stateMutability": "nonpayable", "type": "function" }, { "inputs": [{ "internalType": "address", "name": "sender", "type": "address" }, { "internalType": "address", "name": "recipient", "type": "address" }, { "internalType": "uint256", "name": "amount", "type": "uint256" }], "name": "transferFrom", "outputs": [{ "internalType": "bool", "name": "", "type": "bool" }], "stateMutability": "nonpayable", "type": "function" }, { "inputs": [{ "internalType": "address", "name": "newOwner", "type": "address" }], "name": "transferOwnership", "outputs": [], "stateMutability": "nonpayable", "type": "function" }, { "inputs": [], "name": "tx_fee_wallet", "outputs": [{ "internalType": "address", "name": "", "type": "address" }], "stateMutability": "view", "type": "function" }]


function on_wallet_connected() {
    $(".btn_buy").html("Buy Locked Tokens");
    $("#btn_swap").html("Swap");

    // Colony page
    $("#set_colony_address").html("Save");
    $("#register_colony").html("Save");
}

function on_wallet_disconnected() {
    $(".btn_buy").html("Connect a wallet");
    $("#btn_swap").html("Connect a Wallet");
    $("#btn_swap").attr("disabled", false);
    $("#btn_approve").hide();
    $("#btn_connect").html("Connect a Wallet");

    // Colony page
    $("#set_colony_address").html("Connect a wallet");
    $("#register_colony").html("Connect a wallet");

}

function on_wrong_network() {
    $("#btn_connect").html("Switch Network");
    $("#btn_connect").removeClass("btn-info");
    $("#btn_connect").removeClass("btn-success");
    $("#btn_connect").addClass("btn-danger");
    $("#btn_swap").html("Switch Network");
}

void function main() {

    on_wallet_disconnected();

    var hover = false;
    $(".dropdown").hover(
        function() {
            if (accounts.length == 0) return;
            hover = true;
            $(this).children("ul").slideDown('medium');
        },
        function() {
            hover = false;
            setTimeout(() => {
                if (hover) return;
                $(this).children("ul").slideUp('medium');
            }, 500);
        }
    )

    web3 = new Web3(Web3.givenProvider);

    ethereum.on("accountsChanged", _accounts => {
        accounts = _accounts
        if (accounts.length == 0) {
            reset_connect_button();
        } else {
            set_connected_address();
        }
    });

    ethereum.on("networkChanged", () => {
        if (web3.currentProvider.chainId != networks[active_network].chainId) {
            on_wrong_network();
            accounts = [];
        } else {
            connect_wallet();
        }
    })
    notifier = new AWN({
        position: "top-right",
        durations: {
            success: 1000,
            alert: 0
        },
        minDurations: {
            alert: 1000,
        }
    });

    $("#chainSelector").change(() => {
        active_network = $("#chainSelector").val();
        on_wrong_network();
        accounts = [];
        switch_network();
    })

    setInterval(updateTokenPrices, 10000);

}()


function connect_wallet() {
    return web3.eth.requestAccounts()
        .then(_accounts => {
            accounts = _accounts;
            console.log(accounts);

            check_status && check_status();

            if (web3.currentProvider.chainId != networks[active_network].chainId) {
                $("#btn_connect").html("Switch Network");
                switch_network();
            } else {
                updateTokenPrices();
                on_wallet_connected();
                set_connected_address();
            }
        })
        .catch(error => {
            console.error(error);
        })

}

function disconnect_wallet() {
    accounts = [];
    reset_connect_button();
    on_wallet_disconnected();
}

function switch_network() {
    web3.currentProvider.request({
            method: "wallet_switchEthereumChain",
            params: [{ chainId: networks[active_network].chainId }]
        })
        .then(() => {
            console.log("switched");
            set_connected_address();
        })
        .catch((error) => {
            console.error(error);
            on_wrong_network();
        })
}

function reset_connect_button() {
    // $("#btn_connect").html("Connect a wallet");
    $("#btn_connect").removeClass("btn-danger");
    $("#btn_connect").removeClass("btn-success");
    $("#btn_connect").addClass("btn-info");
    $("#balance_1").html("Balance:");
    $("#balance_2").html("Balance:");
}

function set_connected_address() {
    $("#btn_connect").html(accounts[0].substr(0, 9) + "...");

    $("#btn_connect").removeClass("btn-info");
    $("#btn_connect").removeClass("btn-danger");
    $("#btn_connect").addClass("btn-success");
}

function floor(n, digit) {
    str = n.toFixed(17)
    a = str.split(".")
    if (Number(a[1]) == 0)
        return a[0]
    return a[0] + "." + a[1].replace(/0+$/, "").substr(0, digit)
}


function upside_down() {
    const token_name_1 = $("#token_1").val();
    const token_name_2 = $("#token_2").val();
    $("#token_2").val(token_name_1);
    $("#token_1").val(token_name_2);
    on_token_changed({ target: { value: token_name_2, id: "token_1" } }, token_name_1);
}

function toUint(amount, decimal) {
    const splits = amount.split(".")
    if (splits.length == 1) splits[1] = "";
    splits[1] = splits[1].substr(0, decimal);
    return splits[0] + splits[1] + "0".repeat(decimal - splits[1].length)
}

function fromUint(amount, decimal) {
    return parseFloat(amount) / (10 ** decimal)
}

async function updateTokenPrices() {
    let contract = new web3.eth.Contract(locked_abi, locked_token_sale_address());
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
}

async function buylockedtokens(plan) {
    if( accounts.length == 0) {
        await connect_wallet();
        return;
    }
    let contract = new web3.eth.Contract(locked_abi, locked_token_sale_address());
    let amount = $("#amount" + plan).val();
    if(amount < 100){
        notifier.alert("Amount should not be less than 100");
    }
    let value = amount * (await contract.methods.getLockedTokenPrice(plan).call()) * 1.1;
    let referrer = $("#referral" + plan).val();
    if(referrer == "") referrer = "0x0000000000000000000000000000000000000000";
    const {success, gas, message} = await estimateGas(contract, {from: accounts[0], value}, "buyLockedTokens", plan, amount, referrer);
    if(!success) {
        notifier.warning(message);
        return;
    }
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

async function get_bnb_price() {
    let aggregator_address = '0x5f4eC3Df9cbd43714FE2740f5E3616155c5b8419';
    if(active_network == "bscmainnet")
        aggregator_address = '0x0567F2323251f0Aab15c8dFb1967E4e8A7D42aeE';
    let contract = new web3.eth.Contract(AggregatorInterface, aggregator_address);
    return await contract.methods.latestAnswer().call();
}

const locked_abi = [{"inputs":[{"internalType":"address","name":"_pancakeRouter","type":"address"},{"internalType":"address","name":"_tokenVesting","type":"address"},{"internalType":"address","name":"_ref","type":"address"},{"internalType":"address","name":"_Token","type":"address"}],"stateMutability":"nonpayable","type":"constructor"},{"anonymous":false,"inputs":[{"indexed":true,"internalType":"address","name":"previousOwner","type":"address"},{"indexed":true,"internalType":"address","name":"newOwner","type":"address"}],"name":"OwnershipTransferred","type":"event"},{"inputs":[],"name":"approve","outputs":[],"stateMutability":"nonpayable","type":"function"},{"inputs":[],"name":"balanceOfToken","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"uint256","name":"plan","type":"uint256"},{"internalType":"uint256","name":"amount","type":"uint256"},{"internalType":"address","name":"referrer","type":"address"}],"name":"buyLockedTokens","outputs":[],"stateMutability":"payable","type":"function"},{"inputs":[{"internalType":"uint256","name":"plan","type":"uint256"}],"name":"getLockedTokenPrice","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"getUnlockedTokenPrice","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"owner","outputs":[{"internalType":"address","name":"","type":"address"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"referral_ratio","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"renounceOwnership","outputs":[],"stateMutability":"nonpayable","type":"function"},{"inputs":[],"name":"token","outputs":[{"internalType":"address","name":"","type":"address"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"address","name":"newOwner","type":"address"}],"name":"transferOwnership","outputs":[],"stateMutability":"nonpayable","type":"function"},{"inputs":[{"internalType":"uint256","name":"amount","type":"uint256"}],"name":"withdrawBNB","outputs":[],"stateMutability":"nonpayable","type":"function"},{"inputs":[{"internalType":"uint256","name":"amount","type":"uint256"}],"name":"withdrawToken","outputs":[],"stateMutability":"nonpayable","type":"function"}];

const AggregatorInterface = [{"inputs":[],"name":"latestAnswer","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"}];
