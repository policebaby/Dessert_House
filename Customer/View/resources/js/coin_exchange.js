
// calculate coin exchange
let ctype = "MMK";

$("#currency").change(function () {
    ctype = $("#currency option:selected").text();
    // console.log(typeof ctype)
    change();
    insertC();
})

document.addEventListener('keyup', function () {
    change();
})

function change(params) {
    let coin = document.getElementById("coinAmount").value;
    let currency = document.getElementById("currency").value;
    let calculate = coin * currency;
    document.getElementById("calculated").value =  calculate.toLocaleString("en-US") + ctype;
    document.getElementById("calculated1").innerText=  calculate.toLocaleString("en-US") + ctype;
}

function insertC(){
    $("#currencytype").val(ctype) ;
    console.log(ctype)

}