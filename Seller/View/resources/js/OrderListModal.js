
function showItemName(items, order_id, total_price, reserve_time) {
    // Update modal title
    document.getElementById("staticBackdropLabel").textContent = "Items";

    // Update order number
    document.getElementById("orderNo").textContent = order_id;

    // Update total price
    document.getElementById("totalPrice").textContent = total_price;

    // Update reservation date
    document.getElementById("reservation").textContent = reserve_time;

    
    // Split the items by comma
    const itemsArray = items.split(",");

    // Create a string to hold the HTML for the list of items
    let itemsHTML = "";

    // Loop through the items and update the itemsHTML string
    itemsArray.forEach(item => {
        itemsHTML += `<li>${item.trim()}</li>`;
    });

    // Update the items in the modal
    document.getElementById("itemName").innerHTML = itemsHTML;
}
showItemName(items, order_id, total_price, reserve_time);