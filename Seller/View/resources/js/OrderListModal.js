 

function showItemName(items, reserve_time,total_price) {
    // Set the values of the HTML elements in the modal
    document.getElementById("itemName").innerHTML = items;
    document.getElementById("reservation").innerHTML = reserve_time;
    document.getElementById("totalPrice").innerHTML = total_price;
}
showItemName(items, reserve_time,total_price); 

