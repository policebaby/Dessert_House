
let quantity = 1;

$(document).ready(()=>{
    // quantity counter
$(".plus").click(function(params) {
    quantity++
    $(".qty").text(quantity)
    // console.log(quantity) 
    // $(".qty").click((qtyinfo)=>{
    //     console.log(qtyinfo)
    // })
})
$(".minus").click(function(params) {
    if (quantity >= 2) {
        quantity--
        $(".qty").text(quantity)
    }
})

$(".addcart").click((event)=>{
    console.log(event.currentTarget.attributes[1].value);
})

})
