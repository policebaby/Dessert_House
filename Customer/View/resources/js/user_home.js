

$(document).ready(()=>{

    $("#search").click(()=>{
        // let dessertname = $("#dessertname").val();
        // let shopname = $("#shopname").val();

        $.ajax({
            url: "../Controller/user_homeController.php",
            type: "POST",
            data: {
                dessertname: $("#dessertname").val(),
                shopid: $("#shopname").val(),
            },
            success: function(res){
                console.log(res);
                let returnData = JSON.parse(res);
                $("#searcheditem").empty();
                for (const product of returnData) {
                    $("#searcheditem").append(
                        `
                        <div id="searcheditem" class=" d-flex justify-content-center row shopProfiles">
                        <!-- single menu block start -->
                        <div class="menublock col-md-3  justify-content-center">
                            <div class="  d-flex justify-content-center imgBorder">
                                <img src="../../storages/${product.product_picture}" alt="" width="80%" class="menuImg ">
                            </div>
                            <div class="price ">
                                <iconify-icon class="priceCoin" icon="healthicons:coins"></iconify-icon>
                                <span class="priceNum">${product.product_price}</span>
                            </div>
                            <div class="line "></div>
                            <p class="productName text-center">${product.product_name}</p>  
                            <div class="line"></div>
                            <div class=" d-flex justify-content-center">
                            <a href="./shopProfile.php?id=${product.shop_id}"><button class="btn btnCoffee my-3">View More</button></a>
                                
                            </div>
                        </div>
                        <!-- single menu block end -->
                        </div>
                        `
                    );
                }
            }
        })
    })
})