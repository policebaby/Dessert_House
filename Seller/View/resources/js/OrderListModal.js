

function showItemName(items,total_price, reserve_time) {
    // Set the values of the HTML elements in the modal
    document.getElementById("itemName").innerHTML = items;
    document.getElementById("reservation").innerHTML = reserve_time;
    document.getElementById("totalPrice").innerHTML = total_price;
}
showItemName(items,total_price, reserve_time); 
