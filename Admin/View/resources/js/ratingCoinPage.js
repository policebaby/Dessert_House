// Get the PopUp
var popUp = document.getElementById("popUp");

// Get the button that opens the pop up scrren
var btnList = document.querySelectorAll("td.myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// Loop through the buttons and add click event listeners to them
for (var i = 0; i < btnList.length; i++) {
    var btn = btnList[i];

    btn.addEventListener("click", function(event) {
        var receiptPath = this.getAttribute("data");

        // Update the content of the popup window with the receipt image
        var receiptImg = popUp.querySelector("img");
        receiptImg.src = receiptPath;

        // Show the popup window
        popUp.style.display = "block";
    });
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    popUp.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target != popUp && event.target.textContent != "View More") {
        popUp.style.display = "none";
    }
}
