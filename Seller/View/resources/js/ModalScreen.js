

function showItemName(items, order_id, create_date, reserve_time, total_price) {
    // Set the values of the HTML elements in the modal
    
    document.getElementById("itemName").innerHTML = items;
    document.getElementById("orderNo").innerHTML = order_id;
    document.getElementById("date").innerHTML = create_date;
    document.getElementById("reservation").innerHTML = reserve_time;
    document.getElementById("totalPrice").innerHTML = total_price;
}
showItemName(items, order_id, create_date, reserve_time, total_price); 
