
let quantity= 0;
$(document).ready(()=>{
    
    // console.log($("#cartLists").val());
})

let carts = JSON.parse(localStorage.getItem("cart")) || [];
    console.log(carts)
    $("#cartLists").val(JSON.stringify(carts));


function plus(id){
    quantity++
    let itemprice = $("#itemprice"+id).text()

    carts.forEach(item => {
        if(Number(item.id)== id){
        let itemqty = Number(item.qty)
        let newqty = itemqty+quantity
        let newtotal = newqty* Number(itemprice)

        quantity= 0
        $("#qty"+id).text(newqty);
        $("#total"+id).text(newtotal);

        item.qty = String(newqty)
        localStorage.setItem("cart",JSON.stringify(carts))
        $("#cartLists").val(JSON.stringify(carts));
        }
    });
}

function minus(id){
    quantity--
    let itemprice = $("#itemprice"+id).text()

    carts.forEach(item => {
        if(Number(item.id)== id){
        let itemqty = Number(item.qty)
        let newqty = itemqty+quantity
        let newtotal = newqty* Number(itemprice)

        quantity= 0
        $("#qty"+id).text(newqty)
        $("#total"+id).text(newtotal);

        item.qty = String(newqty)
        localStorage.setItem("cart",JSON.stringify(carts))
        $("#cartLists").val(JSON.stringify(carts));
        }
    });
}

function deleteitem(id,e){
    $(`#delete${id}`).parent().parent().remove()
    e.preventDefault();




    let newcart= carts.splice(id,1)
    console.log(newcart);
    console.log(carts)
    localStorage.setItem("cart",JSON.stringify(carts))
    $("#cartLists").val(JSON.stringify(carts));

    document.getElementById(`myform${id}`).submit();
}