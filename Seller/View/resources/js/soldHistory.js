
function showItemName(items, order_id, create_date, reserve_time, total_price) {
    // Update modal title
    document.getElementById("staticBackdropLabel").textContent = "Items";

    // Update order number
    document.getElementById("orderNo").textContent = order_id;

    // Update date
    document.getElementById("date").textContent = create_date;

    // Update reservation date
    document.getElementById("reservation").textContent = reserve_time;

    // Update total price
    document.getElementById("totalPrice").textContent = total_price;

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
