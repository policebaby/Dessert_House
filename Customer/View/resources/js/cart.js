
let quantity= 0;

let newsubtotal;
$(document).ready(()=>{

   
})

let carts = JSON.parse(localStorage.getItem("cart")) || [];
    console.log(carts)
    $("#cartLists").val(JSON.stringify(carts));


function plus(id){
    quantity++
    let subtotal = Number($("#subtotal").text());
    let itemprice = Number($("#itemprice"+id).text());
    newsubtotal= subtotal+itemprice
    console.log(newsubtotal);
    $("#subtotal").text(newsubtotal);
    $("#subtotalinput").val( String(newsubtotal) );

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
    let qty = $("#qty"+id).text();
    if (qty >=2){
    quantity--
    let itemprice = Number($("#itemprice"+id).text());
    let subtotal = Number($("#subtotal").text());
    newsubtotal= subtotal-itemprice
    console.log(newsubtotal);
    $("#subtotal").text(newsubtotal);
    $("#subtotalinput").val( String(newsubtotal) );


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
}
$("#checkout").click(function(){
    localStorage.removeItem("cart");
})

function deleteitem(id){    
    deletedtotal(id)
    $(`#delete${id}`).parent().parent().remove();

    let newcart= carts.splice(id,1)
    console.log(newcart);
    console.log(carts);
    localStorage.setItem("cart",JSON.stringify(carts))
    $("#cartLists").val(JSON.stringify(carts));

    







    // $.ajax({
    //     url: "../Controller/cartdeleteController.php",
    //     type: "POST",
    //     data: {
    //         newcartItems:$("#cartLists").val(),
    //     },
    //     success: function(res){
    //         console.log(res);
    //         let returnData = JSON.parse(res);
    //         $("#tbody").empty();
    //         for (const product of returnData) {
    //             $("#tbody").append(
    //                 `
    //                 <!-- row start -->
    //                 <tr class=" text-center align-middle">
    //                     <th scope="row" class="itemimg cellCoffee">
    //                         <img src="../../storages/${product.product_picture}" alt="" width="100px" class="">
    //                         <p>${product.product_name}</p>
    //                     </th>
    //                     <td class="cellCoffee">
    //                         <div class="price">
    //                             <span id="itemprice<?= $cartList[$i]['id'] ?>" class="itemprice">${product.product_picture}></span>
    //                             <span class=""><iconify-icon class="coinIcon coinposition" icon="healthicons:coins"></iconify-icon></span>
    //                         </div>
    //                     </td>
    //                     <td class="cellCoffee">
    //                         <div class="btn-group btn-group-sm itemCount align-middle" role="group" aria-label="Basic outlined example">
    //                             <button type="button" onclick="minus(<?= $cartList[$i]['id'] ?>)" class="btn btnOutline">-</button>
    //                             <button type="button" id="qty<?= $cartList[$i]['id'] ?>" class="btn btnOutline"><?= $cartList[$i]["qty"] ?></button>
    //                             <button type="button" onclick="plus(<?= $cartList[$i]['id'] ?>)" class="btn btnOutline">+</button>
    //                         </div>
    //                     </td>
    //                     <td class="cellCoffee">
    //                         <div class="price">
    //                             <span id="total<?= $cartList[$i]['id'] ?>" class="itemprice"><?= $cartList[$i]["qty"] * ${product.product_price} ?></span>
    //                             <span><iconify-icon class="coinIcon coinposition" icon="healthicons:coins"></iconify-icon></span>
    //                         </div>
    //                     </td>
    //                     <td class="cellCoffee">
    //                         <!-- <button class="btn" id="delete<?= $i ?>" onclick="deleteitem(<?= $i ?>,event,<?= $cartItemList[$i]['product_id'] ?>)" name="delete<?= $i ?>" class="fs-1 align-middle mt-4"> -->
    //                         <button class="btn" id="delete<?= $i ?>" onclick="deleteitem(<?=$i?>)" name="delete<?= $i ?>" class="fs-1 align-middle mt-4">
    //                             <iconify-icon icon="material-symbols:delete-forever-rounded"></iconify-icon>
    //                         </button>
    //                     </td>
    //                 </tr>
    //             <?php } ?>
    //             <!-- row end -->`
    //             )
    //         }

    //     }
    // })
}


// function deleteitem(id,e,productid){
   
//     e.preventDefault();



//     $(`#delete${id}`).parent().parent().remove();
//     let newcart= carts.splice(id,1)
//     console.log(newcart);
//     console.log(carts)
//     localStorage.setItem("cart",JSON.stringify(carts))
//     $("#cartLists").val(JSON.stringify(carts));

//     location.replace(`?pid=${productid}`);
// }

function deletedtotal(id){
    // subtotal calculate
    let subtotal = Number($("#subtotal").text());
    let total = Number($("#total"+id).text());
    console.log(total)
    let newsubtotal = subtotal- total
    console.log(newsubtotal);
    $("#subtotal").text(newsubtotal);
    $("#subtotalinput").val( String(newsubtotal) );
}