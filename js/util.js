
function parseUnit(number, decimal = 18) {
    return BN(number).div(BN(10).power(BN(decimal))).toNumber()
}

function formatUnit(number, decimal = 18) {
    return BN(number).mul(BN(10).power(BN(decimal))).toString();
}