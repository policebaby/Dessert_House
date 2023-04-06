$(document).ready(()=>{
    let carts = JSON.parse(localStorage.getItem("cart")) || [];
    console.log(carts)
    $("#cartLists").val(JSON.stringify(carts));
})