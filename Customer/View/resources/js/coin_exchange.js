// document.getElementById("submitBtn").addEventListener('click', function (exchange) {
//     Swal.fire({
//         title: 'Request send successfully!',
//         text: "Please wait for a moment",
//         icon: 'success',
        
//         confirmButtonColor: '#3085d6',
        
//         confirmButtonText: 'back to home'
//     })
// })

// calculate coin exchange
document.addEventListener('keyup',function(){
    let coin= document.getElementById("coinAmount").value;
    let currency = document.getElementById("currency").value;
    let calculate = coin * currency;
    document.getElementById("calculated").value = "= "+ calculate.toLocaleString("en-US")+ " MMK";
})

// function cal(params) {
//     let coin= document.getElementById("coinAmount").value;
//     let currency = document.getElementById("currency").value;
//     let calculate = coin * currency;

//     document.getElementById("calculated").value = calculate;
//     console.log(calculate)
// }

// let recal = setInterval(() => {
//     cal();
//     console.log("restarted");
// }, 0);