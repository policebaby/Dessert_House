
let quantity;
let quantityid;

$(document).ready(() => {
    // quantity counter
    let carts = JSON.parse(localStorage.getItem("cart")) || [];
    console.log(carts)
    $("#cartLists").val(JSON.stringify(carts));
    console.log($("#cartLists").val());

    // getting item id and quantity
    $(".addcart").click((data) => {
        let itemid = data.currentTarget.attributes[1].value;
        let found = false;
        //check same id exist or not
        carts.forEach(item => {
            if (Number(item.id) == Number(itemid)) {
                let itemqty = Number(item.qty)
                // console.log( typeof(itemqty))
                let newqty = itemqty + Number(quantity)
                console.log(newqty)
                item.qty = String(newqty)
                found = true;
            }
        });
        if (!found) {
            // push into cart array
            carts.push(
                {
                    id: itemid,
                    qty: quantity
                }
            )
        }
        // setting quantity back to 1
        $("#qty" + quantityid).text(1)
        console.log(carts)
        localStorage.setItem("cart", JSON.stringify(carts))
        $("#cartLists").val(JSON.stringify(carts));

    })
})

function plus(id) {
    var quantity = $("#qty" + id).text();
    quantity++
    $("#qty" + id).text(quantity)

}
function minus(id) {
    var quantity = $("#qty" + id).text();
    if (quantity >= 2) {
        quantity--
        // console.log(quantity)
        $("#qty" + id).text(quantity)
    }
}

function addcart(id) {
    quantity = $("#qty" + id).text();
    quantityid = id
    // console.log(quantity)

}